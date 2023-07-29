<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class CityList extends Component
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
        $this->orderable = (new City())->orderable;
    }

    public function delete($id)
    {
        City::find($id)->delete();
    }
    public function render()
    {
        $query = City::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $cities = $query->paginate($this->perPage);
        return view('livewire.city.city-list', compact('query', 'cities'));
    }
}
