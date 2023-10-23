<?php

namespace App\Http\Livewire\Button;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;

class Feature extends Component
{
    public Model $model;
    public string $field;

    public bool $isActive;

    public function mount()
    {
        $this->isActive = (bool) $this->model->getAttribute($this->field);
    }

    public function toggle()
    {
        $this->model->setAttribute($this->field, $this->isActive);
        $this->model->save();
    }

    public function render()
    {
        return view('livewire.button.feature');
    }
}
