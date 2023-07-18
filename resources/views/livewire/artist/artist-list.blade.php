<x-pages.list-container name_prop="artist">
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
            @foreach ($artists as $artist)
            <tr>
                <x-atoms.td>{{$artist->id}}</x-atoms.td>
                <x-atoms.td>{{$artist->name}}</x-atoms.td>
                <x-atoms.td>{{$artist->created_at}}</x-atoms.td>
                <x-atoms.td-action name="artists" :id="$artist->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <x-molecules.pagination-wrapper>
        {{ $artists->links() }}
    </x-molecules.pagination-wrapper>
</x-pages.list-container>