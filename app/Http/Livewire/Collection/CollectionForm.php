<?php

namespace App\Http\Livewire\Collection;

use App\Models\Collection;
use App\Services\PhotoManagement;
use Livewire\Component;
use Livewire\WithFileUploads;

class CollectionForm extends Component
{
    use WithFileUploads;

    public $collection;
    protected $file;

    public function mount(Collection $collection): void
    {
        $this->collection = $collection;
        $this->file = new PhotoManagement();
    }

    protected function rules()
    {
        return [
            'collection.name' => ['required', 'string'],
            'collection.description' => ['required', 'string'],
            'collection.thumbnail_photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:4096'],
            'collection.cover_photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:4096'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(PhotoManagement $file)
    {
        $this->validate();

        if (isset($this->collection->thumbnail_photo)) {
            $photo = $file->uploadPhoto($this->collection, $this->collection->thumbnail_photo);
            $this->collection->thumbnail_photo = $photo['thumbnail_url'];
        }
        if (isset($this->collection->cover_photo)) {
            $photo = $file->uploadPhoto($this->collection, $this->collection->cover_photo);
            $this->collection->cover_photo = $photo['photo_url'];
        }
        $this->collection->save();
        return redirect()->route('collections.index');
    }

    public function render()
    {
        return view('livewire.collection.collection-form');
    }
}
