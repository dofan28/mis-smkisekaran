<a wire:navigate class="items-center justify-center hidden w-12 h-12 bg-lime-100 rounded-full sm:flex hover:bg-green-200"
    href="/">
    <img src="/img/logo_stroke.png" class="w-8" alt="" srcset="">
</a>

<a wire:navigate
    class="relative flex flex-col items-center justify-center rounded sm:hover:border-l-4 sm:hover:border-b-0 hover:border-b-4 hover:border-lime-500 w-14 h-14 sm:w-full sm:rounded-none sm:mt-12 hover:text-lime-500 hover:bg-lime-100"
    :class="{ 'border-lime-500 text-lime-500 sm:border-l-4 sm:border-b-0 border-b-4  bg-lime-100': active.startsWith(
            '/admin/dashboard') }"
    href="/admin/dashboard">
    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
        class="w-8 h-8 stroke-current fill-gray-800">
        <path
            d="M520-600v-240h320v240H520ZM120-440v-400h320v400H120Zm400 320v-400h320v400H520Zm-400 0v-240h320v240H120Zm80-400h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z" />
    </svg>

    <span class="text-xs font-semibold text-gray-800 font-jakarta sm:inline hidden">Dashboard</span>
</a>
<a wire:navigate
    class="relative flex flex-col items-center justify-center rounded sm:hover:border-l-4 sm:hover:border-b-0 hover:border-b-4 hover:border-lime-500 w-14 h-14 sm:w-full sm:rounded-none hover:text-lime-500 hover:bg-lime-100"
    :class="{ 'border-lime-500 text-lime-500 sm:border-l-4 sm:border-b-0 border-b-4  bg-lime-100': active.startsWith(
            '/admin/pages') }"
    href="/admin/pages">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="w-8 h-8 stroke-current fill-gray-800">
        <path
            d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Zm280 379 76 46q11 7 22-.5t8-20.5l-20-87 68-59q10-9 6-21.5T622-537l-89-7-35-82q-5-12-18-12t-18 12l-35 82-89 7q-14 1-18 13.5t6 21.5l68 59-20 87q-3 13 8 20.5t22 .5l76-46Z" />
    </svg>
    <span class="text-xs font-semibold text-gray-800 font-jakarta sm:inline hidden">Halaman</span>
</a>
<a wire:navigate
    class="relative flex flex-col items-center justify-center rounded sm:hover:border-l-4 sm:hover:border-b-0 hover:border-b-4 hover:border-lime-500 w-14 h-14 sm:w-full sm:rounded-none hover:text-lime-500 hover:bg-lime-100"
    :class="{ 'border-lime-500 text-lime-500 sm:border-l-4 sm:border-b-0 border-b-4  bg-lime-100': active.startsWith(
            '/admin/announcements') }"
    href="/admin/announcements">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="w-6 h-6 stroke-current fill-gray-800">
        <path
            d="M840-440h-80q-17 0-28.5-11.5T720-480q0-17 11.5-28.5T760-520h80q17 0 28.5 11.5T880-480q0 17-11.5 28.5T840-440ZM664-288q10-14 26-16t30 8l64 48q14 10 16 26t-8 30q-10 14-26 16t-30-8l-64-48q-14-10-16-26t8-30Zm120-424-64 48q-14 10-30 8t-26-16q-10-14-8-30t16-26l64-48q14-10 30-8t26 16q10 14 8 30t-16 26ZM200-360h-40q-33 0-56.5-23.5T80-440v-80q0-33 23.5-56.5T160-600h160l139-84q20-12 40.5 0t20.5 35v338q0 23-20.5 35t-40.5 0l-139-84h-40v120q0 17-11.5 28.5T240-200q-17 0-28.5-11.5T200-240v-120Zm240-22v-196l-98 58H160v80h182l98 58Zm120 36v-268q27 24 43.5 58.5T620-480q0 41-16.5 75.5T560-346ZM300-480Z" />
    </svg>
    <span class="text-xs font-semibold text-gray-800 font-jakarta sm:inline hidden">Pengumuman</span>
</a>
<a wire:navigate
    class="relative flex flex-col items-center justify-center rounded sm:hover:border-l-4 sm:hover:border-b-0 hover:border-b-4 hover:border-lime-500 w-14 h-14 sm:w-full sm:rounded-none hover:text-lime-500 hover:bg-lime-100"
    :class="{ 'border-lime-500 text-lime-500 sm:border-l-4 sm:border-b-0 border-b-4  bg-lime-100': active.startsWith(
            '/admin/articles') }"
    href="/admin/articles">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="w-8 h-8 stroke-current fill-gray-800">
        <path
            d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Zm120 480h200q17 0 28.5-11.5T560-320q0-17-11.5-28.5T520-360H320q-17 0-28.5 11.5T280-320q0 17 11.5 28.5T320-280Zm0-160h320q17 0 28.5-11.5T680-480q0-17-11.5-28.5T640-520H320q-17 0-28.5 11.5T280-480q0 17 11.5 28.5T320-440Zm0-160h320q17 0 28.5-11.5T680-640q0-17-11.5-28.5T640-680H320q-17 0-28.5 11.5T280-640q0 17 11.5 28.5T320-600Z" />
    </svg>
    <span class="text-xs font-semibold text-gray-800 font-jakarta sm:inline hidden">Artikel</span>
</a>
<a wire:navigate
    class="relative flex flex-col items-center justify-center rounded sm:hover:border-l-4 sm:hover:border-b-0 hover:border-b-4 hover:border-lime-500 w-14 h-14 sm:w-full sm:rounded-none hover:text-lime-500 hover:bg-lime-100"
    :class="{ 'border-lime-500 text-lime-500 sm:border-l-4 sm:border-b-0 border-b-4  bg-lime-100': active.startsWith(
            '/admin/events') }"
    href="/admin/events">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="w-8 h-8 stroke-current fill-gray-800">
        <path
            d="M580-240q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-40q0-17 11.5-28.5T280-880q17 0 28.5 11.5T320-840v40h320v-40q0-17 11.5-28.5T680-880q17 0 28.5 11.5T720-840v40h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z" />
    </svg>
    <span class="text-xs font-semibold text-gray-800 font-jakarta sm:inline hidden">Kegiatan</span>
</a>
<a wire:navigate
    class="relative flex flex-col items-center justify-center rounded sm:hover:border-l-4 sm:hover:border-b-0 hover:border-b-4 hover:border-lime-500 w-14 h-14 sm:w-full sm:rounded-none hover:text-lime-500 hover:bg-lime-100"
    :class="{ 'border-lime-500 text-lime-500 sm:border-l-4 sm:border-b-0 border-b-4  bg-lime-100': active.startsWith(
            '/admin/galleries') }"
    href="/admin/galleries">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="w-8 h-8 stroke-current fill-gray-800">
        <path
            d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0 0v-560 560Zm80-80h400q12 0 18-11t-2-21L586-459q-6-8-16-8t-16 8L450-320l-74-99q-6-8-16-8t-16 8l-80 107q-8 10-2 21t18 11Z" />
    </svg>
    <span class="text-xs font-semibold text-gray-800 font-jakarta sm:inline hidden">Galeri</span>
</a>
<livewire:auth.logout-button>
