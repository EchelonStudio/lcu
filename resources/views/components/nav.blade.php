<nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
            <a class="{{ request()->is('/') ? 'text-white' : 'text-black' }} text-sm  font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase "
                href="{{ route('home') }}">
                <div class="flex items-center">
                    <img src="{{ asset('images/leadway.png') }}" alt="" class="w-16 h-16 rounded-full bg-cover mr-2">
                    <span>Leadway Credit
                        Union</span>
                </div>
            </a>
            <button
                class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                type="button" onclick="toggleNavbar('example-collapse-navbar')">
                <i class="{{ request()->is('/') ? 'text-white' : 'text-black' }} fas fa-bars"></i>
            </button>
        </div>
        <div class="lg:flex flex-grow items-center bg-gray-300 rounded-lg lg:bg-transparent lg:shadow-none hidden"
            id="example-collapse-navbar">
            <ul class="flex flex-col lg:flex-row list-none mr-auto">
                <li class="flex items-center">


                    <svg class="w-5 h-5 pl-2 md:pl-0 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="white"
                            d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z" />
                    </svg>

                    <a class="text-black md:text-white lg:hover:text-gray-300  px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="{{ route('cands') }}">
                        Checking & Savings
                    </a>
                </li>
                <li class="flex items-center">
                    <svg class="w-5 h-5 pl-2 md:pl-0 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="white"
                            d="M168 336C181.3 336 192 346.7 192 360C192 373.3 181.3 384 168 384H120C106.7 384 96 373.3 96 360C96 346.7 106.7 336 120 336H168zM360 336C373.3 336 384 346.7 384 360C384 373.3 373.3 384 360 384H248C234.7 384 224 373.3 224 360C224 346.7 234.7 336 248 336H360zM512 32C547.3 32 576 60.65 576 96V416C576 451.3 547.3 480 512 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H512zM512 80H64C55.16 80 48 87.16 48 96V128H528V96C528 87.16 520.8 80 512 80zM528 224H48V416C48 424.8 55.16 432 64 432H512C520.8 432 528 424.8 528 416V224z" />
                    </svg>
                    <a class="text-black md:text-white lg:hover:text-gray-300  px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="{{ route('cc') }}">
                        Credit Cards</a>
                </li>
                <li class="flex items-center">
                    <svg class="w-5 h-5 pl-2 md:pl-0 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="white"
                            d="M320 96H192L144.6 24.9C137.5 14.2 145.1 0 157.9 0H354.1c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128H320c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96H96c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4l0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84.1 96c0-11.1-9-20.1-20.1-20.1s-20.1 9-20.1 20.1v6c-5.6 1.2-10.9 2.9-15.9 5.1c-15 6.8-27.9 19.4-31.1 37.7c-1.8 10.2-.8 20 3.4 29c4.2 8.8 10.7 15 17.3 19.5c11.6 7.9 26.9 12.5 38.6 16l2.2 .7c13.9 4.2 23.4 7.4 29.3 11.7c2.5 1.8 3.4 3.2 3.8 4.1c.3 .8 .9 2.6 .2 6.7c-.6 3.5-2.5 6.4-8 8.8c-6.1 2.6-16 3.9-28.8 1.9c-6-1-16.7-4.6-26.2-7.9l0 0 0 0 0 0 0 0c-2.2-.8-4.3-1.5-6.3-2.1c-10.5-3.5-21.8 2.2-25.3 12.7s2.2 21.8 12.7 25.3c1.2 .4 2.7 .9 4.4 1.5c7.9 2.7 20.3 6.9 29.8 9.1V416c0 11.1 9 20.1 20.1 20.1s20.1-9 20.1-20.1v-5.5c5.4-1 10.5-2.5 15.4-4.6c15.7-6.7 28.4-19.7 31.6-38.7c1.8-10.4 1-20.3-3-29.4c-3.9-9-10.2-15.6-16.9-20.5c-12.2-8.8-28.3-13.7-40.4-17.4l-.8-.2c-14.2-4.3-23.8-7.3-29.9-11.4c-2.6-1.8-3.4-3-3.6-3.5c-.2-.3-.7-1.6-.1-5c.3-1.9 1.9-5.2 8.2-8.1c6.4-2.9 16.4-4.5 28.6-2.6c4.3 .7 17.9 3.3 21.7 4.3c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-4.4-1.2-14.4-3.2-21-4.4V224z" />
                    </svg>
                    <a class="text-black md:text-white lg:hover:text-gray-300  px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="{{ route('loans') }}">
                        Loans</a>
                </li>
                <li class="flex items-center">



                    <svg class="w-5 h-5 pl-2 md:pl-0 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                        <path fill="white"
                            d="M88 216c81.7 10.2 273.7 102.3 304 232H0c99.5-8.1 184.5-137 88-232zm32-152c32.3 35.6 47.7 83.9 46.4 133.6C249.3 231.3 373.7 321.3 400 448h96C455.3 231.9 222.8 79.5 120 64z" />
                    </svg>
                    <div x-data="{ 'isOpen': false }" class="relative inline-block">
                        <button @click="isOpen = !isOpen"
                            class="text-black md:text-white lg:hover:text-gray-300  px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold">
                            Product & Services
                            <div :class="{'-rotate-180': isOpen === true}">
                                <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>

                        <!-- Dropdown menu -->
                        <div x-show="isOpen" @click.away="isOpen = false"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                            x-cloak
                            class="absolute right-0 z-20 w-full md:w-48 py-2 mt-2 origin-top-right bg-white rounded-md shadow-xl dark:bg-gray-800">
                            @auth
                            <a href="{{ route('dashboard') }}"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                Account Dashboard</a>
                            @endauth
                            <a href="{{ route('cc') }}"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                Apply for Credit card</a>
                            <a href="{{ route('loans') }}"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                Apply for loan </a>

                            {{-- <a href="#"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                Community</a> --}}
                            <a href="{{ route('register') }}"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                Open an Account</a>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                {{-- <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="#pablo"><span class="lg:hidden inline-block ml-2 text-red-500"></span></a>
                </li>
                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="#pablo"><i
                            class="lg:text-gray-300 text-gray-500 fab fa-twitter text-lg leading-lg "></i><span
                            class="lg:hidden inline-block ml-2"></span></a>
                </li>
                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="#pablo"><i
                            class="lg:text-gray-300 text-gray-500 fab fa-github text-lg leading-lg "></i><span
                            class="lg:hidden inline-block ml-2"></span></a>
                </li> --}}
                <li class="flex items-center">
                    <div
                        class="bg-gray-700 text-white active:bg-gray-100 active:text-gray-700 text-xs w-full font-bold uppercase mx-4 text-center md:mx-0 px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 md:ml-3 mb-3">
                        <a href="{{ route('register') }}" style="transition: all 0.15s ease 0s;">
                            Become a Member
                        </a>
                    </div>
                </li>
                <li class="flex items-center">
                    <div
                        class="bg-gray-700 text-white  md:bg-gray-100  active:bg-gray-100 active:text-gray-700 md:text-gray-700 text-xs w-full font-bold uppercase mx-4 text-center md:mx-0 px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 md:ml-3 mb-3">
                        <a href="{{ route('login') }}" style="transition: all 0.15s ease 0s;">
                            Sign In
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>