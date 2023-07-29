<?php

namespace App\Http\Livewire\Page;

use App\Models\Page;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Livewire\Component;
use Livewire\WithPagination;

class PageList extends Component
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
        $this->orderable = (new Page())->orderable;
    }

    public function delete($id)
    {
        Page::find($id)->delete();
    }
    public function render()
    {
        $query = Page::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);
        $pages = $query->paginate($this->perPage);
        return view('livewire.page.page-list', compact('query', 'pages'));
    }
}
