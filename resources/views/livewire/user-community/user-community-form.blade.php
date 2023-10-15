<x-pages.form-container>
    <form wire:submit.prevent="submit">
        <x-templates.form-wrapper>
            {{-- <x-organisms.form-col-group>
                <x-molecules.input-area model="township.name" id="township-name" type="text" label="Name">
                </x-molecules.input-area>
            </x-organisms.form-col-group>
            <x-organisms.form-col-group>
                <x-molecules.input-area model="township.slug" id="township-slug" type="text" label="Slug">
                </x-molecules.input-area>
            </x-organisms.form-col-group> --}}
            <x-organisms.form-col-group>
                <x-molecules.select-box label="User" :datas="$users" model="userCommunity.user_id">
                </x-molecules.select-box>
            </x-organisms.form-col-group>
            <x-organisms.form-col-group>
                <x-molecules.select-box label="Community" :datas="$communities" model="userCommunity.community_id">
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