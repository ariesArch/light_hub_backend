<?php

namespace App\Http\Livewire\Page;

use App\Models\Community;
use App\Models\CommunityCategory;
use App\Models\Page;
use Livewire\Component;

class PageForm extends Component
{
    public Page $page;
    public $communityCategory;
    public $community;

    public function mount(Page $page): void
    {
        $this->page = $page;
        $this->communityCategory = CommunityCategory::all();
        $this->community = Community::all();
    }

    protected function rules(): array
    {
        return [
            'page.name' => ['required'],
            // 'page.slug' => ['required'],
            'page.community_category_id' => ['required'],
            'page.community_id' => ['required'],
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
        $this->page->save();
        return redirect()->route('pages.index');
    }

    public function render()
    {
        return view('livewire.page.page-form');
    }
}
