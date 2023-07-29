<x-pages.list-container name_prop="citie">
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
            @foreach ($cities as $city)
            <tr>
                <x-atoms.td>{{$city->id}}</x-atoms.td>
                <x-atoms.td>{{$city->name}}</x-atoms.td>
                <x-atoms.td>{{$city->slug}}</x-atoms.td>
                <x-atoms.td>{{$city->created_at}}</x-atoms.td>
                <x-atoms.td-action name="cities" :id="$city->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <div class="m-3">
        {{ $cities->links() }}
    </div>
</x-pages.list-container>