@props(['name_prop'])
<div class="flex">
    <div class="p-3 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
        <h6>All {{ucfirst($name_prop)}}s</h6>
    </div>
    <div class="my-auto ml-auto pr-3">
        <x-atoms.btn-create href="{{route($name_prop.'s.create')}}">Add {{ucfirst($name_prop)}}</x-atoms.btn-create>
    </div>
</div>