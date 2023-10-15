<x-pages.list-container name_prop="profile">
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
                Phone
                @include('components.atoms.th-sort', ['field' => 'phone'])
            </x-atoms.th>
            <x-atoms.th>
                Address
                @include('components.atoms.th-sort', ['field' => 'phone'])
            </x-atoms.th>
            <x-atoms.th>
                City
                @include('components.atoms.th-sort', ['field' => 'city'])
            </x-atoms.th>
            <x-atoms.th>
                Township
                @include('components.atoms.th-sort', ['field' => 'township'])
            </x-atoms.th>
            <x-atoms.th>Creation Date</x-atoms.th>
            <x-atoms.th>Action</x-atoms.th>
        </x-slot>
        <x-slot name="table_body">
            @foreach ($profiles as $profile)
            <tr>
                <x-atoms.td>{{$profile->id}}</x-atoms.td>
                <x-atoms.td>{{$profile->phone_no}}</x-atoms.td>
                <x-atoms.td>{{$profile->phone_no}}</x-atoms.td>
                <x-atoms.td>{{$profile->city->name}}</x-atoms.td>
                <x-atoms.td>{{$profile->township->name}}</x-atoms.td>
                <x-atoms.td>{{$profile->created_at}}</x-atoms.td>
                <x-atoms.td-action name="profiles" :id="$profile->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <div class="m-3">
        {{ $profiles->links() }}
    </div>
</x-pages.list-container>