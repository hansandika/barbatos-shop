<x-app-layout title="History">


    <div class="screen w-full pt-5 sm:pt-0 sm:flex justify-center items-center">
        <div>
            @forelse($transactions as $transaction)
                <div
                    class="mx-5 max-w-[720px] overflow-x-auto border-2 dark:border-gray-800 relative shadow-md rounded-lg mb-10">
                    <table class="w-full text-xs sm:text-sm text-left text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="w-[160px] sm:w-[200px] md:w-[280px] py-3 px-3 sm:px-6">
                                    Product name
                                </th>
                                <th scope="col" class="w-[88px] md:w-[180px] py-3 px-3 sm:px-6">
                                    Quantity
                                </th>
                                <th scope="col" class="py-3 px-3 sm:px-6">
                                    Sub Price
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction->transactionDetails as $detail)
                                <tr
                                    class=" bg-white border-b dark:border-gray dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th
                                        class=" py-4 px-3 sm:px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ Str::limit($detail->product->product_name, 20) }}
                                    </th>
                                    <td class="py-4 px-3 sm:px-6">
                                        {{ $detail->quantity }}
                                    </td>
                                    <td class="py-4 px-1 sm:px-6">
                                        IDR {{ $detail->product->product_price * $detail->quantity }}
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="font-semibold text-gray-900 dark:text-white">
                                <th scope="row" class="py-3 px-3 sm:px-6 text-base">Total</th>
                                <td class="py-3 px-3 sm:px-6">{{ $transaction->totalQuantity }} item(s)</td>
                                <td class="py-3 px-1 sm:px-6">IDR {{ $transaction->totalPrice }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            @empty
                <div class="text-center">
                    <h1 class="text-muted">No Transaction History</h1>
                </div>
            @endforelse
        </div>
    </div>

</x-app-layout>
