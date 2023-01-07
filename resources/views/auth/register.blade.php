<x-app-layout title="Register">
    <div class="flex screen sm:min-h-min items-center justify-center">
        <div
            class="w-full my-4  sm:screen max-w-[360px] md:max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <form class="space-y-2 md:space-y-3 mb-4 md:mb-6" action="{{ route('register.store') }}" method="POST">
                @csrf
                <h5 class="text-xl font-medium mt-0 text-gray-900 dark:text-white">Register</h5>
                {{-- Name --}}
                <div>
                    <div class="relative">
                        <input type="text" id="name" name="name"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 dark:border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="name"
                            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-focus:text-blue-500 peer-focus:dark:text-blue-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-100 peer-focus:-translate-y-4 left-1 font-medium">
                            Name</label>
                    </div>
                    @error('name')
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                            role="alert">
                            <span class="font-medium">Oops!</span>{{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Email --}}
                <div>
                    <div class="relative">
                        <input type="text" id="email" name="email"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 dark:border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="email"
                            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-focus:text-blue-500 peer-focus:dark:text-blue-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-100 peer-focus:-translate-y-4 left-1 font-medium">
                            Email</label>

                    </div>
                    @error('email')
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                            role="alert">
                            <span class="font-medium">Oops!</span>{{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Password --}}
                <div>
                    <div class="relative">
                        <input type="password" id="password" name="password"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 dark:border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="password"
                            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-focus:text-blue-500 peer-focus:dark:text-blue-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-100 peer-focus:-translate-y-4 left-1 font-medium">
                            Password</label>
                    </div>
                    @error('password')
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                            role="alert">
                            <span class="font-medium">Oops!</span>{{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div>
                    <div class="relative">
                        <input type="password" id="confirm-password" name="confirm-password"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 dark:border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="confirm-password"
                            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-focus:text-blue-500 peer-focus:dark:text-blue-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-100 peer-focus:-translate-y-4 left-1 font-medium">
                            Confirm Password</label>
                    </div>
                    @error('confirm-password')
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                            role="alert">
                            <span class="font-medium">Oops!</span>{{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Gender --}}
                <div>
                    <div class="mb-2">
                        <p class="text-gray-900 dark:text-gray-300 font-medium text-base">Gender</p>
                    </div>
                    <fieldset>
                        <legend class="sr-only">Gender</legend>

                        <div class="flex items-center mb-2">
                            <input id="country-option-1" type="radio"name="gender" id="male" value="male"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                checked>
                            <label for="country-option-1"
                                class="block ml-2 text-sm font-normal text-gray-900 dark:text-gray-300">
                                Male
                            </label>
                        </div>

                        <div class="flex items-center">
                            <input id="country-option-2" type="radio" name="gender" id="female" value="female"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                            <label for="country-option-2"
                                class="block ml-2 text-sm font-normal text-gray-900 dark:text-gray-300">
                                Female
                            </label>
                        </div>

                    </fieldset>
                    @error('confirm-password')
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                            role="alert">
                            <span class="font-medium">Oops!</span>{{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Date of Birth --}}

                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input datepicker type="text"
                        class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-transparent dark:border-2 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="dob" placeholder="mm/dd/yyyy" value="{{ old('dob') }}" required id="dob"
                        datepicker-format="mm/dd/yyyy">

                    @error('dob')
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                            role="alert">
                            <span class="font-medium">Oops!</span>{{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Countries --}}
                <div>
                    <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                        your country</label>
                    <select id="country" name="country"
                        class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-2 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                        <option disabled>select country</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}" {{ $country->id == old('country') ? 'selected' : '' }}>
                                {{ $country->country_name }}</option>
                        @endforeach
                    </select>

                    @error('country')
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                            role="alert">
                            <span class="font-medium">Oops!</span>{{ $message }}
                        </div>
                    @enderror
                </div>




                <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register
                    to create account</button>
                <div class=" text-sm font-medium text-gray-500 dark:text-gray-300">
                    Registered? <a href="{{ route('login.index') }}"
                        class="text-blue-700 hover:underline dark:text-blue-500">Login here</a>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
