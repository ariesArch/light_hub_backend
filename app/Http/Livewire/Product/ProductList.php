<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
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
        $this->orderable = (new Product())->orderable;
    }

    public function delete($id)
    {
        Product::find($id)->delete();
    }
    public function render()
    {
        $query = Product::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $products = $query->paginate($this->perPage);
        return view('livewire.product.product-list', compact('query', 'products'));
    }
}
