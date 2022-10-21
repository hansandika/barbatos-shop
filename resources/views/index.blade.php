<x-app-layout title="Home">
    <div class="container">
        <div class="mt-4">
            <nav class="navbar navbar-light ">
                <form class="d-flex w-100">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </nav>
        </div>
        @foreach ($categories as $category)
            <div class="w-full bg-white mt-4">
                <div style="background:rgb(228, 228, 228); height:40px;"
                    class="p-4 d-flex align-items-center fw-semibold">
                    {{ $category->category_name }} &nbsp;<a href="/products" class="text-decoration-none">View All</a>
                </div>
                <div class="d-flex overflow-auto gap-2 ">
                    @forelse ($category->products as $product)
                        <a href="{{ route('products.show', $product->id) }}" class="text-decoration-none text-dark">
                            <div class="p-3">
                                <div class="border border-1" style="width: 220px;">
                                    <img style="width:220px" src="{{ $product->product_image }}" alt="Card image cap">
                                    <div class="p-2">
                                        <div class="fw-medium">
                                            Asus Zenbook 14 UX425EA
                                        </div>
                                        <div class="fw-semibold">
                                            IDR 14.000.000
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
        @endforeach
    </div>
</x-app-layout>
