@props(['model','label'=>'','datas'])
{{-- {{ $slot }} --}}

<x-atoms.input-label :value="$label" />
 <select wire:model="{{$model}}" class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-md focus:ring-purple-500 focus:border-purple-500 block w-full p-2">
    <option value="" selected>Choose {{$label}}</option>
    @foreach($datas as $data)
        <option value="{{ $data->id }}">
            {{ $data->name }}
        </option>
    @endforeach
</select>
@error($model) <p class="text-size-sm text-red-500">{{ $message }}</p>
@enderror