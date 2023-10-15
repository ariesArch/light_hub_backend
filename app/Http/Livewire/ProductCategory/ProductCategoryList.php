<?php

namespace App\Http\Livewire\ProductCategory;

use App\Models\ProductCategory;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class ProductCategoryList extends Component
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
        $this->orderable = (new ProductCategory())->orderable;
    }

    public function delete($id)
    {
        ProductCategory::find($id)->delete();
    }
    public function render()
    {
        $query = ProductCategory::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $product_categories = $query->paginate($this->perPage);
        return view('livewire.product-category.product-category-list', compact('query', 'product_categories'));
    }
}
