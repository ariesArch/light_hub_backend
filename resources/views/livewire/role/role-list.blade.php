<x-pages.list-container name_prop="role">
    <x-templates.table-wrapper>
        <x-slot name="table_head">
                    <x-atoms.th>ID</x-atoms.th>
                    <x-atoms.th>Name</x-atoms.th>
                    <x-atoms.th>Creation Date</x-atoms.th>
                    <x-atoms.th>Action</x-atoms.th>
        </x-slot>
        <x-slot name="table_body">
        @if (count($roles) > 0)
                @foreach ($roles as $role)
                <tr>
                    <x-atoms.td>{{$role->id}}</x-atoms.td>
                    <x-atoms.td>{{$role->name}}</x-atoms.td>
                    <x-atoms.td>{{$role->created_at}}</x-atoms.td>
                    <x-atoms.td-action name="roles" :id="$role->id"/>
                </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="3" align="center">
                            No Roles Found.
                        </td>
                    </tr>
                @endif
        </x-slot>
    </x-templates.table-wrapper>
</x-pages.list-container>