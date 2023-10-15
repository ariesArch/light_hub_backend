<?php

namespace App\Http\Livewire\Township;

use App\Models\City;
use App\Models\Township;
use Livewire\Component;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class TownshipForm extends Component
{
    public Township $township;
    public $cities;

    public function mount(Township $township): void
    {
        $this->township = $township;
        $this->cities = City::all();
    }

    protected function rules(): array
    {
        return [
            'township.name' => ['required', 'unique:townships,name,'],
            // 'township.slug' => ['required', 'unique:townships,slug,'],
            'township.city_id' => ['required'],
            'township.delivery_fee' => ['required'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        $this->township->save();
        return redirect()->route('townships.index');
    }

    public function render()
    {
        // $cities = City::all();
        return view('livewire.township.township-form');
    }
}
