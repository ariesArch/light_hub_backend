<x-pages.form-container>
    <form wire:submit.prevent="submit">
        <x-templates.form-wrapper>
            <x-organisms.form-col-group>
                <x-molecules.input-area model="community.name" id="community-name" type="text" label="Name">
                </x-molecules.input-area>
            </x-organisms.form-col-group>
            {{-- <x-organisms.form-col-group>
                <x-molecules.input-area model="community.slug" id="community-slug" type="text" label="Slug">
                </x-molecules.input-area>
            </x-organisms.form-col-group> --}}
            <x-organisms.form-col-group>
                <x-molecules.select-box label="Category" :datas="$communityCategory" model="community.community_category_id">
                </x-molecules.select-box>
            </x-organisms.form-col-group>
        </x-templates.form-wrapper>
        <x-atoms.btn-cancel href="{{route('communities.index')}}">
            Cancel
        </x-atoms.btn-cancel>
        <x-atoms.btn-submit>
            Save changes
        </x-atoms.btn-submit>
    </form>
</x-pages.form-container>