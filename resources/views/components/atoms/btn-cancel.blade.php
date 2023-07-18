<a {{ $attributes->merge(['type' => 'button', 'class' => '
    px-6 py-3 mt-6 mb-2 inline-flex 
    <!-- bg -->
    bg-white 
    <!-- shape -->
    border border-gray-300  rounded-md shadow-sm cursor-pointer
    <!-- text -->
    items-center align-middle font-semibold text-xs text-gray-700 uppercase tracking-widest leading-pro
    <!-- hover -->
    hover:bg-red-500 hover:text-white 
    <!-- focus -->
    hover:outline-none hover:ring-2 hover:ring-red-500 hover:ring-offset-2 
    <!-- transition -->
    transition-all transition ease-in-out duration-150
    disabled:opacity-25'
    ]) }}>
    {{ $slot }}
</a>