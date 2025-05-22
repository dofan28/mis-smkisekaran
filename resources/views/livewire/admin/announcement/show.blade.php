<div>
    <header class="flex sm:flex-row flex-col sm:space-y-0 space-y-4  sm:items-center items-start justify-between">
        @include('components.layouts._dashboard_header')
    </header>

    <x-breadcrumb :breadcrumbs="[
        ['name' => 'Mengelola Pengumuman', 'url' => '/admin/announcements'],
        ['name' => 'Detail Pengumuman', 'url' => '/admin/announcements/' . $announcement->slug],
    ]"></x-breadcrumb>

    <main class="py-10">
        <div x-data="{
            zoomed: false,
            mouseX: 0,
            mouseY: 0,
            imageWidth: 0,
            imageHeight: 0,
            showModal: false,
            modalImage: ''
        }" x-on:mousemove="mouseX = $event.clientX; mouseY = $event.clientY"
            class="p-6 mx-auto bg-white rounded-lg shadow-md max-w-7xl">
            <div class="flex flex-col lg:flex-row lg:space-x-6">
                <!-- Gambar di samping kiri -->
                <div class="relative mb-6 overflow-hidden lg:w-1/3 lg:mb-0" x-on:mouseleave="zoomed = false"
                    x-ref="imageContainer">
                    <img src="{{ asset('storage/' . $announcement->image) }}" alt="{{ $announcement->title }}"
                        class="w-full h-auto transition-transform duration-300 cursor-pointer transform-gpu"
                        :class="{ 'scale-150 cursor-pointer': zoomed }"
                        x-on:mouseover="zoomed = true; imageWidth = $refs.imageContainer.clientWidth; imageHeight = $refs.imageContainer.clientHeight;"
                        x-bind:style="'transform-origin: ' + ((mouseX - $refs.imageContainer.getBoundingClientRect().left) /
                            imageWidth) * 100 + '% ' + ((mouseY - $refs.imageContainer.getBoundingClientRect().top) /
                            imageHeight) * 100 + '%;'"
                        x-on:click="showModal = true; modalImage = '{{ asset('storage/' . $announcement->image) }}';">
                </div>

                <!-- Detail Pengumuman -->
                <div class="lg:w-2/3">
                    <dl class="space-y-4">
                        <div>
                            <h2
                                class="mb-4 text-2xl font-semibold uppercase break-words text-greenMain font-merriweather">
                                {{ $announcement->title }}
                            </h2>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-y-2 sm:gap-x-4">
                            <dt class="text-sm font-medium text-gray-500 uppercase font-jakarta">Slug</dt>
                            <dd class="text-gray-700 break-words sm:col-span-2 font-jakarta">{{ $announcement->slug }}
                            </dd>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-y-2 sm:gap-x-4">
                            <dt class="text-sm font-medium text-gray-500 uppercase font-jakarta">Status</dt>
                            <dd class="text-gray-700 sm:col-span-2 font-jakarta">
                                @if ($announcement->status === 'inactive')
                                    <span
                                        class="inline-flex items-center gap-1 px-2 py-1 text-xs font-semibold text-red-600 rounded-full bg-red-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                            class="w-4 h-4">
                                            <path
                                                d="m336-280 144-144 144 144 56-56-144-144 144-144-56-56-144 144-144-144-56 56 144 144-144 144 56 56ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"
                                                fill='#dc2626' />
                                        </svg>
                                        Tidak Aktif
                                    </span>
                                @elseif ($announcement->status === 'active')
                                    <span
                                        class="inline-flex items-center gap-1 px-2 py-1 text-xs font-semibold text-green-600 rounded-full bg-green-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                            class="w-4 h-4">
                                            <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"
                                                fill='#16a34a' />
                                        </svg>
                                        Aktif
                                    </span>
                                @endif
                            </dd>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-y-2 sm:gap-x-4">
                            <dt class="text-sm font-medium text-gray-500 uppercase font-jakarta">Dibuat Pada</dt>
                            <dd class="text-gray-700 sm:col-span-2 font-jakarta">
                                {{ $announcement->created_at->format('d F Y') }}
                                ({{ $announcement->created_at->locale('id')->diffForHumans() }})
                            </dd>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-y-2 sm:gap-x-4">
                            <dt class="text-sm font-medium text-gray-500 uppercase font-jakarta">Terakhir Diperbaruhi
                            </dt>
                            <dd class="text-gray-700 sm:col-span-2 font-jakarta">
                                {{ $announcement->updated_at->format('d F Y') }}
                                ({{ $announcement->updated_at->locale('id')->diffForHumans() }})
                            </dd>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-sm text-gray-500 uppercase font-jakarta">Konten</h3>
                            <div
                                class="p-4 mt-2 prose text-gray-700 break-words bg-gray-100 border border-gray-200 rounded-lg font-jakarta">
                                {!! $announcement->content !!}
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </main>
</div>
