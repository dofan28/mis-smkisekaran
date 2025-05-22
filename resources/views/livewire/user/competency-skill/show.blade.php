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
                    {{ $competencySkill->title }}
                </h1>
                <div class="!text-3xl px-8 text-center">
                    <x-breadcrumb :breadcrumbs="[
                        ['name' => 'Beranda', 'url' => '/'],
                        ['name' => $competencySkill->title, 'url' => '/competencyskill' . '/' . $competencySkill->slug],
                    ]"></x-breadcrumb>
                </div>
            </div>
        </div>
        <div class="container px-8 py-12 mx-auto mb-12" x-data="{ zoomed: false, mouseX: 0, mouseY: 0, imageWidth: 0, imageHeight: 0 }"
            x-on:mousemove="mouseX = $event.clientX; mouseY = $event.clientY">
            <div class="flex flex-col gap-8 md:flex-row">
                <!-- Left Column - Pengumuman Detail -->
                <div class="md:w-[72%]">
                    @if ($competencySkill)
                        <div class="font-jakarta">
                            <div class="flex items-center font-jakarta ">
                                <svg class="fill-gray-600" xmlns="#www.w3.org/2000/svg" height="20px"
                                    viewBox="0 -960 960 960" width="20px">
                                    <path
                                        d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z" />
                                </svg>
                                <span
                                    class="ml-2 text-xs text-gray-600">{{ $competencySkill->created_at->format('d F Y') }}
                                    ({{ $competencySkill->created_at->locale('id')->diffForHumans() }})
                                </span>
                            </div>
                            <h2
                                class="my-8 text-3xl font-semibold uppercase break-words text-lime-600 font-merriweather">
                                {{ $competencySkill->title }}</h2>
                            <div class="relative w-full h-auto mt-2 mb-5 mr-5 overflow-hidden lg:mb-0"
                                x-on:mouseleave="zoomed = false" x-ref="imageContainer">
                                <img src="{{ asset('storage/' . $competencySkill->image) }}"
                                    alt="{{ $competencySkill->title }}"
                                    class="transition-transform duration-300 cursor-pointer transform-gpu"
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
                            <span class="prose text-justify break-words indent-8">
                                {!! $competencySkill->content !!}
                            </span>
                        </div>
                    @else
                        <div
                            class="flex items-center justify-center h-64 mt-6 overflow-hidden bg-white border border-gray-300 rounded-md border-opacity-60">
                            <svg class="w-16 h-16 mx-auto mb-4 text-amber-500 fill-amber-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                <path
                                    d="M480-120 200-272v-240L40-600l440-240 440 240v320h-80v-276l-80 44v240L480-120Zm0-332 274-148-274-148-274 148 274 148Zm0 241 200-108v-151L480-360 280-470v151l200 108Zm0-241Zm0 90Zm0 0Z" />
                            </svg>
                            <h3 class="mb-2 text-2xl font-semibold text-black font-merriweather">Tidak Ada Kompetensi
                                Keahlian
                            </h3>
                            <p class="text-gray-600 font-jakarta">Saat ini belum ada kompetensi keahlian
                                yang
                                tersedia.
                                Silakan cek kembali di lain waktu.
                            </p>
                        </div>
                    @endif
                </div>

                <!-- Right Column - Artikel dan Kegiatan -->
                <div class="md:w-[28%] p-5 md:border-l-2 md:border-greenMain md:border-opacity-60">
                    <h2
                        class="px-5 py-1 font-bold text-white uppercase bg-greenMain font-merriweather">
                        KOMPETENSI KEAHLIAN
                    </h2>
                    @if ($competencySkills->count() > 0)
                        <ul class="mt-2 list-decimal font-jakarta pl-7 ">
                            @foreach ($competencySkills as $competencySkill)
                                <li><a wire:navigate.hover href="/competencyskill/{{ $competencySkill->slug }}"
                                        class="hover:text-greenMain active:text-gray-400 visited:text-gray-400 ">{{ $competencySkill->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <div
                            class="py-12 mt-4 overflow-hidden text-center bg-white border border-gray-300 rounded-md border-opacity-60">
                            <svg class="w-16 h-16 mx-auto mb-4 text-amber-500 fill-amber-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                <path
                                    d="M480-120 200-272v-240L40-600l440-240 440 240v320h-80v-276l-80 44v240L480-120Zm0-332 274-148-274-148-274 148 274 148Zm0 241 200-108v-151L480-360 280-470v151l200 108Zm0-241Zm0 90Zm0 0Z" />
                            </svg>
                            <h3 class="mb-2 text-xl font-semibold text-black font-merriweather">Tidak Ada Kompetensi
                                Keahlian
                            </h3>
                            <p class="mt-1 text-sm text-gray-600 font-jakarta">Saat ini belum ada kompetensi keahlian
                                yang
                                tersedia.
                                Silakan cek kembali di lain waktu.
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
