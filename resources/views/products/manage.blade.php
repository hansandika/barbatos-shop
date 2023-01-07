<x-app-layout title="Manage Product">
    <div class="py-3 px-5 md:px-10 screenL d-flex justify-content-center align-items-center">
        <div>
            <div class="flex flex-col sm:flex-row gap-4 items-center">
                <form class="w-full" action="{{ route('products.manage') }}" method="GET">
                    <div class="">
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
                <a href="{{ route('products.create') }}"
                    class="w-full sm:w-[140px] h-max text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Add Product
                </a>
            </div>


            <div class="mt-5 flex flex-wrap gap-5">
                @forelse ($products as $product)
                    <div
                        class=" w-[340px] md:w-[388px] h-[460px] md:h-[440px] flex flex-col justify-between max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img class="object-cover  p-4 h-[340px] w-full" src="{{ $product->image }}"
                            alt="product image" />
                        <div class="h-[100px] px-5 pb-5">
                            <h5
                                class="truncate mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                {{ $product->product_name }}
                            </h5>
                            <div class="flex gap-2 items-center w-full">
                                <a href="{{ route('products.edit', $product->id) }}" type="button"
                                    class="w-1/2 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900 text-center">
                                    Edit
                                </a>
                                <form class="w-1/2" action="{{ route('products.destroy', $product->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-full focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-danger" role="alert">
                        No product found
                    </div>
                @endforelse
            </div>
            <div class="d-flex justify-content-end align-items-center mt-3">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
