<h3 class="border-greenMain px-4 text-greenMain border-l-4 font-merriweather font-bold sm:text-3xl text-xl tracking-wide"> {{ $header }}
</h3>
<div class="flex sm:flex-row flex-col items-center space-x-4 font-jakarta">
    @isset($search)
        <div x-data="{ search: '', isExpanded: false }" class="relative">
            <input wire:model.live="search"  type="text" x-model="search" @focus="isExpanded = true"
                @blur="isExpanded = search === '' ? false : true" placeholder="Cari ..." :class="isExpanded ? 'w-72' : 'w-48'"
                class="px-4 py-2 pl-10 text-sm text-gray-800  border border-transparent rounded-full focus:outline-none focus:ring-2 focus:ring-greenMain focus:bg-white transition-all duration-300" />
            <svg class="absolute left-3 top-2 h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M12.9 14.32A8 8 0 1114.32 12.9l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM8 14A6 6 0 108 2a6 6 0 000 12z"
                    clip-rule="evenodd" />
            </svg>
        </div>
    @endisset
    <div class="md:flex items-center relative hidden">
        <div class="bg-white rounded-full bg-cover object-cover p-2 border border-greenMain">
            <img src="/img/admin.png" alt="Admin SMK ISLAM SEKARAN" class="h-8">
        </div>
        <span class="text-xs font-jakarta text-greenMain font-semibold ml-2">Administrator</span>
    </div>
</div>
