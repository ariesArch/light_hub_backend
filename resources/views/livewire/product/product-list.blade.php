<x-pages.list-container name_prop="product">
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
            <x-atoms.th>
                Page
                @include('components.atoms.th-sort', ['field' => 'page'])
            </x-atoms.th>
            <x-atoms.th>
                Product Group
                @include('components.atoms.th-sort', ['field' => 'product_group'])
            </x-atoms.th>
            <x-atoms.th>
                Price
                @include('components.atoms.th-sort', ['field' => 'price'])
            </x-atoms.th>
           
            <x-atoms.th>Creation Date</x-atoms.th>
            <x-atoms.th>Action</x-atoms.th>
        </x-slot>
        <x-slot name="table_body">
            @foreach ($products as $product)
            <tr>
                <x-atoms.td>{{$product->id}}</x-atoms.td>
                <x-atoms.td>{{$product->name}}</x-atoms.td>
                <x-atoms.td>{{$product->slug}}</x-atoms.td>
                <x-atoms.td>{{$product->page_id}}</x-atoms.td>
                <x-atoms.td>{{$product->product_group_id}}</x-atoms.td>
                <x-atoms.td>{{$product->price}}</x-atoms.td>
                <x-atoms.td>{{$product->created_at}}</x-atoms.td>
                <x-atoms.td-action name="products" :id="$product->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <div class="m-3">
        {{ $products->links() }}
    </div>
</x-pages.list-container>