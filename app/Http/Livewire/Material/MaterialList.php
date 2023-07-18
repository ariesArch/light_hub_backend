<?php

namespace App\Http\Livewire\Material;

use App\Models\Material;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class MaterialList extends Component
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
        $this->orderable = (new Material())->orderable;
    }
    /**
     * livewire render fnc
     */
    public function render()
    {
        $query = Material::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $materials = $query->paginate($this->perPage);
        return view('livewire.material.material-list',compact('query','materials'));
    }
}
