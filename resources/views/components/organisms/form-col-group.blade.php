<div {{ $attributes->merge(['class'=>'max-w-full px-3 w-1/2 lg:flex-none']) }}>
    <div {{ $attributes->merge(['class'=>'flex flex-col h-full']) }}>
        {{$slot}}
    </div>
</div>