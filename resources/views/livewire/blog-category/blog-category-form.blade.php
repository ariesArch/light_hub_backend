<x-pages.form-container>
    <form wire:submit.prevent="submit">
        <x-templates.form-wrapper>
            <x-organisms.form-col-group>
                <x-molecules.input-area model="blog_category.name" id="blog_category-name" type="text" label="Full Name">
                </x-molecules.input-area>
            </x-organisms.form-col-group>
            <x-organisms.form-col-group wire:ignore>
                <x-molecules.trix-area model="blog_category.description" id="blog_category-description" label="Enter Description">
                </x-molecules.trix-area>
            </x-organisms.form-col-group>
        </x-templates.form-wrapper>
        <x-atoms.btn-cancel href="{{route('blog_categories.index')}}">
            Cancel
        </x-atoms.btn-cancel>
        <x-atoms.btn-submit>
            Save changes
        </x-atoms.btn-submit>
    </form>
</x-pages.form-container>