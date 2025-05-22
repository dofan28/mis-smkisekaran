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
            'name' => 'Mengelola Halaman Teks Berjalan',
            'url' => '/admin/pages/runningText',
        ],
        [
            'name' => 'Edit Halaman Teks Berjalan',
            'url' => '/admin/pages/runningText/' . $pageRunningText->slug . '/edit',
        ],
    ]"></x-breadcrumb>

    <main class="py-10">
        <div class="p-6 bg-white rounded-lg shadow-lg">
            <div class="flex items-center justify-center ">
                <div class="w-full mx-auto bg-white">
                    <form wire:submit='update'>
                        <div class="mb-5">
                            <label for="title" class="block mb-1 font-semibold text-gray-800 font-jakarta">
                                Judul
                            </label>
                            <div class="relative">
                                <input wire:model='title' type="text" name="title" id="title"
                                    placeholder="Masukkan judul" value="{{ old('title') }}"
                                    class="w-full rounded-md border bg-white py-3 px-5 text-sm text-gray-600 outline-none focus:border-greenMain font-jakarta focus:shadow-md @error('title') border-red-500 @enderror"
                                    maxlength="50" required autofocus />
                                <span class="absolute text-xs text-gray-500 right-3 font-jakarta bottom-3">
                                    <span x-text="$wire.title ? $wire.title.length : 0"></span>/50
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
                            <input wire:model="slug" type="text" title="slug" name="slug" id="slug"
                                value="{{ old('slug') }}"
                                class="w-full rounded-md border bg-gray-100 py-3 px-5 text-sm  text-gray-600 outline-none focus:border-greenMain font-jakarta focus:shadow-md @error('slug') border-red-500 @enderror"
                                disabled required />
                            @error('slug')
                                <p class="text-xs italic text-red-500 font-jakarta">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <div wire:ignore>
                                <label for="content" class="block mb-1 font-semibold text-gray-800 font-jakarta">
                                    Konten
                                </label>
                                <textarea wire:model="content"
                                    class="w-full rounded-md border bg-white py-3 px-5 text-sm  text-gray-600 outline-none focus:border-greenMain font-jakarta focus:shadow-md @error('content') border-red-500 @enderror"
                                    name="content" id="content"></textarea>
                            </div>
                            @error('content')
                                <p class="text-xs italic text-red-500 font-jakarta">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <button wire:loading.class='bg-amber-700' wire:loading.attr='disabled' type="submit"
                                class="flex items-center justify-center w-full py-3 space-x-2 font-semibold text-center text-white rounded-md outline-none bg-amber-500 hover:bg-amber-700 focus:bg-amber-700">
                                <div wire:loading
                                    class="w-3 h-3 border-2 border-white border-solid rounded-full animate-spin border-t-transparent">
                                </div>
                                <span wire:loading.remove>Edit Halaman Teks Berjalan</span>
                                <span wire:loading>Memuat...</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script>
        document.addEventListener('livewire:navigated', () => {
            const title = document.querySelector('#title');
            const slug = document.querySelector('#slug');

            title.addEventListener('change', function() {
                fetch('/admin/pages/checkSlug?title=' + title.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug)
            });

            ClassicEditor
                .create(document.querySelector('#content'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        @this.set('content', editor.getData());
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
