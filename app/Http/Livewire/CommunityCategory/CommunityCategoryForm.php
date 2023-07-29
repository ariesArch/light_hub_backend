<?php

namespace App\Http\Livewire\CommunityCategory;

use App\Models\CommunityCategory;
use Livewire\Component;

class CommunityCategoryForm extends Component
{

    public CommunityCategory $communityCategory;

    public function mount(CommunityCategory $communityCategory): void
    {
        $this->communityCategory = $communityCategory;
    }

    protected function rules(): array
    {
        return [
            'communityCategory.name' => ['required'],
            'communityCategory.slug' => ['required']
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
        $this->communityCategory->save();
        return redirect()->route('community_categories.index');
    }
    public function render()
    {
        return view('livewire.community-category.community-category-form');
    }
}
