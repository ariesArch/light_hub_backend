<?php

namespace App\Http\Livewire\Artist;

use App\Models\Artist;
use App\Services\PhotoManagement;
use Livewire\WithFileUploads;
use Livewire\Component;

class ArtistForm extends Component
{
    use WithFileUploads;

    public $artists;
    protected $file;

    public function mount(Artist $artist): void
    {
        $this->$artist = $artist;
        $this->file = new PhotoManagement();
    }

    protected function rules()
    {
        return [
            'artist.name' => ['required', 'string'],
            'artist.email' => ['required', 'string'],
            'artist.profile_photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:4096'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(PhotoManagement $file)
    {
        $this->validate();

        if (isset($this->artist_profile_photo)) {
            $photo = $file->uploadPhoto($this->artist, $this->artist_profile_photo);
            $this->artistt->profile_photo = $photo['thumbnail_url'];
        }
        $this->art_category->save();
        return redirect()->route('artists.index');
    }
    public function render()
    {
        return view('livewire.artist.artist-form');
    }
}
