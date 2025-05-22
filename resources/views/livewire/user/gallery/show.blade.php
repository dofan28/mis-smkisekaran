@push('styles')
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
                /* Dikurangi agar lebih smooth */
            }
        }

        .float {
            animation: float 8s ease-in-out infinite;
            /* Memperhalus durasi */
        }

        @keyframes sway {

            0%,
            100% {
                transform: rotate(-3deg);
                /* Sedikit mengurangi sudut untuk efek yang lebih lembut */
            }

            50% {
                transform: rotate(3deg);
            }
        }

        .sway {
            animation: sway 6s ease-in-out infinite;
            /* Perpanjang durasi animasi */
        }

        /* Animasi overlay */
        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateY(100%);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animated-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            /* Gelap transparan */
            animation: slideIn 1.5s ease-out;
            /* Animasi muncul overlay */
        }

        .leaf {
            position: absolute;
            width: 40px;
            height: 40px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23f59e0b'%3E%3Ccircle cx='12' cy='12' r='1.5' fill='%23f59e0b'/%3E%3Ccircle cx='7' cy='8' r='1.5' fill='%23f59e0b'/%3E%3Ccircle cx='17' cy='16' r='1.5' fill='%23f59e0b'/%3E%3Ccircle cx='5' cy='17' r='1.5' fill='%23f59e0b'/%3E%3Ccircle cx='19' cy='7' r='1.5' fill='%23f59e0b'/%3E%3CanimateTransform attributeName='transform' type='translate' values='0,0; 0,10' keyTimes='0; 1' dur='10s' repeatCount='indefinite'/%3E%3C/svg%3E");
            background-size: contain;
            background-repeat: no-repeat;
            pointer-events: none;
        }
    </style>
