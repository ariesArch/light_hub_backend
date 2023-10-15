<?php

namespace App\Http\Livewire\Attribute;

use App\Models\Attribute;
use Livewire\Component;

class AttributeForm extends Component
{
    public Attribute $attribute;

    public function mount(Attribute $attribute): void
    {
        $this->attribute = $attribute;
    }
    protected function rules(): array
    {
        return [
            'attribute.name' => ['required'],
            // 'attribute.slug' => ['required'],
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
        $this->attribute->save();
        return redirect()->route('attributes.index');
    }
    public function render()
    {
        return view('livewire.attribute.attribute-form');
    }
}
