<div x-data="{ open: false }" @set-open.window="open = $event.detail">
    <div x-show="open" @keydown.escape.window="open = false" x-cloak
        class="fixed inset-0 z-50 flex items-center justify-center transition-opacity duration-300 ease-in-out bg-black bg-opacity-50">
        <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
            class="relative w-full max-w-4xl overflow-hidden bg-white border-2 rounded-lg shadow-lg">
            <div x-data="{ show: false, message: '' }"
                x-on:notify.window="message = $event.detail; show = true; setTimeout(() => show = false, 3000)"
                x-show="show" x-cloak
                class="fixed top-0 px-4 py-2 mt-4 mr-4 text-white bg-green-600 rounded-lg shadow-lg right-3"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300 transform"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <p x-text="message" class="text-sm font-jakarta"></p>
            </div>

            <div class="flex justify-between p-3">
                <h2 class="text-2xl font-bold text-greenMain font-merriweather ">Kelola Kategori</h2>
                <button type="button" @click="open = false" class="text-gray-400 hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <hr class="border border-opacity-60 border-greenMain">
            <div class="px-6 pt-6">
                <form wire:submit="save" class="space-y-2">
                    <label for="name" class="block text-sm font-semibold text-gray-800 font-jakarta">Nama
                        Kategori</label>
                    <div class="flex space-x-2">
                        <input wire:model="name" type="text" id="name"
                            class="w-full px-3 py-2 text-sm text-gray-600 bg-white border rounded-md outline-none appearance-none focus:border-greenMain font-jakarta focus:shadow-md"
                            required>
                        <div class="flex justify-end space-x-2 font-jakarta">
                            <button type="submit" wire:loading.class='bg-stone-900' wire:loading.attr='disabled'
                                class="px-4 py-2 text-sm text-white transition-colors duration-300 rounded-md bg-greenMain hover:bg-stone-900">
                                <span wire:loading.remove> {{ $isEditMode ? 'Edit' : 'Buat' }}</span>
                                <div wire:loading
                                    class="w-3 h-3 border-2 border-white border-solid rounded-full animate-spin border-t-transparent">
                                </div>
                            </button>
                        </div>
                    </div>
                    @error('name')
                        <p class="text-xs italic text-red-500 font-jakarta">{{ $message }}</p>
                    @enderror
                </form>

                <h3 class="mt-3 text-sm font-semibold text-gray-800 font-jakarta">Daftar Kategori</h3>
                <ul class="mt-2 space-y-2 overflow-y-auto max-h-80">
                    @foreach ($categories as $category)
                        <li wire:key='{{ $category->id }}'
                            class="flex items-center justify-between px-4 py-2 transition-colors duration-300 bg-gray-100 rounded-md hover:bg-green-100 font-jakarta">
                            <div class="text-sm font-medium text-gray-800 break-words">{{ $category->name }}</div>
                            <div class="flex items-center space-x-2">
                                <!-- Icon Edit (Feather Icon - Edit) -->
                                <button wire:click="edit({{ $category->id }})"
                                    class="relative flex items-center justify-center w-8 h-8 bg-blue-400 border-2 border-blue-800 group rounded-xl hover:bg-blue-600">
                                    <!-- Ikon Edit dengan animasi -->
                                    <svg viewBox="0 0 24 24"
                                        class="w-5 h-5 transition-transform duration-300 fill-white group-hover:rotate-180"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 17.25V21h3.75l10.937-10.938-3.75-3.75L3 17.25zM20.707 7.293a1.003 1.003 0 0 0 0-1.414L18.414 3.586a1.003 1.003 0 0 0-1.414 0L14.121 5.879l3.75 3.75 2.836-2.836z">
                                        </path>
                                    </svg>
                                </button>
                                @if (App\Models\Article::where('category_id', $category->id)->get()->count() > 0)
                                    <button wire:click="delete({{ $category->id }})"
                                        class="relative flex flex-col items-center justify-center w-8 h-8 overflow-hidden bg-gray-400 border-2 border-gray-600 cursor-not-allowed group rounded-xl hover:bg-gray-600"
                                        disabled>
                                        <svg viewBox="0 0 1.625 1.625"
                                            class="absolute -top-7 fill-white delay-100 group-hover:top-3 group-hover:animate-[spin_1.4s] group-hover:duration-1000"
                                            height="10" width="10">
                                            <path
                                                d="M.471 1.024v-.52a.1.1 0 0 0-.098.098v.618c0 .054.044.098.098.098h.487a.1.1 0 0 0 .098-.099h-.39c-.107 0-.195 0-.195-.195">
                                            </path>
                                            <path
                                                d="M1.219.601h-.163A.1.1 0 0 1 .959.504V.341A.033.033 0 0 0 .926.309h-.26a.1.1 0 0 0-.098.098v.618c0 .054.044.098.098.098h.487a.1.1 0 0 0 .098-.099v-.39a.033.033 0 0 0-.032-.033">
                                            </path>
                                            <path
                                                d="m1.245.465-.15-.15a.02.02 0 0 0-.016-.006.023.023 0 0 0-.023.022v.108c0 .036.029.065.065.065h.107a.023.023 0 0 0 .023-.023.02.02 0 0 0-.007-.016">
                                            </path>
                                        </svg>
                                        <svg width="10" fill="none" viewBox="0 0 39 7"
                                            class="duration-500 origin-right group-hover:rotate-90">
                                            <line stroke-width="4" stroke="white" y2="5" x2="39"
                                                y1="5"></line>
                                            <line stroke-width="3" stroke="white" y2="1.5" x2="26.0357"
                                                y1="1.5" x1="12"></line>
                                        </svg>
                                        <svg width="10" fill="none" viewBox="0 0 33 39" class="">
                                            <mask fill="white" id="path-1-inside-1_8_19">
                                                <path
                                                    d="M0 0H33V35C33 37.2091 31.2091 39 29 39H4C1.79086 39 0 37.2091 0 35V0Z">
                                                </path>
                                            </mask>
                                            <path mask="url(#path-1-inside-1_8_19)" fill="white"
                                                d="M0 0H33H0ZM37 35C37 39.4183 33.4183 43 29 43H4C-0.418278 43 -4 39.4183 -4 35H4H29H37ZM4 43C-0.418278 43 -4 39.4183 -4 35V0H4V35V43ZM37 0V35C37 39.4183 33.4183 43 29 43V35V0H37Z">
                                            </path>
                                            <path stroke-width="4" stroke="white" d="M12 6L12 29"></path>
                                            <path stroke-width="4" stroke="white" d="M21 6V29"></path>
                                        </svg>
                                    </button>
                                @else
                                    <button wire:click="delete({{ $category->id }})"
                                        class="relative flex flex-col items-center justify-center w-8 h-8 overflow-hidden bg-red-400 border-2 border-red-800 group rounded-xl hover:bg-red-600">
                                        <svg viewBox="0 0 1.625 1.625"
                                            class="absolute -top-7 fill-white delay-100 group-hover:top-3 group-hover:animate-[spin_1.4s] group-hover:duration-1000"
                                            height="10" width="10">
                                            <path
                                                d="M.471 1.024v-.52a.1.1 0 0 0-.098.098v.618c0 .054.044.098.098.098h.487a.1.1 0 0 0 .098-.099h-.39c-.107 0-.195 0-.195-.195">
                                            </path>
                                            <path
                                                d="M1.219.601h-.163A.1.1 0 0 1 .959.504V.341A.033.033 0 0 0 .926.309h-.26a.1.1 0 0 0-.098.098v.618c0 .054.044.098.098.098h.487a.1.1 0 0 0 .098-.099v-.39a.033.033 0 0 0-.032-.033">
                                            </path>
                                            <path
                                                d="m1.245.465-.15-.15a.02.02 0 0 0-.016-.006.023.023 0 0 0-.023.022v.108c0 .036.029.065.065.065h.107a.023.023 0 0 0 .023-.023.02.02 0 0 0-.007-.016">
                                            </path>
                                        </svg>
                                        <svg width="10" fill="none" viewBox="0 0 39 7"
                                            class="duration-500 origin-right group-hover:rotate-90">
                                            <line stroke-width="4" stroke="white" y2="5" x2="39"
                                                y1="5"></line>
                                            <line stroke-width="3" stroke="white" y2="1.5" x2="26.0357"
                                                y1="1.5" x1="12"></line>
                                        </svg>
                                        <svg width="10" fill="none" viewBox="0 0 33 39" class="">
                                            <mask fill="white" id="path-1-inside-1_8_19">
                                                <path
                                                    d="M0 0H33V35C33 37.2091 31.2091 39 29 39H4C1.79086 39 0 37.2091 0 35V0Z">
                                                </path>
                                            </mask>
                                            <path mask="url(#path-1-inside-1_8_19)" fill="white"
                                                d="M0 0H33H0ZM37 35C37 39.4183 33.4183 43 29 43H4C-0.418278 43 -4 39.4183 -4 35H4H29H37ZM4 43C-0.418278 43 -4 39.4183 -4 35V0H4V35V43ZM37 0V35C37 39.4183 33.4183 43 29 43V35V0H37Z">
                                            </path>
                                            <path stroke-width="4" stroke="white" d="M12 6L12 29"></path>
                                            <path stroke-width="4" stroke="white" d="M21 6V29"></path>
                                        </svg>
                                    </button>
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="px-3 pb-3">
                <x-pagination :items="$categories" />
            </div>
        </div>
    </div>
</div>
