<x-app-layout title="History">
    <div class="py-5 d-flex justify-content-center align-items-center container flex-column gap-3">
        @forelse($transactions as $transaction)
            <div style="width: 700px">
                <div class="fw-medium fs-5 p-2" style="background:rgb(231, 241, 255);color:rgb(78, 102, 230)">
                    Transaction Date {{ '2022-07-05 04:42:02' }}
                </div>
                <div class="bg-white p-2">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Sub Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction->transactionDetails as $detail)
                                <tr>
                                    <td>{{ $detail->product->product_name }}</td>
                                    <td>{{ $detail->quantity }}</td>
                                    <td>IDR {{ $detail->product->product_price * $detail->quantity }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="col">Total</th>
                                <th scope="col">{{ $transaction->totalQuantity }} item(s)</th>
                                <th scope="col">IDR {{ $transaction->totalPrice }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        @empty
            <div class="text-center">
                <h1 class="text-muted">No Transaction History</h1>
            </div>
        @endforelse
    </div>
</x-app-layout>
