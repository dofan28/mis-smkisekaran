{{-- <div>
    <!-- Slide 1 -->
    <div x-show="card === 1" class="absolute inset-0 transition-opacity duration-1000 ease-in-out"
        x-transition:enter="transition-opacity ease-in-out duration-1000" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in-out duration-1000"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        style="background-image: url('{{ $slider_1 ? asset('storage/' . $slider_1->image) : 'img/img_not_found.png' }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-gradient-to-r from-greenMain/60 to-transparent">
            <div class="flex flex-col items-start justify-center h-full max-w-6xl px-8 mx-auto">
                @if ($slider_1)
                    @php
                        $titleSlider1 = $slider_1->title;

                        $words = explode(' ', $titleSlider1);

                        $firstPartSlider1;
                        $secondPartSlider1;

                        $totalWords = count($words);

                        if ($totalWords <= 4) {
                            $firstPartSlider1 = implode(' ', $words);
                        } else {
                            $firstPartSlider1 = implode(' ', array_slice($words, 0, 4));
                            $secondPartSlider1 = implode(' ', array_slice($words, 4));
                        }
                    @endphp
                @endif
                <div class="mb-4 text-4xl font-bold text-white lg:text-5xl md:text-5xl font-merriweather">
                    <div class="p-1 uppercase break-words">
                        <span class="bg-amber-500">{{ $firstPartSlider1 ?? '' }}</span>
                    </div>
                    <div class="p-1 mt-1 uppercase break-words line-clamp-1">
                        <span class="bg-greenMain">{{ $secondPartSlider1 ?? '' }}</span>
                    </div>
                </div>
                @if ($slider_1)
                    <hr class="w-1/2 mt-1 border-2 border-opacity-60 border-amber-500">
                @endif
                <div
                    class="max-w-2xl mb-8 text-xl text-white break-words bg-opacity-10 font-jakarta bg-amber-500 line-clamp-5">
                    {!! $slider_1 ? $slider_1->content : '' !!}
                </div>
                @if ($slider_1)
                    <a href="#information"
                        class="relative z-10 flex items-center justify-center gap-2 px-4 py-2 overflow-hidden text-lg font-semibold text-white border-2 rounded-md shadow-xl bg-amber-500 backdrop-blur-md isolation-auto border-amber-500 before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-greenMain hover:text-gray-50 before:-z-10 before:aspect-square before:hover:scale-150 before:hover:duration-700 group">
                        Telusuri Lebih Lanjut
                        <svg class="justify-end w-8 h-8 p-2 duration-300 ease-linear rotate-45 border rounded-full border-gray-50 group-hover:rotate-90 group-hover:bg-amber-50 text-gray-50 group-hover:border-none"
                            viewBox="0 0 16 19" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 18C7 18.5523 7.44772 19 8 19C8.55228 19 9 18.5523 9 18H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 18L9 1H7L7 18H9Z"
                                class="fill-gray-50 group-hover:fill-amber-500"></path>
                        </svg>
                    </a>
                @endif
            </div>
        </div>
    </div>

    <!-- Slide 2 -->
    <div x-show="card === 2" class="absolute inset-0 transition-opacity duration-1000 ease-in-out"
        x-transition:enter="transition-opacity ease-in-out duration-1000" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in-out duration-1000"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        style="background-image: url('{{ $slider_2 ? asset('storage/' . $slider_2->image) : 'img/img_not_found.png' }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-gradient-to-l from-amber-500/70 to-transparent">
            <div class="flex flex-col items-end justify-center h-full max-w-6xl px-8 mx-auto text-right">
                @if ($slider_2)
                    @php
                        $titleSlider2 = $slider_2->title;

                        $words = explode(' ', $titleSlider2);

                        $firstPartSlider2;
                        $secondPartSlider2;

                        $totalWords = count($words);

                        if ($totalWords <= 4) {
                            $firstPartSlider2 = implode(' ', $words);
                        } else {
                            $firstPartSlider2 = implode(' ', array_slice($words, 0, 4));
                            $secondPartSlider2 = implode(' ', array_slice($words, 4));
                        }
                    @endphp
                @endif
                <div class="mb-4 text-4xl font-bold text-white lg:text-5xl md:text-5xl font-merriweather">
                    <div class="p-1 uppercase break-words">
                        <span class="bg-amber-500">{{ $firstPartSlider2 ?? '' }}</span>
                    </div>
                    <div class="p-1 mt-1 uppercase break-words line-clamp-1">
                        <span class="bg-amber-500">{{ $secondPartSlider2 ?? '' }}</span>
                    </div>
                </div>
                @if ($slider_2)
                    <hr class="w-1/2 mt-1 border-2 border-opacity-60 border-greenMain">
                @endif
                <div
                    class="max-w-2xl mb-8 text-lg text-white break-words lg:text-xl md:text-xl bg-opacity-10 font-jakarta bg-amber-500 line-clamp-5">
                    {!! $slider_2 ? $slider_2->content : '' !!}
                </div>
                @if ($slider_2)
                <a href="#information"
                class="relative z-10 flex items-center justify-center gap-2 px-4 py-2 overflow-hidden text-lg font-semibold text-white border-2 rounded-md shadow-xl bg-amber-500 backdrop-blur-md isolation-auto border-amber-500 before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-greenMain hover:text-gray-50 before:-z-10 before:aspect-square before:hover:scale-150 before:hover:duration-700 group">
                Telusuri Lebih Lanjut
                <svg class="justify-end w-8 h-8 p-2 duration-300 ease-linear rotate-45 border rounded-full border-gray-50 group-hover:rotate-90 group-hover:bg-amber-50 text-gray-50 group-hover:border-none"
                    viewBox="0 0 16 19" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 18C7 18.5523 7.44772 19 8 19C8.55228 19 9 18.5523 9 18H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 18L9 1H7L7 18H9Z"
                        class="fill-gray-50 group-hover:fill-amber-500"></path>
                </svg>
            </a>
                @endif
            </div>
        </div>
    </div>

    <!-- Slide 3 -->
    <div x-show="card === 3" class="absolute inset-0 transition-opacity duration-1000 ease-in-out"
        x-transition:enter="transition-opacity ease-in-out duration-1000" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in-out duration-1000"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        style="background-image: url('{{ $slider_3 ? asset('storage/' . $slider_3->image) : 'img/img_not_found.png' }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-gradient-to-t from-green-900/80 to-transparent">
            <div class="flex flex-col items-center justify-center h-full max-w-6xl px-8 mx-auto text-center">
                @if ($slider_3)
                    @php
                        $titleSlider3 = $slider_3->title;

                        $words = explode(' ', $titleSlider3);

                        $firstPartSlider3;
                        $secondPartSlider3;

                        $totalWords = count($words);

                        if ($totalWords <= 4) {
                            $firstPartSlider3 = implode(' ', $words);
                        } else {
                            $firstPartSlider3 = implode(' ', array_slice($words, 0, 4));
                            $secondPartSlider3 = implode(' ', array_slice($words, 4));
                        }
                    @endphp
                @endif
                <div class="mb-4 text-4xl font-bold text-white lg:text-5xl md:text-5xl font-merriweather">
                    <div class="p-1 uppercase break-words">
                        <span class="bg-amber-500">{{ $firstPartSlider3 ?? '' }}</span>
                    </div>
                    <div class="p-1 mt-1 uppercase break-words line-clamp-1">
                        <span class="bg-greenMain">{{ $secondPartSlider3 ?? '' }}</span>
                    </div>
                </div>
                @if ($slider_3)
                    <hr class="w-1/2 mt-1 border-2 border-opacity-60 border-amber-500">
                @endif
                <div
                    class="max-w-2xl mb-8 text-lg text-white break-words lg:text-xl md:text-xl bg-opacity-10 font-jakarta bg-greenMain line-clamp-5">
                    {!! $slider_2 ? $slider_3->content : '' !!}
                </div>
                @if ($slider_3)
                    <a href="#information"
                        class="relative z-10 flex items-center justify-center gap-2 px-4 py-2 overflow-hidden text-lg font-semibold text-white border-2 rounded-md shadow-xl bg-amber-500 backdrop-blur-md isolation-auto border-amber-500 before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-greenMain hover:text-gray-50 before:-z-10 before:aspect-square before:hover:scale-150 before:hover:duration-700 group">
                        Telusuri Lebih Lanjut
                        <svg class="justify-end w-8 h-8 p-2 duration-300 ease-linear rotate-45 border rounded-full border-gray-50 group-hover:rotate-90 group-hover:bg-amber-50 text-gray-50 group-hover:border-none"
                            viewBox="0 0 16 19" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 18C7 18.5523 7.44772 19 8 19C8.55228 19 9 18.5523 9 18H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 18L9 1H7L7 18H9Z"
                                class="fill-gray-50 group-hover:fill-amber-500"></path>
                        </svg>
                    </a>
                @endif

            </div>
        </div>
    </div>

    <!-- Button to go to the previous slide -->
    <button
        class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center text-white opacity-50 hover:opacity-90"
        @click="card = card > 1 ? card - 1 : 3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
    </button>

    <!-- Button to go to the next slide -->
    <button
        class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center text-white opacity-50 hover:opacity-90"
        @click="card = card < 3 ? card + 1 : 1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    </button>

    <!-- Standard Slide Indicators -->
    <div class="absolute flex space-x-3 transform -translate-x-1/2 bottom-8 left-1/2">
        <button type="button" :class="card === 1 ? 'bg-white' : 'bg-gray-400'"
            class="box-content w-2 h-2 transition-colors duration-300 rounded-full cursor-pointer" @click="card = 1"
            aria-label="Slide 1"></button>
        <button type="button" :class="card === 2 ? 'bg-white' : 'bg-gray-400'"
            class="box-content w-2 h-2 transition-colors duration-300 rounded-full cursor-pointer" @click="card = 2"
            aria-label="Slide 2"></button>
        <button type="button" :class="card === 3 ? 'bg-white' : 'bg-gray-400'"
            class="box-content w-2 h-2 transition-colors duration-300 rounded-full cursor-pointer" @click="card = 3"
            aria-label="Slide 3"></button>
    </div>
</div> --}}
@push('styles')
    <style>
        .running-text-container {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
        }

        .running-text {
            display: inline-block;
            padding-left: 100%;
            animation: runningText 20s linear infinite;
        }

        @keyframes runningText {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }
    </style>
@endpush
<div>
    <!-- Slide 1 -->
    <div x-show="card === 1" class="absolute inset-0 transition-opacity duration-1000 ease-in-out"
        x-transition:enter="transition-opacity ease-in-out duration-1000" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in-out duration-1000"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        style="background-image: url('{{ $slider_1 ? asset('storage/' . $slider_1->image) : 'img/img_not_found.png' }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-gradient-to-r from-greenMain/60 to-transparent">
            <div class="flex flex-col items-start justify-center h-full max-w-6xl px-8 mx-auto">
                @if ($slider_1)
                    @php
                        $titleSlider1 = $slider_1->title;

                        $words = explode(' ', $titleSlider1);

                        $firstPartSlider1;
                        $secondPartSlider1;

                        $totalWords = count($words);

                        if ($totalWords <= 4) {
                            $firstPartSlider1 = implode(' ', $words);
                        } else {
                            $firstPartSlider1 = implode(' ', array_slice($words, 0, 4));
                            $secondPartSlider1 = implode(' ', array_slice($words, 4));
                        }
                    @endphp
                @endif
                <div class="mb-4 text-4xl font-bold text-white lg:text-3xl md:text-3xl font-merriweather">
                    <div class="p-1 uppercase break-words">
                        <span class="">{{ $firstPartSlider1 ?? '' }}</span>
                    </div>
                    <div class="p-1 mt-1 uppercase break-words line-clamp-1">
                        <span class="">{{ $secondPartSlider1 ?? '' }}</span>
                    </div>
                </div>
                @if ($slider_1)
                    <hr class="w-1/2 mt-1 border-2 border-opacity-60 border-amber-500">
                @endif
                <div
                    class="max-w-2xl mb-8 text-xl text-white break-words bg-opacity-10 font-jakarta bg-amber-500 line-clamp-5">
                    {!! $slider_1 ? $slider_1->content : '' !!}
                </div>
                @if ($slider_1)
                    <a href="#information"
                        class="relative z-10 flex items-center justify-center gap-2 px-4 py-2 overflow-hidden text-lg font-semibold text-white border-2 rounded-md shadow-xl bg-amber-500 backdrop-blur-md isolation-auto border-amber-500 before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-greenMain hover:text-gray-50 before:-z-10 before:aspect-square before:hover:scale-150 before:hover:duration-700 group">
                        Telusuri Lebih Lanjut
                        <svg class="justify-end w-8 h-8 p-2 duration-300 ease-linear rotate-45 border rounded-full border-gray-50 group-hover:rotate-90 group-hover:bg-amber-50 text-gray-50 group-hover:border-none"
                            viewBox="0 0 16 19" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 18C7 18.5523 7.44772 19 8 19C8.55228 19 9 18.5523 9 18H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 18L9 1H7L7 18H9Z"
                                class="fill-gray-50 group-hover:fill-amber-500"></path>
                        </svg>
                    </a>
                @endif
            </div>
        </div>
    </div>

    <!-- Slide 2 -->
    <div x-show="card === 2" class="absolute inset-0 transition-opacity duration-1000 ease-in-out"
        x-transition:enter="transition-opacity ease-in-out duration-1000" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in-out duration-1000"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        style="background-image: url('{{ $slider_2 ? asset('storage/' . $slider_2->image) : 'img/img_not_found.png' }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-gradient-to-l from-amber-500/70 to-transparent">
            <div class="flex flex-col items-end justify-center h-full max-w-6xl px-8 mx-auto text-right">
                @if ($slider_2)
                    @php
                        $titleSlider2 = $slider_2->title;

                        $words = explode(' ', $titleSlider2);

                        $firstPartSlider2;
                        $secondPartSlider2;

                        $totalWords = count($words);

                        if ($totalWords <= 4) {
                            $firstPartSlider2 = implode(' ', $words);
                        } else {
                            $firstPartSlider2 = implode(' ', array_slice($words, 0, 4));
                            $secondPartSlider2 = implode(' ', array_slice($words, 4));
                        }
                    @endphp
                @endif
                <div class="mb-4 text-4xl font-bold text-white lg:text-3xl md:text-3xl font-merriweather">
                    <div class="p-1 uppercase break-words">
                        <span class="">{{ $firstPartSlider2 ?? '' }}</span>
                    </div>
                    <div class="p-1 mt-1 uppercase break-words line-clamp-1">
                        <span class="">{{ $secondPartSlider2 ?? '' }}</span>
                    </div>
                </div>
                @if ($slider_2)
                    <hr class="w-1/2 mt-1 border-2 border-opacity-60 border-amber-500">
                @endif
                <div
                    class="max-w-2xl mb-8 text-lg text-white break-words lg:text-xl md:text-xl bg-opacity-10 font-jakarta bg-amber-500 line-clamp-5">
                    {!! $slider_2 ? $slider_2->content : '' !!}
                </div>
                @if ($slider_2)
                    <a href="#information"
                        class="relative z-10 flex items-center justify-center gap-2 px-4 py-2 overflow-hidden text-lg font-semibold text-white border-2 rounded-md shadow-xl bg-amber-500 backdrop-blur-md isolation-auto border-amber-500 before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-greenMain hover:text-gray-50 before:-z-10 before:aspect-square before:hover:scale-150 before:hover:duration-700 group">
                        Telusuri Lebih Lanjut
                        <svg class="justify-end w-8 h-8 p-2 duration-300 ease-linear rotate-45 border rounded-full border-gray-50 group-hover:rotate-90 group-hover:bg-amber-50 text-gray-50 group-hover:border-none"
                            viewBox="0 0 16 19" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 18C7 18.5523 7.44772 19 8 19C8.55228 19 9 18.5523 9 18H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 18L9 1H7L7 18H9Z"
                                class="fill-gray-50 group-hover:fill-amber-500"></path>
                        </svg>
                    </a>
                @endif
            </div>
        </div>
    </div>

    <!-- Slide 3 -->
    <div x-show="card === 3" class="absolute inset-0 transition-opacity duration-1000 ease-in-out"
        x-transition:enter="transition-opacity ease-in-out duration-1000" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in-out duration-1000"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        style="background-image: url('{{ $slider_3 ? asset('storage/' . $slider_3->image) : 'img/img_not_found.png' }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-gradient-to-t from-green-900/80 to-transparent">
            <div class="flex flex-col items-center justify-center h-full max-w-6xl px-8 mx-auto text-center">
                @if ($slider_3)
                    @php
                        $titleSlider3 = $slider_3->title;

                        $words = explode(' ', $titleSlider3);

                        $firstPartSlider3;
                        $secondPartSlider3;

                        $totalWords = count($words);

                        if ($totalWords <= 4) {
                            $firstPartSlider3 = implode(' ', $words);
                        } else {
                            $firstPartSlider3 = implode(' ', array_slice($words, 0, 4));
                            $secondPartSlider3 = implode(' ', array_slice($words, 4));
                        }
                    @endphp
                @endif
                <div class="mb-4 text-4xl font-bold text-white lg:text-3xl md:text-3xl font-merriweather">
                    <div class="p-1 uppercase break-words">
                        <span class="">{{ $firstPartSlider3 ?? '' }}</span>
                    </div>
                    <div class="p-1 mt-1 uppercase break-words line-clamp-1">
                        <span class="">{{ $secondPartSlider3 ?? '' }}</span>
                    </div>
                </div>
                @if ($slider_3)
                    <hr class="w-1/2 mt-1 border-2 border-opacity-60 border-amber-500">
                @endif
                <div
                    class="max-w-2xl mb-8 text-lg text-white break-words lg:text-xl md:text-xl bg-opacity-10 font-jakarta bg-greenMain line-clamp-5">
                    {!! $slider_2 ? $slider_3->content : '' !!}
                </div>
                @if ($slider_3)
                    <a href="#information"
                        class="relative z-10 flex items-center justify-center gap-2 px-4 py-2 overflow-hidden text-lg font-semibold text-white border-2 rounded-md shadow-xl bg-amber-500 backdrop-blur-md isolation-auto border-amber-500 before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-greenMain hover:text-gray-50 before:-z-10 before:aspect-square before:hover:scale-150 before:hover:duration-700 group">
                        Telusuri Lebih Lanjut
                        <svg class="justify-end w-8 h-8 p-2 duration-300 ease-linear rotate-45 border rounded-full border-gray-50 group-hover:rotate-90 group-hover:bg-amber-50 text-gray-50 group-hover:border-none"
                            viewBox="0 0 16 19" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 18C7 18.5523 7.44772 19 8 19C8.55228 19 9 18.5523 9 18H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 18L9 1H7L7 18H9Z"
                                class="fill-gray-50 group-hover:fill-amber-500"></path>
                        </svg>
                    </a>
                @endif

            </div>
        </div>
    </div>

    <!-- Button to go to the previous slide -->
    <button
        class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center text-white opacity-50 hover:opacity-90"
        @click="card = card > 1 ? card - 1 : 3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
    </button>

    <!-- Button to go to the next slide -->
    <button
        class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center text-white opacity-50 hover:opacity-90"
        @click="card = card < 3 ? card + 1 : 1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    </button>

    <!-- Standard Slide Indicators -->
    <div class="absolute flex space-x-3 transform -translate-x-1/2 bottom-16 left-1/2">
        <button type="button" :class="card === 1 ? 'bg-white' : 'bg-gray-400'"
            class="box-content w-2 h-2 transition-colors duration-300 rounded-full cursor-pointer" @click="card = 1"
            aria-label="Slide 1"></button>
        <button type="button" :class="card === 2 ? 'bg-white' : 'bg-gray-400'"
            class="box-content w-2 h-2 transition-colors duration-300 rounded-full cursor-pointer" @click="card = 2"
            aria-label="Slide 2"></button>
        <button type="button" :class="card === 3 ? 'bg-white' : 'bg-gray-400'"
            class="box-content w-2 h-2 transition-colors duration-300 rounded-full cursor-pointer" @click="card = 3"
            aria-label="Slide 3"></button>
    </div>
    @if ($runningTexts->count() > 0)
        <div class="absolute bottom-0 left-0 right-0 py-2 bg-greenMain running-text-container">
            <div id="runningText" class="text-sm tracking-widest text-white running-text font-jakarta"></div>
        </div>
    @endif
</div>
@push('scripts')
    <script>
        document.addEventListener('livewire:navigated', () => {
            // Array teks yang akan bergantian ditampilkan
            const runningTexts = [
                @foreach ($runningTexts as $runningText)
                    {
                        title: "{{ $runningText->title }}",
                        content: "{!! $runningText->content !!}"
                    },
                @endforeach
            ];

            let currentIndex = 0; // Indeks teks yang akan ditampilkan pertama kali
            const runningTextElement = document.getElementById(
                'runningText'); // Ambil elemen yang akan menampilkan teks

            // Fungsi untuk memperbarui teks
            function updateRunningText() {
                if (runningTexts.length > 0) { // Pastikan ada data
                    const currentText = runningTexts[currentIndex]; // Ambil teks dari array
                    runningTextElement.innerHTML =
                        `<span class="font-semibold">${currentText.title}:</span class="inline-block"> <span class="inline-block">${currentText.content}</span>`;

                    // Pindahkan indeks ke teks berikutnya, kembali ke awal jika sudah sampai akhir
                    currentIndex = (currentIndex + 1) % runningTexts.length;
                }
            }

            // Jalankan teks pertama segera
            updateRunningText();

            // Atur interval untuk memperbarui teks setiap 3 detik
            setInterval(updateRunningText, 20000);
        })
    </script>
@endpush
