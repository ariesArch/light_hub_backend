<?php

namespace App\Http\Livewire\BlogCategory;

use App\Models\BlogCategory;
use Livewire\Component;

class BlogCategoryForm extends Component
{
    public BlogCategory $blog_category;

    public function mount(BlogCategory $blog_category): void
    {
        $this->blog_category = $blog_category;
    }

    protected function rules(): array
    {
        return [
            'blog_category.name' => ['required'],
            'blog_category.description' => ['required'],
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
        $this->blog_category->save();
        return redirect()->route('blog_categories.index');
    }
    public function render()
    {
        return view('livewire.blog-category.blog-category-form');
    }
}
