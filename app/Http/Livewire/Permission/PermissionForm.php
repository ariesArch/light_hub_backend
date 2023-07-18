<?php

namespace App\Http\Livewire\Permission;

use App\Models\Permission;
use Livewire\Component;

class PermissionForm extends Component
{
    public $permission;
    public function mount(Permission $permission): void
    {
        $this->permission = $permission;
    }
    protected function rules(): array
    {
        return [
            'permission.name' => ['required', 'string'],
        ];
    }

    public function submit() 
    {
        $this->validate();
        $this->permission->save();
        return redirect()->route('permissions.index');
    }
    public function render()
    {
        return view('livewire.permission.permission-form');
    }
}
