@extends('backend.master.master-app')
@section('title', 'Create Product')
@section('content')
<!-- Start Container Fluid -->
<div class="container-xxl">
    <form action="{{ route('product.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <!-- Upload Front Image -->
                        <div class="mb-3">
                            <label class="form-label">Front Image</label>
                            <input class="form-control form-control-sm" type="file" name="front_image" id="front-image-input" required>
                        </div>
                        <img id="front-image-preview" alt="" class="img-fluid rounded bg-light" style="display: none;">

                        <!-- Upload Back Image -->
                        <div class="mb-3 mt-3">
                            <label class="form-label">Back Image</label>
                            <input class="form-control form-control-sm" type="file" name="back_image" id="back-image-input" required>
                        </div>
                        <img id="back-image-preview" alt="" class="img-fluid rounded bg-light" style="display: none;">
                    </div>
                </div>
            </div>

            <div class="col-xl-9 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Product</h4>
                    </div>
                    <div class="card-body">
                        <!-- Image Detail -->
                        <div class="mb-3">
                            <label class="form-label">Image Detail</label>
                            <input class="form-control form-control-sm" type="file" name="imagedetail[]" id="all-image-input" multiple>
                        </div>
                        <div id="image-previews" class="d-flex flex-wrap"></div>
                        
                        <!-- Product Details -->
                        <div class="row mt-3">
                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Product Name</label>
                                    <input type="text" id="product-name" name="name" class="form-control" placeholder="Items Name" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label for="product-categories" class="form-label">Product Categories</label>
                                <select class="form-control" name="category_id" id="product-categories" data-choices data-choices-groups data-placeholder="Select Categories" required>
                                    <option value="">Choose a category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="short-description" class="form-label">Description</label>
                                    <textarea class="form-control bg-light-subtle" id="short-description" name="description" rows="7" placeholder="Short description about the product" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div id="sizes-container">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="mb-3">
                                        <label for="product-stock" class="form-label">Stock</label>
                                        <input type="number" name="stock[]" class="form-control" placeholder="Quantity" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label for="product-price" class="form-label">Price</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                        <input type="number" name="price[]" class="form-control" placeholder="Price" required>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <label for="product-sizes" class="form-label">Size</label>
                                    <input type="text" name="sizes[]" class="form-control" placeholder="Size (e.g. 50 ml)" required>
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
                            </div>
                        </div>

                        <button type="button" id="add-size" class="btn btn-sm btn-secondary mb-3">Add Size</button>
                        <!-- Full Description -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="full-description" class="form-label">Full Description</label>
                                    <textarea class="form-control bg-light-subtle" id="full-description" name="longdescription" rows="7" placeholder="Full description about the product" required></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Ingredients -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="ingredients" class="form-label">Ingredients</label>
                                    <textarea class="form-control bg-light-subtle" id="ingredients" name="ingredients" rows="7" placeholder="Ingredients of the product" required></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- How To Use -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="how-to-use" class="form-label">How To Use</label>
                                    <textarea class="form-control bg-light-subtle" id="how-to-use" name="howtouse" rows="7" placeholder="How to use the product" required></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Submit & Cancel Buttons -->
                        <div class="p-3 bg-light mb-3 rounded">
                            <div class="row justify-content-end g-2">
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-outline-secondary w-100">Create Product</button>
                                </div>
                                <div class="col-lg-2">
                                    <a href="#!" class="btn btn-primary w-100">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Script for Image Previews -->
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
                    <input type="number" name="stock[]" class="form-control" placeholder="Quantity" required>
                </div>
            </div>
            <div class="col-lg-3">
                <label for="product-price" class="form-label">Price</label>
                <div class="input-group mb-3">
                    <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                    <input type="number" name="price[]" class="form-control" placeholder="Price" required>
                </div>
            </div>
            <div class="col-lg-2">
                <label for="product-sizes" class="form-label">Size</label>
                <input type="text" name="sizes[]" class="form-control" placeholder="Size (e.g. 50 ml)" required>
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
