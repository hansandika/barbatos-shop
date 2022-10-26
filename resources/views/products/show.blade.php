<x-app-layout title='{{ $product->product_name }}'>
    <div class="d-flex justify-content-center align-items-center container">
        <div class="d-flex gap-4 px-2 align-items-center bg-white mt-5" style="width:800px; height:350px;">
            <img style="width:200px; height:200px; object-fit: cover" class="img-thumbnail" src="{{ $product->image }}"
                alt="Card image cap">
            <form action="{{ route('cart.store') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="text-dark fs-3 fw-bold">
                    {{ $product->product_name }}
                </div>
                <div class="mt-3">
                    <div class="d-flex">
                        <div class="opacity-75" style="width:120px;">
                            Detail
                        </div>
                        <div class="w-100">
                            <p>{{ $product->product_description }}</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="opacity-75" style="width:120px;">
                            Price
                        </div>
                        <div class="w-100">
                            <p>
                                IDR {{ $product->product_price }}
                            </p>
                        </div>
                    </div>
                    @auth
                        <div class="d-flex mt-2 opacity-75">
                            <div style="width:120px;">
                                Qty
                            </div>
                            <input class="form-control" type="number" name="quantity" required>
                        </div>
                    @endauth
                </div>
                @auth
                    <button class="btn btn btn-outline-secondary mt-2" type="submit">
                        Purchase
                    </button>
                @endauth
            </form>
        </div>
    </div>
</x-app-layout>
