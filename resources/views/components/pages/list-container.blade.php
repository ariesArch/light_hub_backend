@props(['name_prop'])
<div class="flex flex-wrap mx-1">
    @if(session('success'))
    <div class="flex-auto p-2 pb-0" x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
        <div alert class="relative p-4 pr-12 mb-4 text-slate-900 border border-slate-300 border-solid rounded-lg bg-green-300">
            <span class="font-bold">{!! session('success') !!}</span>
        </div>
    </div>
    @endif
    <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <x-molecules.list-header-area :name_prop=$name_prop></x-molecules.list-header-area>
            {{$slot}}
        </div>
    </div>
</div>