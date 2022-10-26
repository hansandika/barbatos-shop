<x-app-layout title="Manage Product">
    <div class="py-3 d-flex justify-content-center align-items-center">
        <div style="width: 780px">
            <div class="d-flex justify-content-between">
                <form action="{{ route('products.manage') }}" method="GET">
                    <div class="input-group mb-3" style="width:330px;">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <button class="btn btn-secondary" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
                <div>
                    <a href="{{ route('products.create') }}" class="fw-semibold btn btn-secondary">
                        Add Product
                        <span class="mx-1">
                            <i class="bi bi-plus-lg"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div>
                @forelse ($products as $product)
                    <div class="d-flex bg-white w-100 mb-3">
                        <img style="width:150px; height:150px; object-fit: cover" src="{{ $product->image }}"
                            alt="product image">
                        <div class="d-flex justify-content-between w-100 p-3">
                            <p class="fw-bolder fs-4">
                                {{ $product->product_name }}
                            </p>
                            <div class="d-flex align-items-start gap-2">
                                <a href="{{ route('products.edit', $product->id) }}" type="button"
                                    class="btn btn-outline-warning">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-danger" role="alert">
                        No product found
                    </div>
                @endforelse
            </div>
            <div class="d-flex justify-content-end align-items-center mt-3">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
