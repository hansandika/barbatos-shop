<x-app-layout title="History">

    <div class="screenL w-full sm:flex  justify-center">
        <div class="flex flex-col sm:min-w-[636px] gap-5 py-5">
            @forelse($transactions as $transaction)
                <div class="mx-5 max-w-[720px] overflow-x-auto  dark:border-gray-800 relative shadow-md rounded-lg">
                    <div id="accordion-color" data-accordion="collapse"
                        data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
                        <h2 id="accordion-color-heading-{{ $transaction->id }}">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800"
                                data-accordion-target="#accordion-color-body-{{ $transaction->id }}" aria-expanded="true"
                                aria-controls="accordion-color-body-{{ $transaction->id }}">
                                <span>Transaction Date {{ $transaction->transaction_date }}</span>
                                <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-{{ $transaction->id }}" class="hidden"
                            aria-labelledby="accordion-color-heading-{{ $transaction->id }}">
                            <div
                                class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <table class="w-full text-xs sm:text-sm text-left text-gray-500 dark:text-gray-400 ">
                                    <thead
                                        class="text-xs  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col"
                                                class="w-[160px] sm:w-[200px] md:w-[280px] py-3 px-3 sm:px-6">
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
                        </div>
                    </div>

                </div>

            @empty
                <div class="text-center">
                    <h1 class="text-muted">No Transaction History</h1>
                </div>
            @endforelse
        </div>
    </div>

</x-app-layout>
