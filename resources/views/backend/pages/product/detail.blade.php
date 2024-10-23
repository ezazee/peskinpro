@extends('backend.master.master-app')
@section('title', 'Detail Product')
@section('content')

<div class="container-xxl">

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            @foreach($product->imagedetail as $key => $image)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <div class="d-flex justify-content-center align-items-center" style="height: 400px;">
                                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $product->name }}"
                                        class="img-fluid bg-light rounded">
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="carousel-indicators m-0 mt-2 d-lg-flex d-none position-static h-100">
                            @foreach($product->imagedetail as $key => $image)
                            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="{{ $key }}"
                                aria-label="Slide {{ $key + 1 }}"
                                class="w-auto h-auto rounded bg-light {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $image->image_path) }}" class="d-block avatar-xl"
                                    alt="swiper-indicator-img">
                            </button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <p class="mb-1">
                        <a href="#!" class="fs-24 text-dark fw-medium">{{ $product->name }}</a>
                        <h5>Categories: {{ $product->category->name }}</h5>
                    </p>
                    <h2 class="fw-medium my-3">
                        <span id="product-price">Rp {{ number_format($product->sizes[0]->price - $product->sizes[0]->discount, 0, ',', '.') }}</span>
                    
                        @if($product->sizes[0]->discount > 0)
                            <span class="fs-16 text-decoration-line-through" id="product-discounted-price">
                                Rp {{ number_format($product->sizes[0]->price, 0, ',', '.') }}
                            </span>
                        @endif
                    </h2>                                 
            
                    <div class="row align-items-center g-2 mt-3">
                        <div class="col-lg-3">
                            <div class="">
                                <h5 class="text-dark fw-medium">Stok :</h5>
                                <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                                    <label id="product-stock" class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center">
                                        {{ $product->sizes[0]->stock }}
                                    </label>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-3">
                            <div class="">
                                <h5 class="text-dark fw-medium">Size > <span class="text-muted">ML</span></h5>
                                <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                                    @foreach($product->sizes as $key => $size)
                                    <input type="radio" class="btn-check size-selection" name="size" id="size-{{ $key }}"
                                           data-price="{{ $size->price }}"
                                           data-discounted-price="{{ $size->discount }}"
                                           data-stock="{{ $size->stock }}">
                                    <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                           for="size-{{ $key }}">{{ $size->size }}</label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-dark fw-medium mt-3">SKU : {{ $product->sku }}</h4>
                    <h4 class="text-dark fw-medium mt-3">Detail :</h4>
                    <p class="text-muted">{{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Description :</h4>
                </div>
                <div class="card-body">
                    <div class="">
                        {{ $product->longdescription }}
                    </div>
                    <h4 class="card-title mt-3">Effect :</h4>
                    @foreach (explode("\n", $product->effect) as $effect)
                    <div class="item flex gap-1 text-secondary mt-1">
                        <i class="ph ph-dot text-2xl">-</i>
                        {{ trim($effect) }}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ingredients :</h4>
                </div>
                <div class="card-body">
                    @foreach (explode("\n", $product->ingredients) as $ingredient)
                    <div class="item flex gap-1 text-secondary mt-1">
                        <i class="ph ph-dot text-2xl">-</i>
                        {{ trim($ingredient) }}
                    </div>
                    @endforeach
                    <h4 class="card-title mt-3">Cara Penggunaan :</h4>
                    @foreach (explode("\n", $product->howtouse) as $howtouse)
                    <div class="item flex gap-1 text-secondary mt-1">
                        <i class="ph ph-dot text-2xl">-</i>
                        {{ trim($howtouse) }}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    document.querySelectorAll('.size-selection').forEach(function(sizeInput) {
        sizeInput.addEventListener('click', function() {
            var selectedPrice = parseFloat(this.getAttribute('data-price'));
            var selectedDiscountedPrice = parseFloat(this.getAttribute('data-discounted-price'));
            var selectedStock = this.getAttribute('data-stock');

            function formatRupiah(angka) {
                return 'Rp ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }

            document.getElementById('product-price').textContent = formatRupiah(selectedPrice - (isNaN(selectedDiscountedPrice) ? 0 : selectedDiscountedPrice));
            
            if (selectedDiscountedPrice > 0) {
                document.getElementById('product-discounted-price').textContent = formatRupiah(selectedPrice);
                document.getElementById('product-discounted-price').style.display = 'inline'; 
            } else {
                document.getElementById('product-discounted-price').style.display = 'none';
            }

            document.getElementById('product-stock').textContent = selectedStock;
        });
    });
</script>


@endsection
