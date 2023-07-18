<?php

namespace App\Http\Livewire\Material;

use App\Models\Material;
use Livewire\Component;

class MaterialForm extends Component
{
    public $material;
    protected $file;

    public function mount(Material $material): void
    {
        $this->material = $material;
    }

    protected function rules()
    {
        return [
            'material.name' => ['required', 'string'],
            'material.description' => ['required', 'string'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        $this->material->save();
        return redirect()->route('materials.index');
    }
    public function render()
    {
        return view('livewire.material.material-form');
    }
}
