<x-app-layout title="Home">
    <div class="px-4 md:px-10">

        <form class="flex" action="{{ route('home.index') }}" method="GET">
            <div class="py-4 md:py-8 w-full">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" id="default-search" name="search"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search..." required>
                    <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </div>
        </form>

        <div class="divide-y-4 divide-gray-400 dark:divide-gray-300">
            @if (!Request::has('search'))
                @foreach ($categories as $category)
                    <div class="w-full  dark:bg-gray-900">
                        <div class="p-4  text-2xl flex items-center text-gray-700 dark:text-blue-300 font-medium">
                            {{ $category->category_name }} &nbsp;<a
                                href="{{ route('products.index', 'category=' . $category->category_name) }}"
                                class="text-decoration-none text-blue-700 dark:text-blue-500">View
                                all</a>
                        </div>
                        <div class="flex overflow-auto gap-4 mt-2 mb-8">
                            @forelse ($category->products as $product)
                                <div class="mb-2">
                                    <a href="{{ route('products.show', $product->id) }}" class=" cursor-pointer">
                                        <div
                                            class="w-[340px] md:w-[388px] h-[460px] md:h-[440px] flex flex-col justify-between max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                            <img class="p-4 h-[340px] w-full" src="{{ $product->image }}"
                                                alt="product image" />
                                            <div class="h-[120px] px-5 pb-5">
                                                <div class="w-full">
                                                    <h5
                                                        class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                        {{ Str::limit($product->product_name, 15) }}
                                                    </h5>
                                                    <div class="flex items-center justify-between">
                                                        <span
                                                            class="text-3xl font-bold text-gray-900 dark:text-white">IDR
                                                            {{ $product->product_price }}</span>
                                                        <a href="{{ route('products.show', $product->id) }}"
                                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">More
                                                            Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @empty
                                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 w-full"
                                    role="alert">
                                    <span class="font-medium">No Product!</span>
                                </div>
                            @endforelse
                        </div>
                    </div>
                @endforeach
            @else
                <div class="w-full  dark:bg-gray-900">
                    <p class="font-semibold text-gray-700 dark:text-gray-200 text-xl md:text-3xl mb-2 mt-3">Search
                        Results
                    </p>
                    <div class="flex flex-wrap justify-center md:justify-start">
                        @forelse ($products as $product)
                            <a href="{{ route('products.show', $product->id) }}" class="cursor-pointer">
                                <div
                                    class="w-[340px] md:w-[388px] h-[460px] md:h-[440px] flex flex-col justify-between max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                    <img class="p-4 h-[340px] w-full" src="{{ $product->image }}" alt="product image" />
                                    <div class="h-[120px] px-5 pb-5">
                                        <div class="w-full">
                                            <h5
                                                class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                {{ Str::limit($product->product_name, 15) }}
                                            </h5>
                                            <div class="flex items-center justify-between">
                                                <span class="text-3xl font-bold text-gray-900 dark:text-white">IDR
                                                    {{ $product->product_price }}</span>
                                                <a href="{{ route('products.show', $product->id) }}"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">More
                                                    Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 w-full"
                                role="alert">
                                <span class="font-medium">No Product!</span>
                            </div>
                        @endforelse
                    </div>
                </div>
            @endif
        </div>

    </div>

</x-app-layout>
