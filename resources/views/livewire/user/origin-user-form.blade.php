<x-dialog-modal wire:model="modalFormVisible">
    <x-slot name="title">
        {{ __('Create or Update Form') }}
    </x-slot>

    <x-slot name="content">
        <div class="mt-4">
            <x-label for="name" value="{{ __('Name') }}" />
            <x-input wire:model="user.name" id="name" class="block mt-1 w-full" type="text" />
            @error('user.name')
            <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-secondary-button>

        @if ($userId)
        <x-button class="ml-3" wire:click="update" wire:loading.attr="disabled">
            {{ __('Update') }}
            </x-danger-button>
            @else
            <x-button class="ml-3" wire:click="create" wire:loading.attr="disabled">
                {{ __('Create') }}
                </x-danger-button>
                @endif
    </x-slot>
</x-dialog-modal>