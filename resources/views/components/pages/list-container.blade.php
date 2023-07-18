@props(['name_prop'])
<div class="flex flex-wrap mx-1">
    <div class="flex-auto p-2 pb-0">
        <div alert class="relative p-4 pr-12 mb-4 text-white border border-slate-200 border-solid rounded-lg bg-slate-500">
            <span class="font-bold">Add, Edit, Delete features are not functional!</span> This is a <span class="font-bold">PRO</span> feature! Click <a href="https://www.creative-tim.com/product/soft-ui-dashboard-pro-tall" target="_blank" class="font-bold text-white">here</a> to see the <span class="font-bold">PRO</span> product!
        </div>
    </div>
    <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <x-molecules.list-header-area :name_prop=$name_prop></x-molecules.list-header-area>
            {{$slot}}
        </div>
    </div>
</div>