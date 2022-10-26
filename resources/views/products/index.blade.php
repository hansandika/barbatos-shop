<x-app-layout title="List Products">
    <div class="container pt-5">
        <div class="w-full bg-white mt-4">
            <div style="background-color : rgb(247, 247, 247); height:40px;"
                class="p-4 d-flex align-items-center fw-semibold">
                {{ Request::get('category') }}
            </div>
            <div class="d-flex overflow-auto gap-2">
                @forelse ($products as $product)
                    <a href="{{ route('products.show', $product->id) }}" class="text-decoration-none text-dark">
                        <div class="p-3">
                            <div class="border border-2 p-3" style="width: 220px; height: 330px">
                                <img style="width:220px; height: 220px; object-fit: cover" class="img-thumbnail"
                                    src="{{ $product->image }}" alt="Card image cap">
                                <div class="p-2">
                                    <div class="fw-medium">
                                        {{ Str::limit($product->product_name, 15) }}
                                    </div>
                                    <div class="fw-semibold">
                                        IDR {{ $product->product_price }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="text-danger p-3">
                        No Product
                    </div>
                @endforelse
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-center mt-3">
            {{ $products->links() }}
        </div>
    </div>
</x-app-layout>
