@extends('backend.master.master-app')
@section('title', 'Edit Product')
@section('content')
<!-- Start Container Fluid -->
<div class="container-xxl">
    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <!-- Upload Front Image -->
                        <div class="mb-3">
                            <label class="form-label">Front Image</label>
                            <input class="form-control form-control-sm" type="file" name="front_image"
                                id="front-image-input">
                        </div>
                        @if ($product->front_image)
                            <img id="front-image-preview" src="{{ asset('storage/' . $product->front_image) }}" alt="Front Image"
                                class="img-fluid rounded bg-light" style="display: block;">
                        @else
                            <p>No front image uploaded.</p>
                        @endif

                        <!-- Upload Back Image -->
                        <div class="mb-3 mt-3">
                            <label class="form-label">Back Image</label>
                            <input class="form-control form-control-sm" type="file" name="back_image"
                                id="back-image-input">
                        </div>
                        @if ($product->back_image)
                            <img id="back-image-preview" src="{{ asset('storage/' . $product->back_image) }}" alt="Back Image"
                                class="img-fluid rounded bg-light" style="display: block;">
                        @else
                            <p>No back image uploaded.</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-xl-9 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Product</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Image Detail</label>
                            <input class="form-control form-control-sm" type="file" name="imagedetail[]"
                                id="all-image-input" multiple>
                        </div>
                        <div id="image-previews" class="d-flex flex-wrap">
                            @foreach ($product->imagedetail as $image)
                                <div class="m-2">
                                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="Detail Image"
                                        class="img-fluid rounded bg-light" style="max-width: 150px;">
                                </div>
                            @endforeach
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Product Name</label>
                                    <input type="text" id="product-name" name="name" class="form-control"
                                        placeholder="Items Name" value="{{ $product->name }}" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label for="product-categories" class="form-label">Product Categories</label>
                                <select class="form-control" name="category_id" id="product-categories" data-choices
                                    data-choices-groups data-placeholder="Select Categories" required>
                                    <option value="">Choose a category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="product-stock" class="form-label">Size</label>
                                <select class="form-control" name="sizes[]" id="choices-multiple-remove-button" data-choices data-choices-removeItem multiple>
                                    <option value="50" {{ in_array('50', $product->size->pluck('name')->toArray()) ? 'selected' : '' }}>50 ml</option>
                                    <option value="100" {{ in_array('100', $product->size->pluck('name')->toArray()) ? 'selected' : '' }}>100 ml</option>
                                </select>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control bg-light-subtle" id="description" name="description"
                                        rows="7" placeholder="Short description about the product" >{{ $product->description }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="product-stock" class="form-label">Stock</label>
                                    <input type="number" id="product-stock" name="stock" class="form-control"
                                        placeholder="Quantity" value="{{ $product->stock }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label for="product-price" class="form-label">Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                    <input type="number" id="product-price" name="price" class="form-control"
                                        placeholder="Price" value="{{ $product->price }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label for="product-discount" class="form-label">Discount</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                                    <input type="number" id="product-discount" name="discount" class="form-control"
                                        placeholder="Discount" value="{{ $product->discount }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Full Description</label>
                                    <textarea class="form-control bg-light-subtle" id="description" name="longdescription"
                                        rows="7" placeholder="Full description about the product">{{ $product->longdescription }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Ingrediens</label>
                                    <textarea class="form-control bg-light-subtle" id="description" name="ingrediens"
                                        rows="7" placeholder="Ingrediens the product">{{ $product->ingrediens }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">HoW To use</label>
                                    <textarea class="form-control bg-light-subtle" id="description" name="howtouse"
                                        rows="7" placeholder="How to use the product">{{ $product->howtouse }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 bg-light mb-3 rounded">
                            <div class="row justify-content-end g-2">
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-outline-secondary w-100">Update Product</button>
                                </div>
                                <div class="col-lg-2">
                                    <a href="{{ route('product.list') }}" class="btn btn-primary w-100">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    // Front Image Preview
    document.getElementById('front-image-input').addEventListener('change', function(event) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var frontImage = document.getElementById('front-image-preview');
            frontImage.src = e.target.result; // Show the selected image
            frontImage.style.display = 'block'; // Ensure it's visible
        };
        reader.readAsDataURL(event.target.files[0]);
    });

    // Back Image Preview
    document.getElementById('back-image-input').addEventListener('change', function(event) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var backImage = document.getElementById('back-image-preview');
            backImage.src = e.target.result; // Show the selected image
            backImage.style.display = 'block'; // Ensure it's visible
        };
        reader.readAsDataURL(event.target.files[0]);
    });

    // Image Detail Previews
    document.getElementById('all-image-input').addEventListener('change', function(event) {
        var imagePreviewsContainer = document.getElementById('image-previews');
        imagePreviewsContainer.innerHTML = ''; // Clear previous previews

        var files = event.target.files;

        if (files.length > 0) {
            // Loop through each file and generate a preview
            for (var i = 0; i < files.length; i++) {
                var file = files[i];

                // Ensure the file is an image
                if (file.type.startsWith('image/')) {
                    var reader = new FileReader();

                    // Create a closure to capture the file information
                    reader.onload = (function(file) {
                        return function(e) {
                            // Create a container for each image preview
                            var imgContainer = document.createElement('div');
                            imgContainer.classList.add('m-2'); // Add margin for spacing

                            // Create the image element and set its attributes
                            var imgElement = document.createElement('img');
                            imgElement.src = e.target.result;
                            imgElement.classList.add('img-fluid', 'rounded', 'bg-light');
                            imgElement.style.maxWidth = '150px'; // Set max width for preview

                            // Append image to the container
                            imgContainer.appendChild(imgElement);

                            // Append container to the previews container
                            imagePreviewsContainer.appendChild(imgContainer);
                        };
                    })(file);

                    // Read the image file as a data URL
                    reader.readAsDataURL(file);
                }
            }
        }
    });
</script>
@endsection
