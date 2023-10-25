<x-pages.list-container name_prop="blog">
    <div class="flex flex-wrap p-3 mb-0 bg-white border-b-1 border-b-solid rounded-t-2xl border-b-transparent">
        <x-atoms.input wire:model.debounce.300ms="search" placeholder="Search" class="w-1/2 mr-2"/>
        <select id="status_id" wire:model="filter_option" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-1/4 mr-2">
            <option selected value="all">All Blog</option>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
        <select id="" wire:model.live="perPage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-1/6">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
    </div>
    <x-templates.table-wrapper>
        <x-slot name="table_head">
            <x-atoms.th field="id" sortBy=$sortBy>
                ID
                @include('components.atoms.th-sort', ['field' => 'id'])
            </x-atoms.th>
            <x-atoms.th>
                Title
                @include('components.atoms.th-sort', ['field' => 'title'])
            </x-atoms.th>
            <x-atoms.th>
                Slug
                @include('components.atoms.th-sort', ['field' => 'slug'])
            </x-atoms.th>
            <x-atoms.th>
                Active
            </x-atoms.th>
            <x-atoms.th>
                Category
            </x-atoms.th>
            <x-atoms.th>Creation Date</x-atoms.th>
            <x-atoms.th>Action</x-atoms.th>
        </x-slot>
        <x-slot name="table_body">
            @foreach ($blogs as $blog)
            <tr>
                <x-atoms.td>{{$blog->id}}</x-atoms.td>
                <x-atoms.td>{{$blog->title}}</x-atoms.td>
                <x-atoms.td>{{$blog->slug}}</x-atoms.td>
                <x-atoms.td>
                    <livewire:button.feature :model="$blog" field="is_published" :key="'button.feature'.$blog->id"/>
                </x-atoms.td>
                <x-atoms.td>{{$blog->blog_category->name}}</x-atoms.td>
                <x-atoms.td>{{$blog->created_at}}</x-atoms.td>
                <x-atoms.td-action name="blogs" :id="$blog->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <div class="m-3">
        {{ $blogs->links() }}
    </div>
</x-pages.list-container>