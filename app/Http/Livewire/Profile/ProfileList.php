<?php

namespace App\Http\Livewire\Profile;

use App\Models\Profile;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class ProfileList extends Component
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
        $this->orderable = (new Profile())->orderable;
    }

    public function delete($id)
    {
        Profile::find($id)->delete();
    }
    public function render()
    {
        $query = Profile::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $profiles = $query->paginate($this->perPage);
        return view('livewire.profile.profile-list', compact('query', 'profiles'));
    }
}
