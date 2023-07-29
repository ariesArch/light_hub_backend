<?php

namespace App\Http\Livewire\Community;

use App\Models\Community;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class CommunityList extends Component
{
    use Sortable, Paginatable, WithPagination;
    public $orderable;
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
        $this->orderable = (new Community())->orderable;
    }

    public function delete($id)
    {
        Community::find($id)->delete();
    }
    public function render()
    {
        $query = Community::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $communities = $query->paginate($this->perPage);
        return view('livewire.community.community-list', compact('query', 'communities'));
    }
}
