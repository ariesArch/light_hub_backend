@props(['model','id'=>'','label'=>''])
{{ $slot }}
<x-atoms.input-label :value="$label" />
<div class="mb-4">
    <x-atoms.trix :wire:model="$model" :id="$id" {{ $attributes->merge(['class' => $errors->has($model) ?'w-full mb-4 border-1 border-solid border-red-500 rounded-3':'w-full']) }} />
    @error($model) <p class="text-size-sm text-red-500">{{ $message }}</p>
    @enderror
</div>