<x-pages.form-container>
    <form wire:submit.prevent="submit">
        <x-templates.form-wrapper>
            <x-organisms.form-col-group>
                <x-molecules.input-area model="product.name" id="product-name" type="text" label="Name">
                </x-molecules.input-area>
            </x-organisms.form-col-group>
            {{-- <x-organisms.form-col-group>
                <x-molecules.input-area model="product.slug" id="product-slug" type="text" label="Slug">
                </x-molecules.input-area>
            </x-organisms.form-col-group> --}}
            <x-organisms.form-col-group>
                <x-molecules.input-area model="product.description" id="product-description" type="text" label="Description">
                </x-molecules.input-area>
            </x-organisms.form-col-group>
            <x-organisms.form-col-group>
                <x-molecules.input-area model="product.price" id="product-price" type="text" label="Price">
                </x-molecules.input-area>
            </x-organisms.form-col-group>
            <x-organisms.form-col-group>
                <x-molecules.select-box label="Product Group" :datas="$product_groups" model="product.product_group_id">
                </x-molecules.select-box>
            </x-organisms.form-col-group>
            <x-organisms.form-col-group>
                <x-molecules.select-box label="Page" :datas="$pages" model="product.page_id">
                </x-molecules.select-box>
            </x-organisms.form-col-group>
        </x-templates.form-wrapper>
        <x-atoms.btn-cancel href="{{route('products.index')}}">
            Cancel
        </x-atoms.btn-cancel>
        <x-atoms.btn-submit>
            Save changes
        </x-atoms.btn-submit>
    </form>
</x-pages.form-container>