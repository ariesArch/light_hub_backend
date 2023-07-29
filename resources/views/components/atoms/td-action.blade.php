@props(['name','id'])
<td class="p-4 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
    <p class="mb-0 font-semibold leading-tight text-base">
        <a href="{{ route($name.'.edit', $id) }}"><i class=" fas fa-user-edit" aria-hidden="true"></i></a>
        {{-- <a href="#"><i class="cursor-pointer fas fa-trash" aria-hidden="true"></i></a> --}}
        <button type="button" wire:click="delete({{$id}})"><i class="cursor-pointer fas fa-trash" aria-hidden="true"></i></button>   
    </p>
</td>