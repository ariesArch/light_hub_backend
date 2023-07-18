<?php

namespace App\Http\Livewire\CollectionType;

use App\Models\CollectionType;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class CollectionTypeList extends Component
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
        $this->orderable = (new CollectionType())->orderable;
    }
    /**
     * livewire render fnc
     */
    public function render()
    {
        $query = CollectionType::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $collection_types = $query->paginate($this->perPage);
        return view('livewire.collection-type.collection-type-list',compact('query','collection_types'));
    }
}
