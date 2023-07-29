<x-pages.list-container name_prop="teaching_classe">
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
            <x-atoms.th>
                Page
                @include('components.atoms.th-sort', ['field' => 'description'])
            </x-atoms.th>
            <x-atoms.th>Creation Date</x-atoms.th>
            <x-atoms.th>Action</x-atoms.th>
        </x-slot>
        <x-slot name="table_body">
            @foreach ($teaching_classes as $teaching_class)
            <tr>
                <x-atoms.td>{{$teaching_class->id}}</x-atoms.td>
                <x-atoms.td>{{$teaching_class->name}}</x-atoms.td>
                <x-atoms.td>{{$teaching_class->description}}</x-atoms.td>
                <x-atoms.td>{{$teaching_class->page->name}}</x-atoms.td>
                <x-atoms.td>{{$teaching_class->created_at}}</x-atoms.td>
                <x-atoms.td-action name="teaching_classes" :id="$teaching_class->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <div class="m-3">
        {{ $teaching_classes->links() }}
    </div>
</x-pages.list-container>