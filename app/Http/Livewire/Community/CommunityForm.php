<?php

namespace App\Http\Livewire\Community;

use App\Models\Community;
use App\Models\CommunityCategory;
use Livewire\Component;

class CommunityForm extends Component
{
    public Community $community;
    public $communityCategory;

    public function mount(Community $community): void
    {
        $this->community = $community;
        $this->communityCategory = CommunityCategory::all();
    }

    protected function rules(): array
    {
        return [
            'community.name' => ['required'],
            // 'community.slug' => ['required'],
            'community.community_category_id' => ['required'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        $this->community->save();
        return redirect()->route('communities.index');
    }

    public function render()
    {
        return view('livewire.community.community-form');
    }
}
