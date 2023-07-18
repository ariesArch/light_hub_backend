<?php

namespace App\Http\Livewire\Role;

use App\Models\Role;
use Livewire\Component;

class RoleList extends Component
{
    public $roleId,$name,$roles;
    public function mount()
    {
        
    }
    /**
     * livewire render fun
     */
    public function render()
    {
        $this->roles = Role::select('id', 'name','created_at')->get();
        return view('livewire.role.role-list');
    }
}
