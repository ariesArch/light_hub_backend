<x-pages.form-container>
    <form wire:submit.prevent="submit">
        <x-templates.form-wrapper>
            <x-organisms.form-col-group>
                <x-molecules.input-area model="material.name" id="material-name" type="text" label="Full Name">
                </x-molecules.input-area>
            </x-organisms.form-col-group>
            <x-organisms.form-col-group>
                <x-molecules.input-area model="material.description" id="material-description" type="description" label="Description">
                </x-molecules.input-area>
            </x-organisms.form-col-group>
        </x-templates.form-wrapper>
        <x-atoms.btn-cancel href="{{route('materials.index')}}">
            Cancel
        </x-atoms.btn-cancel>
        <x-atoms.btn-submit>
            Save changes
        </x-atoms.btn-submit>
    </form>
</x-pages.form-container>
