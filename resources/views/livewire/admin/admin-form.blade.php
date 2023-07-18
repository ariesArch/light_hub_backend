<x-pages.form-container>
    <form wire:submit.prevent="submit">
        <x-templates.form-wrapper>
            <x-organisms.form-col-group>
                <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Admin name
                </h6>
                <div class="mb-4">
                    <input wire:model.lazy="admin.name" type="text" class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Name" id="admin-name" required />
                    @error('admin.name') <p class="text-size-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </x-organisms.form-col-group>
            <x-organisms.form-col-group>
                <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Email
                </h6>
                <div class="mb-4">
                    <input wire:model.lazy="admin.email" type="text" class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Email" id="admin-email" required />
                    @error('admin.email') <p class="text-size-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </x-organisms.form-col-group>
            <x-organisms.form-col-group>
                <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Password
                </h6>
                <div class="mb-4">
                    <input wire:model.lazy="admin.password" type="password" class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" id="admin-password" required />
                    @error('admin.password') <p class="text-size-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </x-organisms.form-col-group>
           </x-templates.form-wrapper>
        <x-atoms.btn-submit>
            Save changes
        </x-atoms.btn-submit>
    </form>
</x-pages.form-container>