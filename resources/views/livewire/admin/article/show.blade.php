<div>
    <header class="flex sm:flex-row flex-col sm:space-y-0 space-y-4  sm:items-center items-start justify-between">
        @include('components.layouts._dashboard_header')
    </header>
    <x-breadcrumb :breadcrumbs="[
        [
            'name' => 'Mengelola Artikel',
            'url' => '/admin/articles',
        ],
        [
            'name' => 'Detail Artikel',
            'url' => '/admin/articles/' . $article->slug,
        ],
    ]"></x-breadcrumb>
    <main class="py-10">
        <div x-data="{ zoomed: false, mouseX: 0, mouseY: 0, imageWidth: 0, imageHeight: 0, showModal: false, modalImage: '' }" x-on:mousemove="mouseX = $event.clientX; mouseY = $event.clientY"
            class="p-8 mx-auto bg-white rounded-lg shadow-md">
            <div class="flex mt-2 lg:flex-row md:flex-row sm:flex-col flex-col">
                <!-- Gambar di samping kiri -->
                <div class="relative mb-4 overflow-hidden lg:w-1/3 lg:mb-0" x-on:mouseleave="zoomed = false"
                    x-ref="imageContainer">
                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
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
                modalImage = '{{ asset('storage/' . $article->image) }}';
                ">
                </div>
                <div class="lg:w-2/3 lg:pl-6">
                    <dl class="-my-3 divide-y divide-gray-100 ">
                        <div class="py-2 ">
                            <h2 class="mb-2 text-2xl font-semibold uppercase break-words text-greenMain font-merriweather">
                                {{ $article->title }}</h2>
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm text-gray-500 uppercase font-jakarta">Kategori</dt>
                            <dd class="text-gray-700 break-words sm:col-span-2 font-jakarta"> {{ $article->category->name }}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm text-gray-500 uppercase font-jakarta">Slug</dt>
                            <dd class="text-gray-700 break-words sm:col-span-2 font-jakarta"> {{ $article->slug }}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm text-gray-500 uppercase font-jakarta">Status</dt>
                            <dd class="text-gray-700 sm:col-span-2 font-jakarta">
                                <div class="flex items-center font-jakarta">
                                    @if ($article->status === 'published')
                                        <span
                                            class="inline-flex items-center px-3 py-1 text-xs font-semibold text-green-600 rounded-full bg-green-50">
                                            <svg class="w-4 h-4 mr-1 fill-green-600" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 -960 960 960">
                                                <path
                                                    d="M440-160v-326L336-382l-56-58 200-200 200 200-56 58-104-104v326h-80ZM160-600v-120q0-33 23.5-56.5T240-800h480q33 0 56.5 23.5T800-720v120h-80v-120H240v120h-80Z" />
                                            </svg>
                                            Publikasi
                                        </span>
                                    @elseif ($article->status === 'draft')
                                        <span
                                            class="inline-flex items-center px-3 py-1 text-xs font-semibold text-yellow-600 rounded-full bg-yellow-50">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M3 10h18M3 14h18"></path>
                                            </svg>
                                            Draft
                                        </span>
                                    @elseif ($article->status === 'archived')
                                        <span
                                            class="inline-flex items-center px-3 py-1 text-xs font-semibold text-gray-600 rounded-full bg-gray-50">
                                            <svg class="w-4 h-4 mr-1 fill-gray-600" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 -960 960 960">
                                                <path
                                                    d="m480-240 160-160-56-56-64 64v-168h-80v168l-64-64-56 56 160 160ZM200-640v440h560v-440H200Zm0 520q-33 0-56.5-23.5T120-200v-499q0-14 4.5-27t13.5-24l50-61q11-14 27.5-21.5T250-840h460q18 0 34.5 7.5T772-811l50 61q9 11 13.5 24t4.5 27v499q0 33-23.5 56.5T760-120H200Zm16-600h528l-34-40H250l-34 40Zm264 300Z" />
                                            </svg>
                                            Arsip
                                        </span>
                                    @endif
                                </div>
                            </dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm text-gray-500 uppercase font-jakarta">Dibuat Pada</dt>
                            <dd class="text-gray-700 sm:col-span-2 font-jakarta">{{ $article->created_at->format('d F Y') }}
                                ({{ $article->created_at->locale('id')->diffForHumans() }})</dd>
                        </div>
                        <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm text-gray-500 uppercase font-jakarta">Terakhir Diperbaruhi</dt>
                            <dd class="text-gray-700 sm:col-span-2 font-jakarta">{{ $article->updated_at->format('d F Y') }}
                                ({{ $article->updated_at->locale('id')->diffForHumans() }})</dd>
                        </div>
                        <div class="mt-8 font-jakarta">
                            <h3 class="text-sm text-gray-500 uppercase font-jakarta">Konten</h3>
                            <div class="p-4 mt-2 prose text-gray-700 break-words bg-gray-100 border border-gray-200 rounded-lg font-jakarta">
                                {!! $article->content !!}
                            </div>
                        </div>
                    </dl>
                </div>
            </div>

        </div>

    </main>
</div>
