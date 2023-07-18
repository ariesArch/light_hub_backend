<?php

namespace App\Http\Livewire\ArtCategory;

use App\Utils\Sortable;
use App\Utils\Paginatable;
use App\Models\ArtCategory;
use Livewire\Component;
use Livewire\WithPagination;

class ArtCategoryList extends Component
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
        $this->orderable = (new ArtCategory())->orderable;
    }
    /**
     * livewire render fnc
     */
    public function render()
    {
        $query = ArtCategory::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $art_categories = $query->paginate($this->perPage);
        return view('livewire.art-category.art-category-list',compact('query','art_categories'));
    }
}
