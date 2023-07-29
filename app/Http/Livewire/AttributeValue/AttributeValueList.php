<?php

namespace App\Http\Livewire\AttributeValue;

use App\Models\AttributeValue;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class AttributeValueList extends Component
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
        $this->orderable = (new AttributeValue())->orderable;
    }
    public function render()
    {
        $query = AttributeValue::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $attribute_values = $query->paginate($this->perPage);
        return view('livewire.attribute-value.attribute-value-list', compact('query', 'attribute_values'));
    }
}
