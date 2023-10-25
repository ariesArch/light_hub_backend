<x-pages.form-container>
    <form wire:submit.prevent="submit">
        <x-templates.form-wrapper>
            <x-organisms.form-col-group>
                <x-molecules.select-box label="Category" :datas="$blog_categories" model="blog.blog_category_id">
                </x-molecules.select-box>
            </x-organisms.form-col-group>
            <x-organisms.form-col-group>
                <x-molecules.input-area model="blog.title" id="blog-title" type="text" label="Full title">
                </x-molecules.input-area>
            </x-organisms.form-col-group>
            <x-organisms.form-col-group wire:ignore>
                <x-molecules.trix-area model="blog.description" id="blog-description" label="Enter Description" >
                </x-molecules.trix-area>
            </x-organisms.form-col-group>
            {{-- <x-organisms.form-col-group>
                <x-molecules.input-area model="blog.slug" id="blog-slug" type="text" label="Slug">
                </x-molecules.input-area>
            </x-organisms.form-col-group> --}}
            <x-organisms.form-col-group>
                <x-atoms.input-label>Upload Blog Photo</x-atoms.input-label>
                <x-atoms.input class="mb-4" wire:model="photo" id="blog-photo" type="file" label="Blog Photo">
                </x-atoms.input>  
            </x-organisms.form-col-group>
        </x-templates.form-wrapper>
        <x-atoms.btn-cancel href="{{route('blogs.index')}}">
            Cancel
        </x-atoms.btn-cancel>
        <x-atoms.btn-submit>
            Save changes
        </x-atoms.btn-submit>
    </form>
</x-pages.form-container>