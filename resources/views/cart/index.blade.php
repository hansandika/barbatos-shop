<x-app-layout title="Cart">
    <div class=" flex flex-wrap screenL justify-center pt-5 px-5 pb-[100px] md:px-10">
        @forelse ($cartDetails as $cartDetail)
            <div
                class="m-2 w-full max-w-[960px] h-max border bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="w-full flex">
                    <img class="object-cover h-[150px] sm:h-[300px] w-[150px] sm:w-[300px] rounded-tl-lg sm:rounded-bl-lg"
                        src="{{ $cartDetail->product->image }}" alt="product image" />
                    <div class="p-4 w-full flex flex-col justify-between max-w-[768px]">
                        <h5
                            class="text-lg sm:text-xl md:text-3xl font-semibold tracking-tight text-gray-900 dark:text-white">
                            {{ $cartDetail->product->product_name }}
                        </h5>
                        <div class="mt-5">
                            <div class="flex items-center justify-between">
                                <span class="text-sm sm:text-lg md:text-xl font-normal text-gray-900 dark:text-white">
                                    Quantity </span>
                                <span class="text-sm sm:text-lg md:text-2xl font-bold text-gray-900 dark:text-white">
                                    {{ $cartDetail->quantity }}
                                </span>

                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm sm:text-lg md:text-xl font-normal text-gray-900 dark:text-white">
                                    Total Price </span>
                                <span
                                    class="text-sm sm:text-lg md:text-2xl font-semibold text-gray-900 dark:text-white">
                                    IDR {{ $cartDetail->quantity * $cartDetail->product->product_price }}</span>


                            </div>
                        </div>
                        <div class="hidden sm:flex justify-end mt-4">
                            <form
                                action="{{ route('cart-detail.destroy', ['cart' => $cart->id, 'product' => $cartDetail->product->id]) }}"
                                method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit"
                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="flex sm:hidden my-2 mt-4 w-full">
                    <form class="w-full mx-4"
                        action="{{ route('cart-detail.destroy', ['cart' => $cart->id, 'product' => $cartDetail->product->id]) }}"
                        method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit"
                            class="w-full focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 w-full h-max"
                role="alert">
                <span class="font-medium">No item in your cart</span>
            </div>
        @endforelse
    </div>

    <footer
        class="fixed bottom-0 left-0 z-20 p-4 w-full bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600 ">
        <div class="flex items-center gap-12 md:gap-20 w-full justify-center">
            <div class="text-gray-500 dark:text-gray-300 font-semibold text-base sm:text-xl">
                Total Price: IDR {{ $totalPrice }}
            </div>
            @if ($cart && $cart->cartDetails)
                <div>
                    <form action="{{ route('cart.destroy', $cart->id) }}" method="POST">
                        @method('delete')
                        @csrf

                        <button type="submit"
                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Purchase</button>
                    </form>
                </div>
            @endif
        </div>
    </footer>
</x-app-layout>
