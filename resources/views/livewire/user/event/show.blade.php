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
                    DETAIL KEGIATAN
                </h1>
                <div class="!text-3xl ">
                    <x-breadcrumb :breadcrumbs="[
                        ['name' => 'Beranda', 'url' => '/'],
                        ['name' => 'Detail Kegiatan', 'url' => '/event' . '/' . $event->slug],
                    ]"></x-breadcrumb>
                </div>
            </div>
        </div>
        <div class="container px-8 py-12 mx-auto mb-12" x-data="{ zoomed: false, mouseX: 0, mouseY: 0, imageWidth: 0, imageHeight: 0 }"
            x-on:mousemove="mouseX = $event.clientX; mouseY = $event.clientY">
            <div class="flex flex-col gap-8 md:flex-row">
                <!-- Left Column - Pengumuman Detail -->
                <div class="md:w-[72%]">
                    @if ($event)
                        <div class="font-jakarta">
                            <div class="flex items-center font-jakarta ">
                                <svg class="fill-gray-600" xmlns="#www.w3.org/2000/svg" height="20px"
                                    viewBox="0 -960 960 960" width="20px">
                                    <path
                                        d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z" />
                                </svg>
                                <span class="ml-2 text-xs text-gray-600">{{ $event->created_at->format('d F Y') }}
                                    ({{ $event->created_at->locale('id')->diffForHumans() }})
                                </span>
                            </div>
                            <div class="relative w-full h-auto mt-2 mb-5 mr-5 overflow-hidden lg:mb-0"
                                x-on:mouseleave="zoomed = false" x-ref="imageContainer">
                                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}"
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
                                {{ $event->title }}</h2>
                            <div class="flex mb-4 space-x-3">
                                @switch($event->status)
                                    @case('upcoming')
                                        <span
                                            class="inline-flex items-center px-3 py-1 text-sm font-semibold text-green-600 rounded-full bg-green-50">
                                            <svg class="w-10 h-10 mr-1 fill-green-600" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 -960 960 960">
                                                <path
                                                    d="M600-80v-80h160v-400H200v160h-80v-320q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H600ZM320 0l-56-56 103-104H40v-80h327L264-344l56-56 200 200L320 0ZM200-640h560v-80H200v80Zm0 0v-80 80Z" />
                                            </svg>
                                            Segera
                                        </span>
                                    @break

                                    @case('past')
                                        <span
                                            class="inline-flex items-center px-3 py-1 text-sm font-semibold text-gray-600 rounded-full bg-gray-50">
                                            <svg class="w-10 h-10 mr-1 fill-gray-600" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 -960 960 960">
                                                <path
                                                    d="M160-120q-33 0-56.5-23.5T80-200v-560q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v560q0 33-23.5 56.5T800-120H160Zm0-80h640v-560H160v560Zm40-80h200v-80H200v80Zm382-80 198-198-57-57-141 142-57-57-56 57 113 113Zm-382-80h200v-80H200v80Zm0-160h200v-80H200v80Zm-40 400v-560 560Z" />
                                            </svg>
                                            Berakhir
                                        </span>
                                    @break

                                    @case('cencelled')
                                        <span
                                            class="inline-flex items-center px-3 py-1 text-sm font-semibold text-red-600 rounded-full bg-red-50">
                                            <svg class="w-10 h-10 mr-1 fill-red-600" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 -960 960 960">
                                                <path
                                                    d="m388-212-56-56 92-92-92-92 56-56 92 92 92-92 56 56-92 92 92 92-56 56-92-92-92 92ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z" />
                                            </svg>
                                            Batal
                                        </span>
                                    @break

                                    @default
                                        <span
                                            class="px-2 py-1 text-sm font-semibold text-white bg-green-500 rounded-full">Aktif</span>
                                @endswitch
                                <div class="flex items-center px-3 py-1 space-x-2 text-sm text-gray-600 font-jakarta">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-amber-500"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2">
                                        </rect>
                                        <line x1="16" y1="2" x2="16" y2="6">
                                        </line>
                                        <line x1="8" y1="2" x2="8" y2="6">
                                        </line>
                                        <line x1="3" y1="10" x2="21" y2="10">
                                        </line>
                                    </svg>
                                    <span class="text-sm font-semibold font-jakarta"> Tanggal Acara:
                                        {{ $event->date }}</span>
                                </div>
                            </div>
                            <span class="prose text-justify break-words indent-8">
                                {!! $event->description !!}
                            </span>
                        </div>
                    @else
                        <div
                            class="flex items-center justify-center h-64 overflow-hidden bg-white border border-gray-300 rounded-md border-opacity-60">
                            <div class="flex flex-col items-center justify-center space-y-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-amber-500"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2">
                                    </rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <h2 class="mb-2 text-2xl font-semibold text-black font-merriweather">
                                    Tidak Ada Kegiatan
                                </h2>
                                <p class="text-gray-600 font-jakarta">
                                    Saat ini belum ada kegiatan yang tersedia. Silakan cek kembali di lain waktu.
                                </p>
                            </div>
                        </div>
                </div>
                @endif
            </div>

            <div class="md:w-[28%] p-5 md:border-l-2 md:border-greenMain md:border-opacity-60">
                <h2
                    class="px-5 py-1 font-bold text-white uppercase bg-greenMain font-merriweather">
                    KEGIATAN TERKAIT
                </h2>
                
                    <ul wire:scroll class="mt-4 space-y-4 overflow-y-auto">
                        @forelse ($events as $event)
                            <li wire:key='{{ $event->id }}'>
                                <div
                                    class="relative block p-4 transition-shadow duration-300 bg-white border rounded-md shadow-md hover:shadow-md border-opacity-60 border-greenMain">
                                    <a wire:navigate.hover href="/event/{{ $event->slug }}"
                                        class="text-lg font-semibold uppercase break-words text-lime-600 hover:text-lime-700 font-merriweather line-clamp-2">
                                        {{ $event->title }}
                                    </a>
                                    <div class="mt-2 text-sm leading-5 break-words font-jakarta line-clamp-3">
                                        {!! $event->description !!}
                                    </div>
                                    <div class="flex items-center justify-between mt-4">
                                        <div class="flex items-center">
                                            <svg class="fill-gray-600" xmlns="http://www.w3.org/2000/svg" height="20px"
                                                viewBox="0 -960 960 960" width="20px">
                                                <path
                                                    d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z" />
                                            </svg>
                                            <span
                                                class="ml-2 text-xs text-gray-500 font-jakarta">{{ $event->created_at->format('d F Y') }}</span>
                                        </div>
                                        <a href="/event/{{ $event->slug }}" wire:navigate
                                            class="px-2 rounded-md bg-amber-500 hover:bg-amber-600 active:bg-amber-600 visited:bg-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#ffff">
                                                <path
                                                    d="m298-262-56-56 121-122H80v-80h283L242-642l56-56 218 218-218 218Zm222-18v-80h360v80H520Zm0-320v-80h360v80H520Zm120 160v-80h240v80H640Z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <div
                                class="flex items-center justify-center h-64 overflow-hidden bg-white border border-gray-300 rounded-md border-opacity-60">
                                <div class="flex flex-col items-center justify-center space-y-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-amber-500"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2">
                                        </rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                    <h2 class="mb-2 text-xl font-semibold text-black font-merriweather">
                                        Tidak Ada Kegiatan
                                    </h2>
                                    <p class="mt-1 text-sm text-center text-gray-600 font-jakarta">
                                        Saat ini belum ada kegiatan yang tersedia. Silakan cek kembali di lain waktu.
                                    </p>
                                </div>
                            </div>
                        @endforelse
                    </ul>
                    @if ($all_events->count() > 0)
                        <div class="flex justify-center mt-4 text-sm font-jakarta">
                            <p>Menampilkan <span class="font-semibold">{{ $events->count() }}</span> item
                                dari
                                <span class="font-semibold">{{ $all_events->count() }}</span> hasil
                            </p>
                        </div>
                    @endif
                    @if ($all_events->count() > $loadEvents && $loadEvents < $all_events->count())
                        <div class="flex justify-center w-full mt-4">
                            <button wire:click='loadMoreEvents' wire:loading.attr='disabled'
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
