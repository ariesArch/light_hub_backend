<?php
namespace App\Http\Livewire\ArtCategory;

use App\Models\ArtCategory;
use App\Services\PhotoManagement;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;


class ArtCategoryForm extends Component
{
    use WithFileUploads;

    public $art_category;
    protected $file;

    public function mount(ArtCategory $art_category): void
    {
        $this->art_category = $art_category;
        $this->file = new PhotoManagement();
    }

    protected function rules()
    {
        return [
            'art_category.name' => ['required', 'string'],
            'art_category.description' => ['required', 'string'],
            'art_category.thumbnail_photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:4096'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(PhotoManagement $file)
    {
        $this->validate();

        if (isset($this->art_category->thumbnail_photo)) {
            $photo = $file->uploadPhoto($this->art_category, $this->art_category->thumbnail_photo);
            $this->art_category->thumbnail_photo = $photo['thumbnail_url'];
        }
        $this->art_category->save();
        return redirect()->route('art_categories.index');
    }

    public function render()
    {
        return view('livewire.art-category.art-category-form');
    }
}
