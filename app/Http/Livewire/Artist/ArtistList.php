<?php

namespace App\Http\Livewire\Artist;

use App\Models\Artist;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class ArtistList extends Component
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
        $this->orderable = (new Artist())->orderable;
    }
    /**
     * livewire render fnc
     */
    public function render()
    {
        $query = Artist::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $artists = $query->paginate($this->perPage);
        return view('livewire.artist.artist-list',compact('query','artists'));
    }

}
