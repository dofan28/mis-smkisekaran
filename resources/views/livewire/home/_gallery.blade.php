<div>
    <div class="container px-12 mx-auto">
        <div class="flex flex-col items-center w-full mb-20 text-center">
            <h1 class="text-2xl font-bold uppercase lg:text-3xl md:text-2xl font-merriweather sm:text-3xl">ALBUM GALERI</h1>
            <hr class="w-1/3 mt-1 text-center border-2 border-opacity-60 border-greenMain">
            <p class="mx-auto mt-4 leading-relaxed lg:w-2/3 font-jakarta">Jelajahi momen-momen berharga dalam
                perjalanan SMK ISLAM SEKARAN, dari kegiatan sehari-hari hingga acara istimewa. Setiap foto
                menangkap semangat, kreativitas, dan kebersamaan yang menjadikan sekolah ini istimewa.</p>
        </div>
        <div class="flex flex-wrap -m-4">
            @forelse ($galleries as $gallery)
                <a wire:key='{{ $gallery->id }}' wire:navigate href="/gallery/{{ $gallery->slug }}"
                    class="p-4 lg:w-1/3 sm:w-1/2">
                    <div class="relative flex">
                        <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full"
                            src="{{ asset('storage/' . $gallery->image) }}">
                        <div
                            class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                            <h2
                                class="mb-1 text-lg font-semibold uppercase break-all line-clamp-1 text-lime-600 hover:text-lime-700 font-merriweather">
                                {{ $gallery->title }}</h2>
                            <span
                                class="text-sm leading-relaxed break-all font-jakarta line-clamp-3">{!! $gallery->description !!}</span>
                            <div class="flex items-center mt-4">
                                <svg class="fill-gray-600" xmlns="http://www.w3.org/2000/svg" height="20px"
                                    viewBox="0 -960 960 960" width="20px">
                                    <path
                                        d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z" />
                                </svg>
                                <span class="ml-2 text-xs text-gray-500 font-jakarta">{{ $gallery->created_at }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <div
                    class="w-full h-64 p-6 overflow-hidden text-center bg-white border border-gray-300 rounded-md border-opacity-60">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-16 h-16 mx-auto mb-4 text-amber-500 fill-amber-500" viewBox="0 -960 960 960"
                            fill="#5f6368">
                            <path
                                d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm40-80h480L570-480 450-320l-90-120-120 160Zm-40 80v-560 560Z" />
                        </svg>
                        <h2 class="mb-2 text-2xl font-semibold text-black font-merriweather">Tidak Ada Galeri
                        </h2>
                        <p class="text-gray-600 font-jakarta">Saat ini belum ada galeri yang tersedia. Silakan
                            cek kembali di lain waktu.</p>
                    </div>
                </div>
            @endforelse
        </div>
        @if ($all_galleries->count() > 0)
            <div class="flex justify-center mt-4 text-sm font-jakarta">
                <p>Menampilkan <span class="font-semibold">{{ $galleries->count() }}</span> item dari <span
                        class="font-semibold">{{ $all_galleries->count() }}</span> hasil</p>
            </div>
        @endif
        @if ($all_galleries->count() > 6 && $loadGalleries < $all_galleries->count())
            <div class="flex justify-center w-full mt-4">
                <button wire:click='loadMoreGalleries' wire:loading.attr='disabled'
                    class=" relative font-jakarta font-semibold hover:text-black py-2 px-6 after:absolute after:h-1 after:hover:h-[200%] transition-all duration-500 hover:transition-all hover:duration-500 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden z-20 after:z-[-20] after:bg-amber-500 after:rounded-t-full after:w-full after:bottom-0 after:left-0 text-black ">
                    <div wire:loading
                        class="w-3 h-3 border-2 border-black border-solid rounded-full animate-spin border-t-transparent">
                    </div>
                    <span wire:loading.remove>Lihat
                        Lebih Banyak</span>
                    <span wire:loading>Memuat...</span>
                </button>
            </div>
        @endif

    </div>
</div>
