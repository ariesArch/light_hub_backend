<x-pages.form-container>
    <form wire:submit.prevent="submit">
        <x-templates.form-wrapper>
            <x-organisms.form-col-group>
                <x-molecules.input-area model="township.name" id="township-name" type="text" label="Name">
                </x-molecules.input-area>
            </x-organisms.form-col-group>
            <x-organisms.form-col-group>
                <x-molecules.input-area model="township.delivery_fee" id="township-delivery_fee" type="text" label="Delivery Fee">
                </x-molecules.input-area>
            </x-organisms.form-col-group>
            {{-- <x-organisms.form-col-group>
                <x-molecules.input-area model="township.slug" id="township-slug" type="text" label="Slug" @readonly(true)>
                </x-molecules.input-area>
            </x-organisms.form-col-group> --}}
            <x-organisms.form-col-group>
                <x-molecules.select-box label="City" :datas="$cities" model="township.city_id">
                </x-molecules.select-box>
            </x-organisms.form-col-group>
        </x-templates.form-wrapper>
        <x-atoms.btn-cancel href="{{route('townships.index')}}">
            Cancel
        </x-atoms.btn-cancel>
        <x-atoms.btn-submit>
            Save changes
        </x-atoms.btn-submit>
    </form>
</x-pages.form-container>