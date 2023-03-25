<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />


    <link rel="stylesheet" href="{{ asset('build/assets/app-9e4714ae.css') }}">
    <title>Leadway Credit Union</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    {{-- @vite('resources/css/app.css') --}}
</head>

<body class=" antialiased">
    @if (session()->has('success'))
    <div class="mt-16">

        <div class="px-4 md:px-0">
            <div x-data="{show: true}" x-init="setTimeout(() => show = false, 10000)" x-show="show"
                class="{{ (session('success') ? 'bg-emerald-500' : 'bg-red-500 ') }} mx-auto max-w-lg rounded-lg md:max-w-4xl text-white ">
                <div class="container relative flex items-center justify-between px-6 py-4 mx-auto">
                    <span class="absolute inset-x-0 top-0 h-1.5 bg-black animate-life rounded-xl"></span>
                    <div class="flex">
                        <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current">
                            <path
                                d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z">
                            </path>
                        </svg>

                        <p class="mx-3">{{ session('success') }}</p>
                    </div>

                    <button @click="show = false"
                        class="p-1 transition-colors duration-300 transform rounded-md hover:bg-opacity-25 hover:bg-gray-600 focus:outline-none">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        @endif
    </div>
    @if (session()->has('error'))
    <div class="mt-16">

        <div class="px-4 md:px-0 ">
            <div x-data="{show: true}" x-init="setTimeout(() => show = false, 10000)" x-show="show"
                class="{{ (session('error') ? 'bg-red-500' : 'bg-red-500 ') }} mx-auto max-w-lg rounded-lg md:max-w-4xl text-white ">
                <div class="container relative flex items-center justify-between px-6 py-4 mx-auto">
                    <span class="absolute inset-x-0 top-0 h-1.5 bg-black animate-life rounded-xl"></span>
                    <div class="flex">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512"
                            class="w-6 h-6 mt-2 md:mt-0 fill-current">
                            <path
                                d="M96 64c0-17.7-14.3-32-32-32S32 46.3 32 64V320c0 17.7 14.3 32 32 32s32-14.3 32-32V64zM64 480c22.1 0 40-17.9 40-40s-17.9-40-40-40s-40 17.9-40 40s17.9 40 40 40z" />
                        </svg>

                        <p class="mx-3">{{ session('error') }}</p>
                    </div>

                    <button @click="show = false"
                        class="p-1 transition-colors duration-300 transform rounded-md hover:bg-opacity-25 hover:bg-gray-600 focus:outline-none">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        @endif
    </div>
    <x-nav />

    <div>
        {{ $slot }}
    </div>


    <x-footer />

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</body>
<script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
</script>

</html>