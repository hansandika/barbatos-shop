<x-app-layout title='{{ $product->product_name }}'>
    <div class="d-flex justify-content-center align-items-center container min-vh-100">
        <div class="d-flex gap-4 px-2 align-items-center bg-white" style="width:800px; height:400px;">
            <img style="width:200px; height:200px;" src="{{ asset('image/laptop.jpg') }}" alt="Card image cap">
            <form action="" method="POST">
                @csrf
                <div class="text-dark fs-3 fw-bol">
                    {{ $product->product_name }}
                </div>
                <div>
                    <div class="d-flex">
                        <div class="opacity-75" style="width:120px;">
                            Detail
                        </div>
                        <div class="w-100">
                            {{ $product->product_description }}
                        </div>
                    </div>
                    <div class="d-flex opacity-75">
                        <div style="width:120px;">
                            Price
                        </div>
                        <div class="w-100">
                            IDR {{ $product->product_price }}
                        </div>
                    </div>
                    @auth
                        <div class="d-flex mt-2 opacity-75">
                            <div style="width:120px;">
                                Qty
                            </div>
                            <input class="form-control" type="text" required>
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
