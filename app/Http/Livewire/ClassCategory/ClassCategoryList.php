<?php

namespace App\Http\Livewire\ClassCategory;

use App\Models\ClassCategory;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class ClassCategoryList extends Component
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
        $this->orderable = (new ClassCategory())->orderable;
    }

    public function delete($id)
    {
        ClassCategory::find($id)->delete();
    }
    public function render()
    {
        $query = ClassCategory::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $class_categories = $query->paginate($this->perPage);
        return view('livewire.class-category.class-category-list', compact('query', 'class_categories'));
    }
}
