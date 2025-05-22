<div>
    <header class="flex sm:flex-row flex-col sm:space-y-0 space-y-4  sm:items-center items-start justify-between">
        @include('components.layouts._dashboard_header')
    </header>
    <x-breadcrumb :breadcrumbs="[
        [
            'name' => 'Mengelola Kegiatan',
            'url' => '/admin/events',
        ],
        [
            'name' => 'Detail Kegiatan',
            'url' => '/admin/events/' . $event->slug,
        ],
    ]"></x-breadcrumb>
    <main class="py-10">
        <div x-data="{ zoomed: false, mouseX: 0, mouseY: 0, imageWidth: 0, imageHeight: 0, showModal: false, modalImage: '' }" x-on:mousemove="mouseX = $event.clientX; mouseY = $event.clientY"
            class="p-8 mx-auto bg-white rounded-lg shadow-md">
            <div class="flex mt-2 lg:flex-row md:flex-row sm:flex-col flex-col">
                <div class="relative mb-4 overflow-hidden lg:w-1/3 lg:mb-0" x-on:mouseleave="zoomed = false"
                    x-ref="imageContainer">
                    <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}"
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
                modalImage = '{{ asset('storage/' . $event->image) }}';
                ">
                </div>
                <div class="lg:w-2/3 lg:pl-6">
                    <dl class="-my-3 divide-y divide-gray-100 ">
                        <div class="py-2 ">
                            <h2 class="mb-2 text-2xl font-semibold uppercase break-words text-greenMain font-merriweather">
                                {{ $event->title }}</h2>
                        </div>
                        <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm text-gray-500 uppercase font-jakarta">Slug</dt>
                            <dd class="text-gray-700 break-words sm:col-span-2 font-jakarta"> {{ $event->slug }}</dd>
                        </div>
                        <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm text-gray-500 uppercase font-jakarta">Tanggal Mulai</dt>
                            <dd class="text-gray-700 sm:col-span-2 font-jakarta"> {{ $event->date }}</dd>
                        </div>
                        <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm text-gray-500 uppercase font-jakarta">Status</dt>
                            <dd class="text-gray-700 sm:col-span-2 font-jakarta">
                                <div class="flex items-center font-jakarta">
                                    @if ($event->status === 'upcoming')
                                        <span
                                            class="inline-flex items-center px-3 py-1 text-xs font-semibold text-green-600 rounded-full bg-green-50">
                                            <svg class="w-4 h-4 mr-1 fill-green-600"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                                <path
                                                    d="M600-80v-80h160v-400H200v160h-80v-320q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H600ZM320 0l-56-56 103-104H40v-80h327L264-344l56-56 200 200L320 0ZM200-640h560v-80H200v80Zm0 0v-80 80Z" />
                                            </svg>
                                            Segera
                                        </span>
                                    @elseif ($event->status === 'past')
                                        <span
                                            class="inline-flex items-center px-3 py-1 text-xs font-semibold text-gray-600 rounded-full bg-gray-50">
                                            <svg class="w-4 h-4 mr-1 fill-gray-600" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 -960 960 960">
                                                <path
                                                    d="M160-120q-33 0-56.5-23.5T80-200v-560q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v560q0 33-23.5 56.5T800-120H160Zm0-80h640v-560H160v560Zm40-80h200v-80H200v80Zm382-80 198-198-57-57-141 142-57-57-56 57 113 113Zm-382-80h200v-80H200v80Zm0-160h200v-80H200v80Zm-40 400v-560 560Z" />
                                            </svg>
                                            Berakhir
                                        </span>
                                    @elseif ($event->status === 'cancelled')
                                        <span
                                            class="inline-flex items-center px-3 py-1 text-xs font-semibold text-red-600 rounded-full bg-red-50">
                                            <svg class="w-4 h-4 mr-1 fill-red-600" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 -960 960 960">
                                                <path
                                                    d="m388-212-56-56 92-92-92-92 56-56 92 92 92-92 56 56-92 92 92 92-56 56-92-92-92 92ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z" />
                                            </svg>
                                            Batal
                                        </span>
                                    @endif
                                </div>
                            </dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm text-gray-500 uppercase font-jakarta">Dibuat Pada</dt>
                            <dd class="text-gray-700 sm:col-span-2 font-jakarta">
                                {{ $event->created_at->format('d F Y') }}
                                ({{ $event->created_at->locale('id')->diffForHumans() }})</dd>
                        </div>
                        <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm text-gray-500 uppercase font-jakarta">Terakhir Diperbaruhi</dt>
                            <dd class="text-gray-700 sm:col-span-2 font-jakarta">
                                {{ $event->updated_at->format('d F Y') }}
                                ({{ $event->updated_at->locale('id')->diffForHumans() }})</dd>
                        </div>
                        <div class="mt-8 font-jakarta">
                            <h3 class="text-sm text-gray-500 uppercase font-jakarta">Deskripsi</h3>
                            <div
                                class="p-4 mt-2 prose text-gray-700 break-words bg-gray-100 border border-gray-200 rounded-lg font-jakarta">
                                {!! $event->description !!}
                            </div>
                        </div>
                    </dl>
                </div>
            </div>

        </div>

    </main>
</div>
