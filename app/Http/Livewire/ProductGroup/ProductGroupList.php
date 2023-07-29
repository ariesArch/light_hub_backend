<?php

namespace App\Http\Livewire\ProductGroup;

use App\Models\ProductGroup;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class ProductGroupList extends Component
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
        $this->orderable = (new ProductGroup())->orderable;
    }

    public function delete($id)
    {
        ProductGroup::find($id)->delete();
    }
    public function render()
    {
        $query = ProductGroup::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $product_groups = $query->paginate($this->perPage);
        return view('livewire.product-group.product-group-list', compact('query', 'product_groups'));
    }
}
