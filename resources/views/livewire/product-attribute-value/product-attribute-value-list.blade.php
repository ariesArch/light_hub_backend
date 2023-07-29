<x-pages.list-container name_prop="product_attribute_value">
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
                Product
                @include('components.atoms.th-sort', ['field' => 'product'])
            </x-atoms.th>
            <x-atoms.th>
                Attribute Value
                @include('components.atoms.th-sort', ['field' => 'attribute_value'])
            </x-atoms.th>
            <x-atoms.th>Creation Date</x-atoms.th>
            <x-atoms.th>Action</x-atoms.th>
        </x-slot>
        <x-slot name="table_body">
            @foreach ($product_attribute_values as $product_attribute_value)
            <tr>
                <x-atoms.td>{{$product_attribute_value->id}}</x-atoms.td>
                <x-atoms.td>{{$product_attribute_value->product->name}}</x-atoms.td>
                <x-atoms.td>{{$product_attribute_value->attribute_value->value}}</x-atoms.td>
                <x-atoms.td>{{$product_attribute_value->created_at}}</x-atoms.td>
                <x-atoms.td-action name="product_attribute_values" :id="$product_attribute_value->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <div class="m-3">
        {{ $product_attribute_values->links() }}
    </div>
</x-pages.list-container>