<x-pages.form-container>
    <form wire:submit.prevent="submit">
        <x-templates.form-wrapper>
            <x-organisms.form-col-group>
                <x-molecules.select-box label="Product Category" :datas="$product_categories" model="categoryProduct.product_category_id">
                </x-molecules.select-box>
            </x-organisms.form-col-group>
            <x-organisms.form-col-group>
                <x-molecules.select-box label="Product" :datas="$products" model="categoryProduct.product_id">
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