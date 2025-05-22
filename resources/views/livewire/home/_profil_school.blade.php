<div>
    <div class="container flex flex-col justify-center px-12 mx-auto lg:flex-row md:flex-col lg:justify-between">
        <div class="flex flex-col w-full lg:w-4/6 ">
            <div>
                <h2 class="font-bold uppercase lg:text-3xl md:text-2xl font-merriweather">SAMBUTAN KEPALA SEKOLAH
                </h2>
                <hr class="w-2/3 mt-1 border-2 border-opacity-60 border-greenMain">
                @if ($intro)
                    <div class="mt-6 font-jakarta">
                        <div class="flex items-center font-jakarta ">
                            <svg class="fill-gray-600" xmlns="#www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                width="20px">
                                <path
                                    d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z" />
                            </svg>
                            <span class="ml-2 text-xs text-gray-600">{{ $intro->created_at->format('d F Y') }}
                                ({{ $intro->created_at->locale('id')->diffForHumans() }})
                            </span>
                        </div>
                        <img src="{{ asset('storage/' . $intro->image) }}"
                            class="w-full mb-5 mr-5 lg:w-48 md:w-48 lg:float-start md:float-start"
                            alt="Kepala Sekolah SMK ISLAM SEKARAN" srcset="">
                        <span class="prose text-justify break-words indent-8">
                            {!! Str::limit($intro->content, 1700, '...') !!} @if (strlen($intro->content) > 1700)
                                <a wire:navigate class="text-blue-500 underline hover:text-blue-700"
                                    href="/intro">Lihat
                                    selengkapnya</a>
                            @endif

                        </span>
                    </div>
                @else
                    <div
                        class="flex items-center justify-center h-64 mt-6 overflow-hidden bg-white border border-gray-300 rounded-md border-opacity-60">
                        <div class="text-center">
                            <svg class="w-16 h-16 mx-auto mb-4 text-amber-500 fill-amber-500"
                                xmlns="#www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                <path
                                    d="M360-80v-529q-91-24-145.5-100.5T160-880h80q0 83 53.5 141.5T430-680h100q30 0 56 11t47 32l181 181-56 56-158-158v478h-80v-240h-80v240h-80Zm120-640q-33 0-56.5-23.5T400-800q0-33 23.5-56.5T480-880q33 0 56.5 23.5T560-800q0 33-23.5 56.5T480-720Z" />
                            </svg>
                            <h2 class="mb-2 text-2xl font-semibold text-black font-merriweather">Tidak Ada Sambutan
                                Kepala Sekolah</h2>
                            <p class="text-gray-600 font-jakarta">Saat ini belum ada sambutan kepala sekolah yang
                                tersedia.
                                Silakan cek kembali di lain waktu.</p>
                        </div>
                    </div>
                @endif
            </div>
            <div class="mt-10">
                <h2 class="font-bold uppercase lg:text-3xl md:text-2xl font-merriweather">PROFIL GURU
                </h2>
                <hr class="w-2/3 mt-1 border-2 border-opacity-60 border-greenMain">
                <div class="hidden mt-4 md:block" x-data="{
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
                    interval: 9000,
                    next() {
                        this.currentIndex = (this.currentIndex + 3) % this.teachers.length;
                    },
                    prev() {
                        this.currentIndex = (this.currentIndex - 3 + this.teachers.length) % this.teachers.length;
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
                    },
                    getVisibleTeachers() {
                        return [
                            this.teachers[this.currentIndex],
                            this.teachers[(this.currentIndex + 1) % this.teachers.length],
                            this.teachers[(this.currentIndex + 2) % this.teachers.length]
                        ];
                    }
                }" x-init="startAutoSlide"
                    @mouseenter="stopAutoSlide" @mouseleave="startAutoSlide"
                    class="mt-4 overflow-hidden bg-white border-2 border-gray-100 rounded-sm">
                    <div class="relative">
                        <div class="flex">
                            <template x-for="(teacher, index) in getVisibleTeachers()" :key="index">
                                <div class="w-1/3 p-2">
                                    <div class="relative aspect-[4/3]">
                                        <img :src="teacher.image" :alt="teacher.name"
                                            class="absolute inset-0 object-cover w-full h-full transition-opacity duration-500 ease-in-out" />
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                                        </div>
                                        <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                                            <a wire:navigate :href="'/teacher/' + teacher.slug" x-text="teacher.name"
                                                class="mb-1 text-sm font-semibold transition-opacity duration-300 font-jakarta hover:text-amber-500 focus:text-amber-500 hover:underline"></a>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <button @click="prev(); resetAutoSlide()"
                            class="absolute top-0 bottom-0 left-0 w-12 group focus:outline-none">
                            <span
                                class="absolute p-2 text-white transition-opacity duration-300 transform -translate-y-1/2 rounded-full opacity-0 left-2 top-1/2 bg-black/10 group-hover:opacity-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                            </span>
                        </button>
                        <button @click="next(); resetAutoSlide()"
                            class="absolute top-0 bottom-0 right-0 w-12 group focus:outline-none">
                            <span
                                class="absolute p-2 text-white transition-opacity duration-300 transform -translate-y-1/2 rounded-full opacity-0 right-2 top-1/2 bg-black/10 group-hover:opacity-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="flex justify-center p-4 bg-white">
                        <template x-for="(_, index) in Math.ceil(teachers.length / 3)" :key="index">
                            <button @click="currentIndex = index * 3; resetAutoSlide()"
                                class="w-2 h-2 mx-1 transition-all duration-300 rounded-full focus:outline-none"
                                :class="Math.floor(currentIndex / 3) === index ? 'bg-greenMain w-4' : 'bg-gray-300'">
                            </button>
                        </template>
                    </div>
                </div>
                <div class="block mt-4 md:hidden" x-data="{
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
                }" x-init="startAutoSlide"
                    @mouseenter="stopAutoSlide" @mouseleave="startAutoSlide"
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
            </div>
        </div>
        <div class="w-full p-5 lg:w-1/4 lg:border-l-2 lg:border-greenMain lg:border-opacity-60">
            <h2 class="px-5 py-1 font-bold text-white uppercase bg-greenMain font-merriweather">
                INFORMASI PPDB
            </h2>

            @if ($ppdb)
                <ul class="mt-2 font-jakarta pl-7">
                    <li><a wire:navigate href="/ppdb/{{ $ppdb->slug }}"
                            class="hover:text-greenMain active:text-gray-400 visited:text-gray-400 "><img
                                src="/img/ppdb.png" alt="Informasi PPDB SMK ISLAM SEKARAN LAMONGAN"
                                srcset=""></a>
                    </li>
                </ul>
            @else
                <div
                    class="py-6 my-4 overflow-hidden text-center bg-white border border-gray-300 rounded-md border-opacity-60">
                    <svg class="w-16 h-16 mx-auto mb-4 text-amber-500 fill-amber-500"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                        <path
                            d="M0-240v-63q0-43 44-70t116-27q13 0 25 .5t23 2.5q-14 21-21 44t-7 48v65H0Zm240 0v-65q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-26-6.5-49T754-397q11-2 22.5-2.5t23.5-.5q72 0 116 26.5t44 70.5v63H780Zm-455-80h311q-10-20-55.5-35T480-370q-55 0-100.5 15T325-320ZM160-440q-33 0-56.5-23.5T80-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T160-440Zm640 0q-33 0-56.5-23.5T720-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T800-440Zm-320-40q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm0-80q17 0 28.5-11.5T520-600q0-17-11.5-28.5T480-640q-17 0-28.5 11.5T440-600q0 17 11.5 28.5T480-560Zm1 240Zm-1-280Z" />
                    </svg>
                    <h3 class="mb-2 text-xl font-semibold text-black font-merriweather">Tidak Ada Informasi PPDB
                    </h3>
                    <p class="mt-1 text-sm text-gray-600 font-jakarta">Saat ini belum ada informasi PPDB yang
                        tersedia.
                        Silakan cek kembali di lain waktu.
                    </p>
                </div>
            @endif
            <h2 class="px-5 py-1 font-bold text-white uppercase bg-greenMain font-merriweather">
                PROFIL SEKOLAH
            </h2>
            <ul class="mt-2 list-decimal font-jakarta pl-7">
                <li><a wire:navigate href="/intro"
                        class="hover:text-greenMain active:text-gray-400 visited:text-gray-400 ">Sambutan Kepala
                        Sekolah</a></li>
                <li><a wire:navigate href="/history"
                        class="hover:text-greenMain active:text-gray-400 visited:text-gray-400 ">Sejarah</a></li>
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
                    class="py-8 mt-4 overflow-hidden text-center bg-white border border-gray-300 rounded-md border-opacity-60">
                    <svg class="w-16 h-16 mx-auto mb-4 text-amber-500 fill-amber-500"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                        <path
                            d="M480-120 200-272v-240L40-600l440-240 440 240v320h-80v-276l-80 44v240L480-120Zm0-332 274-148-274-148-274 148 274 148Zm0 241 200-108v-151L480-360 280-470v151l200 108Zm0-241Zm0 90Zm0 0Z" />
                    </svg>
                    <h3 class="mb-2 text-xl font-semibold text-black font-merriweather">Tidak Ada Kompetensi Keahlian
                    </h3>
                    <p class="mt-1 text-sm text-gray-600 font-jakarta">Saat ini belum ada kompetensi keahlian yang
                        tersedia.
                        Silakan cek kembali di lain waktu.
                    </p>
                </div>
            @endif
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
                    <h3 class="mb-2 text-xl font-semibold text-black font-merriweather">Tidak Ada Sarana & Prasarana
                    </h3>
                    <p class="mt-1 text-sm text-gray-600 font-jakarta">Saat ini belum ada sarana & prasarana yang
                        tersedia.
                        Silakan cek kembali di lain waktu.
                    </p>
                </div>
            @endif
        </div>
    </div>
</div>
