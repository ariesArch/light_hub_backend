<?php

namespace App\Http\Livewire\Blog;

use Livewire\WithFileUploads;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Services\PhotoManagement;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Log;



class BlogForm extends Component
{
    use WithFileUploads;

    public Blog $blog;
    protected $file;
    public $photo;
    public $blog_categories;

    public function mount(Blog $blog): void
    {
        $this->blog = $blog;
        $this->file = new PhotoManagement();
        $this->blog_categories = BlogCategory::all();
    }
    // public function render()
    // {
    //     return view('livewire.blog.blog-form');
    // }

    protected function rules(): array
    {
        return [
            'blog.title' => ['required'],
            'blog.blog_category_id' => ['required'],
            'blog.description' => ['required'],
            'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:4096'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(PhotoManagement $file, Request $request)
    {
        $this->validate();
        
        $this->blog->save();
        // Log::info('BlogId' . print_r($this->blog->id , true));

        if (isset($this->photo)) {
            $photo = $file->uploadPhoto($this->blog, $this->photo);
            // $this->blog->image = $photo['file_url'];
            $this->blog->update(['image' =>  $photo['file_url']]);
        }
        return redirect()->route('blogs.index');
    }

    public function render()
    {
        // $cities = City::all();
        return view('livewire.blog.blog-form');
    }
}
