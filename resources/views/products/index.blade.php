<x-app-layout title="List Products">
    <div class="w-full h-full dark:bg-gray-900 ">
        <p class="font-semibold text-gray-700 dark:text-gray-200 text-xl md:text-3xl mb-2 pt-2 px-5 md:px-10">
            {{ Request::get('category') }}
        </p>
        <div class="flex flex-wrap justify-center md:justify-start md:px-10">
            @forelse ($products as $product)
                <a href="{{ route('products.show', $product->id) }}" class="cursor-pointer">
                    <div
                        class="my-3 mx-3 w-[340px] md:w-[388px] h-[460px] md:h-[440px] flex flex-col justify-between max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img class="p-4 h-[340px] w-full" src="{{ $product->image }}" alt="product image" />
                        <div class="h-[120px] px-5 pb-5">
                            <div class="w-full">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
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
    <div class="flex justify-end items-center mt-3">
        {{ $products->links() }}
    </div>
</x-app-layout>
