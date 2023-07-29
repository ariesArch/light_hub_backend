<x-pages.list-container name_prop="attribute_value">
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
                Value
                @include('components.atoms.th-sort', ['field' => 'name'])
            </x-atoms.th>
            <x-atoms.th>
                Attribute
                @include('components.atoms.th-sort', ['field' => 'city'])
            </x-atoms.th>
            <x-atoms.th>Creation Date</x-atoms.th>
            <x-atoms.th>Action</x-atoms.th>
        </x-slot>
        <x-slot name="table_body">
            @foreach ($attribute_values as $attribute_value)
            <tr>
                <x-atoms.td>{{$attribute_value->id}}</x-atoms.td>
                <x-atoms.td>{{$attribute_value->value}}</x-atoms.td>
                <x-atoms.td>{{$attribute_value->attribute->name}}</x-atoms.td>
                <x-atoms.td>{{$attribute_value->created_at}}</x-atoms.td>
                <x-atoms.td-action name="attribute_values" :id="$attribute_value->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <div class="m-3">
        {{ $attribute_values->links() }}
    </div>
</x-pages.list-container>