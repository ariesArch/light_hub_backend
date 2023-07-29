<?php

namespace App\Http\Livewire\AttributeValue;

use App\Models\Attribute;
use App\Models\AttributeValue;
use Livewire\Component;

class AttributeValueForm extends Component
{
    public AttributeValue $attributeValue;
    public $attributes;

    public function mount(AttributeValue $attributeValue): void
    {
        $this->attributeValue = $attributeValue;
        $this->attributes = Attribute::all();
    }
    protected function rules(): array
    {
        return [
            'attributeValue.value' => ['required'],
            'attributeValue.attribute_id' => ['required'],
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
        $this->attributeValue->save();
        return redirect()->route('attribute_values.index');
    }
    public function render()
    {
        return view('livewire.attribute-value.attribute-value-form');
    }
}
