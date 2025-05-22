
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
        [
            'name' => 'Detail Halaman Profil Sekolah',
            'url' => '/admin/pages/schoolProfile/' . $pageSchoolProfile->slug,
        ],
    ]"></x-breadcrumb>
    <main class="py-10">
        <div x-data="{ zoomed: false, mouseX: 0, mouseY: 0, imageWidth: 0, imageHeight: 0, showModal: false, modalImage: '' }" x-on:mousemove="mouseX = $event.clientX; mouseY = $event.clientY"
            class="p-8 mx-auto bg-white rounded-lg shadow-md">
            <div class="flex mt-2 lg:flex-row md:flex-row sm:flex-col flex-col">
                <!-- Gambar di samping kiri -->
                <div class="relative mb-4 overflow-hidden lg:w-1/3 lg:mb-0" x-on:mouseleave="zoomed = false"
                    x-ref="imageContainer">
                    <img src="{{ asset('storage/' . $pageSchoolProfile->image) }}" alt="{{ $pageSchoolProfile->title }}"
                        class="w-full h-auto transition-transform duration-300 cursor-pointer transform-gpu"
                        :class="{ 'scale-150 cursor-pointer': zoomed }"
                        x-on:mouseover="zoomed = true; imageWidth = $refs.imageContainer.clientWidth; imageHeight = $refs.imageContainer.clientHeight;"
                        x-bind:style="'transform-origin: ' + ((mouseX - $refs.imageContainer.getBoundingClientRect().left) /
                            imageWidth) *
                        100
                            +
                            '% ' + ((mouseY - $refs.imageContainer.getBoundingClientRect().top) / imageHeight) *
                            100 +
                            '%;'"
                        x-on:click="
                showModal = true;
                modalImage = '{{ asset('storage/' . $pageSchoolProfile->image) }}';
                ">
                </div>
                <div class="lg:w-2/3 lg:pl-6">
                    <dl class="-my-3 divide-y divide-gray-100 ">
                        <div class="py-2 ">
                            <h2 class="mb-2 text-2xl font-semibold uppercase break-words text-greenMain font-merriweather">
                                {{ $pageSchoolProfile->title }}</h2>
                        </div>
                        <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm text-gray-500 uppercase font-jakarta">Slug</dt>
                            <dd class="text-gray-700 break-words sm:col-span-2 font-jakarta"> {{ $pageSchoolProfile->slug }}</dd>
                        </div>
                        <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm text-gray-500 uppercase font-jakarta">Kategori</dt>
                            <dd class="text-gray-700 break-words sm:col-span-2 font-jakarta"> {{ $pageSchoolProfile->category }}</dd>
                        </div>
                        <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm text-gray-500 uppercase font-jakarta">Jenis</dt>
                            <dd class="text-gray-700 sm:col-span-2 font-jakarta"> {{ $pageSchoolProfile->type }}</dd>
                        </div>
                        <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm text-gray-500 uppercase font-jakarta">Dibuat Pada</dt>
                            <dd class="text-gray-700 sm:col-span-2 font-jakarta">{{ $pageSchoolProfile->created_at->format('d F Y') }}
                                ({{ $pageSchoolProfile->created_at->locale('id')->diffForHumans() }})</dd>
                        </div>
                        <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm text-gray-500 uppercase font-jakarta">Terakhir Diperbaruhi</dt>
                            <dd class="text-gray-700 sm:col-span-2 font-jakarta">{{ $pageSchoolProfile->updated_at->format('d F Y') }}
                                ({{ $pageSchoolProfile->updated_at->locale('id')->diffForHumans() }})</dd>
                        </div>
                        <div class="mt-8 font-jakarta">
                            <h3 class="text-sm text-gray-500 uppercase font-jakarta">Konten</h3>
                            <div class="p-4 mt-2 prose text-gray-700 break-words bg-gray-100 border border-gray-200 rounded-lg font-jakarta">
                                {!! $pageSchoolProfile->content !!}
                            </div>
                        </div>
                    </dl>
                </div>
            </div>

        </div>

    </main>
</div>
