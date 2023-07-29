<?php

namespace App\Http\Livewire\TeachingClass;

use App\Models\TeachingClass;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class TeachingClassList extends Component
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
        $this->orderable = (new TeachingClass())->orderable;
    }

    public function delete($id)
    {
        TeachingClass::find($id)->delete();
    }
    public function render()
    {
        $query = TeachingClass::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $teaching_classes = $query->paginate($this->perPage);
        return view('livewire.teaching-class.teaching-class-list', compact('query', 'teaching_classes'));
    }
}
