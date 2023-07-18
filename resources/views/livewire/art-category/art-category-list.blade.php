<x-pages.list-container name_prop="art_categorie">
    <x-molecules.filter-wrapper>
        <x-atoms.input wire:model.debounce.300ms="search" class="w-1/2"/>
    </x-molecules.filter-wrapper>
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
            <x-atoms.th>Creation Date</x-atoms.th>
            <x-atoms.th>Action</x-atoms.th>
        </x-slot>
        <x-slot name="table_body">
            @foreach ($art_categories as $art_category)
            <tr>
                <x-atoms.td>{{$art_category->id}}</x-atoms.td>
                <x-atoms.td>{{$art_category->name}}</x-atoms.td>
                <x-atoms.td>{{$art_category->created_at}}</x-atoms.td>
                <x-atoms.td-action name="art_categories" :id="$art_category->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <x-molecules.pagination-wrapper>
        {{ $art_categories->links() }}
    </x-molecules.pagination-wrapper>
</x-pages.list-container>