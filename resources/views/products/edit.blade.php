<x-app-layout title="Edit Product">
    <div class="screen w-full flex  items-center justify-center">
        <div
            class="mx-5 max-w-[768px] w-full p-6 bg-white border border-gray-200 rounded-lg shadow-md  md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="mb-5 text-3xl font-semibold text-gray-700 dark:text-gray-200 ">
                Edit Product
            </div>
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-product-form action="Edit" :categories="$categories" :product="$product" />
            </form>
        </div>
    </div>
</x-app-layout>
