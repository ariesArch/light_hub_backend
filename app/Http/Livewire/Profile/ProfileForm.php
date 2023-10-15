<?php

namespace App\Http\Livewire\Profile;

use App\Models\City;
use App\Models\Profile;
use App\Models\Township;
use Livewire\Component;

class ProfileForm extends Component
{

    public Profile $profile;
    public $cities;
    public $townships;

    public function mount(Profile $profile): void
    {
        $this->profile = $profile;
        $this->cities = City::all();
        $this->townships = Township::all();
    }

    protected function rules(): array
    {
        return [
            'profile.phone_no' => ['required'],
            'profile.city_id' => ['required'],
            'profile.township_id' => ['required'],
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
        dd(auth()->user());
        $this->profile->save();
        return redirect()->route('profiles.index');
    }
     public function render()
    {
        return view('livewire.profile.profile-form');
    }
}
