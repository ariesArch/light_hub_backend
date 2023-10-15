<?php

namespace App\Http\Livewire\Product;

use App\Models\Page;
use App\Models\Product;
use App\Models\ProductGroup;
use Livewire\Component;

class ProductForm extends Component
{
    public Product $product;
    public $product_groups;
    public $pages;

    public function mount(Product $product): void
    {
        $this->product = $product;
        $this->product_groups= ProductGroup::all();
        $this->pages = Page::all();
    }

    protected function rules(): array
    {
        return [
            'product.name' => ['required'],
            // 'product.slug' => ['required'],
            'product.description' => ['required'],
            'product.price' => ['required'],
            'product.product_group_id' => ['required'],
            'product.page_id' => ['required'],
        ];
    }

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
        $this->product->save();
        return redirect()->route('products.index');
    }
     public function render()
    {
        return view('livewire.product.product-form');
    }
}
