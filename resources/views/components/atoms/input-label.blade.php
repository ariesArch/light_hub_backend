@props(['value'])
<h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
    {{ $value ?? $slot }}
</h6>