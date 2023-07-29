<x-pages.list-container name_prop="class_categorie">
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
                Description
                @include('components.atoms.th-sort', ['field' => 'description'])
            </x-atoms.th>
            <x-atoms.th>Creation Date</x-atoms.th>
            <x-atoms.th>Action</x-atoms.th>
        </x-slot>
        <x-slot name="table_body">
            @foreach ($class_categories as $class_categorie)
            <tr>
                <x-atoms.td>{{$class_categorie->id}}</x-atoms.td>
                <x-atoms.td>{{$class_categorie->name}}</x-atoms.td>
                <x-atoms.td>{{$class_categorie->description}}</x-atoms.td>
                <x-atoms.td>{{$class_categorie->created_at}}</x-atoms.td>
                <x-atoms.td-action name="class_categories" :id="$class_categorie->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <div class="m-3">
        {{ $class_categories->links() }}
    </div>
</x-pages.list-container>