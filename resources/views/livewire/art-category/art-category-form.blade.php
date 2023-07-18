<x-pages.form-container>
    <form wire:submit.prevent="submit">
        <x-templates.form-wrapper>
            <x-organisms.form-col-group>
                <x-molecules.input-area model="art-category.name" id="art-category-name" type="text" label="Full Name">
                </x-molecules.input-area>
            </x-organisms.form-col-group>
            <x-organisms.form-col-group>
                <x-molecules.input-area model="art-category.description" id="art-category-description" type="email" label="Email">
                </x-molecules.input-area>
            </x-organisms.form-col-group>
        </x-templates.form-wrapper>
        <x-atoms.btn-cancel href="{{route('art-categorys.index')}}">
            Cancel
        </x-atoms.btn-cancel>
        <x-atoms.btn-submit>
            Save changes
        </x-atoms.btn-submit>
    </form>
</x-pages.form-container>