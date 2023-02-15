<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />

    <link rel="stylesheet" href="{{ asset('build/assets/app-b4616178.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <title>Dashboard </title>
    {{-- @vite(['resources/css/app.css']) --}}
</head>

<body class="text-blueGray-700 antialiased">

    <div id="root">
        <nav
            class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
            <div
                class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                <button
                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                    type="button" onclick="toggleNavbar('example-collapse-sidebar')">
                    <i class="fas fa-bars"></i></button>
                <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                    href="{{ route('home') }}">
                    Leadway Credit Union
                </a>
                {{-- <ul class="md:hidden items-center flex flex-wrap list-none">
                    <li class="inline-block relative">
                        <a class="text-blueGray-500 block py-1 px-3" href="#pablo"
                            onclick="openDropdown(event,'notification-dropdown')"><i class="fas fa-bell"></i></a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                            style="min-width: 12rem;" id="notification-dropdown">
                            <a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a
                                href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
                                action</a><a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
                                else here</a>
                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
                                link</a>
                        </div>
                    </li>
                    <li class="inline-block relative">
                        <a class="text-blueGray-500 block" href="#pablo"
                            onclick="openDropdown(event,'user-responsive-dropdown')">
                            <div class="items-center flex">
                                <span
                                    class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img
                                        alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                                        src="./assets/img/team-1-800x800.jpg" /></span>
                            </div>
                        </a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                            style="min-width: 12rem;" id="user-responsive-dropdown">
                            <a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a
                                href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
                                action</a><a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
                                else here</a>
                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
                                link</a>
                        </div>
                    </li>
                </ul> --}}
                <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
                    id="example-collapse-sidebar">
                    <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                        <div class="flex flex-wrap">
                            <div class="w-6/12">
                                <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                                    href="javascript:void(0)">
                                    Hi {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}
                                </a>
                            </div>
                            <div class="w-6/12 flex justify-end">
                                <button type="button"
                                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                                    onclick="toggleNavbar('example-collapse-sidebar')">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <form class="mt-6 mb-4 md:hidden">
                        <div class="mb-3 pt-0">
                            <input type="text" placeholder="Search"
                                class="border-0 px-3 py-2 h-12 border border-solid  border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal" />
                        </div>
                    </form>
                    <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                        <li class="items-center">
                            <a class="{{ request()->is('dashboard') ? 'text-pink-500 ' : '' }}  hover:text-pink-600 text-xs uppercase py-3 font-bold block"
                                href="{{ route('dashboard') }}"><i class="fas fa-tv opacity-75 mr-2 text-sm"></i>
                                Dashboard</a>
                        </li>

                        <li class="items-center">
                            <div>
                                <i class="fas fa-newspaper text-blueGray-400 mr-2 text-sm"></i>
                                <a href="{{ route('transfer') }}"
                                    class="{{ request()->is('user/account/transfer') ? 'text-pink-500 ' : '' }}  uppercase hover:text-pink-600  text-xs py-3 font-bold">Transfer
                                </a>

                                {{-- UNFINISHED BUSINESS HERE --}}
                            </div>
                        </li>
                        {{-- <li class="items-center">
                            <a class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                                href="#/profile"><i class="fas fa-user-circle text-blueGray-400 mr-2 text-sm"></i>
                                Transaction History</a>
                        </li> --}}
                        {{-- <li class="items-center">
                            <a class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                                href="#/login"><i class="fas fa-fingerprint text-blueGray-400 mr-2 text-sm"></i>
                                Reports</a>
                        </li>
                        <li class="items-center">
                            <a class="text-blueGray-300 text-xs uppercase py-3 font-bold block" href="#pablo"><i
                                    class="fas fa-clipboard-list text-blueGray-300 mr-2 text-sm"></i>
                                Register (soon)</a>
                        </li>
                        <li class="items-center">
                            <a class="text-blueGray-300 text-xs uppercase py-3 font-bold block" href="#pablo"><i
                                    class="fas fa-tools text-blueGray-300 mr-2 text-sm"></i>
                                Settings (soon)</a>
                        </li> --}}
                    </ul>
                    <hr class="my-4 md:min-w-full" />
                    {{-- <h6
                        class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                        Documentation
                    </h6>
                    <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                        <li class="inline-flex">
                            <a class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                                href="#/documentation/styles"><i
                                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"></i>
                                Styles</a>
                        </li>
                        <li class="inline-flex">
                            <a class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                                href="#/documentation/alerts"><i
                                    class="fab fa-css3-alt mr-2 text-blueGray-400 text-base"></i>
                                CSS Components</a>
                        </li>
                        <li class="inline-flex">
                            <a class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                                href="#/documentation/vue/alerts"><i
                                    class="fab fa-vuejs mr-2 text-blueGray-400 text-base"></i>
                                VueJS</a>
                        </li>
                        <li class="inline-flex">
                            <a class="text-blueGray-700 hover:text-blueGray-500  text-sm block mb-4 no-underline font-semibold"
                                href="#/documentation/react/alerts"><i
                                    class="fab fa-react mr-2 text-blueGray-400 text-base"></i>
                                React</a>
                        </li>
                        <li class="inline-flex">
                            <a class="text-blueGray-700 hover:text-blueGray-500  text-sm block mb-4 no-underline font-semibold"
                                href="#/documentation/angular/alerts"><i
                                    class="fab fa-angular mr-2 text-blueGray-400 text-base"></i>
                                Angular</a>
                        </li>
                        <li class="inline-flex">
                            <a class="text-blueGray-700 hover:text-blueGray-500  text-sm block mb-4 no-underline font-semibold"
                                href="#/documentation/javascript/alerts"><i
                                    class="fab fa-js-square mr-2 text-blueGray-400 text-base"></i>
                                Javascript</a>
                        </li>
                    </ul> --}}
                </div>
            </div>
        </nav>
        <div class="relative md:ml-64 bg-blueGray-50">
            <nav
                class="absolute top-0 left-0 w-full z-10 bg-gray-700 md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
                <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
                    @auth
                    <div class="text-white text-sm uppercase hidden lg:inline-block font-semibold">Welcome {{
                        auth()->user()->firstname}} {{ auth()->user()->lastname }} </div>
                    @endauth
                    {{-- <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3">
                        <div class="relative flex w-full flex-wrap items-stretch">
                            <span
                                class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300 bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"><i
                                    class="fas fa-search"></i></span>
                            <input type="text" placeholder="Search here..."
                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative  bg-white rounded text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10" />
                        </div>
                    </form> --}}
                    {{-- <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
                        <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
                            <div class="items-center flex">
                                <span
                                    class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img
                                        alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                                        src="./assets/img/team-1-800x800.jpg" /></span>
                            </div>
                        </a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                            style="min-width: 12rem;" id="user-dropdown">
                            <a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a
                                href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
                                action</a><a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
                                else here</a>
                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
                                link</a>
                        </div>
                    </ul> --}}
                </div>
            </nav>
            <!-- Header -->
            <div class="relative bg-gray-700 md:pt-32 pb-32 pt-12">
                <div class="px-4 md:px-10 mx-auto w-full">
                    <div>
                        <!-- Card stats -->
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                <h5 class="text-gray-700 uppercase font-bold text-xs">
                                                    Checking <span class="font-medium">****5450</span>
                                                </h5>
                                                <span class="font-semibold text-lg text-blueGray-700">
                                                    $850,897.00
                                                </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div
                                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                                    <i class="far fa-chart-bar"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-blueGray-400 mt-4">
                                            <span class="text-emerald-500 mr-2">
                                                <i class="fas fa-arrow-up"></i> 3.48%
                                            </span>
                                            <span class="whitespace-nowrap">
                                                Since last month
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                <h5 class="text-gray-700 uppercase font-bold text-xs">
                                                    Savings <span class="font-medium">****4920</span>
                                                </h5>
                                                <span class="font-semibold text-lg text-blueGray-700">
                                                    $1,090,400.00
                                                </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div
                                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500">
                                                    <i class="fas fa-chart-pie"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-blueGray-400 mt-4">
                                            <span class="text-emerald-500 mr-2">
                                                <i class="fas fa-arrow-up"></i> 3.48%
                                            </span>
                                            <span class="whitespace-nowrap">
                                                Since last month
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                <h5 class="text-gray-700 uppercase font-bold text-xs">
                                                    Investment
                                                </h5>
                                                <span class="font-semibold text-lg text-blueGray-700">
                                                    $400,000.00
                                                </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div
                                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-blueGray-400 mt-4">
                                            <span class="text-orange-500 mr-2">
                                                <i class="fas fa-arrow-down"></i> 1.10%
                                            </span>
                                            <span class="whitespace-nowrap">
                                                Since yesterday
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                                    Loan
                                                </h5>
                                                <span class="font-semibold text-xl text-blueGray-700">
                                                    $0.00
                                                </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div
                                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500">
                                                    <i class="fas fa-percent"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-blueGray-400 mt-4">
                                            <span class="text-emerald-500 mr-2">
                                                <i class="fas fa-arrow-up"></i> 0%
                                            </span>
                                            <span class="whitespace-nowrap">
                                                Since last year
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- transfer section --}}
            <section class="container mt-8 py-10 px-8 mx-auto ">
                <div class="mb-6">
                    @if (session()->has('success'))
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
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <div x-data="{'showDropdown' : false }"
                    class="p-6 border border-black relative inline-block items-center w-full">
                    <div class="flex justify-between">
                        @if (isset($payees))
                        <p>You have total number of payee : <span class="font-bold">{{ $payees->count() }}</span></p>
                        @else
                        <p>You have no Payee</p>
                        @endif

                        <button @click=" showDropdown = !showDropdown " type="button"
                            class="p-2 bg-gray-700 text-white">
                            Add payee
                        </button>
                    </div>
                    <div x-cloak x-show="showDropdown" class="flex-col flex mt-4">
                        <form action="{{ route('Payee') }}" method="POST">
                            @csrf

                            <div class="space-y-3">
                                <div>
                                    <label for="firstname" class="mr-4">Firstname</label>
                                    <input type="text" name="firstname" id="firstname"
                                        placeholder="Enter the Payee firstname" class="w-full "
                                        value="{{ old('firstname') }}">
                                    @error('firstname')
                                    <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="lastname" class="mr-4">Lastname</label>
                                    <input type="text" name="lastname" id="lastname"
                                        placeholder="Enter the payee lastname" class="w-full "
                                        value="{{ old('lastname') }}">
                                    @error('lastname')
                                    <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div><label for="bankname" class="mr-4">Bank name</label>
                                    <input type="text" name="bank_name" id="bank_name"
                                        placeholder="Enter the payee bank name" class="w-full "
                                        value="{{ old('bank_name') }}">
                                    @error('bank_name')
                                    <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="routing" class="mr-4">Routing</label>
                                    <input type="text" name="routing_number" id="routing_number"
                                        placeholder="Enter the payee bank routing number" class="w-full "
                                        value="{{ old('routing_number') }}">
                                    @error('routing_number')
                                    <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="account_number" class="">Account number</label>
                                    <input type="text" name="account_number" id="account_number"
                                        placeholder="Enter the payee bank account number" class="w-full "
                                        value="{{ old('account_number') }}">
                                    @error('bank_name')
                                    <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <button type="submit" class="p-2 px-6 bg-gray-700 text-white">Add</button>
                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </section>
            @if (isset($payees))
            <section class="">
                <div class="container px-6 py-12 mx-auto">
                    <p class="text-center font-bold text-sm md:text-2xl mb-4">Added Payee</p>
                    <div class="flex flex-wrap justify-between">

                        @foreach ($payees as $payee)
                        <div>

                            <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">Full Name: {{
                                $payee->firstname }}
                                {{ $payee->lastname }}
                            </h1>

                            <p class="mt-2 text-gray-500 dark:text-gray-400">Bank Name: {{ $payee->bank_name }}</p>
                            <p class="mt-2 text-gray-500 dark:text-gray-400">Routing No: {{ $payee->routing_number }}
                            </p>
                            <p class="mt-2 text-gray-500 dark:text-gray-400">Account No: {{ $payee->account_number }}
                            </p>
                        </div>
                        @endforeach




                    </div>
                </div>
            </section>
            @else

            @endif
            <div class="container px-6 py-12 mx-auto">
                <div class="">

                    <p class="md:text-2xl font-bold capitalize">Wire Transfer</p>

                    <div class="border border-black p-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="account">Transfer from</label>
                                <select name="account" id="account" class="w-full">
                                    <option value="checking">Checking ****5450</option>
                                    <option value="savings">Checking ****4920</option>
                                </select>
                            </div>
                            <div>
                                <label for="reciepient">Receipient</label>
                                <select name="reciepient" id="" class="w-full">
                                    @foreach ($payees as $reciepient)
                                    <option value="">{{ $reciepient->firstname }} {{ $reciepient->lastname }} {{
                                        $reciepient->account_number }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                            <div>
                                <label for="account">Amount</label>
                                <input type="text" class="w-full">
                            </div>
                            <div>
                                <label for="recipient">Message</label>
                                <input type="text" class="w-full" placeholder="optional message for the recipient">
                            </div>
                        </div>
                        <button type="button" disabled class="py-2 px-6 bg-gray-700 text-white mt-2">Send</button>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        /* Sidebar - Side navigation menu on mobile/responsive mode */
      function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("bg-white");
        document.getElementById(collapseID).classList.toggle("m-2");
        document.getElementById(collapseID).classList.toggle("py-3");
        document.getElementById(collapseID).classList.toggle("px-6");
      }
      /* Function for dropdowns */
      function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
          element = element.parentNode;
        }
        var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
          placement: "bottom-end"
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
      }


      (function() {
        /* Add current date to the footer */
        document.getElementById("javascript-date").innerHTML = new Date().getFullYear();
        /* Chart initialisations */
        /* Line Chart */
        var config = {
          type: "line",
          data: {
            labels: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July"
            ],
            datasets: [
              {
                label: new Date().getFullYear(),
                backgroundColor: "#4c51bf",
                borderColor: "#4c51bf",
                data: [65, 78, 66, 44, 56, 67, 75],
                fill: false
              },
              {
                label: new Date().getFullYear() - 1,
                fill: false,
                backgroundColor: "#ed64a6",
                borderColor: "#ed64a6",
                data: [40, 68, 86, 74, 56, 60, 87]
              }
            ]
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
              display: false,
              text: "Sales Charts",
              fontColor: "white"
            },
            legend: {
              labels: {
                fontColor: "white"
              },
              align: "end",
              position: "bottom"
            },
            tooltips: {
              mode: "index",
              intersect: false
            },
            hover: {
              mode: "nearest",
              intersect: true
            },
            scales: {
              xAxes: [
                {
                  ticks: {
                    fontColor: "rgba(255,255,255,.7)"
                  },
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Month",
                    fontColor: "white"
                  },
                  gridLines: {
                    display: false,
                    borderDash: [2],
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.3)",
                    zeroLineColor: "rgba(0, 0, 0, 0)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2]
                  }
                }
              ],
              yAxes: [
                {
                  ticks: {
                    fontColor: "rgba(255,255,255,.7)"
                  },
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Value",
                    fontColor: "white"
                  },
                  gridLines: {
                    borderDash: [3],
                    borderDashOffset: [3],
                    drawBorder: false,
                    color: "rgba(255, 255, 255, 0.15)",
                    zeroLineColor: "rgba(33, 37, 41, 0)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2]
                  }
                }
              ]
            }
          }
        };
        var ctx = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(ctx, config);

        /* Bar Chart */
        config = {
          type: "bar",
          data: {
            labels: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July"
            ],
            datasets: [
              {
                label: new Date().getFullYear(),
                backgroundColor: "#ed64a6",
                borderColor: "#ed64a6",
                data: [30, 78, 56, 34, 100, 45, 13],
                fill: false,
                barThickness: 8
              },
              {
                label: new Date().getFullYear() - 1,
                fill: false,
                backgroundColor: "#4c51bf",
                borderColor: "#4c51bf",
                data: [27, 68, 86, 74, 10, 4, 87],
                barThickness: 8
              }
            ]
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
              display: false,
              text: "Orders Chart"
            },
            tooltips: {
              mode: "index",
              intersect: false
            },
            hover: {
              mode: "nearest",
              intersect: true
            },
            legend: {
              labels: {
                fontColor: "rgba(0,0,0,.4)"
              },
              align: "end",
              position: "bottom"
            },
            scales: {
              xAxes: [
                {
                  display: false,
                  scaleLabel: {
                    display: true,
                    labelString: "Month"
                  },
                  gridLines: {
                    borderDash: [2],
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.3)",
                    zeroLineColor: "rgba(33, 37, 41, 0.3)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2]
                  }
                }
              ],
              yAxes: [
                {
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Value"
                  },
                  gridLines: {
                    borderDash: [2],
                    drawBorder: false,
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.2)",
                    zeroLineColor: "rgba(33, 37, 41, 0.15)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2]
                  }
                }
              ]
            }
          }
        };
        ctx = document.getElementById("bar-chart").getContext("2d");
        window.myBar = new Chart(ctx, config);
      })();
    </script>

</body>

</html>