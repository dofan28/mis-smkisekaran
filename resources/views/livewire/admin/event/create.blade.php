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
            'name' => 'Buat Artikel',
            'url' => '/admin/articles/create',
        ],
    ]"></x-breadcrumb>
    <main class="py-10">
        <div class="p-6 bg-white rounded-lg shadow-lg">
            <div class="flex items-center justify-center ">
                <div class="w-full mx-auto bg-white">
                    <form wire:submit='save'>
                        <div class="mb-5">
                            <label for="title" class="block mb-1 font-semibold text-gray-800 font-jakarta">
                                Judul
                            </label>
                            <div class="relative">
                                <input wire:model='title' type="text" name="title" id="title"
                                    placeholder="Masukkan judul" value="{{ old('title') }}"
                                    class="w-full rounded-md border bg-white py-3 px-5 text-sm text-gray-600 outline-none focus:border-greenMain font-jakarta focus:shadow-md @error('title') border-red-500 @enderror"
                                    maxlength="200" required autofocus />
                                <span class="absolute text-xs text-gray-500 right-3 font-jakarta bottom-3">
                                    <span x-text="$wire.title ? $wire.title.length : 0"></span>/200
                                </span>
                            </div>
                            @error('title')
                                <p class="text-xs italic text-red-500 font-jakarta">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="slug" class="block mb-1 font-semibold text-gray-800 font-jakarta">
                                Slug
                            </label>
                            <input type="text" title="slug" name="slug" id="slug"
                                value="{{ old('slug') }}"
                                class="w-full rounded-md border bg-gray-100 py-3 px-5 text-sm  text-gray-600 outline-none focus:border-greenMain font-jakarta focus:shadow-md @error('slug') border-red-500 @enderror"
                                disabled />
                            @error('slug')
                                <p class="text-xs italic text-red-500 font-jakarta">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="date" class="mb-1 font-semibold text-gray-800 bblock font-jakarta">
                                Tanggal Mulai
                            </label>
                            <input wire:model='date' type="datetime-local" title="date" name="date" id="date"
                                value="{{ old('date') }}"
                                class="w-full rounded-md border bg-white py-3 px-5 text-sm text-gray-600 outline-none focus:border-greenMain font-jakarta focus:shadow-md @error('title') border-red-500 @enderror"
                                required />
                            @error('date')
                                <p class="text-xs italic text-red-500 font-jakarta">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="status" class="block mb-1 font-semibold text-gray-800 font-jakarta">
                                Status
                            </label>
                            <select wire:model='status' name="status" id="status" placeholder="Masukkan jenis"
                                class="w-full rounded-md border  appearance-none bg-white py-3 px-5 text-sm  text-gray-600 outline-none focus:border-greenMain font-jakarta focus:shadow-md @error('status') border-red-500 @enderror"
                                required>
                                <option value="">Pilih Status</option>
                                <option value="upcoming">
                                    Segera
                                </option>
                                <option value="past">
                                    Berakhir
                                </option>
                                <option value="cancelled">
                                    Batal
                                </option>
                            </select>
                            @error('status')
                                <p class="text-xs italic text-red-500 font-jakarta">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <div wire:ignore>
                                <label for="description" class="block mb-1 font-semibold text-gray-800 font-jakarta">
                                    Deskripsi
                                </label>
                                <textarea wire:model="description"
                                    class="w-full rounded-md border bg-white py-3 px-5 text-sm  text-gray-600 outline-none focus:border-greenMain font-jakarta focus:shadow-md @error('description') border-red-500 @enderror"
                                    name="description" id="description"></textarea>
                            </div>
                            @error('description')
                                <p class="text-xs italic text-red-500 font-jakarta">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="slug" class="block mb-1 font-semibold text-gray-800 font-jakarta">
                                Gambar (Opsional)
                            </label>
                            <div x-data="{ dragging: false, fileName: '', fileSize: 0 }" class="relative w-full">
                                <div class="items-center justify-center mx-auto">
                                    <label :class="{ 'border-greenMain': dragging, 'border-gray-300': !dragging }"
                                        @dragover.prevent="dragging = true" @dragleave.prevent="dragging = false"
                                        @drop.prevent="dragging = false; $refs.fileInput.files = $event.dataTransfer.files; $refs.fileInput.dispatchEvent(new Event('change'))"
                                        class="flex sm:flex-row flex-col @if (!$image) justify-center @endif w-full sm:h-24 px-3 transition bg-white border-2 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-600 focus:outline-none space-x-4"
                                        id="drop">

                                        <!-- Tampilkan jika tidak ada gambar -->
                                        @if (!$image)
                                            <span wire:loading.remove wire:target="image"
                                                class="flex items-center space-x-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                    </path>
                                                </svg>
                                                <span class="text-sm font-medium text-gray-600 font-jakarta">Seret
                                                    file
                                                    untuk dilampirkan, atau
                                                    <span
                                                        class="text-blue-600 underline ml-[4px] text-sm font-jakarta font-semibold">Cari
                                                        file</span>
                                                </span>
                                            </span>
                                        @endif

                                        <!-- Tampilkan gambar jika ada -->
                                        @if ($image)
                                            <img src="{{ $image->temporaryUrl() }}">
                                        @endif

                                        <!-- Input untuk memilih file -->
                                        <div class="flex flex-col justify-center">
                                            <input wire:model="image" type="file" name="image"
                                                x-ref="fileInput"
                                                @change="fileName = $refs.fileInput.files[0].name; fileSize = ($refs.fileInput.files[0].size / 1024).toFixed(2)"
                                                class="font-jakarta file:hidden @if (!$image) hidden @endif @error('image') border-red-500 @enderror"
                                                accept="image/*" id="image">

                                            @if ($image)
                                                <template x-if="fileName">
                                                    <div class="mt-2">
                                                        <p class="text-sm font-semibold text-gray-600 font-jakarta">
                                                            Nama
                                                            File: <span x-text="fileName"></span></p>
                                                        <p class="text-sm text-gray-600 font-jakarta">Ukuran File:
                                                            <span x-text="fileSize"></span> KB
                                                        </p>
                                                    </div>
                                                </template>

                                                <button type="button" wire:click="removeImage"
                                                    class="px-2 py-1 text-xs font-medium text-white bg-red-600 rounded-md font-jakarta hover:bg-red-800 focus:bg-red-900">
                                                    Batalkan Unggahan
                                                </button>
                                            @endif
                                        </div>
                                        <div class="flex flex-col items-center justify-center">
                                            <div wire:loading wire:target="image" aria-label="Mengunggah..."
                                                role="status" class="flex flex-row items-center space-x-2">
                                                <svg class="inline-block h-9 w-9 animate-spin stroke-gray-500"
                                                    viewBox="0 0 256 256">
                                                    <line x1="128" y1="32" x2="128"
                                                        y2="64" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="24"></line>
                                                    <line x1="195.9" y1="60.1" x2="173.3"
                                                        y2="82.7" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="24"></line>
                                                    <line x1="224" y1="128" x2="192"
                                                        y2="128" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="24"></line>
                                                    <line x1="195.9" y1="195.9" x2="173.3"
                                                        y2="173.3" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="24"></line>
                                                    <line x1="128" y1="224" x2="128"
                                                        y2="192" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="24"></line>
                                                    <line x1="60.1" y1="195.9" x2="82.7"
                                                        y2="173.3" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="24"></line>
                                                    <line x1="32" y1="128" x2="64"
                                                        y2="128" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="24"></line>
                                                    <line x1="60.1" y1="60.1" x2="82.7"
                                                        y2="82.7" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="24"></line>
                                                </svg>
                                                <span
                                                    class="font-semibold tracking-widest text-gray-500 font-merriweather">Unggah...</span>
                                            </div>
                                            <button wire:loading wire:target='image' type="button"
                                                wire:click="$cancelUpload('image')"
                                                class="px-2 py-1 text-xs font-medium text-white bg-red-600 rounded-md hover:bg-red-800 focus:bg-red-800 font-jakarta">Batalkan
                                                Proses
                                                Unggahan
                                            </button>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            @error('image')
                                <p class="text-xs italic text-red-500 font-jakarta">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <button wire:loading.class='bg-amber-700' wire:loading.attr='disabled' type="submit"
                                class="flex items-center justify-center w-full py-3 space-x-2 font-semibold text-center text-white rounded-md outline-none bg-amber-500 hover:bg-amber-700 focus:bg-amber-700">
                                <div wire:loading
                                    class="w-3 h-3 border-2 border-white border-solid rounded-full animate-spin border-t-transparent">
                                </div>
                                <span wire:loading.remove>Buat Kegiatan</span>
                                <span wire:loading>Memuat...</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <livewire:admin.article.category.index />
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
@push('scripts')
    <script>
        document.addEventListener('livewire:navigated', () => {
            console.log('Navigated Pages Create');

            const title = document.querySelector('#title');
            const slug = document.querySelector('#slug');

            title.addEventListener('change', function() {
                fetch('/admin/events/checkSlug?title=' + title.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug)
            });

            ClassicEditor
                .create(document.querySelector('#description'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        @this.set('description', editor.getData());
                    })
                })
                .catch(error => {
                    console.error(error);
                });
        }, {
            once: true
        });
    </script>
@endpush
