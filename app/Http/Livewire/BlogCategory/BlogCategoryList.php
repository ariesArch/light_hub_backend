<?php

namespace App\Http\Livewire\BlogCategory;

use App\Models\BlogCategory;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class BlogCategoryList extends Component
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
        $this->orderable = (new BlogCategory())->orderable;
    }

    public function render()
    {
        $query = BlogCategory::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $blog_categories = $query->paginate($this->perPage);
        return view('livewire.blog-category.blog-category-list', compact('query', 'blog_categories'));
    }
}
