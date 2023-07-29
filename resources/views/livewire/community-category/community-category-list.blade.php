<x-pages.list-container name_prop="community_categorie">
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
            <x-atoms.th>Creation Date</x-atoms.th>
            <x-atoms.th>Action</x-atoms.th>
        </x-slot>
        <x-slot name="table_body">
            @foreach ($community_categories as $community_category)
            <tr>
                <x-atoms.td>{{$community_category->id}}</x-atoms.td>
                <x-atoms.td>{{$community_category->name}}</x-atoms.td>
                <x-atoms.td>{{$community_category->slug}}</x-atoms.td>
                <x-atoms.td>{{$community_category->created_at}}</x-atoms.td>
                <x-atoms.td-action name="community_categories" :id="$community_category->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <div class="m-3">
        {{ $community_categories->links() }}
    </div>
</x-pages.list-container>