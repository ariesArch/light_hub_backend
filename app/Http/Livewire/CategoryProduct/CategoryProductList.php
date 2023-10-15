<?php

namespace App\Http\Livewire\CategoryProduct;

use App\Models\CategoryProduct;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryProductList extends Component
{
    // public function render()
    // {
    //     return view('livewire.category-product.category-product-list');
    // }
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
        $this->orderable = (new CategoryProduct())->orderable;
    }
    public function render()
    {
        $query = CategoryProduct::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $category_products = $query->paginate($this->perPage);
        return view('livewire.category-product.category-product-list', compact('query', 'category_products'));
    }
}
