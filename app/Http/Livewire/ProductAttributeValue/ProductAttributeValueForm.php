<?php

namespace App\Http\Livewire\ProductAttributeValue;

use App\Models\AttributeValue;
use App\Models\Product;
use App\Models\ProductAttributeValue;
use Livewire\Component;

class ProductAttributeValueForm extends Component
{

    public ProductAttributeValue $productAttributeValue;
    public $products;
    public $attribute_values;

    public function mount(ProductAttributeValue $productAttributeValue): void
    {
        $this->productAttributeValue = $productAttributeValue;
        $this->products = Product::all();
        $this->attribute_values = AttributeValue::all();
    }

    protected function rules(): array
    {
        return [
            'productAttributeValue.product_id' => ['required'],
            'productAttributeValue.attribute_value_id' => ['required']
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
        $this->productAttributeValue->save();
        return redirect()->route('product_attribute_values.index');
    }
    public function render()
    {
        return view('livewire.product-attribute-value.product-attribute-value-form');
    }
}
