<?php

namespace App\Http\Livewire\CommunityCategory;

use App\Models\CommunityCategory;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class CommunityCategoryList extends Component
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
        $this->orderable = (new CommunityCategory())->orderable;
    }

    public function delete($id)
    {
        CommunityCategory::find($id)->delete();
    }
    public function render()
    {
        $query = CommunityCategory::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $community_categories = $query->paginate($this->perPage);
        return view('livewire.community-category.community-category-list', compact('query', 'community_categories'));
    }
}
