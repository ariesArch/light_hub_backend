<?php

namespace App\Http\Livewire\Variation;

use App\Models\Variation;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class VariationList extends Component
{
    use Sortable, Paginatable, WithPagination;

    public array $orderable;
    public string $search = '';
    public array $selected = [];
    protected $queryString = [
        'search' => [
            'except' => '',
        ],
        'sortBy' => [
            'except' => 'id',
        ],
        'sortDirection' => [
            'except' => 'desc',
        ],
    ];

    public function mount()
    {
        $this->orderable = (new Variation())->orderable;
    }

    public function delete($id)
    {
        Variation::find($id)->delete();
    }
    public function render()
    {
        $query = Variation::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $variations = $query->paginate($this->perPage);
        // dd($variations);
        // dd($variations[0]->title);
        return view('livewire.variation.variation-list', compact('query', 'variations'));
    }
}
