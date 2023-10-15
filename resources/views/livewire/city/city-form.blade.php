<x-pages.form-container>
    <form wire:submit.prevent="submit">
        <x-templates.form-wrapper>
            <x-organisms.form-col-group>
                <x-molecules.input-area model="city.name" id="city-name" type="text" label="Full Name">
                </x-molecules.input-area>
            </x-organisms.form-col-group>
            {{-- <x-organisms.form-col-group>
                <x-molecules.input-area model="city.slug" id="city-slug" type="text" label="Slug">
                </x-molecules.input-area>
            </x-organisms.form-col-group> --}}
        </x-templates.form-wrapper>
        <x-atoms.btn-cancel href="{{route('cities.index')}}">
            Cancel
        </x-atoms.btn-cancel>
        <x-atoms.btn-submit>
            Save changes
        </x-atoms.btn-submit>
    </form>
</x-pages.form-container>