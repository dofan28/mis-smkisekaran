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
                    ARTIKEL
                </h1>
                <div class="!text-3xl ">
                    <x-breadcrumb :breadcrumbs="[
                        [
                            'name' => 'Beranda',
                            'url' => '/',
                        ],
                        [
                            'name' => 'ARTIKEL',
                            'url' => '/articles',
                        ],
                    ]"></x-breadcrumb>
                </div>
            </div>
        </div>
        <div class="container px-8 py-12 mx-auto mb-12">
            <div class="flex flex-col gap-10 md:flex-row">
                <!-- Left Column - Pengumuman Detail -->
                <div class="md:w-[72%]">
                    @if ($all_articles->count() > 0)
                        <div class="flex flex-col gap-3 md:flex-row lg:flex-row font-jakarta">
                            <div class="w-full bg-white border rounded-lg border-greenMain border-opacity-20">
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
                                    <input wire:model.live='search' type="text"
                                        class="w-full pl-2 bg-white focus:border-greenMain font-jakarta focus:outline-none focus:border-y "
                                        placeholder="Cari ..." id="">
                                    <input type="button" value="Cari"
                                        class="p-2 px-4 font-semibold text-white transition-colors rounded-tr-lg rounded-br-lg bg-greenMain hover:bg-stone-900"
                                        disabled>
                                </div>
                            </div>
                            <select wire:model.live="category"
                                class="w-full px-2 py-2 tracking-wider border rounded border-greenMain focus:outline-none focus:border-greenMain text-greenMain md:px-3 md:py-1 lg:w-2/12 md:w-2/12 line-clamp-1">
                                <option value="" selected>Semua</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>

                        </div>
                    @endif
                    <div class="grid gap-8 mt-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 auto-rows-fr">
                        @forelse ($articles as $article)
                            <div
                                class="max-w-sm transition-shadow duration-300 ease-in-out bg-gray-100 border border-gray-300 shadow-lg hover:shadow-xl border-opacity-60 ">
                                <div class="relative">
                                    <img class="object-cover w-full h-56"
                                        src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}">
                                    <div
                                        class="absolute bottom-0 left-0 w-full p-4 break-words font-merriweather bg-gradient-to-t from-black to-transparent line-clamp-1">
                                        <h2 class="mb-2 text-xl font-bold text-white">{{ $article->title }}</h2>
                                    </div>
                                </div>
                                <div class="px-6 py-4 font-jakarta ">
                                    <div class="flex items-center mb-2 text-xs text-gray-600 break-all line-clamp-1">
                                        <span
                                            class="w-20 px-2 py-1 mr-2 text-yellow-800 bg-yellow-200 rounded line-clamp-1">{{ $article->category->name }}</span>
                                        <span class="line-clamp-1"><i
                                                class="mr-1 far fa-clock "></i>{{ $article->created_at->locale('id')->diffForHumans() }}</span>
                                    </div>
                                    <div class="text-sm text-gray-600 break-words line-clamp-3 ">
                                        {!! $article->content !!}
                                    </div>
                                </div>
                                <div class="px-6 pt-2 pb-4">
                                    <a href="/article/{{ $article->slug }}"
                                        class="inline-block font-semibold transition duration-300 hover:font-bold text-greenMain hover:text-green-900">
                                        Lihat Selengkapnya <i class="ml-1 fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full">
                                <div
                                    class="flex items-center justify-center h-64 overflow-hidden bg-white border border-gray-300 rounded-md border-opacity-60">
                                    <div class="flex flex-col items-center justify-center space-y-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-amber-500"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="4" width="18" height="18" rx="2"
                                                ry="2">
                                            </rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                        <h2 class="mb-2 text-2xl font-semibold text-black font-merriweather">
                                            Tidak Ada Artikel
                                        </h2>
                                        <p class="text-gray-600 font-jakarta">
                                            Saat ini belum ada artikel yang tersedia. Silakan cek kembali di lain waktu.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                    @if ($all_articles->count() > 0)
                        <div class="flex justify-center mt-4 text-sm font-jakarta">
                            <p>Menampilkan <span class="font-semibold">{{ $articles->count() }}</span> item dari <span
                                    class="font-semibold">{{ $all_articles->count() }}</span> hasil</p>
                        </div>
                    @endif
                    @if ($all_articles->count() > $loadArticles && $loadArticles < $all_articles->count())
                        <div class="flex justify-center w-full mt-4">
                            <button wire:click='loadMoreArticles' wire:loading.attr='disabled'
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

                <!-- Right Column - Artikel dan Kegiatan -->
                <div class="md:w-[28%] p-5 md:border-l-2 md:border-greenMain md:border-opacity-60">
                    <div>
                        <h2 class="px-5 py-1 font-bold text-white uppercase bg-greenMain font-merriweather">
                            PENGUMUMAN TERKINI
                        </h2>
                        
                            <ul wire:scroll class="mt-4 space-y-4 overflow-y-auto">
                                @forelse ($announcements as $announcement)
                                    <li wire:key='{{ $announcement->id }}'>
                                        <div
                                            class="relative block p-4 transition-shadow duration-300 bg-white border rounded-md shadow-md hover:shadow-md border-opacity-60 border-greenMain">
                                            <a wire:navigate.hover href="/announcement/{{ $announcement->slug }}"
                                                class="text-lg font-semibold uppercase break-words text-lime-600 hover:text-lime-700 font-merriweather line-clamp-2">
                                                {{ $announcement->title }}
                                            </a>
                                            <div class="mt-2 text-sm leading-5 break-words font-jakarta line-clamp-3">
                                                {!! $announcement->content !!}
                                            </div>
                                            <div class="flex items-center justify-between mt-4">
                                                <div class="flex items-center">
                                                    <svg class="fill-gray-600" xmlns="http://www.w3.org/2000/svg"
                                                        height="20px" viewBox="0 -960 960 960" width="20px">
                                                        <path
                                                            d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z" />
                                                    </svg>
                                                    <span
                                                        class="ml-2 text-xs text-gray-500 font-jakarta">{{ $announcement->created_at->format('d F Y') }}</span>
                                                </div>
                                                <a href="/announcement/{{ $announcement->slug }}" wire:navigate.hover
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
                                        <div class="text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-16 h-16 mx-auto mb-4 text-amber-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <h2 class="mb-2 text-xl font-semibold text-black font-merriweather">Tidak Ada
                                                Pengumuman
                                            </h2>
                                            <p class="mt-1 text-sm text-gray-600 font-jakarta">Saat ini belum ada
                                                pengumuman
                                                yang tersedia. Silakan
                                                cek kembali di lain waktu.</p>
                                        </div>
                                    </div>
                                @endforelse
                            </ul>
                            @if ($all_announcements->count() > 0)
                                <div class="flex justify-center mt-4 text-sm font-jakarta">
                                    <p>Menampilkan <span class="font-semibold">{{ $announcements->count() }}</span> item
                                        dari
                                        <span class="font-semibold">{{ $all_announcements->count() }}</span> hasil
                                    </p>
                                </div>
                            @endif
                            @if ($all_announcements->count() > $loadAnnouncements && $loadAnnouncements < $all_announcements->count())
                                <div class="flex justify-center w-full mt-4">
                                    <button wire:click='loadMoreAnnouncements' wire:loading.attr='disabled'
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
                    <div class="mt-8">
                        <h2 class="px-5 py-1 font-bold text-white uppercase bg-greenMain font-merriweather">
                            KEGIATAN TERKINI
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
                                                    <svg class="fill-gray-600" xmlns="http://www.w3.org/2000/svg"
                                                        height="20px" viewBox="0 -960 960 960" width="20px">
                                                        <path
                                                            d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z" />
                                                    </svg>
                                                    <span
                                                        class="ml-2 text-xs text-gray-500 font-jakarta">{{ $event->created_at->format('d F Y') }}</span>
                                                </div>
                                                <a href="/event/{{ $event->slug }}" wire:navigate.hover
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
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="3" y="4" width="18" height="18" rx="2"
                                                    ry="2">
                                                </rect>
                                                <line x1="16" y1="2" x2="16" y2="6">
                                                </line>
                                                <line x1="8" y1="2" x2="8" y2="6">
                                                </line>
                                                <line x1="3" y1="10" x2="21" y2="10">
                                                </line>
                                            </svg>
                                            <h2 class="mb-2 text-xl font-semibold text-black font-merriweather">
                                                Tidak Ada Kegiatan
                                            </h2>
                                            <p class="mt-1 text-sm text-center text-gray-600 font-jakarta">
                                                Saat ini belum ada kegiatan yang tersedia. Silakan cek kembali di lain
                                                waktu.
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
</div>
