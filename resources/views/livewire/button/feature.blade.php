<div class="m-2 toggle colour">
    <input wire:model="isActive" type="checkbox" name="toggle" id="{{ $field.$model->id }}" class="hidden toggle-checkbox" wire:click="toggle">
    <label for="{{$field.$model->id}}" class="block w-10 h-5 duration-150 ease-out rounded-full cursor-pointer transition-colour toggle-label"></label>
</div>
  
