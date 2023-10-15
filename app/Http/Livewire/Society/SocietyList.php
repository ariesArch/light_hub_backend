<?php

namespace App\Http\Livewire\Society;

use App\Models\Society;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class SocietyList extends Component
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
        $this->orderable = (new Society())->orderable;
    }

    public function delete($id)
    {
        Society::find($id)->delete();
    }
    public function render()
    {
        $query = Society::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $Societies = $query->paginate($this->perPage);
        return view('livewire.society.society-list', compact('query', 'Societies'));
    }
}
