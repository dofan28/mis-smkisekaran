<div>
    <header class="flex sm:flex-row flex-col sm:space-y-0 space-y-4  sm:items-center items-start justify-between">
        @include('components.layouts._dashboard_header')
    </header>
    <x-breadcrumb :breadcrumbs="[
        [
            'name' => 'Mengelola Halaman',
            'url' => '/admin/pages',
        ],
        [
            'name' => 'Mengelola Halaman Profil Sekolah',
            'url' => '/admin/pages/schoolProfile',
        ],
    ]"></x-breadcrumb>

    @if (session()->has('success'))
        <x-toast-notification type='success' :message="session('success')"></x-toast-notification>
    @endif
    <main class="py-10">
        <div class="p-6 bg-white rounded-lg shadow-lg">
            <a wire:navigate href="/admin/pages/schoolProfile/create"
                class="flex items-center w-48 px-3 py-2 space-x-2 font-semibold text-white transition duration-300 ease-in-out transform rounded-lg shadow-lg bg-amber-500 hover:bg-amber-700 hover:scale-105">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                </svg>
                <span class="text-sm font-jakarta">Buat Profile Sekolah</span>
            </a>
            <div class="mt-5 overflow-x-auto">
                @if ($pageSchoolProfiles->isNotEmpty())
                    <!-- Desktop version -->
                    <table class="hidden min-w-full bg-white border-separate border-spacing-0 sm:table">
                        <thead class="text-white bg-greenMain font-merriweather">
                            <tr>
                                <th class="w-1/4 px-4 py-3 font-bold text-left border border-gray-100 rounded-tl-lg ">
                                    Judul</th>
                                <th class="w-1/6 px-4 py-3 font-bold text-left border border-gray-100 ">Jenis</th>
                                <th class="w-1/2 px-4 py-3 font-bold text-left border border-gray-100">Konten</th>
                                <th class="px-4 py-3 font-bold text-left border border-gray-100 ">Gambar</th>
                                <th class="px-4 py-3 font-bold text-left border border-gray-100 rounded-tr-lg ">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-800">
                            @foreach ($pageSchoolProfiles as $pageSchoolProfile)
                                <tr wire:key='{{ $pageSchoolProfile->id }}'
                                    class="text-sm transition hover:bg-green-50 font-jakarta">
                                    <td class="px-4 py-3 border border-gray-100">
                                        <div class="break-words line-clamp-2">
                                            {{ $pageSchoolProfile->title }}
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 border border-gray-100">
                                        <div class="break-words line-clamp-2">
                                            {{ $pageSchoolProfile->type }}
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 border border-gray-100">
                                        <div class="break-words line-clamp-2">
                                            {!! $pageSchoolProfile->content !!}
                                        </div>
                                    </td>
                                    <td class="flex justify-center px-4 py-3 border border-gray-100">
                                        <img src="{{ asset('storage/' . $pageSchoolProfile->image) }}"
                                            class="object-cover object-center h-24 border-2 border-gray-400 rounded-md shadow-md"
                                            alt="{{ $pageSchoolProfile->title }}">
                                    </td>
                                    <td class="px-4 py-3 border border-gray-100">
                                        <div class="inline-flex items-center rounded-md shadow-sm">
                                            <a wire:navigate href="/admin/pages/schoolProfile/{{ $pageSchoolProfile->slug }}/edit">
                                                <button
                                                    class="inline-flex items-center px-2 py-2 space-x-1 text-sm bg-white border border-gray-200 rounded-l-lg hover:text-blue-600 hover:bg-gray-100">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-4 h-4 fill-white stroke-blue-600">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg></span>
                                                    <span class="hidden md:inline-block">Edit</span>
                                                </button>
                                            </a>
                                            <a wire:navigate href="/admin/pages/schoolProfile/{{ $pageSchoolProfile->slug }}">
                                                <button
                                                    class="inline-flex items-center px-2 py-2 space-x-1 text-sm text-gray-800 bg-white border-gray-200 hover:text-yellow-600 hover:bg-gray-100 border-y">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-4 h-4 fill-white stroke-yellow-600">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        </svg></span>
                                                    <span class="hidden md:inline-block">Lihat</span>
                                                </button>
                                            </a>
                                            <x-modal-confirmation action="delete" :identify="'halaman Profile Sekolah ' . $pageSchoolProfile->title . ''" :data="$pageSchoolProfile">
                                                <button @click="showModal = true"
                                                    class="inline-flex items-center px-2 py-2 space-x-1 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-r-lg hover:text-red-600 hover:bg-gray-100">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-4 h-4 fill-white stroke-red-600">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                        </svg></span>
                                                    <span class="hidden md:inline-block">Hapus</span>
                                                </button>
                                            </x-modal-confirmation>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    
                    <!-- Mobile version -->
                    <div class="sm:hidden">
                        @foreach ($pageSchoolProfiles as $pageSchoolProfile)
                            <div class="mb-4 bg-white border border-gray-200 rounded-lg shadow-sm">
                                <div class="p-4">
                                    <h3 class="mb-2 text-lg line-clamp-2 font-semibold text-gray-800">{{ $pageSchoolProfile->title }}</h3>
                                    <div class="mb-2 text-sm text-gray-600 break-words line-clamp-2">
                                        {!! $pageSchoolProfile->content !!}
                                    </div>
                                    <div class="flex items-center justify-center mb-2">
                                        <img src="{{ asset('storage/' . $pageSchoolProfile->image) }}"
                                            class="object-cover object-center h-24 border-2 border-gray-400 rounded-md shadow-md"
                                            alt="{{ $pageSchoolProfile->title }}">
                                    </div>
                                    <div class="flex items-center justify-center mt-3">
                                       
                                        <div class="flex space-x-2">
                                            <a wire:navigate
                                                href="/admin/pages/schoolProfile/{{ $pageSchoolProfile->slug }}/edit">
                                                <button
                                                    class="p-2 text-blue-600 bg-blue-100 rounded-full hover:bg-blue-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path
                                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                    </svg>
                                                </button>
                                            </a>
                                            <a wire:navigate href="/admin/pages/schoolProfile/{{ $pageSchoolProfile->slug }}">
                                                <button
                                                    class="p-2 text-yellow-600 bg-yellow-100 rounded-full hover:bg-yellow-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                        <path fill-rule="evenodd"
                                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </a>
                                            <x-modal-confirmation action="delete" :identify="'pengumuman ' . $pageSchoolProfile->title . ''" :data="$pageSchoolProfile">
                                                <button @click="showModal = true"
                                                    class="p-2 text-red-600 bg-red-100 rounded-full hover:bg-red-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </x-modal-confirmation>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center text-gray-800 font-jakarta">
                        <h3>Data halaman profil sekolah tidak tersedia. Silakan buat <a wire:navigate href="/admin/pages/schoolProfile/create"
                                class="underline text-greenMain">halaman profil sekolah baru</a>.</h3>
                    </div>
                @endif
            </div>
        </div>
        <x-pagination :items="$pageSchoolProfiles" />
    </main>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
