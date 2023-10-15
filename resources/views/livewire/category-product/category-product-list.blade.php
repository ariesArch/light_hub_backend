<x-pages.list-container name_prop="category_product">
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
                Product Category
                @include('components.atoms.th-sort', ['field' => 'name'])
            </x-atoms.th>
            <x-atoms.th>
                Product
                @include('components.atoms.th-sort', ['field' => 'city'])
            </x-atoms.th>
            <x-atoms.th>Creation Date</x-atoms.th>
            <x-atoms.th>Action</x-atoms.th>
        </x-slot>
        <x-slot name="table_body">
            @foreach ($category_products as $category_product)
            <tr>
                <x-atoms.td>{{$category_product->id}}</x-atoms.td>
                <x-atoms.td>{{$category_product->product_category->name}}</x-atoms.td>
                <x-atoms.td>{{$category_product->product->name}}</x-atoms.td>
                <x-atoms.td>{{$category_product->created_at}}</x-atoms.td>
                <x-atoms.td-action name="category_products" :id="$category_product->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <div class="m-3">
        {{ $category_products->links() }}
    </div>
</x-pages.list-container>