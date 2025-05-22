<button wire:click='logout'
    class="relative flex flex-col items-center justify-center rounded sm:hover:border-l-4 sm:hover:border-b-0 hover:border-b-4 hover:border-lime-500 w-14 h-14 sm:mt-auto sm:w-full sm:rounded-none hover:text-lime-500 hover:bg-lime-100"
    :class="{ 'border-lime-500 text-lime-500 sm:border-l-4 sm:border-b-0 border-b-4  bg-lime-100': active.startsWith(
            '/logout') }">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="w-8 h-8 stroke-current fill-gray-800">
        <path
            d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
    </svg>
    <span class="text-xs font-semibold text-gray-800 font-jakarta sm:inline hidden">Keluar</span>
</button>
