<?php

namespace App\Http\Livewire\CategoryProduct;

use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;

class CategoryProductForm extends Component
{
    
    public CategoryProduct $categoryProduct;
    public $product_categories;
    public $products;

    public function mount(CategoryProduct $categoryProduct): void
    {
        $this->categoryProduct = $categoryProduct;
        $this->product_categories = ProductCategory::all();
        $this->products = Product::all();
    }
    protected function rules(): array
    {
        return [
            'categoryProduct.product_category_id' => ['required'],
            'categoryProduct.product_id' => ['required'],
        ];
    }
    /**
     * Realtime validation
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    /**
     * Create/Update record
     */
    public function submit()
    {
        $this->validate();
        $this->categoryProduct->save();
        return redirect()->route('category_products.index');
    }
  public function render()
    {
        return view('livewire.category-product.category-product-form');
    }
}
