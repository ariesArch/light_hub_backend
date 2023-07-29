<?php

namespace App\Http\Livewire\ClassCategory;

use App\Models\ClassCategory;
use Livewire\Component;

class ClassCategoryForm extends Component
{
    public ClassCategory $classCategory;

    public function mount(ClassCategory $classCategory): void
    {
        $this->classCategory = $classCategory;
    }

    protected function rules(): array
    {
        return [
            'classCategory.name' => ['required'],
            'classCategory.description' => ['required']
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
        $this->classCategory->save();
        return redirect()->route('class_categories.index');
    }

    public function render()
    {
        return view('livewire.class-category.class-category-form');
    }
}
