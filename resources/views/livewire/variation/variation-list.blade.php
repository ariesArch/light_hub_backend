<x-pages.list-container name_prop="variation">
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
                Title
                @include('components.atoms.th-sort', ['field' => 'user'])
            </x-atoms.th>
            <x-atoms.th>
                Price
                @include('components.atoms.th-sort', ['field' => 'community'])
            </x-atoms.th>
            <x-atoms.th>
                Quantity
                @include('components.atoms.th-sort', ['field' => 'community'])
            </x-atoms.th>
            <x-atoms.th>
                Option
                @include('components.atoms.th-sort', ['field' => 'community'])
            </x-atoms.th>
            <x-atoms.th>
                Product
                @include('components.atoms.th-sort', ['field' => 'community'])
            </x-atoms.th>
            <x-atoms.th>Creation Date</x-atoms.th>
            <x-atoms.th>Action</x-atoms.th>
        </x-slot>
        <x-slot name="table_body">
            @foreach ($variations as $variation)
            <tr>

                {{-- {{$variation}} --}}
                 {{-- @json($variation->options)->name --}}

                <x-atoms.td>{{$variation->id}}</x-atoms.td>
                <x-atoms.td>{{$variation->title}}</x-atoms.td>
                <x-atoms.td>{{$variation->price}}</x-atoms.td>
                <x-atoms.td>{{$variation->quantity}}</x-atoms.td>
                <x-atoms.td>
                    @foreach (json_decode($variation->options) as $option)
                       ( {{ $option->name }}-{{ $option->value}})
                    @endforeach
                </x-atoms.td>
                <x-atoms.td>{{$variation->product->name}}</x-atoms.td>
                <x-atoms.td>{{$variation->created_at}}</x-atoms.td>
                <x-atoms.td-action name="variations" :id="$variation->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <div class="m-3">
        {{ $variations->links() }}
    </div>
</x-pages.list-container>