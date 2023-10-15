<?php

namespace App\Http\Livewire\ProductCategory;

use App\Models\ProductCategory;
use App\Models\ProductGroup;
use Livewire\Component;

class ProductCategoryForm extends Component
{
   
    public ProductCategory $productCategory;
    public $product_groups;

    public function mount(ProductCategory $productCategory): void
    {
        $this->productCategory = $productCategory;
        $this->product_groups= ProductGroup::all();
    }

    protected function rules(): array
    {
        return [
            'productCategory.name' => ['required'],
            // 'productCategory.slug' => ['required'],
            'productCategory.product_group_id' => ['required'],
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
        $this->productCategory->save();
        return redirect()->route('product_categories.index');
    }
     public function render()
    {
        return view('livewire.product-category.product-category-form');
    }
}
