<x-pages.list-container name_prop="material">
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
            @foreach ($materials as $material)
            <tr>
                <x-atoms.td>{{$material->id}}</x-atoms.td>
                <x-atoms.td>{{$material->name}}</x-atoms.td>
                <x-atoms.td>{{$material->created_at}}</x-atoms.td>
                <x-atoms.td-action name="materials" :id="$material->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <x-molecules.pagination-wrapper>
        {{ $materials->links() }}
    </x-molecules.pagination-wrapper>
</x-pages.list-container>