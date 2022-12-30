<x-app-layout title='{{ $product->product_name }}'>
    <div class="flex screen w-full items-center justify-center px-5">
        <form action="{{ route('cart.store') }}" method="POST">
            @csrf
            <div
                class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-4xl  dark:border-gray-700 dark:bg-gray-800 ">
                <img class="object-cover rounded-t-lg h-[340px] sm:h-[396px] max-w-[396px] md:max-w-2xl md:rounded-none md:rounded-l-lg"
                    src="{{ $product->image }}" alt="Card image">
                <div class="flex flex-col w-full justify-between p-3 sm:p-4 leading-normal">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">

                    <div>
                        <h5 class="mb-2 sm:mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $product->product_name }}</h5>
                    </div>
                    <div>
                        <p class="mb-2 text-2xl font-semibold text-gray-700 dark:text-gray-200">IDR
                            {{ $product->product_price }}
                        </p>
                    </div>
                    <div>
                        <p class="mb-2 font-normal text-gray-700 dark:text-gray-400">{{ $product->product_description }}
                        </p>
                    </div>

                    @auth
                        <div class="mt-4 sm:mt-8 flex w-full items-center gap-4">
                            <label for="quantity"
                                class=" text-lg font-semibold tracking-tight text-gray-900 dark:text-gray-300">Quantity</label>
                            <input type="number" id="quantity" name="quantity" required
                                class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    @endauth
                    @auth
                        <button type="submit"
                            class="mt-5 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Purchase</button>
                    @endauth
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
