<x-pageslayout>
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
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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

                <button @click=" showDropdown = !showDropdown " type="button" class="p-2 bg-gray-700 text-white">
                    Add payee
                </button>
            </div>
            <div x-cloak x-show="showDropdown" class="flex-col flex mt-4">
                <form action="{{ route('Payee') }}" method="POST">
                    @csrf

                    <div class="space-y-3">
                        <div>
                            <label for="firstname" class="mr-4">Firstname</label>
                            <input type="text" name="firstname" id="firstname" placeholder="Enter the Payee firstname"
                                class="w-full " value="{{ old('firstname') }}">
                            @error('firstname')
                            <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="lastname" class="mr-4">Lastname</label>
                            <input type="text" name="lastname" id="lastname" placeholder="Enter the payee lastname"
                                class="w-full " value="{{ old('lastname') }}">
                            @error('lastname')
                            <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        <div><label for="bankname" class="mr-4">Bank name</label>
                            <input type="text" name="bank_name" id="bank_name" placeholder="Enter the payee bank name"
                                class="w-full " value="{{ old('bank_name') }}">
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
</x-pageslayout>