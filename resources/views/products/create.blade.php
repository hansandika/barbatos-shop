<x-app-layout title="Create Product">
    <div class="screenL w-full flex  items-center justify-center">
        <div
            class="mx-5 max-w-[768px] w-full p-6 bg-white border border-gray-200 rounded-lg shadow-md  md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="mb-5 text-3xl font-semibold text-gray-700 dark:text-gray-200 ">
                Add Product
            </div>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-product-form action="Create" :categories="$categories" />
            </form>
        </div>
    </div>

</x-app-layout>
