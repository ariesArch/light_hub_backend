<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;

class UserForm extends Component
{
    public User $user;
    /**
     * Init model
     */
    public function mount(User $user): void
    {
        $this->user = $user;
    }
    protected function rules(): array
    {
        return [
            'user.name' => ['required'],
            'user.email' => ['required', 'email:rfc,dns']
        ];
    }
    /**
     * Realtime validation
     */
    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }
    /**
     * Create/Update record
     */
    public function submit() 
    {
        $this->validate();
        $this->user->save();
        return redirect()->route('users.index');
    }
    /**
     * livewire render fnc
     */
    public function render()
    {
        return view('livewire.user.user-form');
    }
}
