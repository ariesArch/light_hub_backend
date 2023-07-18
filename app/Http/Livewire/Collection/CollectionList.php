<?php

namespace App\Http\Livewire\Collection;

use App\Models\Collection;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class CollectionList extends Component
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
        $this->orderable = (new Collection())->orderable;
    }
    /**
     * livewire render fnc
     */
    public function render()
    {
        $query = Collection::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $collections = $query->paginate($this->perPage);
        return view('livewire.collection.collection-list',compact('query','collections'));
    }
}
