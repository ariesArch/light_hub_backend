<?php

namespace App\Http\Livewire\TeachingClass;

use App\Models\Page;
use App\Models\TeachingClass;
use Livewire\Component;

class TeachingClassForm extends Component
{
    public TeachingClass $teachingClass;
    public $pages;

    public function mount(TeachingClass $teachingClass): void
    {
        $this->teachingClass = $teachingClass;
        $this->pages = Page::all();
    }

    protected function rules(): array
    {
        return [
            'teachingClass.name' => ['required'],
            'teachingClass.description' => ['required'],
            'teachingClass.page_id' => ['required'],
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
        $this->teachingClass->save();
        return redirect()->route('teaching_classes.index');
    }

    public function render()
    {
        return view('livewire.teaching-class.teaching-class-form');
    }
}
