<x-app-layout title="Create Product">
    <div style="margin-top:40px; margin-left:360px; margin-right:360px; margin-bottom:300px;">
        <div>
            <button class="btn btn-secondary">
                Back
            </button>
        </div>
        <form action="" method="POST">
            @csrf
            <div style="margin-top:20px;background:rgb(228, 228, 228); height:40px; font-weight:600;"
                class="p-4 d-flex align-items-center">
                Add Product
            </div>
            <div style="background:white; padding:10px;">
                <div class="mb-3">
                    <div>
                        Name
                    </div>
                    <div>
                        <input class="form-control" type="text" name="name" required>
                    </div>
                </div>
                <div class="mb-3">
                    <div>
                        Category
                    </div>
                    <div>
                        <select class="form-select" id="category" name="category" required>
                            <option>Select Category</option>
                            <option>Beauty</option>
                            <option>Automotive</option>
                            <option>Electronic</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <div>
                        Detail
                    </div>
                    <div>
                        <textarea class="form-control" id="detail" rows="5" name="detail" required></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <div>
                        Price
                    </div>
                    <div>
                        <input class="form-control" id="price" name="price" required />
                    </div>
                </div>
                <div class="mb-3">
                    <div>
                        Photo
                    </div>
                    <div>
                        <input class="form-control" type="file" id="photo" name="photo" required>
                    </div>
                </div>
                <button class="btn btn-outline-secondary" type="submit">Add</button>
            </div>
        </form>
    </div>
</x-app-layout>