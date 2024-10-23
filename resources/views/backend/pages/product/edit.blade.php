@extends('backend.master.master-app')
@section('title', 'Edit Product')
@section('content')
<!-- Start Container Fluid -->
<div class="container-xxl">
    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Method to allow updating the product -->
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <!-- Upload Front Image -->
                        <div class="mb-3">
                            <label class="form-label">Front Image</label>
                            <input class="form-control form-control-sm" type="file" name="front_image" id="front-image-input">
                        </div>
                        <img id="front-image-preview" src="{{ asset('storage/'.$product->front_image) }}" alt="" class="img-fluid rounded bg-light" style="display: block;">

                        <!-- Upload Back Image -->
                        <div class="mb-3 mt-3">
                            <label class="form-label">Back Image</label>
                            <input class="form-control form-control-sm" type="file" name="back_image" id="back-image-input">
                        </div>
                        <img id="back-image-preview" src="{{ asset('storage/'.$product->back_image) }}" alt="" class="img-fluid rounded bg-light" style="display: block;">
                    </div>
                </div>
            </div>

            <div class="col-xl-9 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Product</h4>
                    </div>
                    <div class="card-body">
                        <!-- Image Detail -->
                        <div class="mb-3">
                            <label class="form-label">Image Detail</label>
                            <input class="form-control form-control-sm" type="file" name="imagedetail[]" id="all-image-input" multiple>
                        </div>
                        <div id="image-previews" class="d-flex flex-wrap">
                            @foreach ($product->imagedetail as $image)
                            <div class="m-2">
                                <img src="{{ asset('storage/' . $image->image_path) }}" alt="Detail Image"
                                    class="img-fluid rounded bg-light" style="max-width: 150px;">
                            </div>
                        @endforeach         
                        </div>
                        
                        <!-- Product Details -->
                        <div class="row mt-3">
                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Product Name</label>
                                    <input type="text" id="product-name" name="name" class="form-control" value="{{ old('name', $product->name) }}" placeholder="Items Name" >
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">SKU</label>
                                    <input type="text" name="sku" value="{{ old('sku', $product->sku) }}" class="form-control" placeholder="SKU">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label for="product-categories" class="form-label">Product Categories</label>
                                <select class="form-control" name="category_id" id="product-categories" data-choices data-choices-groups data-placeholder="Select Categories" >
                                    <option value="">Choose a category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="short-description" class="form-label">Description</label>
                                    <textarea class="form-control bg-light-subtle" id="short-description" name="description" rows="7" placeholder="Short description about the product" >{{ old('description', $product->description) }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Sizes, Stock, and Prices -->
                        <div id="sizes-container">
                            @foreach($product->sizes as $index => $size)
                            <div class="row size-row mb-3">
                                <div class="col-lg-2">
                                    <div class="mb-3">
                                        <label for="product-stock" class="form-label">Stock</label>
                                        <input type="number" name="stock[]" class="form-control" value="{{ old('stock.'.$index, $size->stock) }}" placeholder="Quantity" >
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label for="product-price" class="form-label">Price</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                        <input type="number" name="price[]" class="form-control" value="{{ old('price.'.$index, $size->price) }}" placeholder="Price" >
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <label for="product-sizes" class="form-label">Size</label>
                                    <input type="text" name="sizes[]" class="form-control" value="{{ old('sizes.'.$index, $size->size) }}" placeholder="Size (e.g. 50 ml)" >
                                </div>
                                <div class="col-lg-3">
                                    <label for="product-discount" class="form-label">Discount</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                                        <input type="number" name="discount[]" class="form-control" value="{{ old('discount.'.$index, $size->discount) }}" placeholder="Discount">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <button type="button" class="btn btn-sm btn-danger mt-3 remove-size">Remove</button>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <button type="button" id="add-size" class="btn btn-sm btn-secondary mb-3">Add Size</button>

                        <!-- Full Description -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="full-description" class="form-label">Full Description</label>
                                    <textarea class="form-control bg-light-subtle" id="full-description" name="longdescription" rows="7" placeholder="Full description about the product" >{{ old('longdescription', $product->longdescription) }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="full-description" class="form-label">Effect</label>
                                    <textarea class="form-control bg-light-subtle" id="full-description" name="effect" rows="7" placeholder="Effect of the product">{{ old('effect', $product->effect) }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Ingredients -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="ingredients" class="form-label">Ingredients</label>
                                    <textarea class="form-control bg-light-subtle" id="ingredients" name="ingredients" rows="7" placeholder="Ingredients of the product" >{{ old('ingredients', $product->ingredients) }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- How To Use -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="how-to-use" class="form-label">How To Use</label>
                                    <textarea class="form-control bg-light-subtle" id="how-to-use" name="howtouse" rows="7" placeholder="How to use the product" >{{ old('howtouse', $product->howtouse) }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Submit & Cancel Buttons -->
                        <div class="p-3 bg-light mb-3 rounded">
                            <div class="row justify-content-end g-2">
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-outline-secondary w-100">Update Product</button>
                                </div>
                                <div class="col-lg-2">
                                    <a href="{{ route('product.index') }}" class="btn btn-primary w-100">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Scripts for Image Previews and Adding/Removing Sizes -->
<script>
    document.getElementById('front-image-input').addEventListener('change', function (event) {
        var reader = new FileReader();
        reader.onload = function (e) {
            var frontImage = document.getElementById('front-image-preview');
            frontImage.src = e.target.result;
            frontImage.style.display = 'block';
        }
        reader.readAsDataURL(event.target.files[0]);
    });

    document.getElementById('back-image-input').addEventListener('change', function (event) {
        var reader = new FileReader();
        reader.onload = function (e) {
            var backImage = document.getElementById('back-image-preview');
            backImage.src = e.target.result;
            backImage.style.display = 'block';
        }
        reader.readAsDataURL(event.target.files[0]);
    });

    document.getElementById('all-image-input').addEventListener('change', function(event) {
        var imagePreviewsContainer = document.getElementById('image-previews');
        imagePreviewsContainer.innerHTML = ''; // Clear previous previews

        var files = event.target.files;
        if (files.length > 0) {
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                if (file.type.startsWith('image/')) {
                    var reader = new FileReader();
                    reader.onload = (function(file) {
                        return function(e) {
                            var imgContainer = document.createElement('div');
                            imgContainer.classList.add('m-2');

                            var imgElement = document.createElement('img');
                            imgElement.src = e.target.result;
                            imgElement.classList.add('img-fluid', 'rounded', 'bg-light');
                            imgElement.style.maxWidth = '150px';

                            imgContainer.appendChild(imgElement);
                            imagePreviewsContainer.appendChild(imgContainer);
                        };
                    })(file);
                    reader.readAsDataURL(file);
                }
            }
        }
    });
</script>

<script>
    document.getElementById('add-size').addEventListener('click', function() {
        const sizesContainer = document.getElementById('sizes-container');
        const sizeRow = document.createElement('div');
        sizeRow.classList.add('row', 'mb-3', 'size-row');
        sizeRow.innerHTML = `
            <div class="col-lg-2">
                <div class="mb-3">
                    <label for="product-stock" class="form-label">Stock</label>
                    <input type="number" name="stock[]" class="form-control" placeholder="Quantity" >
                </div>
            </div>
            <div class="col-lg-3">
                <label for="product-price" class="form-label">Price</label>
                <div class="input-group mb-3">
                    <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                    <input type="number" name="price[]" class="form-control" placeholder="Price" >
                </div>
            </div>
            <div class="col-lg-2">
                <label for="product-sizes" class="form-label">Size</label>
                <input type="text" name="sizes[]" class="form-control" placeholder="Size (e.g. 50 ml)" >
            </div>
            <div class="col-lg-3">
                <label for="product-discount" class="form-label">Discount</label>
                <div class="input-group mb-3">
                    <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                    <input type="number" name="discount[]" class="form-control" placeholder="Discount">
                </div>
            </div>
            <div class="col-lg-2">
                <button type="button" class="btn btn-sm btn-danger mt-3 remove-size">Remove</button>
            </div>
        `;
        sizesContainer.appendChild(sizeRow);
    });

    document.getElementById('sizes-container').addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-size')) {
            e.target.closest('.size-row').remove();
        }
    });
</script>
@endsection
