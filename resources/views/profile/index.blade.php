<x-app-layout title="Profile">
    <div class="w-full screen flex items-center justify-center">
        <div
            class="w-full max-w-sm p-6 mx-6 bg-white border border-gray-200 rounded-lg shadow-md md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-center mb-5">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Profile</h5>
            </div>

            <div>
                {{-- Name --}}
                <div>
                    <label for="name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" id="disabled-input" aria-label="disabled input"
                        class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $user->name }}" disabled>
                </div>
                {{-- Email --}}
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Email</label>
                    <input type="text" id="disabled-input" aria-label="disabled input"
                        class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $user->email }}" disabled>
                </div>
                {{-- Gender --}}
                <div>
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Gender</label>
                    <input type="text" id="disabled-input" aria-label="disabled input"
                        class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $user->gender }}" disabled>
                </div>
                {{-- Date of Birth --}}
                <div>
                    <label for="dob" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Date of Birth</label>
                    <input type="text" id="disabled-input" aria-label="disabled input"
                        class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $user->date_of_birth }}" disabled>
                </div>
                {{-- Country --}}
                <div>
                    <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Country</label>
                    <input type="text" id="disabled-input" aria-label="disabled input"
                        class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $user->country->country_name }}" disabled>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
