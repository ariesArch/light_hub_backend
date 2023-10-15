<?php

namespace App\Http\Livewire\UserCommunity;

use App\Models\UserCommunity;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class UserCommunityList extends Component
{
    use Sortable, Paginatable, WithPagination;

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

    public function mount()
    {
        $this->orderable = (new UserCommunity())->orderable;
    }

    public function delete($id)
    {
        UserCommunity::find($id)->delete();
    }
    public function render()
    {
        $query = UserCommunity::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $user_communities = $query->paginate($this->perPage);
        return view('livewire.user-community.user-community-list', compact('query', 'user_communities'));
    }
}
