<?php

namespace App\Http\Livewire\Role;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Redirector;

class RoleForm extends Component
{
    public Role $role;
    public $permissions = [];
    public array $listsForFields = [];
    public function mount(Role $role): void
    {
        $this->role = $role;
        $this->permissions = $this->role->permissions()->pluck('id')->toArray();
        // $this->permissions = $this->role->permissions()->select('name','id')->get();
        $this->initListsForFields();
        \Log::info('Permissions:' . print_r($this->permissions,true));
    }
    protected function rules(): array
    {
        return [
            'role.name' => ['required', 'string'],
            'permissions' => [
                'required',
                'array',
            ],
            'permissions.*.id' => [
                'integer',
                'exists:permissions,id',
            ],
        ];
    }

    public function submit()  
    {
        $this->validate();
        $this->role->save();
        return redirect()->route('roles.index');
    }
    public function render()
    {
        return view('livewire.role.role-form');
    }
    /**
     * Initiate permissions list to choose
     * List need to group
     */
    protected function initListsForFields(): void
    {
        $all_permissions = Permission::all('name', 'id');
        $result = $all_permissions->map(function($perm){
            $perm->group_name = Str::afterLast($perm->name,'-');            
            return $perm;
        })->groupBy('group_name');
        $this->listsForFields['permissions'] = $result;
    }
    public function toggleGroupPermissions($group)
    {
        // $groupPermissions = $this->listsForFields['permissions'][$group]->pluck('id')->toArray();
        $groupPermissions = collect($this->listsForFields['permissions'])
        ->where('group_name', $group)
        ->pluck('id')
        ->toArray();
        if (empty(array_diff($groupPermissions, $this->permissions))) {
            // All permissions in the group are already selected, so remove them
            $this->permissions = array_diff($this->permissions, $groupPermissions);
            \Log::info("Hello Already");
        } else {
            // Not all permissions in the group are selected, so add them
            $this->permissions = array_unique(array_merge($this->permissions, $groupPermissions));
        }
    }
}
