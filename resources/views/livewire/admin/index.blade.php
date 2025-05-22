<div>
    <header class="flex sm:flex-row flex-col sm:space-y-0 space-y-4  sm:items-center items-start justify-between">
        @include('components.layouts._dashboard_header')
    </header>
    <main class="py-10">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Card Halaman -->
            <a wire:navigate href='/admin/pages'
                class="p-6 transition-transform duration-300 ease-in-out transform bg-white rounded-md border border-gray-100 shadow-sm hover:shadow-xl hover:scale-105">
                <div class="flex items-center justify-between">
                    <span
                        class="text-2xl font-bold text-greenMain font-merriweather">{{ $pages->count() > 0 ? $pages->count() : 0 }}
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-12 h-12 text-amber-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8 7v10m8-10v10m-9 4h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <p class="mt-4 text-lg font-semibold text-gray-800 font-jakarta">Halaman</p>
                <p class="mt-2 text-xs text-gray-500 font-jakarta">Diperbarui:
                    {{ $latestPage ? $latestPage->updated_at->diffForHumans() : 'Belum ada perubahan' }}</p>
            </a>

            <!-- Card Artikel -->
            <a wire:navigate href='/admin/articles'
                class="p-6 transition-transform duration-300 ease-in-out transform bg-white rounded-md border border-gray-100 shadow-sm hover:shadow-xl hover:scale-105">
                <div class="flex items-center justify-between">
                    <span
                        class="text-2xl font-bold text-greenMain font-merriweather">{{ $articles->count() > 0 ? $articles->count() : 0 }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                        class="w-12 h-12 text-greenMain fill-amber-500">
                        <path
                            d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Zm120 480h200q17 0 28.5-11.5T560-320q0-17-11.5-28.5T520-360H320q-17 0-28.5 11.5T280-320q0 17 11.5 28.5T320-280Zm0-160h320q17 0 28.5-11.5T680-480q0-17-11.5-28.5T640-520H320q-17 0-28.5 11.5T280-480q0 17 11.5 28.5T320-440Zm0-160h320q17 0 28.5-11.5T680-640q0-17-11.5-28.5T640-680H320q-17 0-28.5 11.5T280-640q0 17 11.5 28.5T320-600Z" />
                    </svg>
                </div>
                <p class="mt-4 text-lg font-semibold text-gray-800 font-jakarta">Artikel</p>
                <p class="mt-2 text-xs text-gray-500 font-jakarta">Diperbarui:
                    {{ $latestArticle ? $latestArticle->updated_at->diffForHumans() : 'Belum ada perubahan' }}</p>
            </a>

            <!-- Card Pengumuman -->
            <a wire:navigate href='/admin/announcements'
                class="p-6 transition-transform duration-300 ease-in-out transform bg-white rounded-md border border-gray-100 shadow-sm hover:shadow-xl hover:scale-105">
                <div class="flex items-center justify-between">
                    <span
                        class="text-2xl font-bold text-greenMain font-merriweather">{{ $announcements->count() > 0 ? $announcements->count() : 0 }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="w-12 h-12 fill-amber-500">
                        <path
                            d="M840-440h-80q-17 0-28.5-11.5T720-480q0-17 11.5-28.5T760-520h80q17 0 28.5 11.5T880-480q0 17-11.5 28.5T840-440ZM664-288q10-14 26-16t30 8l64 48q14 10 16 26t-8 30q-10 14-26 16t-30-8l-64-48q-14-10-16-26t8-30Zm120-424-64 48q-14 10-30 8t-26-16q-10-14-8-30t16-26l64-48q14-10 30-8t26 16q10 14 8 30t-16 26ZM200-360h-40q-33 0-56.5-23.5T80-440v-80q0-33 23.5-56.5T160-600h160l139-84q20-12 40.5 0t20.5 35v338q0 23-20.5 35t-40.5 0l-139-84h-40v120q0 17-11.5 28.5T240-200q-17 0-28.5-11.5T200-240v-120Zm240-22v-196l-98 58H160v80h182l98 58Zm120 36v-268q27 24 43.5 58.5T620-480q0 41-16.5 75.5T560-346ZM300-480Z" />
                    </svg>
                </div>
                <p class="mt-4 text-lg font-semibold text-gray-800 font-jakarta">Pengumuman</p>
                <p class="mt-2 text-xs text-gray-500 font-jakarta">Diperbarui:
                    {{ $latestAnnouncement ? $latestAnnouncement->updated_at->diffForHumans() : 'Belum ada perubahan' }}
                </p>
            </a>

            <!-- Card Kegiatan -->
            <a wire:navigate href='/admin/events'
                class="p-6 transition-transform duration-300 ease-in-out transform bg-white rounded-md border border-gray-100 shadow-sm hover:shadow-xl hover:scale-105">
                <div class="flex items-center justify-between">
                    <span
                        class="text-2xl font-bold text-greenMain font-merriweather">{{ $events->count() > 0 ? $events->count() : 0 }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                        class="w-12 h-12 text-greenMain fill-amber-500">
                        <path
                            d="M580-240q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-40q0-17 11.5-28.5T280-880q17 0 28.5 11.5T320-840v40h320v-40q0-17 11.5-28.5T680-880q17 0 28.5 11.5T720-840v40h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z" />
                    </svg>
                </div>

                <p class="mt-4 text-lg font-semibold text-gray-800 font-jakarta">Kegiatan</p>
                <p class="mt-2 text-xs text-gray-500 font-jakarta">Diperbarui:
                    {{ $latestEvent ? $latestEvent->updated_at->diffForHumans() : 'Belum ada perubahan' }}</p>
            </a>

            <!-- Card Galeri -->

            <a wire:navigate href='/admin/galleries'
                class="p-6 transition-transform duration-300 ease-in-out transform bg-white rounded-md border border-gray-100 shadow-sm hover:shadow-xl hover:scale-105">
                <div class="flex items-center justify-between">
                    <span
                        class="text-2xl font-bold text-greenMain font-merriweather">{{ $galleries->count() > 0 ? $galleries->count() : 0 }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                        class="w-12 h-12 text-greenMain fill-amber-500">
                        <path
                            d="M580-240q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-40q0-17 11.5-28.5T280-880q17 0 28.5 11.5T320-840v40h320v-40q0-17 11.5-28.5T680-880q17 0 28.5 11.5T720-840v40h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z" />
                    </svg>
                </div>
                <p class="mt-4 text-lg font-semibold text-gray-800 font-jakarta">Galeri</p>
                <p class="mt-2 text-xs text-gray-500 font-jakarta">Diperbarui:
                    {{ $latestGallery ? $latestGallery->updated_at->diffForHumans() : 'Belum ada perubahan' }}</p>
            </a>
        </div>
    </main>
</div>
