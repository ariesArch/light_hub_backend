<?php

namespace App\Http\Livewire\ProductGroup;

use App\Models\ProductGroup;
use Livewire\Component;

class ProductGroupForm extends Component
{
    public ProductGroup $productGroup;

    public function mount(ProductGroup $productGroup): void
    {
        $this->productGroup = $productGroup;
    }

    protected function rules(): array
    {
        return [
            'productGroup.name' => ['required'],
            // 'productGroup.slug' => ['required']
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
        $this->productGroup->save();
        return redirect()->route('product_groups.index');
    }
    public function render()
    {
        return view('livewire.product-group.product-group-form');
    }
}
