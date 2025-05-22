<div class="fixed top-10 left-1/2 -translate-x-1/2 " x-data="{ showAlert: true }" x-init="setTimeout(() => showAlert = false, 5000)">
    <div x-show="showAlert" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-x-0"
        x-transition:leave-end="opacity-0 translate-x-4"
        class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-800 bg-white rounded-lg shadow" role="alert">
        {!! $icon !!}
        <div class="ml-3 text-sm font-normal font-jakarta">{{ $message }}</div>
        <button @click="showAlert = false"
            class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-800 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8"
            aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7L1 13" />
            </svg>
        </button>
    </div>
</div>
