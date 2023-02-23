<x-masterlayout>
    <div class="px-4 mt-40 mb-40">
        <div
            class="w-full max-w-md md:max-w-lg  mx-auto overflow-hidden px-4 md:px-0 bg-white rounded-lg shadow-md  dark:bg-gray-800">
            <div class="px-6 py-8">
                <h2 class="text-3xl  font-bold text-center text-gray-700 dark:text-white">Leadway Credit Union</h2>



                <p class="mt-1 text-center text-gray-500 dark:text-gray-400">Change Password</p>

                <form method="POST" action="{{ route('modifypassword') }}">
                    @csrf


                    <div class="relative flex items-center mt-8 ">
                        <span class="absolute right-0 mr-5">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>

                        <input type="password" name="oldpassword" id="oldpassword"
                            class="block w-full py-2 md:py-3 text-gray-700 bg-white border rounded-md px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600  focus:ring-opacity-40"
                            placeholder="Enter your old password" required autofocus>
                    </div>

                    @error('oldpassword')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror



                    <div class="relative flex items-center mt-8">
                        <span class="absolute right-0 mr-5">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>

                        <input type="password" name="password" id="password"
                            class="block w-full px-10 py-2 md:py-3 text-gray-700 bg-white border rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600  focus:ring-opacity-40"
                            placeholder="Choose new password">
                    </div>
                    @error('password')
                    <p class="text-xs text-red-500 mt-1 ">{{ $message }}</p>
                    @enderror

                    <div class="relative flex items-center mt-8">
                        <span class="absolute right-0 mr-5">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>

                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="block w-full px-10 py-2 md:py-3 text-gray-700 bg-white border rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600  focus:ring-opacity-40"
                            placeholder="Confirm password">
                    </div>
                    @error('password_confirmation')
                    <p class="text-xs text-red-500 mt-1 ">{{ $message }}</p>
                    @enderror




                    <div>
                        <button class="w-full bg-slate-700 font-semibold text-white text-center rounded py-2 mt-6"
                            type="submit">Confirm</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-masterlayout>