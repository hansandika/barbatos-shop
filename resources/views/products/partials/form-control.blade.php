<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
        value="{{ old('name', $product->product_name ?? '') }}">
    @error('name')
        <p class="mt-2 text-danger"><span class="fw-medium">Oops!</span>{{ $message }}
        </p>
    @enderror
</div>
<div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-select @error('category') is-invalid @enderror" name="category">
        <option disable selected>Open this select menu</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}"
                {{ $category->id == old('category', $product->product_category_id ?? '') ? 'selected' : '' }}>
                {{ $category->category_name }}</option>
        @endforeach
    </select>
    @error('category')
        <p class="mt-2 text-danger"><span class="fw-medium">Oops!</span>{{ $message }}
        </p>
    @enderror
</div>
<div class="mb-3">
    <label for="description">Detail</label>
    <textarea class="form-control @error('detail') is-invalid @enderror" id="description" name="detail" rows="7">{{ old('description', $product->product_description ?? '') }}</textarea>
    @error('detail')
        <p class="mt-2 text-danger"><span class="fw-medium">Oops! </span>{{ $message }}
        </p>
    @enderror
</div>
<div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id="price"
        value="{{ old('price', $product->product_price ?? '') }}">
    @error('price')
        <p class="mt-2 text-danger"><span class="fw-medium">Oops!</span>{{ $message }}
        </p>
    @enderror
</div>
<div class="mb-3">
    <label for="photo" class="form-label">Photo</label>
    <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="photo">
    @error('photo')
        <p class="mt-2 text-danger"><span class="fw-medium">Oops!</span>{{ $message }}
        </p>
    @enderror
</div>
<button class="btn btn-outline-secondary" type="submit">{{ $action }}</button>
