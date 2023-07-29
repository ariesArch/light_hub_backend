<?php

namespace App\Http\Livewire\Attribute;

use App\Models\Attribute;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class AttributeList extends Component
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
        $this->orderable = (new Attribute())->orderable;
    }

    public function render()
    {
        $query = Attribute::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $attributess = $query->paginate($this->perPage);
        return view('livewire.attribute.attribute-list', compact('query', 'attributess'));
    }
}
