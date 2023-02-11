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
    <link rel="stylesheet" href="{{ asset('build/assets/app-3d69d9f2.css') }}">
    <title>Leadway Credit Union</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="bg-white dark:bg-gray-900">
    <div class="relative w-full overflow-hidden">
        <header class="absolute top-0 left-0 w-full flex justify-center">
            <nav class="absolute w-full">
                <div class="relative z-30 bg-white dark:bg-gray-900">
                    <div class="container m-auto md:px-12 lg:py-0 lg:px-10">
                        <div class="flex flex-wrap items-center justify-between py-4 gap-6 md:gap-0">
                            <input type="checkbox" name="toggle_nav" id="toggle_nav" class="peer hidden">
                            <div class="w-full px-6 flex justify-between md:w-max md:px-0 z-30">
                                <a href="#" aria-label="logo">
                                    <img src="images/logo.svg" class="w-36 dark:hidden" alt="tailus logo" width="144"
                                        height="68">
                                    <img src="images/logo-white.svg" class="w-36 hidden dark:block" alt="tailus logo"
                                        width="144" height="68">
                                </a>

                                <div class="flex items-center md:hidden max-h-10">
                                    <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger"
                                        class="relative p-2">
                                        <div id="line"
                                            class="m-auto h-0.5 w-6 rounded bg-sky-900 dark:bg-gray-300 transition duration-300">
                                        </div>
                                        <div id="line2"
                                            class="m-auto mt-2 h-0.5 w-6 rounded bg-sky-900 dark:bg-gray-300 transition duration-300">
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <label for="toggle_nav"
                                class="hidden peer-checked:block fixed w-full h-full left-0 top-0 z-10 bg-green-200 bg-opacity-30 backdrop-blur backdrop-filter"></label>
                            <div class="hidden z-40 peer-checked:flex w-11/12 mx-auto md:mx-0 flex-col 
                            justify-end items-center gap-y-8 p-6 
                            rounded-xl bg-white dark:bg-gray-800 md:flex md:w-8/12 
                            md:gap-y-0 md:gap-x-4 md:divide-x md:p-0 
                            md:flex-row md:bg-transparent lg:w-7/12">
                                <div class="block w-full md:w-max">
                                    <ul class="gap-y-6 tracking-wide 
                                    text-gray-500 dark:text-gray-300 font-medium flex flex-col md:flex-row md:gap-y-0">
                                        <li>
                                            <a href="#" class="block md:px-4">
                                                <div
                                                    class="relative text-green-600 dark:text-green-400
                                                            before:absolute before:-bottom-2 md:before:-bottom-7 before:w-full before:h-1 before:mx-auto before:mt-auto before:rounded-t-full before:bg-green-500">
                                                    <span>Home</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="block md:px-4 group">
                                                <div
                                                    class="relative group
                                                            before:absolute before:-bottom-2 md:before:-bottom-7 before:w-full before:h-0.5 before:origin-left before:mt-auto before:rounded-full before:bg-green-800 before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                                    <span class="group-hover:text-green-500">Services</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="block md:px-4 group">
                                                <div
                                                    class="relative group
                                                            before:absolute before:-bottom-2 md:before:-bottom-7 before:w-full before:h-0.5 before:origin-left before:mt-auto before:rounded-full before:bg-green-800 before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                                    <span class="group-hover:text-green-500">About</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="w-full pl-2
                                sm:w-max gap-4 flex min-w-max flex-col sm:flex-row">
                                    <button type="button" title="Start buying"
                                        class="w-full py-3 px-6 rounded-xl text-center transition dark:active:bg-green-900 dark:focus:bg-gray-800 active:bg-green-200 focus:bg-green-100 sm:w-max">
                                        <span class="block text-green-600 dark:text-green-500 font-semibold">
                                            Login
                                        </span>
                                    </button>
                                    <button type="button" title="Start buying"
                                        class="w-full py-3 px-6 rounded-xl text-center transition bg-green-600 hover:bg-green-700 active:bg-green-800 focus:bg-green-500 sm:w-max">
                                        <span class="block text-white font-semibold">
                                            Book Demo
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div aria-hidden="true"
                    class="container h-4 -mt-6 mx-auto bg-green-600/30 dark:bg-green-900/30 blur md:-mt-4"></div>
            </nav>
        </header>
        <div class="min-h-screen flex dark:from-gray-900 bg-gradient-to-b from-white to-green-50">
            <div class="container m-auto px-6 py-20 md:pb-0 md:pt-40 md:px-12 lg:py-0 lg:px-10">
                <div class="flex flex-wrap gap-12">
                    <div class="lg:w-6/12 lg:pt-32 lg:pb-20">
                        <div class="space-y-8 mt-8 lg:-mr-24 xl:-mr-0">
                            <h1 class="text-4xl text-gray-800 dark:text-white font-bold md:text-5xl lg:leading-tight">
                                Uncompromised Versatility –When it Matters the Most.</h1>
                            <p class="text-lg text-gray-600 dark:text-gray-300">Quod rerum dolor ab harum facere quo
                                nihil labore necessitatibus tempora?</p>

                            <div class="flex flex-col sm:flex-row gap-4">
                                <button type="button" title="Start buying"
                                    class="w-full py-3 px-6 rounded-xl text-center transition bg-green-600 hover:bg-green-700 active:bg-green-800 focus:bg-green-500 sm:w-max">
                                    <span class="block text-white font-semibold">
                                        Book Demo
                                    </span>
                                </button>
                                <button type="button" title="Start buying"
                                    class="w-full py-3 px-6 rounded-xl text-center transition dark:active:bg-green-900 dark:focus:bg-gray-800 active:bg-green-200 focus:bg-green-100 sm:w-max">
                                    <div class="flex justify-center">
                                        <span class="block text-green-700 dark:text-green-400 font-semibold">
                                            Our showreel
                                        </span>
                                    </div>
                                </button>
                            </div>
                        </div>

                        <div class="mt-8 pt-8 border-t border-gray-300 dark:border-gray-700">
                            <h6 class="text-lg text-green-800 dark:text-green-400 font-semibold">Trusted by</h6>
                            <div class="mt-6 flex gap-6">
                                <div class="flex items-center">
                                    <img class="-hue-rotate-30 w-auto h-auto dark:grayscale"
                                        src="images/clients/grabyo.png" width="50" height="20" alt="logo partener">
                                </div>

                                <div class="flex items-center">
                                    <img class="-hue-rotate-30 w-auto h-auto dark:grayscale"
                                        src="images/clients/lifegroups.png" width="50" height="20" alt="logo partener">
                                </div>
                                <div class="flex items-center">
                                    <img class="-hue-rotate-30 w-auto h-auto dark:grayscale"
                                        src="images/clients/lilly.png" width="50" height="20" alt="logo partener">
                                </div>

                                <div class="flex items-center">
                                    <img class="-hue-rotate-30 w-auto h-auto dark:grayscale"
                                        src="images/clients/microsoft.png" width="50" height="20" alt="logo partener">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="hidden bottom-0 md:-right-32 md:block md:w-full md:ml-auto lg:absolute lg:-right-32 lg:w-[60%] xl:-right-48">
                        <img src="images/horse1.png" class="ml-48 lg:ml-0" alt="gril on an horse" loading="lazy"
                            width="1053" height="772">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <x-footer />

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <script>
        function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
    </script>
</body>

</html>