<?php

namespace App\Http\Livewire\Term;

use App\Models\Term;
use Livewire\Component;

class TermForm extends Component
{
    public $term;
    protected $file;

    public function mount(Term $term): void
    {
        $this->term = $term;
    }

    protected function rules()
    {
        return [
            'term.name' => ['required', 'string'],
            'term.description' => ['required', 'string'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        $this->term->save();
        return redirect()->route('terms.index');
    }
    public function render()
    {
        return view('livewire.term.term-form');
    }
}
