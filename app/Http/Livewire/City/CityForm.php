<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use Livewire\Component;

class CityForm extends Component
{
    public City $city;

    public function mount(City $city): void
    {
        $this->city = $city;
    }

    protected function rules(): array
    {
        return [
            'city.name' => ['required'],
            // 'city.slug' => ['required']
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
        $this->city->save();
        return redirect()->route('cities.index');
    }

    public function render()
    {
        return view('livewire.city.city-form');
    }
}
