<x-app-layout title="Cart">
    <div class="py-3 d-flex justify-content-center align-items-center">
        <div style="width: 780px">
            @forelse ($cartDetails as $cartDetail)
                <div class="d-flex bg-white w-100 mb-3">
                    <img style="width:180px; height: 180px; object-fit: cover" src="{{ $cartDetail->product->image }}"
                        alt="Card image cap">
                    <div class="d-flex justify-content-between w-100 p-3">
                        <div>
                            <div class="fw-semibold fs-3">
                                {{ Str::limit($cartDetail->product->product_name, 16) }}
                            </div>
                            <div class="mt-2">
                                Quantity: {{ $cartDetail->quantity }}
                            </div>
                            <div class="mt-3">
                                Total Price: IDR {{ $cartDetail->quantity * $cartDetail->product->product_price }}
                            </div>
                        </div>
                        <div>
                            <form
                                action="{{ route('cart-detail.destroy', ['cart' => $cart->id, 'product' => $cartDetail->product->id]) }}"
                                method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-danger" role="alert">
                    No Item in Your Cart
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-center shadow-lg bg-white min-vw-100 position-fixed bottom-0"
        style="height:60px;">
        <div class="d-flex align-items-center gap-5">
            <div>
                Total Price: IDR {{ $totalPrice }}
            </div>
            @if ($cart && $cart->cartDetails)
                <div>
                    <form action="{{ route('cart.destroy', $cart->id) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="btn btn-outline-success" type="submit">
                            Purchase
                        </button>
                    </form>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
