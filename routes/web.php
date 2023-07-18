<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtCategoryController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CollectionTypeController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TermController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('users',UserController::class,['except'=>['store','update','destroy']]);
    Route::resource('roles',RoleController::class,['except'=>['store','update','destroy']]);
    Route::resource('permissions',PermissionController::class,['except'=>['store','update','destroy']]);
    Route::resource('admins',AdminController::class,['except'=>['store','update','destroy']]);
    Route::resource('art_categories',ArtCategoryController::class,['except'=>['store','update','destroy']]);
    Route::resource('artists',ArtistController::class,['except'=>['store','update','destroy']]);
    Route::resource('materials',MaterialController::class,['except'=>['store','update','destroy']]);
    Route::resource('terms',TermController::class,['except'=>['store','update','destroy']]);
    Route::resource('collections',CollectionController::class,['except'=>['store','update','destroy']]);
    Route::resource('collection_types',CollectionTypeController::class,['except'=>['store','update','destroy']]);
});
