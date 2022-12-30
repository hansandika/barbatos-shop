{{-- Name --}}
<div>
    <div class="relative">
        <input type="text" id="name" name="name"
            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 dark:border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " required value="{{ old('name', $product->product_name ?? '') }}" />
        <label for="name"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-focus:text-blue-500 peer-focus:dark:text-blue-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-100 peer-focus:-translate-y-4 left-1 font-medium">
            Name</label>
    </div>
    @error('name')
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            <span class="font-medium">Oops!</span>{{ $message }}
        </div>
    @enderror
</div>

{{-- Category --}}
<div class="mt-5">
    <div class="relative">
        <select id="category" name="category"
            class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  px-2.5 pb-2.5 pt-4 dark:bg-gray-800 dark:border-2 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            <option disabled>Open this select menu</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $category->id == old('category', $product->product_category_id ?? '') ? 'selected' : '' }}>
                    {{ $category->category_name }}</option>
            @endforeach
        </select>
        <label for="name"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-focus:text-blue-500 peer-focus:dark:text-blue-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-100 peer-focus:-translate-y-4 left-1 font-medium">
            Cateogry</label>
    </div>

    @error('category')
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            <span class="font-medium">Oops!</span>{{ $message }}
        </div>
    @enderror
</div>


{{-- Details --}}
<div class="mt-5">
    <div class="relative">
        <textarea id="description" name="detail" rows="5"
            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 dark:border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " required>{{ old('description', $product->product_description ?? '') }}</textarea>
        <label for="name"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-focus:text-blue-500 peer-focus:dark:text-blue-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-[15%] peer-focus:top-2 peer-focus:scale-100 peer-focus:-translate-y-4 left-1 font-medium">
            Details</label>
    </div>

    @error('detail')
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            <span class="font-medium">Oops!</span>{{ $message }}
        </div>
    @enderror
</div>


{{-- Price --}}
<div class="mt-5">
    <div class="relative">
        <input type="text" id="price" name="price"
            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 dark:border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " required value="{{ old('price', $product->product_price ?? '') }}" />
        <label for="price"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-focus:text-blue-500 peer-focus:dark:text-blue-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-100 peer-focus:-translate-y-4 left-1 font-medium">
            Price</label>
    </div>
    @error('price')
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            <span class="font-medium">Oops!</span>{{ $message }}
        </div>
    @enderror
</div>

{{-- file --}}

<div class="mt-5">

    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="photo">Photo</label>
        <input
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400"
            name="photo" id="photo" type="file">
    </div>
    @error('photo')
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            <span class="font-medium">Oops!</span>{{ $message }}
        </div>
    @enderror
</div>



<div class="flex w-full jutify-between mt-5 gap-4">
    <div class="w-1/2 ">
        <a href="{{ url()->previous() }}"
            class="inline-flex gap-2 w-full justify-center focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            <svg class="w-5 h-5" fill="currentColor" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                </path>
            </svg>Back</a>
    </div>
    <button type="submit"
        class="w-1/2 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">{{ $action }}</button>
</div>
