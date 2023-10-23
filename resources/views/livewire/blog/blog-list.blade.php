<x-pages.list-container name_prop="blog">
    <div class="flex flex-wrap p-3 mb-0 bg-white border-b-1 border-b-solid rounded-t-2xl border-b-transparent">
        <x-atoms.input wire:model.debounce.300ms="search" placeholder="Search" class="w-1/2"/>
    </div>
    <x-templates.table-wrapper>
        <x-slot name="table_head">
            <x-atoms.th field="id" sortBy=$sortBy>
                ID
                @include('components.atoms.th-sort', ['field' => 'id'])
            </x-atoms.th>
            <x-atoms.th>
                Title
                @include('components.atoms.th-sort', ['field' => 'name'])
            </x-atoms.th>
            <x-atoms.th>
                Slug
                @include('components.atoms.th-sort', ['field' => 'slug'])
            </x-atoms.th>
            <x-atoms.th>
                Active
                @include('components.atoms.th-sort', ['field' => 'slug'])
            </x-atoms.th>
            <x-atoms.th>
                Category
                @include('components.atoms.th-sort', ['field' => 'categoty_id'])
            </x-atoms.th>
            <x-atoms.th>Creation Date</x-atoms.th>
            <x-atoms.th>Action</x-atoms.th>
        </x-slot>
        <x-slot name="table_body">
            @foreach ($blogs as $blog)
            <tr>
                <x-atoms.td>{{$blog->id}}</x-atoms.td>
                <x-atoms.td>{{$blog->title}}</x-atoms.td>
                <x-atoms.td>{{$blog->slug}}</x-atoms.td>
                <x-atoms.td>
                    <livewire:button.feature :model="$blog" field="is_published" :key="'button.feature'.$blog->id"/>
                </x-atoms.td>
                <x-atoms.td>{{$blog->blog_category->name}}</x-atoms.td>
                <x-atoms.td>{{$blog->created_at}}</x-atoms.td>
                <x-atoms.td-action name="blogs" :id="$blog->id" />
            </tr>
            @endforeach
        </x-slot>
    </x-templates.table-wrapper>
    <div class="m-3">
        {{ $blogs->links() }}
    </div>
</x-pages.list-container>