<x-pages.list-container name_prop="admin">
    <x-templates.table-wrapper>
        <x-slot name="table_head">
                    <x-atoms.th>ID</x-atoms.th>
                    <x-atoms.th>Name</x-atoms.th>
                    <x-atoms.th>Email</x-atoms.th>
                    <x-atoms.th>Creation Date</x-atoms.th>
                    <x-atoms.th>Action</x-atoms.th>
        </x-slot>
        <x-slot name="table_body">
        @if (count($admins) > 0)
                @foreach ($admins as $admin)
                <tr>
                    <x-atoms.td>{{$admin->id}}</x-atoms.td>
                    <x-atoms.td>{{$admin->name}}</x-atoms.td>
                    <x-atoms.td>{{$admin->email}}</x-atoms.td>
                    <x-atoms.td>{{$admin->created_at}}</x-atoms.td>
                    <x-atoms.td-action name="admins" :id="$admin->id"/>
                </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="3" align="center">
                            No Admins Found.
                        </td>
                    </tr>
                @endif
        </x-slot>
    </x-templates.table-wrapper>
</x-pages.list-container>