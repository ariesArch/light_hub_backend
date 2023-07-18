<?php

namespace App\Http\Livewire\Term;

use App\Models\Term;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class TermList extends Component
{
    use Sortable,Paginatable,WithPagination;
    /**
     * add properties for read
     */
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
    /**
     * init data in livewire mount
     */
    public function mount()
    {
        $this->orderable = (new Term())->orderable;
    }
    /**
     * livewire render fnc
     */
    public function render()
    {
        $query = Term::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $terms = $query->paginate($this->perPage);
        return view('livewire.term.term-list',compact('query','terms'));
    }
    
}
