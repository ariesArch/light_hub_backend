<?php

namespace App\Http\Livewire\ProductAttributeValue;

use App\Models\ProductAttributeValue;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class ProductAttributeValueList extends Component
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
        $this->orderable = (new ProductAttributeValue())->orderable;
    }

    public function delete($id)
    {
        ProductAttributeValue::find($id)->delete();
    }
    public function render()
    {
        $query = ProductAttributeValue::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $product_attribute_values = $query->paginate($this->perPage);
        return view('livewire.product-attribute-value.product-attribute-value-list', compact('query', 'product_attribute_values'));
    }
}
