<x-pages.form-container>
    <form wire:submit.prevent="submit">
        <x-templates.form-wrapper>
            <x-organisms.form-col-group>
                <x-molecules.input-area model="productCategory.name" id="productCategory-name" type="text" label="Name">
                </x-molecules.input-area>
            </x-organisms.form-col-group>
            {{-- <x-organisms.form-col-group>
                <x-molecules.input-area model="productCategory.slug" id="productCategory-slug" type="text" label="Slug">
                </x-molecules.input-area>
            </x-organisms.form-col-group> --}}
            <x-organisms.form-col-group>
                <x-molecules.select-box label="Product Group" :datas="$product_groups" model="productCategory.product_group_id">
                </x-molecules.select-box>
            </x-organisms.form-col-group>
        </x-templates.form-wrapper>
        <x-atoms.btn-cancel href="{{route('product_categories.index')}}">
            Cancel
        </x-atoms.btn-cancel>
        <x-atoms.btn-submit>
            Save changes
        </x-atoms.btn-submit>
    </form>
</x-pages.form-container>