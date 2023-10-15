<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class BlogList extends Component
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
        $this->orderable = (new Blog())->orderable;
    }

    public function render()
    {
        $query = Blog::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $blogs = $query->paginate($this->perPage);
        return view('livewire.blog.blog-list', compact('query', 'blogs'));
    }
}
