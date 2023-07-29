<x-pages.list-container name_prop="page">
    <div class="flex flex-wrap p-3 mb-0 bg-white border-b-1 border-b-solid rounded-t-2xl border-b-transparent">
        <x-atoms.input wire:model.debounce.300ms="search" class="w-1/2"/>
    </div>
    <x-templates.table-wrapper>
        <x-slot name="table_head">
            <x-atoms.th field="id" sortBy=$sortBy>
                ID
                @include('components.atoms.th-sort', ['field' => 'id'])
            </x-atoms.th>
            <x-atoms.th>
                Name
                @include('components.atoms.th-sort', ['field' => 'name'])
            </x-atoms.th>
            <x-atoms.th>
                Slug
                @include('components.atoms.th-sort', ['field' => 'slug'])
            </x-atoms.th>
            <x-atoms.th>
                Community Category
                @include('components.atoms.th-sort', ['field' => 'community_category'])
            </x-atoms.th>
            <x-atoms.th>
                Community
                @include('components.atoms.th-sort', ['field' => 'community'])
            </x-atoms.th>
            <x-atoms.th>Creation Date</x-atoms.th>
            <x-atoms.th>Action</x-atoms.th>
        </x-slot>
        <x-slot name="table_body">
            @foreach ($pages as $page)
            <tr>
                <x-atoms.td>{{$page->id}}</x-atoms.td>
                <x-atoms.td>{{$page->name}}</x-atoms.td>
                <x-atoms.td>{{$page->slug}}</x-atoms.td>
                <x-atoms.td>{{$page->community_category->name}}</x-atoms.td>
                <x-atoms.td>{{$page->community->name}}</x-atoms.td>
                <x-atoms.td>{{$page->created_at}}</x-atoms.td>
                <x-atoms.td-action name="pages" :id="$page->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <div class="m-3">
        {{ $pages->links() }}
    </div>
</x-pages.list-container>