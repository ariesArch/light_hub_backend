<?php

namespace App\Http\Livewire\Township;

use App\Models\Township;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class TownshipList extends Component
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
        $this->orderable = (new Township())->orderable;
    }

    public function delete($id)
    {
        Township::find($id)->delete();
    }
    public function render()
    {
        $query = Township::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $townships = $query->paginate($this->perPage);
        return view('livewire.township.township-list', compact('query', 'townships'));
    }
}
