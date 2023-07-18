<?php

namespace App\Http\Livewire\CollectionType;

use App\Models\CollectionType;
use Livewire\Component;

class CollectionTypeForm extends Component
{
    public $collection_type;
    protected $file;

    public function mount(CollectionType $collection_type): void
    {
        $this->collection_type = $collection_type;
    }

    protected function rules()
    {
        return [
            'collection_type.name' => ['required', 'string'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        $this->collection_type->save();
        return redirect()->route('collection_types.index');
    }

    public function render()
    {
        return view('livewire.collection-type.collection-type-form');
    }
}
