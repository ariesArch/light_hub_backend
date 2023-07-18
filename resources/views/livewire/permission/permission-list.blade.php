<x-pages.list-container name_prop="permission">
    <x-templates.table-wrapper>
        <x-slot name="table_head">
                    <x-atoms.th>ID</x-atoms.th>
                    <x-atoms.th>Name</x-atoms.th>
                    <x-atoms.th>Creation Date</x-atoms.th>
                    <x-atoms.th>Action</x-atoms.th>
        </x-slot>
        <x-slot name="table_body">
        @if (count($permissions) > 0)
                @foreach ($permissions as $permission)
                <tr>
                    <x-atoms.td>{{$permission->id}}</x-atoms.td>
                    <x-atoms.td>{{$permission->name}}</x-atoms.td>
                    <x-atoms.td>{{$permission->created_at}}</x-atoms.td>
                    <x-atoms.td-action name="permissions" :id="$permission->id"/>
                </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="3" align="center">
                            No Permissions Found.
                        </td>
                    </tr>
                @endif
        </x-slot>
    </x-templates.table-wrapper>
</x-pages.list-container>