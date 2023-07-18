<?php

namespace App\Http\Livewire\User;

use App\Utils\Paginatable;
use App\Utils\Sortable;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use Sortable,Paginatable,WithPagination;
    /**
     * add properties for read
     */
    public array $orderable;
    public string $search = '';
    public array $selected = [];
    protected $queryString = [
        'search' => [
            'except' => '',
        ],
        'sortBy' => [
            'except' => 'id',
        ],
        'sortDirection' => [
            'except' => 'desc',
        ],
    ];
    /**
     * init data in livewire mount
     */
    public function mount()
    {
        $this->orderable = (new User())->orderable;
    }
    /**
     * livewire render fnc
     */
    public function render()
    {
        $query = User::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $users = $query->paginate($this->perPage);
        return view('livewire.user.user-list', compact('query','users'));
    }
}
