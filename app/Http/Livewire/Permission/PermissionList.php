<?php

namespace App\Http\Livewire\Permission;

use App\Models\Permission;
use Livewire\Component;

class PermissionList extends Component
{
    
    public $permissions;
    public function mount()
    {
        
    }
    /**
     * livewire render fun
     */
    public function render()
    {
        $this->permissions = Permission::select('id', 'name','created_at')->get();
        return view('livewire.permission.permission-list');
    }
}
