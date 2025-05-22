    <div class="flex items-center justify-center h-screen ">
        <div class="relative w-full max-w-md p-8 bg-white rounded-lg shadow-md bg-opacity-90">

            <div class="flex justify-center mt-6 mb-6">
                <img src="/img/logo_stroke.png" alt="Logo Sekolah" class="w-24 h-24 ">
            </div>
            @if (session()->has('error'))
                <div class="container w-full px-4 py-2 mx-auto leading-normal">
                    <div class="flex items-center justify-between bg-red-200 border-l-4 border-red-600"
                        x-show="showAlert" x-data="{ 'showAlert': true }">
                        <div class="flex items-center w-11/12 py-3 pl-4 bg-red-100">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block" height="24"
                                    viewBox="0 -960 960 960" width="24" fill='#dc2626'>
                                    <path
                                        d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240Zm40 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                </svg>
                            </div>
                            <p class="inline-block ml-2 text-sm font-medium text-red-600 align-middle font-poppins">
                                {{ session('error') }}

                            </p>
                        </div>
                        <button
                            class="px-4 overflow-hidden text-xl font-medium text-red-600 bg-transparent font-poppins "
                            @click="showAlert = false">x
                        </button>
                    </div>
                </div>
            @endif
            <h2 class="mb-6 text-3xl font-bold text-center font-merriweather">Masuk</h2>
            <form wire:submit='authenticate'>
                <div class="mb-4 font-jakarta">
                    <label for="email" class="block mb-1">Alamat Email</label>
                    <div class="relative">
                        <input wire:model='email' value="{{ old('email') }}" type="email" id="email"
                            placeholder="Masukkan email anda"
                            class="w-full px-4 py-2 pr-10 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-greenMain"
                            required autofocus>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24 " stroke-width="2"
                            stroke="gray" class="absolute w-6 h-6 top-2 right-3 fill-gray-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 12H8m-4 4h8m4-4h-8m4-4h-4m4 4H8m4 4h-4m4-8h-8" />
                        </svg>

                    </div>
                </div>
                <div class="mb-4 font-jakarta" x-data="{ showPassword: false }">
                    <label for="password" class="block mb-1">Kata Sandi</label>
                    <div class="relative">
                        <!-- Input Password -->
                        <input x-bind:type="showPassword ? 'text' : 'password'" wire:model='password'
                            value="{{ old('password') }}" id="password" placeholder="********"
                            class="w-full px-4 py-2 pr-10 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-greenMain"
                            required>

                        <!-- Toggle Button -->
                        <button type="button" @click="showPassword = !showPassword"
                            class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <!-- Eye Icon for Toggle Password Visibility -->
                            <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" height="24px"
                                viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                <path
                                    d="m644-428-58-58q9-47-27-88t-93-32l-58-58q17-8 34.5-12t37.5-4q75 0 127.5 52.5T660-500q0 20-4 37.5T644-428Zm128 126-58-56q38-29 67.5-63.5T832-500q-50-101-143.5-160.5T480-720q-29 0-57 4t-55 12l-62-62q41-17 84-25.5t90-8.5q151 0 269 83.5T920-500q-23 59-60.5 109.5T772-302Zm20 246L624-222q-35 11-70.5 16.5T480-200q-151 0-269-83.5T40-500q21-53 53-98.5t73-81.5L56-792l56-56 736 736-56 56ZM222-624q-29 26-53 57t-41 67q50 101 143.5 160.5T480-280q20 0 39-2.5t39-5.5l-36-38q-11 3-21 4.5t-21 1.5q-75 0-127.5-52.5T300-500q0-11 1.5-21t4.5-21l-84-82Zm319 93Zm-151 75Z" />
                            </svg>
                            <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" height="24px"
                                viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                <path
                                    d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center mb-6">
                    <input wire:model='remember' type="checkbox" id="remember" class="mr-2 accent-greenMain">
                    <label for="remember">Ingat Saya</label>
                </div>
                <div class="flex items-center justify-center font-semibold font-jakarta">
                    <button wire:loading.class='bg-stone-900' wire:loading.class='bg-stone-900' type="submit"
                        class="flex items-center justify-center w-full px-4 py-2 space-x-2 text-white rounded-lg shadow-lg bg-greenMain hover:bg-stone-900 focus:outline-none focus:ring-2 focus:ring-greenMain">
                        <div wire:loading
                            class="w-3 h-3 border-2 border-white border-solid rounded-full animate-spin border-t-transparent">
                        </div>
                        <span wire:loading.remove>Masuk</span>
                        <span wire:loading>Memuat...</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
