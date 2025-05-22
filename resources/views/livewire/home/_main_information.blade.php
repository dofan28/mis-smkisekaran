<div>
    <div
        class="container flex flex-col items-center px-12 mx-auto lg:flex-row md:flex-col lg:justify-between lg:items-start md:items-center">
        <div class="flex flex-col w-full lg:w-4/6">
            <div id="paginatedAnnouncements">
                <h2 class="text-2xl font-bold uppercase lg:text-3xl md:text-2xl font-merriweather">PENGUMUMAN</h2>
                <hr class="w-1/2 mt-1 border-2 border-opacity-60 border-greenMain">
                @if ($all_announcements->count() > 0)
                    <div class="mt-4 bg-white border rounded-lg border-greenMain border-opacity-20">
                        <div class="flex">
                            <div
                                class="flex items-center justify-center px-6 border-r rounded-tl-lg rounded-bl-lg border-amber-500 bg-amber-100">
                                <svg viewBox="0 0 20 20" aria-hidden="true"
                                    class="absolute w-5 transition pointer-events-none fill-amber-500">
                                    <path
                                        d="M16.72 17.78a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM9 14.5A5.5 5.5 0 0 1 3.5 9H2a7 7 0 0 0 7 7v-1.5ZM3.5 9A5.5 5.5 0 0 1 9 3.5V2a7 7 0 0 0-7 7h1.5ZM9 3.5A5.5 5.5 0 0 1 14.5 9H16a7 7 0 0 0-7-7v1.5Zm3.89 10.45 3.83 3.83 1.06-1.06-3.83-3.83-1.06 1.06ZM14.5 9a5.48 5.48 0 0 1-1.61 3.89l1.06 1.06A6.98 6.98 0 0 0 16 9h-1.5Zm-1.61 3.89A5.48 5.48 0 0 1 9 14.5V16a6.98 6.98 0 0 0 4.95-2.05l-1.06-1.06Z">
                                    </path>
                                </svg>
                            </div>
                            <input wire:model.live='searchAnnouncements' type="text"
                                class="w-full pl-2 bg-white focus:border-greenMain font-jakarta focus:outline-none focus:border-y "
                                placeholder="Cari ..." id="">
                            <input type="button" value="Cari"
                                class="p-2 px-4 font-semibold text-white transition-colors rounded-tr-lg rounded-br-lg bg-greenMain hover:bg-stone-900"
                                disabled>
                        </div>
                    </div>
                @endif
                @forelse ($announcements as $announcement)
                    <div wire:key='{{ $announcement->id }}' class="mt-6">
                        <div
                            class="flex overflow-hidden transition-all duration-300 bg-white border shadow-md border-opacity-60 border-greenMain hover:shadow-lg hover:-translate-y-1">
                            <img src="{{ asset('storage/' . $announcement->image) }}"
                                class="object-cover w-1/3 transition-transform duration-300 aspect-square hover:scale-105">
                            <div class="flex flex-col justify-between w-full p-6 space-y-11">
                                <div class="flex flex-wrap w-full h-full ">
                                    <a wire:navigate.hover href="/announcement/{{ $announcement->slug }}"
                                        class="text-sm font-semibold uppercase transition-colors duration-300 lg:text-lg md:text-lg text-lime-600 font-merriweather line-clamp-2 group-hover:text-lime-700">
                                        {{ $announcement->title }}</a>
                                    <div
                                        class="mt-2 text-sm leading-relaxed transition-all duration-300 font-jakarta line-clamp-4 group-hover:line-clamp-none">
                                        {!! $announcement->content !!}</div>
                                </div>
                                <div
                                    class="flex flex-col items-center justify-between space-y-2 lg:flex-row md:flex-row sm:flex-row lg:space-y-0">
                                    <div class="flex items-center font-jakarta group">
                                        <svg class="transition-transform duration-300 fill-gray-600 group-hover:rotate-12"
                                            xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                            width="20px">
                                            <path
                                                d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z" />
                                        </svg>
                                        <span
                                            class="ml-2 text-xs text-gray-600 transition-all duration-300 group-hover:text-gray-800">{{ $announcement->created_at->format('d F Y') }}
                                            <span
                                                class="hidden text-gray-400 transition-all duration-300 group-hover:text-gray-600 lg:inline md:hidden">({{ $announcement->created_at->locale('id')->diffForHumans() }})</span>
                                        </span>
                                    </div>
                                    <a wire:navigate.hover href="/announcement/{{ $announcement->slug }}"
                                        class="relative inline-flex items-center px-4 py-1 overflow-hidden text-sm transition-all duration-300 rounded-md bg-amber-500 group text-gray-50 focus:outline-none hover:bg-amber-600 active:bg-amber-700">
                                        <span
                                            class="absolute transition-all duration-300 -start-full group-hover:start-4">
                                            <svg class="w-4 h-4 text-white rtl:rotate-180" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" fill='#ffff' stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M15 1H1V3H15V1Z" fill="#ffff"></path>
                                                    <path d="M11 5H1V7H6.52779C7.62643 5.7725 9.223 5 11 5Z"
                                                        fill="#ffff">
                                                    </path>
                                                    <path
                                                        d="M5.34141 13C5.60482 13.7452 6.01127 14.4229 6.52779 15H1V13H5.34141Z"
                                                        fill="#ffff"></path>
                                                    <path d="M5.34141 9C5.12031 9.62556 5 10.2987 5 11H1V9H5.34141Z"
                                                        fill="#ffff"></path>
                                                    <path
                                                        d="M15 11C15 11.7418 14.7981 12.4365 14.4462 13.032L15.9571 14.5429L14.5429 15.9571L13.032 14.4462C12.4365 14.7981 11.7418 15 11 15C8.79086 15 7 13.2091 7 11C7 8.79086 8.79086 7 11 7C13.2091 7 15 8.79086 15 11Z"
                                                        fill="#ffff"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="font-semibold transition-all duration-300 group-hover:ms-7"><span
                                                class="hidden lg:inline md:hidden">Baca</span>
                                            Selengkapnya</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div
                        class="flex items-center justify-center h-64 mt-6 overflow-hidden bg-white border border-gray-300 rounded-md border-opacity-60">
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mx-auto mb-4 text-amber-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h2 class="mb-2 text-2xl font-semibold text-black font-merriweather">Tidak Ada Pengumuman
                            </h2>
                            <p class="text-gray-600 font-jakarta">Saat ini belum ada pengumuman yang tersedia. Silakan
                                cek kembali di lain waktu.</p>
                        </div>
                    </div>
                @endforelse
                <x-pagination :items="$announcements" :scrollTo="'#paginatedAnnouncements'" />
            </div>
            <div class="mt-10" id="paginatedEvents">
                <h2 class="text-2xl font-bold uppercase lg:text-3xl md:text-2xl font-merriweather">ACARA</h2>
                <hr class="w-1/2 mt-1 border-2 border-opacity-60 border-greenMain">
                @if ($all_events->count() > 0)
                    <div class="mt-4 bg-white border rounded-lg border-greenMain border-opacity-20">
                        <div class="flex">
                            <div
                                class="flex items-center justify-center px-6 border-r rounded-tl-lg rounded-bl-lg border-amber-500 bg-amber-100">
                                <svg viewBox="0 0 20 20" aria-hidden="true"
                                    class="absolute w-5 transition pointer-events-none fill-amber-500">
                                    <path
                                        d="M16.72 17.78a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM9 14.5A5.5 5.5 0 0 1 3.5 9H2a7 7 0 0 0 7 7v-1.5ZM3.5 9A5.5 5.5 0 0 1 9 3.5V2a7 7 0 0 0-7 7h1.5ZM9 3.5A5.5 5.5 0 0 1 14.5 9H16a7 7 0 0 0-7-7v1.5Zm3.89 10.45 3.83 3.83 1.06-1.06-3.83-3.83-1.06 1.06ZM14.5 9a5.48 5.48 0 0 1-1.61 3.89l1.06 1.06A6.98 6.98 0 0 0 16 9h-1.5Zm-1.61 3.89A5.48 5.48 0 0 1 9 14.5V16a6.98 6.98 0 0 0 4.95-2.05l-1.06-1.06Z">
                                    </path>
                                </svg>
                            </div>
                            <input type="text" wire:model.live='searchEvents'
                                class="w-full pl-2 bg-white focus:border-greenMain font-jakarta focus:outline-none focus:border-y "
                                placeholder="Cari ..." id="">
                            <input type="button" value="Cari"
                                class="p-2 px-4 font-semibold text-white transition-colors rounded-tr-lg rounded-br-lg bg-greenMain hover:bg-stone-900"
                                disabled>
                        </div>
                    </div>
                @endif
                <div class="flex flex-wrap mt-8 -mx-2">
                    @forelse ($events as $event)
                        <div wire:key="{{ $event->id }}" class="flex-none w-full px-2 mb-4 sm:w-1/2 md:w-1/3">
                            <div
                                class="flex flex-col h-full overflow-hidden transition-all duration-300 bg-white border rounded-lg shadow-lg border-opacity-60 border-greenMain hover:shadow-xl hover:-translate-y-1">
                                <div class="relative">
                                    <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}"
                                        class="object-cover w-full h-48 transition-transform duration-300 hover:scale-105">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                    <div class="absolute z-10 top-3 left-3">
                                        @switch($event->status)
                                            @case('upcoming')
                                                <span
                                                    class="inline-flex items-center px-3 py-1 text-xs font-semibold text-green-600 rounded-full bg-green-50">
                                                    <svg class="w-4 h-4 mr-1 fill-green-600" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 -960 960 960">
                                                        <path
                                                            d="M600-80v-80h160v-400H200v160h-80v-320q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H600ZM320 0l-56-56 103-104H40v-80h327L264-344l56-56 200 200L320 0ZM200-640h560v-80H200v80Zm0 0v-80 80Z" />
                                                    </svg>
                                                    Segera
                                                </span>
                                            @break

                                            @case('past')
                                                <span
                                                    class="inline-flex items-center px-3 py-1 text-xs font-semibold text-gray-600 rounded-full bg-gray-50">
                                                    <svg class="w-4 h-4 mr-1 fill-gray-600" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 -960 960 960">
                                                        <path
                                                            d="M160-120q-33 0-56.5-23.5T80-200v-560q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v560q0 33-23.5 56.5T800-120H160Zm0-80h640v-560H160v560Zm40-80h200v-80H200v80Zm382-80 198-198-57-57-141 142-57-57-56 57 113 113Zm-382-80h200v-80H200v80Zm0-160h200v-80H200v80Zm-40 400v-560 560Z" />
                                                    </svg>
                                                    Berakhir
                                                </span>
                                            @break

                                            @case('cancelled')
                                                <span
                                                    class="inline-flex items-center px-3 py-1 text-xs font-semibold text-red-600 rounded-full bg-red-50">
                                                    <svg class="w-4 h-4 mr-1 fill-red-600" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 -960 960 960">
                                                        <path
                                                            d="m388-212-56-56 92-92-92-92 56-56 92 92 92-92 56 56-92 92 92 92-56 56-92-92-92 92ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z" />
                                                    </svg>
                                                    Batal
                                                </span>
                                            @break

                                            @default
                                                <span
                                                    class="px-2 py-1 text-xs font-semibold text-white bg-green-500 rounded-full">Aktif</span>
                                        @endswitch
                                    </div>
                                    <div class="absolute text-white bottom-3 left-3 right-3">
                                        <h3
                                            class="text-lg font-semibold leading-tight text-white uppercase line-clamp-2 font-merriweather">
                                            {{ $event->title }}</h3>
                                    </div>
                                </div>
                                <div class="flex flex-col flex-grow p-4">
                                    <div
                                        class="flex-grow text-sm leading-relaxed text-gray-600 break-words font-jakarta line-clamp-3">
                                        {!! $event->description !!}</div>
                                    <div class="flex items-center justify-between mt-4">
                                        <div class="flex items-center space-x-2 text-sm text-gray-600 font-jakarta">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-amber-500"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="3" y="4" width="18" height="18" rx="2"
                                                    ry="2"></rect>
                                                <line x1="16" y1="2" x2="16" y2="6">
                                                </line>
                                                <line x1="8" y1="2" x2="8" y2="6">
                                                </line>
                                                <line x1="3" y1="10" x2="21" y2="10">
                                                </line>
                                            </svg>
                                            <span class="text-xs font-jakarta">{{ $event->date }}</span>
                                        </div>
                                        <a wire:navigate href="/event/{{ $event->slug }}"
                                            class="px-2 rounded-md bg-amber-500 hover:bg-amber-600 active:bg-amber-600 visited:bg-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#ffff">
                                                <path
                                                    d="m298-262-56-56 121-122H80v-80h283L242-642l56-56 218 218-218 218Zm222-18v-80h360v80H520Zm0-320v-80h360v80H520Zm120 160v-80h240v80H640Z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <div
                                class="flex flex-col items-center justify-center w-full h-64 bg-white border border-gray-300 rounded-md">
                                <div class="flex flex-col items-center justify-center space-y-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-amber-500"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="18" rx="2"
                                        ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6">
                                    </line>
                                    <line x1="8" y1="2" x2="8" y2="6">
                                    </line>
                                    <line x1="3" y1="10" x2="21" y2="10">
                                    </line>
                                </svg>
                                    <h2 class="mb-2 text-2xl font-semibold text-black font-merriweather">Tidak Ada Kegiatan
                                    </h2>
                                    <p class="text-gray-600 font-jakarta text-center">Saat ini belum ada kegiatan yang tersedia.
                                        Silakan cek kembali di lain waktu.</p>
                                </div>
                            </div>
                        @endforelse
                    </div>
                    <x-pagination :items="$events" :scrollTo="'#paginatedEvents'" />
                </div>

            </div>
            <div class="w-full p-5 lg:w-1/4 lg:border-l-2 lg:border-greenMain lg:border-opacity-60" id="articles">
                <h2 class="px-5 py-1 font-bold text-white uppercase bg-greenMain font-merriweather">
                    ARTIKEL TERKINI
                </h2>
                <ul wire:scroll class="mt-4 space-y-4 overflow-y-auto" style="max-height: 1500px">
                    @forelse ($articles as $article)
                        <li wire:key='{{ $article->id }}'>
                            <div
                                class="relative block p-4 transition-shadow duration-300 bg-white border rounded-md shadow-md hover:shadow-md border-opacity-60 border-greenMain">
                                <!-- Badge Kategori -->
                                <div
                                    class="absolute top-2 left-2 bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full break-words line-clamp-1">
                                    {{ $article->category->name }}
                                </div>
                                <a wire:navigate href="/article/{{ $article->slug }}"
                                    class="mt-6 text-lg font-semibold uppercase break-words text-lime-600 hover:text-lime-700 font-merriweather line-clamp-2">
                                    {{ $article->title }}
                                </a>
                                <div class="mt-2 text-sm leading-5 break-words font-jakarta line-clamp-3">
                                    {!! $article->content !!}
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <div class="flex items-center">
                                        <svg class="fill-gray-600" xmlns="http://www.w3.org/2000/svg" height="20px"
                                            viewBox="0 -960 960 960" width="20px">
                                            <path
                                                d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z" />
                                        </svg>
                                        <span
                                            class="ml-2 text-xs text-gray-500 font-jakarta">{{ $article->created_at->format('d F Y') }}</span>
                                    </div>
                                    <a href="/article/{{ $article->slug }}" wire:navigate
                                        class="px-2 rounded-md bg-amber-500 hover:bg-amber-600 active:bg-amber-600 visited:bg-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                            width="24px" fill="#ffff">
                                            <path
                                                d="m298-262-56-56 121-122H80v-80h283L242-642l56-56 218 218-218 218Zm222-18v-80h360v80H520Zm0-320v-80h360v80H520Zm120 160v-80h240v80H640Z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </li>
                    @empty
                        <div
                            class="py-12 overflow-hidden text-center bg-white border border-gray-300 rounded-md border-opacity-60">
                            <svg class="w-16 h-16 mx-auto mb-4 text-amber-500 fill-amber-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                <path
                                    d="M280-280h280v-80H280v80Zm0-160h400v-80H280v80Zm0-160h400v-80H280v80Zm-80 480q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z" />
                            </svg>
                            <h3 class="mb-2 text-xl font-semibold text-black font-merriweather">Tidak Ada Artikel</h3>
                            <p class="mt-1 text-sm text-gray-600 font-jakarta">Saat ini belum ada artikel yang tersedia.
                                Silakan cek kembali di lain waktu.
                            </p>
                        </div>
                    @endforelse
                </ul>
                @if ($articles->count() > 0)
                    <a wire:navigate href="/articles"
                        class="flex items-center justify-center px-4 py-2 text-sm font-semibold transition duration-300 ease-in-out transform border border-transparent text-amber-500 hover:text-amber-700 hover:scale-105 hover:underline">
                        <span class="mr-1">Artikel Lainnya</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                        <div
                            class="box-content absolute top-0 left-0 w-full h-full transition duration-300 ease-in-out opacity-0 pointer-events-none">
                        </div>
                    </a>
                @endif
            </div>
        </div>
    </div>
