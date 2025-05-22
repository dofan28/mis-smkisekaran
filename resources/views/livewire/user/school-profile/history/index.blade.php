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
                    SEJARAH SEKOLAH
                </h1>
                <div class="!text-3xl ">
                    <x-breadcrumb :breadcrumbs="[
                        ['name' => 'Beranda', 'url' => '/'],
                        ['name' => 'Sejarah Sekolah', 'url' => '/history'],
                    ]"></x-breadcrumb>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div class="container px-8 py-12 mx-auto mb-12" x-data="{ zoomed: false, mouseX: 0, mouseY: 0, imageWidth: 0, imageHeight: 0 }"
            x-on:mousemove="mouseX = $event.clientX; mouseY = $event.clientY">
            <div class="flex flex-col gap-8 md:flex-row">
                <!-- Left Column - Pengumuman Detail -->
                <div class="md:w-[72%]">
                    @if ($history)
                        <div class="font-jakarta">
                            <div class="flex items-center font-jakarta ">
                                <svg class="fill-gray-600" xmlns="#www.w3.org/2000/svg" height="20px"
                                    viewBox="0 -960 960 960" width="20px">
                                    <path
                                        d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z" />
                                </svg>
                                <span class="ml-2 text-xs text-gray-600">{{ $history->created_at->format('d F Y') }}
                                    ({{ $history->created_at->locale('id')->diffForHumans() }})
                                </span>
                            </div>
                            <div class="relative w-1/3 h-auto mt-2 mb-5 mr-5 overflow-hidden lg:mb-0 float-start"
                                x-on:mouseleave="zoomed = false" x-ref="imageContainer">
                                <img src="{{ asset('storage/' . $history->image) }}" alt="{{ $history->title }}"
                                    class="transition-transform duration-300 cursor-pointer  transform-gpu"
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
                                {!! $history->content !!}
                            </span>
                        </div>
                    @else
                        <div
                            class="flex items-center justify-center h-64 mt-6 overflow-hidden bg-white border border-gray-300 rounded-md border-opacity-60">
                            <div class="text-center">
                                <svg class="w-16 h-16 mx-auto mb-4 text-amber-500 fill-amber-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                    <path
                                        d="M320-160q-33 0-56.5-23.5T240-240v-120h120v-90q-35-2-66.5-15.5T236-506v-44h-46L60-680q36-46 89-65t107-19q27 0 52.5 4t51.5 15v-55h480v520q0 50-35 85t-85 35H320Zm120-200h240v80q0 17 11.5 28.5T720-240q17 0 28.5-11.5T760-280v-440H440v24l240 240v56h-56L510-514l-8 8q-14 14-29.5 25T440-464v104ZM224-630h92v86q12 8 25 11t27 3q23 0 41.5-7t36.5-25l8-8-56-56q-29-29-65-43.5T256-684q-20 0-38 3t-36 9l42 42Zm376 350H320v40h286q-3-9-4.5-19t-1.5-21Zm-280 40v-40 40Z" />
                                </svg>
                                <h2 class="mb-2 text-2xl font-semibold text-black font-merriweather">Tidak Ada Sejarah
                                    Sekolah</h2>
                                <p class="text-gray-600 font-jakarta">Saat ini belum ada sejarah sekolah yang
                                    tersedia.
                                    Silakan cek kembali di lain waktu.</p>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Right Column - Artikel dan Kegiatan -->
                <div class="md:w-[28%] p-5 md:border-l-2 md:border-greenMain md:border-opacity-60">
                    <h2 class="px-5 py-1 font-bold text-white uppercase bg-greenMain font-merriweather">
                        PROFIL SEKOLAH
                    </h2>
                    <ul class="mt-2 list-decimal font-jakarta pl-7">
                        <li><a wire:navigate href="/intro"
                                class="hover:text-greenMain active:text-gray-400 visited:text-gray-400 ">Sambutan
                                Kepala
                                Sekolah</a></li>
                        <li><a wire:navigate href="/history"
                                class="hover:text-greenMain active:text-gray-400 visited:text-gray-400 ">Sejarah</a>
                        </li>
                        <li><a wire:navigate href="/visionmission"
                                class="hover:text-greenMain active:text-gray-400 visited:text-gray-400 ">Visi
                                dan
                                Misi</a></li>
                        <li><a wire:navigate href="/organizationalstructure"
                                class="hover:text-greenMain active:text-gray-400 visited:text-gray-400 ">Struktur
                                Organisasi</a></li>
                        <li><a wire:navigate href="/documents"
                                class="hover:text-greenMain active:text-gray-400 visited:text-gray-400 ">Dokumen</a>
                        </li>
                        <li><a wire:navigate href="/lecture"
                                class="hover:text-greenMain active:text-gray-400 visited:text-gray-400 ">Guru
                                dan
                                Karyawan</a></li>
                        <li><a wire:navigate href="/schoolprogram"
                                class="hover:text-greenMain active:text-gray-400 visited:text-gray-400 ">Program
                                Sekolah</a></li>
                        <li><a wire:navigate href="/schoolachievement"
                                class="hover:text-greenMain active:text-gray-400 visited:text-gray-400 ">Prestasi
                                Sekolah</a></li>
                    </ul>
                    <h2 class="px-5 py-1 mt-10 font-bold text-white uppercase bg-greenMain font-merriweather">
                        KOMPETENSI KEAHLIAN
                    </h2>
                    @if ($competencySkills->count() > 0)
                        <ul class="mt-2 list-decimal font-jakarta pl-7 ">
                            @foreach ($competencySkills as $competencySkill)
                                <li><a wire:navigate href="/competencyskill/{{ $competencySkill->slug }}"
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
                    <h2 class="px-5 py-1 mt-10 font-bold text-white uppercase bg-greenMain font-merriweather">
                        PROFIL GURU
                    </h2>

                    <div x-data="{
                        teachers: [
                            @if ($teachers->count() > 0) @foreach ($teachers as $teacher)
                        {
                        name: '{{ $teacher->title }}',
                        slug: '{{ $teacher->slug }}',
                        image: '{{ asset('storage/' . $teacher->image) }}',
                        }, 
                        @endforeach
                    @else
                    {
                        name: '',
                        image: '/img/img_not_found.png'
                    }, @endif
                    
                        ],
                        currentIndex: 0,
                        timer: null,
                        interval: 9000, // Waktu dalam milidetik antara perpindahan slide (5 detik)
                        next() {
                            this.currentIndex = (this.currentIndex + 1) % this.teachers.length;
                        },
                        prev() {
                            this.currentIndex = (this.currentIndex - 1 + this.teachers.length) % this.teachers.length;
                        },
                        startAutoSlide() {
                            this.timer = setInterval(() => this.next(), this.interval);
                        },
                        stopAutoSlide() {
                            clearInterval(this.timer);
                        },
                        resetAutoSlide() {
                            this.stopAutoSlide();
                            this.startAutoSlide();
                        }
                    }" x-init="startAutoSlide" @mouseenter="stopAutoSlide"
                        @mouseleave="startAutoSlide"
                        class="mt-4 overflow-hidden bg-white border-2 border-gray-100 rounded-sm">
                        <div class="relative aspect-[4/3]">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <template x-for="(teacher, index) in teachers" :key="index">
                                    <img :src="teacher.image" :alt="teacher.name"
                                        class="absolute inset-0 object-cover w-full h-full transition-opacity duration-500 ease-in-out"
                                        :class="{ 'opacity-100': currentIndex === index, 'opacity-0': currentIndex !== index }" />
                                </template>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                <a wire:navigate :href="'/teacher/' + teachers[currentIndex].slug"
                                    x-text="teachers[currentIndex].name"
                                    class="mb-1 text-sm font-semibold transition-opacity duration-300 font-jakarta hover:text-amber-500 focus:text-amber-500 hover:underline"></a>
                            </div>
                            <button @click="prev(); resetAutoSlide()"
                                class="absolute left-0 w-1/4 top-20 bottom-20 group focus:outline-none">
                                <span
                                    class="absolute p-2 text-white transition-opacity duration-300 transform -translate-y-1/2 rounded-full opacity-0 left-4 top-1/2 bg-black/10 group-hover:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7" />
                                    </svg>
                                </span>
                            </button>
                            <button @click="next(); resetAutoSlide()"
                                class="absolute right-0 w-1/4 top-20 bottom-20 group focus:outline-none">
                                <span
                                    class="absolute p-2 text-white transition-opacity duration-300 transform -translate-y-1/2 rounded-full opacity-0 right-4 top-1/2 bg-black/10 group-hover:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="flex justify-center p-4 bg-white">
                            <template x-for="(teacher, index) in teachers" :key="index">
                                <button @click="currentIndex = index; resetAutoSlide()"
                                    class="w-2 h-2 mx-1 transition-all duration-300 rounded-full focus:outline-none"
                                    :class="currentIndex === index ? 'bg-greenMain w-4' : 'bg-gray-300'">
                                </button>
                            </template>
                        </div>
                    </div>
                    <h2 class="px-5 py-1 mt-10 font-bold text-white uppercase bg-greenMain font-merriweather">
                        SARANA & PRASARANA
                    </h2>
                    @if ($facilitiess->count() > 0)
                        <ul class="mt-2 list-decimal font-jakarta pl-7 ">
                            @foreach ($facilitiess as $facilities)
                                <li><a wire:navigate href="/facilities/{{ $facilities->slug }}"
                                        class="hover:text-greenMain active:text-gray-400 visited:text-gray-400 ">{{ $facilities->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <div
                            class="px-2 py-8 mt-4 overflow-hidden text-center bg-white border border-gray-300 rounded-md border-opacity-60">
                            <svg class="w-16 h-16 mx-auto mb-4 text-amber-500 fill-amber-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                <path
                                    d="M80-120v-720h400v160h400v560H80Zm80-80h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 480h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 480h320v-400H480v80h80v80h-80v80h80v80h-80v80Zm160-240v-80h80v80h-80Zm0 160v-80h80v80h-80Z" />
                            </svg>
                            <h3 class="mb-2 text-xl font-semibold text-black font-merriweather">Tidak Ada Sarana &
                                Prasarana
                            </h3>
                            <p class="mt-1 text-sm text-gray-600 font-jakarta">Saat ini belum ada sarana & prasarana
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
