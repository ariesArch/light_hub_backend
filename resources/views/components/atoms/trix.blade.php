@props(['disabled' => false,'type'=>'text','id'=>''])
<trix-editor {!! $attributes->merge(['class'=>'text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow','type'=>$type]) !!}/>