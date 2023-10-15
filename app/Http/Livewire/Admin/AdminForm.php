<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use HashContext;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AdminForm extends Component
{
    public $admin;
    public function mount(Admin $admin): void
    {
        $this->admin = $admin;
    }
    protected function rules()
    {
    return [
        'admin.name' => ['required', 'string'],
        'admin.email' => ['required', 'string'],
        'admin.password' => [
            // 'required',
            // 'string',
            // 'min:8',
        ],
       
    ];
    }
    
    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function submit() 
    {
        $this->validate();
        $hashedPassword =Hash::make($this->admin->password);
        $this->admin->password = $hashedPassword;
        dd($this->admin->password);
        $this->admin->save();
        return redirect()->route('admins.index');
     
    }
    public function render()
    {
        return view('livewire.admin.admin-form');
    }
}
