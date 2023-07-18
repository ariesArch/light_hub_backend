<x-pages.list-container name_prop="collection_type">
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
            @foreach ($collection_types as $collection_type)
            <tr>
                <x-atoms.td>{{$collection_type->id}}</x-atoms.td>
                <x-atoms.td>{{$collection_type->name}}</x-atoms.td>
                <x-atoms.td>{{$collection_type->created_at}}</x-atoms.td>
                <x-atoms.td-action name="collection_types" :id="$collection_type->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <x-molecules.pagination-wrapper>
        {{ $collection_types->links() }}
    </x-molecules.pagination-wrapper>
</x-pages.list-container>