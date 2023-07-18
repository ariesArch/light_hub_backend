<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;

class AdminList extends Component
{
    public $admins;
    public function mount()
    {
        
    }
    /**
     * livewire render fun
     */
    public function render()
    {
        $this->admins = Admin::select('id', 'name','email','created_at')->get();
        return view('livewire.admin.admin-list');
    }
}
