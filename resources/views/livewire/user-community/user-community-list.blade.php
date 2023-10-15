<x-pages.list-container name_prop="user_communitie">
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
                User
                @include('components.atoms.th-sort', ['field' => 'user'])
            </x-atoms.th>
            <x-atoms.th>
                Community
                @include('components.atoms.th-sort', ['field' => 'community'])
            </x-atoms.th>
            <x-atoms.th>Creation Date</x-atoms.th>
            <x-atoms.th>Action</x-atoms.th>
        </x-slot>
        <x-slot name="table_body">
            @foreach ($user_communities as $user_community)
            <tr>
                <x-atoms.td>{{$user_community->id}}</x-atoms.td>
                <x-atoms.td>{{$user_community->user->name}}</x-atoms.td>
                <x-atoms.td>{{$user_community->community->name}}</x-atoms.td>
                <x-atoms.td>{{$user_community->created_at}}</x-atoms.td>
                <x-atoms.td-action name="user_communities" :id="$user_community->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <div class="m-3">
        {{ $user_communities->links() }}
    </div>
</x-pages.list-container>