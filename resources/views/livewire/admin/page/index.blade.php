<div>
    <header class="flex sm:flex-row flex-col sm:space-y-0 space-y-4  sm:items-center items-start justify-between">
        @include('components.layouts._dashboard_header')
    </header>
    @if (session()->has('success'))
        <x-toast-notification type='success' :message="session('success')"></x-toast-notification>
    @endif
    <div class="mx-auto">
        <!-- Klasifikasi Halaman -->
        <div class="grid grid-cols-1 gap-4 mt-10 mb-8 sm:grid-cols-2 lg:grid-cols-3">
            <div
                class="transition-transform duration-300 ease-in-out transform bg-white border border-gray-100 rounded-lg shadow-sm hover:shadow-xl hover:scale-105">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 p-3 bg-indigo-600 rounded-md">
                            <i class="text-white fas fa-images fa-lg"></i>
                        </div>
                        <div class="flex-1 w-0 ml-5">
                            <dl>
                                <dt class="text-sm font-medium text-gray-600 truncate font-jakarta">Gambar Slider
                                </dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-800 font-merriweather">
                                        {{ DB::table('pages')->where('category', 'image-slider')->count() > 0 ? DB::table('pages')->where('category', 'image-slider')->count() : 0 }}
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div
                    class="px-5 py-3 bg-gray-50 hover:bg-blue-50 focus:bg-blue-50 focus:text-blue-50 hover:text-blue-50">
                    <div class="text-sm font-jakarta">
                        <a wire:navigate href="/admin/pages/imageSlider"
                            class="font-medium text-indigo-600 hover:font-semibold hover:text-indigo-900">Kelola
                            Gambar Slider <i class="ml-1 fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div
                class="transition-transform duration-300 ease-in-out transform bg-white border border-gray-100 rounded-lg shadow-sm hover:shadow-xl hover:scale-105">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 p-3 rounded-md bg-greenMain">
                            <i class="text-white fas fa-school fa-lg"></i>
                        </div>
                        <div class="flex-1 w-0 ml-5">
                            <dl>
                                <dt class="text-sm font-medium text-gray-600 truncate font-jakarta">Profil Sekolah
                                </dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-800 font-merriweather">
                                        {{ DB::table('pages')->where('category', 'school-profile')->count() > 0 ? DB::table('pages')->where('category', 'school-profile')->count() : 0 }}
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div
                    class="px-5 py-3 bg-gray-50 hover:bg-green-50 focus:bg-green-50 focus:text-green-50 hover:text-green-50">
                    <div class="text-sm font-jakarta">
                        <a wire:navigate href="/admin/pages/schoolProfile"
                            class="font-medium hover:font-semibold text-greenMain hover:text-green-900">Kelola
                            Profil Sekolah <i class="ml-1 fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div
                class="transition-transform duration-300 ease-in-out transform bg-white border border-gray-100 rounded-lg shadow-sm hover:shadow-xl hover:scale-105">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 p-3 rounded-md bg-amber-500">
                            <i class="text-white fas fa-graduation-cap fa-lg"></i>
                        </div>
                        <div class="flex-1 w-0 ml-5 ">
                            <dl>
                                <dt class="text-sm font-medium text-gray-600 truncate font-jakarta">Kompetensi
                                    Keahlian</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-800 font-merriweather">
                                        {{ DB::table('pages')->where('category', 'competency-skill')->count() > 0 ? DB::table('pages')->where('category', 'competency-skill')->count() : 0 }}
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div
                    class="px-5 py-3 bg-gray-50 hover:bg-amber-50 focus:bg-amber-50 focus:text-amber-50 hover:text-amber-50">
                    <div class="text-sm font-jakarta">
                        <a wire:navigate href="/admin/pages/competencySkill"
                            class="font-medium hover:font-semibold text-amber-500 hover:text-amber-700">Kelola
                            Kompetensi Keahlian <i class="ml-1 fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div
                class="transition-transform duration-300 ease-in-out transform bg-white border border-gray-100 rounded-lg shadow-sm hover:shadow-xl hover:scale-105">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 p-3 bg-green-500 rounded">
                            <i class="px-1 text-white fas fa-user fa-lg"></i>
                        </div>
                        <div class="flex-1 w-0 ml-5 ">
                            <dl>
                                <dt class="text-sm font-medium text-gray-600 truncate font-jakarta">Profil Guru</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-800 font-merriweather">
                                        {{ DB::table('pages')->where('category', 'teacher')->count() > 0 ? DB::table('pages')->where('category', 'teacher')->count() : 0 }}
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div
                    class="px-5 py-3 bg-gray-50 hover:bg-green-50 focus:bg-green-50 focus:text-amber-50 hover:text-amber-50">
                    <div class="text-sm font-jakarta">
                        <a wire:navigate href="/admin/pages/teacher"
                            class="font-medium text-green-500 hover:font-semibold hover:text-green-700">Kelola
                            Profil Guru <i class="ml-1 fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div
                class="transition-transform duration-300 ease-in-out transform bg-white border border-gray-100 rounded-lg shadow-sm hover:shadow-xl hover:scale-105">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 p-3 rounded-md bg-violet-500">
                            <i class="px-1 text-white fa-solid fa-quote-right"></i>

                        </div>
                        <div class="flex-1 w-0 ml-5 ">
                            <dl>
                                <dt class="text-sm font-medium text-gray-600 truncate font-jakarta">Teks Berjalan</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-800 font-merriweather">
                                        {{ DB::table('pages')->where('category', 'running-text')->count() > 0 ? DB::table('pages')->where('category', 'running-text')->count() : 0 }}
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div
                    class="px-5 py-3 bg-gray-50 hover:bg-violet-50 focus:bg-violet-50 focus:text-amber-50 hover:text-amber-50">
                    <div class="text-sm font-jakarta">
                        <a wire:navigate href="/admin/pages/runningText"
                            class="font-medium hover:font-semibold text-violet-500 hover:text-violet-700">Kelola Teks
                            Berjalan<i class="ml-1 fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div
                class="transition-transform duration-300 ease-in-out transform bg-white border border-gray-100 rounded-lg shadow-sm hover:shadow-xl hover:scale-105">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 p-3 bg-orange-500 rounded-md">
                            <i class="px-1 text-white fa-solid fa-users-line"></i>
                        </div>
                        <div class="flex-1 w-0 ml-5 ">
                            <dl>
                                <dt class="text-sm font-medium text-gray-600 truncate font-jakarta">PPDB</dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-800 font-merriweather">
                                        {{ DB::table('pages')->where('category', 'ppdb')->count() > 0 ? DB::table('pages')->where('category', 'ppdb')->count() : 0 }}
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div
                    class="px-5 py-3 bg-gray-50 hover:bg-orange-50 focus:bg-orange-50 focus:text-amber-50 hover:text-amber-50">
                    <div class="text-sm font-jakarta">
                        <a wire:navigate href="/admin/pages/ppdb"
                            class="font-medium text-orange-500 hover:font-semibold hover:text-orange-700">Kelola PPDB<i
                                class="ml-1 fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div
                class="transition-transform duration-300 ease-in-out transform bg-white border border-gray-100 rounded-lg shadow-sm hover:shadow-xl hover:scale-105">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 p-3 bg-purple-500 rounded-md">
                            <i class="px-1 text-white fa-solid fa-building"></i>
                        </div>
                        <div class="flex-1 w-0 ml-5 ">
                            <dl>
                                <dt class="text-sm font-medium text-gray-600 truncate font-jakarta">Sarana & Prasarana
                                </dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl font-semibold text-gray-800 font-merriweather">
                                        {{ DB::table('pages')->where('category', 'facilities')->count() > 0 ? DB::table('pages')->where('category', 'facilities')->count() : 0 }}
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div
                    class="px-5 py-3 bg-gray-50 hover:bg-purple-50 focus:bg-purple-50 focus:text-amber-50 hover:text-amber-50">
                    <div class="text-sm font-jakarta">
                        <a wire:navigate href="/admin/pages/facilities"
                            class="font-medium text-purple-500 hover:font-semibold hover:text-purple-700">Kelola Sarana
                            & Prasarana<i class="ml-1 fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Daftar Halaman -->
        <div class="overflow-hidden bg-white shadow-md sm:rounded-lg">
            <div class="flex items-center justify-between px-4 py-5 sm:px-6 bg-greenMain">
                <h3 class="text-lg font-medium leading-6 text-white font-merriweather">Daftar Halaman</h3>
            </div>
            @if ($pages->isNotEmpty())
                <div class="border-t border-gray-200">
                    <!-- Table for larger screens -->
                    <table class="min-w-full divide-y divide-gray-200 hidden sm:table">
                        <thead class="bg-green-50 font-jakarta">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-sm font-semibold text-left text-gray-600 uppercase">
                                    Judul
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-sm font-semibold text-left text-gray-600 uppercase">
                                    Kategori
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-sm font-semibold text-left text-gray-600 uppercase">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 font-jakarta">
                            @foreach ($pages as $page)
                                <tr>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap">
                                        {{ $page->title }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600 whitespace-nowrap">
                                        {{ $page->category }}
                                    </td>
                                    <td class="w-1/4 px-6 py-4 text-sm font-medium whitespace-nowrap">
                                        <div class="inline-flex items-center rounded-md">
                                            <a wire:navigate href="/admin/pages/{{ $page->slug }}">
                                                <button
                                                    class="inline-flex items-center px-2 py-2 space-x-1 text-sm text-gray-800 bg-white border border-gray-200 rounded-md hover:text-yellow-600 hover:bg-gray-100">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor"
                                                            class="w-4 h-4 fill-white stroke-yellow-600">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        </svg>
                                                    </span>
                                                    <span class="hidden md:inline-block">Lihat</span>
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Card layout for mobile screens -->
                    <div class="sm:hidden">
                        @foreach ($pages as $page)
                            <div class="px-4 py-5 bg-white border-b border-gray-200">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $page->title }}
                                        </h3>
                                        <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ $page->category }}</p>
                                    </div>
                                    <div>
                                        <a wire:navigate href="/admin/pages/{{ $page->slug }}">
                                            <button
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-yellow-700 bg-yellow-100 hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                Lihat
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="py-10 text-center text-gray-800 font-jakarta">
                    <h3>Data halaman tidak tersedia. Silakan buat <a wire:navigate href="/admin/pages/imageSlider"
                            class="underline text-greenMain">halaman gambar slider baru</a>, <a wire:navigate
                            href="/admin/pages/schoolProfile" class="underline text-greenMain">halaman profil sekolah
                            baru </a>, atau <a wire:navigate href="/admin/pages/imageSlider/competencySkills"
                            class="underline text-greenMain">halaman kompetensi keahlian baru</a></h3>
                </div>
            @endif
        </div>
        <x-pagination :items="$pages" />
    </div>
    </main>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
