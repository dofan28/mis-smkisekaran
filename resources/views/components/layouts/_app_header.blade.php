 <div>
     <nav
         class="container flex items-center justify-between px-6 mx-auto overflow-hidden text-white rounded-2xl bg-greenMain font-merriweather ">
         <a wire:navigate href="/" class="relative z-50 flex items-center h-16 md:mr-8 sm:mr-8">
             <img src="/img/logo_stroke.png" alt="Logo SMK ISLAM SEKARAN" class="w-12">
             <div class="flex flex-col ml-3 justify-items-start">
                 <h3 class="lg:text-lg md:text-lg text-base  font-bold leading-5 text-justify -tracking-tight">SMK ISLAM
                     SEKARAN</h3>
                 <span
                     class="lg:text-sm md:text-sm text-xs font-semibold leading-5 text-justify lg:-tracking-normal md:-tracking-normal lg:inline md:inline hidden">Jalan
                     Raya Sekaran, 01,
                     Sekaran-Lamongan</span>
             </div>
         </a>
         <div class="flex items-center justify-end">
             <div class="fixed top-0 bottom-0 left-0 z-30 flex items-center w-2/3 py-16 mt-4 overflow-x-auto transition-all duration-300 origin-top-left  bg-greenMain lg:mt-0 lg:block lg:py-0 lg:static lg:w-auto lg:bg-greenMain lg:origin-right"
                 @click.away="navigationOpen = false" x-show="navigationOpen"
                 x-transition:enter-start="opacity-0 lg:scale-75" x-transition:enter-end="opacity-100 lg:scale-100"
                 x-transition:leave-start="opacity-100 lg:scale-100" x-transition:leave-end="opacity-0 lg:scale-75">
                 <ul
                     class="flex flex-wrap items-center max-h-full overflow-auto  text-white lg:text-xs md:text-xs text-sm">
                     <li
                         class="w-full shadow lg:w-auto lg:shadow-none hover:bg-yellow-500 hover:border-white hover:border hover:ring-white ">
                         <a wire:navigate href="/"
                             class="block lg:p-3 p-2 hover:font-bold active:text-greenMain focus:text-greenMain">BERANDA</a>
                     </li>
                     <li class="w-full shadow lg:w-auto lg:shadow-none" x-data="{ open: false }" @mouseover="open = true"
                         @mouseleave="open = false">
                         <a href="#profile-school"
                             class="block lg:p-3 p-2 hover:font-bold active:text-greenMain focus:text-greenMain hover:bg-yellow-500 hover:border hover:border-white"
                             :class="open ? 'bg-yellow-500 border border-white' : ''">PROFIL
                             SEKOLAH
                             <svg xmlns="http://www.w3.org/2000/svg"
                                 class="inline transition-transform duration-300 ease-in-out fill-white" height="24px"
                                 viewBox="0 -960 960 960" width="24px" :class="open ? 'rotate-0' : 'rotate-180'">
                                 <path d="m280-400 200-200 200 200H280Z" />
                             </svg>
                         </a>
                         <div x-show=open x-cloak accesskey x-transition:enter="transition ease-out duration-1000"
                             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                             class="lg:absolute z-50 bg-greenMain divide-y divide-white">
                             <a wire:navigate href="/intro"
                                 class="block p-3 hover:font-bold active:text-greenMain focus:text-greenMain hover:bg-amber-500">SAMBUTAN
                                 KEPALA
                                 SEKOLAH</a>
                             <a wire:navigate href="/history"
                                 class="block p-3 hover:font-bold active:text-greenMain focus:text-greenMain hover:bg-amber-500">SEJARAH
                                 SEKOLAH</a>
                             <a wire:navigate href="/visionmission"
                                 class="block p-3 hover:font-bold active:text-greenMain focus:text-greenMain hover:bg-amber-500">VISI
                                 DAN
                                 MISI</a>
                             <a wire:navigate href="/organizationalstructure"
                                 class="block p-3 hover:font-bold active:text-greenMain focus:text-greenMain hover:bg-amber-500">STRUKTUR
                                 ORGANISASI</a>
                             <a wire:navigate href="/documents"
                                 class="block p-3 hover:font-bold active:text-greenMain focus:text-greenMain hover:bg-amber-500">DOKUMEN</a>
                             <a wire:navigate href="/lecture"
                                 class="block p-3 hover:font-bold active:text-greenMain focus:text-greenMain hover:bg-amber-500">GURU
                                 DAN
                                 KARYAWAN</a>
                             <a wire:navigate href="/schoolprogram"
                                 class="block p-3 hover:font-bold active:text-greenMain focus:text-greenMain hover:bg-amber-500">PROGRAM
                                 SEKOLAH</a>
                             <a wire:navigate href="/schoolachievement"
                                 class="block p-3 hover:font-bold active:text-greenMain focus:text-greenMain hover:bg-amber-500">PRESTASI
                                 SEKOLAH</a>
                         </div>
                     </li>
                     @if (DB::table('pages')->where('category', 'competency-skill')->count() > 0)
                         <li class="w-full shadow lg:w-auto lg:shadow-none" x-data="{ open: false }"
                             @mouseover="open = true" @mouseleave="open = false">
                             <a href="#profile-school"
                                 class="block lg:p-3 p-2 hover:font-bold active:text-greenMain focus:text-greenMain hover:bg-yellow-500 hover:border hover:border-white"
                                 :class="open ? 'bg-yellow-500 border border-white' : ''">KOMPETENSI KEAHLIAN
                                 <svg xmlns="http://www.w3.org/2000/svg"
                                     class="inline transition-transform duration-300 ease-in-out fill-white"
                                     height="24px" viewBox="0 -960 960 960" width="24px"
                                     :class="open ? 'rotate-0' : 'rotate-180'">
                                     <path d="m280-400 200-200 200 200H280Z" />
                                 </svg>
                             </a>
                             <div x-show=open x-cloak accesskey x-transition:enter="transition ease-out duration-1000"
                                 x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                 class="lg:absolute z-50 bg-greenMain divide-y divide-white">
                                 @foreach (DB::table('pages')->where('category', 'competency-skill')->get() as $competencySkill)
                                     <a wire:navigate href="/competencyskill/{{ $competencySkill->slug }}"
                                         class="block p-3 hover:font-bold active:text-greenMain focus:text-greenMain hover:bg-amber-500 uppercase">{{ $competencySkill->title }}</a>
                                 @endforeach
                             </div>
                         </li>
                     @endif
                     <li class="w-full shadow lg:w-auto lg:shadow-none" x-data="{ open: false }" @mouseover="open = true"
                         @mouseleave="open = false">
                         <a href="#information"
                             class="block lg:p-3 p-2 hover:font-bold active:text-greenMain focus:text-greenMain hover:bg-yellow-500 hover:border hover:border-white"
                             :class="open ? 'bg-yellow-500 border border-white' : ''">INFORMASI

                             <svg xmlns="http://www.w3.org/2000/svg"
                                 class="inline transition-transform duration-300 ease-in-out fill-white" height="24px"
                                 viewBox="0 -960 960 960" width="24px" :class="open ? 'rotate-0' : 'rotate-180'">
                                 <path d="m280-400 200-200 200 200H280Z" />
                             </svg>
                         </a>
                         <div x-show=open x-cloak accesskey x-transition:enter="transition ease-out duration-1000"
                             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                             class="lg:absolute z-50 bg-greenMain divide-y divide-white">
                             <a href="#paginatedAnnouncements"
                                 class="block p-3 hover:font-bold active:text-greenMain focus:text-greenMain hover:bg-amber-500">PENGUMUMAN</a>
                             <a href="#paginatedEvents"
                                 class="block p-3 hover:font-bold active:text-greenMain focus:text-greenMain hover:bg-amber-500">KEGIATAN</a>
                             <a wire:navigate href="/articles"
                                 class="block p-3 hover:font-bold active:text-greenMain focus:text-greenMain hover:bg-amber-500">ARTIKEL</a>
                         </div>
                     </li>
                     <li class="w-full shadow lg:w-auto lg:shadow-none" x-data="{ open: false }" @mouseover="open = true"
                         @mouseleave="open = false">
                         <a href="#"
                             class="block p-3 hover:font-bold active:text-greenMain focus:text-greenMain hover:bg-yellow-500 hover:border hover:border-white"
                             :class="open ? 'bg-yellow-500 border border-white' : ''">LAINNYA

                             <svg xmlns="http://www.w3.org/2000/svg"
                                 class="inline transition-transform duration-300 ease-in-out fill-white" height="24px"
                                 viewBox="0 -960 960 960" width="24px" :class="open ? 'rotate-0' : 'rotate-180'">
                                 <path d="m280-400 200-200 200 200H280Z" />
                             </svg>
                         </a>
                         <div x-show=open x-cloak accesskey x-transition:enter="transition ease-out duration-1000"
                             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                             class="lg:absolute z-50 bg-greenMain divide-y divide-white">
                             <a href="#galleries"
                                 class="block p-3 hover:font-bold active:text-greenMain focus:text-greenMain hover:bg-amber-500">GALERI</a>
                         </div>
                     </li>
                     <li
                         class="w-full shadow lg:w-auto lg:shadow-none hover:bg-yellow-500 hover:border-white hover:border hover:ring-white">
                         <a href="#contacts" class="block p-3 hover:font-bold ">KONTAK</a>
                     </li>
                 </ul>

             </div>
             <button class="flex flex-col flex-wrap justify-center w-6 h-8 space-y-1 focus:outline-none"
                 @click="navigationOpen = !navigationOpen">
                 <span class="w-6 h-1 bg-white rounded" x-show.transition="!navigationOpen"></span>
                 <span class="w-6 h-1 bg-white rounded"></span>
                 <span class="w-6 h-1 bg-white rounded" x-show.transition="!navigationOpen"></span>
             </button>
         </div>
     </nav>
 </div>
