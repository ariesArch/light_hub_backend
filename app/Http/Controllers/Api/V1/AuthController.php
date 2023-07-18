<?php

namespace App\Http\Controllers\Api\V1;
use Illuminate\Support\Facades\URL;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PasswordReset;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordResetMail;
use App\Mail\PasswordResetSuccessMail;
use Illuminate\Support\Str;
use Stringable;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:10',
        ]);

        // Return errors if validation error occur.
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'status' => 2,
                'errors' => $errors
            ], 200);
        }

        // Check if validation pass then create user and auth token. Return the auth token
        if ($validator->passes()) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'status' => 1,
                'access_token' => $token,
                'token_type' => 'Bearer',
            ]);
        }
    }




    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // if ($user->status !== 'approved') {
            //     return response()->json([
            //         'status' => 2,
            //         'message' => "Sorry, your account is in {$user->status} state."
            //     ]);
            // }
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'status' => 1,
                'access_token' => $token,
                'refresh_token' => $token,
                'token_type' => 'Bearer',
            ]);
        } else {
            return response()->json(['status' => 2, 'message' => 'Invalid Credentials']);
        }
    }
    public function me(Request $request)
    {
        return response()->json(['status' => 1, 'data' => $request->user()]);
    }
    public function refreshToken(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete();
        return response()->json(['refresh_token' => $user->createToken($user->name)->plainTextToken]);
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['status' => 1, 'message' => 'Successfully LoggedOut']);
    }
    public function forgotPasswordRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $message = $errors[0];
            return response()->json(["status" => 2, 'message' => $message], 200);
        }

        if ($validator->passes()) 
        {
            $email=$request->email;
            $token=Str::random(40);
            $domain=URL::to('/');
            $body=[
                
                'url'=>config('app.allow_origin').'/reset-password?token='.$token,
                
                'email'=>$request->email,
            ];
            
            //Mail::to($email)->send(new passwordResetMail($body));
            $datetime=Carbon::now()->format('Y-m-d H:i:s');
            PasswordReset::updateOrCreate(
                [
                    'email' => $request->email
                ],
                [
                    'email' => $request->email,
                    'token' => $token,
                    'created_at' => $datetime
                ]
                );
                return response()->json(['status' => 1, 'message' => 'Please Check Your Email to Reset Your Password']);
       }

    
    }
    public function resetPassword( User $user,Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:6|confirmed',
          ]); 
          if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'status' => 2,
                'errors' => $errors
            ], 200);
        }

        if ($validator->passes()) {
            $user=User::find($request->id);
            $user->password=$request->password;
            $user->save();
            $email=$user->email;
            $url=config('app.allow_origin');
            $body=[
                'name'=>$user->name,
                'url'=>config('app.allow_origin'),
            ];

            //Mail::to($email)->send(new PasswordResetSuccessMail($body));
        }

         
         
        
        
          $user=User::find($request->id);
          $user->password=$request->password;
          $user->save();

          return response()->json(['status' => 1, 'message' => 'Your Password Was Reset']);

    }
}
