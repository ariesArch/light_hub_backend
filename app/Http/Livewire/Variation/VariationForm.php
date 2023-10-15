<?php

namespace App\Http\Livewire\Variation;

use App\Models\Product;
use App\Models\Variation;
use Livewire\Component;

class VariationForm extends Component
{
    public Variation $variation;
    public $products;

    public function mount(Variation $variation): void
    {
        $this->variation = $variation;
        $this->products = Product::all();
    }

    protected function rules(): array
    {
        return [
            'variation.title' => ['required'],
            'variation.price' => ['required'],
            'variation.quantity' => ['required'],
            'variation.options' => ['required'],
            'variation.product_id' => ['required'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        // $this->variation['options'] = json_encode($this->variation->options);
        // dd($this->variation);


        $this->variation->save();
        return redirect()->route('user_communities.index');
    }
   
    public function render()
    {
        return view('livewire.variation.variation-form');
    }
}