@endpush
<div>
    <div x-data="{
        leaves: Array(20).fill().map(() => ({
            x: Math.random() * 100,
            y: Math.random() * 100,
            rotation: Math.random() * 360,
            scale: Math.random() * 0.5 + 0.5
        })),
        moveLeaf(index) {
            this.leaves[index].x = Math.random() * 100;
            this.leaves[index].y = -10;
            this.leaves[index].rotation = Math.random() * 360;
        }
    }">
        <div class="relative mb-8 overflow-hidden h-96 bg-gradient-to-b from-stone-900 to-greenMain">
            <!-- Animated Overlay -->
            <div class="animated-overlay"></div>

            <template x-for="(leaf, index) in leaves" :key="index">
                <div class="leaf sway"
                    :style="`left: ${leaf.x}%; top: ${leaf.y}%; transform: rotate(${leaf.rotation}deg) scale(${leaf.scale}); transition: all 20s linear;`"
                    x-init="$nextTick(() => {
                        setInterval(() => moveLeaf(index), Math.random() * 5000 + 5000);
                    })"></div>
            </template>

            <div class="absolute inset-0 flex flex-col items-center justify-center text-white uppercase">
                <h1 x-data="{ wobble: false }" @click="wobble = true; setTimeout(() => wobble = false, 1000)"
                    :class="{ 'animate-wiggle': wobble }"
                    class="px-10 mb-4 text-lg font-bold text-center transition-transform duration-300 transform cursor-pointer md:text-5xl sm:text-3xl font-merriweather hover:scale-110">
                    DETAIL GALERI
                </h1>
                <div class="!text-3xl ">
                    <x-breadcrumb :breadcrumbs="[
                        [
                            'name' => 'Beranda',
                            'url' => '/',
                        ],
                        [
                            'name' => 'Detail Galeri',
                            'url' => '/gallery' . '/' . $gallery->slug,
                        ],
                    ]"></x-breadcrumb>
                </div>
            </div>
        </div>
        <div class="container px-8 py-12 mx-auto mb-12" x-data="{ zoomed: false, mouseX: 0, mouseY: 0, imageWidth: 0, imageHeight: 0 }"
            x-on:mousemove="mouseX = $event.clientX; mouseY = $event.clientY">
            <div class="flex flex-col gap-8 md:flex-row">
                <!-- Left Column - Pengumuman Detail -->
                <div class="md:w-[72%]">
                    @if ($gallery)
                        <div class="font-jakarta">
                            <div class="flex items-center font-jakarta ">
                                <svg class="fill-gray-600" xmlns="#www.w3.org/2000/svg" height="20px"
                                    viewBox="0 -960 960 960" width="20px">
                                    <path
                                        d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z" />
                                </svg>
                                <span class="ml-2 text-xs text-gray-600">{{ $gallery->created_at->format('d F Y') }}
                                    ({{ $gallery->created_at->locale('id')->diffForHumans() }})
                                </span>
                            </div>
                            <div class="relative w-full h-auto mt-2 mb-5 mr-5 overflow-hidden lg:mb-0"
                                x-on:mouseleave="zoomed = false" x-ref="imageContainer">
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}"
                                    class="object-cover w-full transition-transform duration-300 cursor-pointer transform-gpu"
                                    :class="{ 'scale-150 cursor-pointer': zoomed }"
                                    x-on:mouseover="zoomed = true; imageWidth = $refs.imageContainer.clientWidth; imageHeight = $refs.imageContainer.clientHeight;"
                                    x-bind:style="'transform-origin: ' + ((mouseX - $refs.imageContainer.getBoundingClientRect()
                                            .left) /
                                        imageWidth) *
                                    100
                                        +
                                        '% ' + ((mouseY - $refs.imageContainer.getBoundingClientRect().top) /
                                            imageHeight) *
                                        100 +
                                        '%;'">

                            </div>
                            <h2
                                class="my-8 text-2xl font-semibold uppercase break-words text-lime-600 font-merriweather">
                                {{ $gallery->title }}</h2>
                            <span class="prose text-justify break-words indent-8">
                                {!! $gallery->description !!}
                            </span>
                        </div>
                    @else
                        <div
                            class="w-full h-64 p-6 overflow-hidden text-center bg-white border border-gray-300 rounded-md border-opacity-60">
                            <div class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-16 h-16 mx-auto mb-4 text-amber-500 fill-amber-500"
                                    viewBox="0 -960 960 960" fill="#5f6368">
                                    <path
                                        d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm40-80h480L570-480 450-320l-90-120-120 160Zm-40 80v-560 560Z" />
                                </svg>
                                <h2 class="mb-2 text-2xl font-semibold text-black font-merriweather">Tidak Ada Galeri
                                </h2>
                                <p class="text-gray-600 font-jakarta">Saat ini belum ada galeri yang tersedia. Silakan
                                    cek kembali di lain waktu.</p>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Right Column - Artikel dan Kegiatan -->
                <div class="md:w-[28%] p-5 md:border-l-2 md:border-greenMain md:border-opacity-60">
                    <h2
                        class="px-5 py-1 font-bold text-white uppercase bg-greenMain font-merriweather">
                        GALERI TERKAIT
                    </h2>
                    
                        <ul wire:scroll class="mt-4 space-y-4">
                            @forelse ($galleries as $gallery)
                                <li wire:key='{{ $gallery->id }}'>
                                    <a wire:navigate.hover href="/gallery/{{ $gallery->slug }}" class="lg:w-1/3 sm:w-1/2">
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
                    
                                </li>
                            @empty
                                <div
                                    class="w-full h-64 p-6 overflow-hidden text-center bg-white border border-gray-300 rounded-md border-opacity-60">
                                    <div class="text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-16 h-16 mx-auto mb-4 text-amber-500 fill-amber-500"
                                            viewBox="0 -960 960 960" fill="#5f6368">
                                            <path
                                                d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm40-80h480L570-480 450-320l-90-120-120 160Zm-40 80v-560 560Z" />
                                        </svg>
                                        <h2 class="mb-2 text-xl font-semibold text-black font-merriweather">Tidak Ada
                                            Galeri
                                        </h2>
                                        <p class="mt-1 text-sm text-center text-gray-600 font-jakarta">Saat ini belum ada galeri yang
                                            tersedia. Silakan
                                            cek kembali di lain waktu.</p>
                                    </div>
                                </div>
                            @endforelse
                        </ul>
                        @if ($all_galleries->count() > 0)
                            <div class="flex justify-center mt-4 text-sm font-jakarta">
                                <p>Menampilkan <span class="font-semibold">{{ $galleries->count() }}</span> item
                                    dari
                                    <span class="font-semibold">{{ $all_galleries->count() }}</span> hasil
                                </p>
                            </div>
                        @endif
                        @if ($all_galleries->count() > $loadGalleries && $loadGalleries < $all_galleries->count())
                            <div class="flex justify-center w-full mt-4">
                                <button wire:click='loadMoreGalleries' wire:loading.attr='disabled'
                                    class=" relative font-jakarta text-sm font-semibold hover:text-black py-2 px-6 after:absolute after:h-1 after:hover:h-[200%] transition-all duration-500 hover:transition-all hover:duration-500 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden z-20 after:z-[-20] after:bg-amber-500 after:rounded-t-full after:w-full after:bottom-0 after:left-0 text-black ">
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
        </div>
    </div>
</div>
