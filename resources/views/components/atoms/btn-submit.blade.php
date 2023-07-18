<button {{ $attributes->merge(['type' => 'submit', 'class' => '
    <!-- display -->
    px-6 py-3 mt-6 mb-2 inline-block
    <!-- bg -->
    bg-150 bg-x-25 bg-gradient-dark-gray bg-transparent 
    <!-- shape -->
    border-0 rounded-md shadow-soft-md 
    <!-- text -->
    items-center align-middle font-bold text-white uppercase text-size-xs tracking-tight-soft leading-pro
    <!-- hover -->
    hover:scale-102 hover:shadow-soft-xs hover:border-slate-700 hover:bg-slate-700 hover:text-white
    <!-- focus -->
    hover:outline-none hover:ring-2 hover:ring-slate-500 hover:ring-offset-2 
    <!-- active -->
    active:opacity-85
    <!-- transition  -->
    transition-all ease-soft-in
    ml-3 float-right  
    ']) }}>
    {{ $slot }}
</button>