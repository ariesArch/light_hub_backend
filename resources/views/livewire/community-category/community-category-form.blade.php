<x-pages.form-container>
    <form wire:submit.prevent="submit">
        <x-templates.form-wrapper>
            <x-organisms.form-col-group>
                <x-molecules.input-area model="communityCategory.name" id="communityCategory-name" type="text" label="Name">
                </x-molecules.input-area>
            </x-organisms.form-col-group>
            {{-- <x-organisms.form-col-group>
                <x-molecules.input-area model="communityCategory.slug" id="communityCategory-slug" type="text" label="Slug">
                </x-molecules.input-area>
            </x-organisms.form-col-group> --}}
        </x-templates.form-wrapper>
        <x-atoms.btn-cancel href="{{route('community_categories.index')}}">
            Cancel
        </x-atoms.btn-cancel>
        <x-atoms.btn-submit>
            Save changes
        </x-atoms.btn-submit>
    </form>
</x-pages.form-container>