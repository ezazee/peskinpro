@extends('frontend.master.master-app')

@section('content')
    <div class="product-detail thumbnail-bottom sale">
        <div class="featured-product underwear filter-product-img md:py-20 py-14">
            <div class="container flex justify-between gap-y-6 flex-wrap">
                <div class="list-img md:w-1/2 md:pr-[45px] w-full flex-shrink-0">
                    <div class="sticky">
                        <!-- Main Swiper -->
                        <div class="swiper mySwiper2 rounded-2xl overflow-hidden">
                            <div class="swiper-wrapper">
                                @foreach ($products->imagedetail as $image)
                                    <div class="swiper-slide">
                                        <img class="w-full h-full object-cover duration-700" src="{{ asset('storage/' . $image->image_path) }}" alt="img" />
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <!-- Thumbnail Swiper -->
                        <div class="swiper mySwiper mt-4">
                            <div class="swiper-wrapper">
                                @foreach ($products->imagedetail as $image)
                                    <div class="swiper-slide">
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $image->image_path) }}" alt="img" />
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="product-infor md:w-1/2 w-full lg:pl-[15px] md:pl-2">
                    <div class="flex justify-between">
                        <div>
                            <div class="product-name heading4 mt-1">{{ $products->name }}</div>
                        </div>
                        <a href="#">
                            <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center cursor-pointer rounded-lg">
                                <i class="ph ph-share-network text-xl"></i>
                            </div>
                        </a>

                    </div>
                    <div class="flex items-center gap-3 flex-wrap mt-5 pb-6 border-b border-line">
                        <div class="product-price heading5" id="product-price">
                            Rp {{ number_format($products->sizes[0]->price - ($products->sizes[0]->discount ?? 0), 0, ',', '.') }}
                        </div>
                    
                        <div class="w-px h-4 bg-line"></div>
                    
                        @if($products->sizes[0]->discount && $products->sizes[0]->discount > 0)
                            <div class="product-origin-price font-normal text-secondary2">
                                <del>Rp {{ number_format($products->sizes[0]->price, 0, ',', '.') }}</del>
                            </div>
                    
                            <div class="product-sale caption2 font-semibold bg-primary text-white px-3 py-0.5 inline-block rounded-full">
                                -{{ number_format(100 * ($products->sizes[0]->discount / $products->sizes[0]->price), 0) }}%
                            </div>
                        @endif
                    
                        <div class="product-description text-secondary mt-3">{{ $products->description }}</div>
                    </div>
                    <div class="list-action mt-6">
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                        <input type="hidden" name="product_id" value="{{ $products->id }}">
                        <input type="hidden" name="quantity" id="quantityInput" value="1">
                        <div class="choose-size mt-5">
                            <div class="heading flex items-center justify-between">
                                <div class="text-title">Ukuran:</div>
                            </div>
                            <div class="list-size flex items-center gap-2 flex-wrap mt-3">
                                @if($products->sizes && $products->sizes->count() > 0)
                                @foreach($products->sizes as $size)
                                <div class="size-item">
                                    <input type="radio" id="size{{ $size->id }}" name="selected_size" value="{{ $size->id }}" class="hidden peer" onclick="updatePrice({{ $size->id }})">
                                    <label for="size{{ $size->id }}"
                                           class="w-12 h-12 flex items-center justify-center text-xs text-button rounded-full bg-white border text-primary border-primary border-line cursor-pointer transition duration-300">
                                        {{ $size->size }}
                                    </label>
                                </div>
                                @endforeach
                                    @else
                                        <p>No sizes available for this product.</p>
                                    @endif
                            </div> 
                        </div>
                        
                        <div class="text-title mt-5">Quantity:</div>
                        <div class="choose-quantity flex items-center max-xl:flex-wrap lg:justify-between gap-5 mt-3">
                            <div class="quantity-block md:p-3 max-md:py-1.5 max-md:px-3 flex items-center justify-between rounded-lg border border-line sm:w-[140px] w-[120px] flex-shrink-0">
                                <i class="ph-bold ph-minus cursor-pointer body1 decrease-quantity"></i>
                                <div class="quantity body1 font-semibold quantity-display">1</div>
                                <i class="ph-bold ph-plus cursor-pointer body1 increase-quantity"></i>
                            </div>
                            <button class="add-cart-btn button-main whitespace-nowrap w-full text-center bg-primary text-white border border-primary">Tambah Keranjang</button>                        </div>
                    </form>

                        <div class="more-infor mt-6">
                            <div class="flex items-center gap-1 mt-3">
                                <div class="text-title">SKU:</div>
                                <div class="text-secondary">53453412</div>
                            </div>
                            <div class="flex items-center gap-1 mt-3">
                                <div class="text-title">Categories:</div>
                                <div class="list-category text-secondary">{{ $products->category->name }}</div>
                            </div>
                        </div>
                        <div class="list-payment mt-7">
                            <div
                                class="main-content lg:pt-8 pt-6 lg:pb-6 pb-4 sm:px-4 px-3 border border-line rounded-xl relative max-md:w-2/3 max-sm:w-full">
                                <div
                                    class="heading6 px-5 bg-white absolute -top-[14px] left-1/2 -translate-x-1/2 whitespace-nowrap">
                                    Pembayaran Aman Menggunakan</div>
                                <div class="list grid grid-cols-4">
                                    <div class="item flex items-center justify-center lg:px-3 px-1">
                                        <img src="{{ asset('frontend/assets/images/payment/mandiri.png') }}" alt="payment"
                                            class="w-full">
                                    </div>
                                    <div class="item flex items-center justify-center lg:px-3 px-1">
                                        <img src="{{ asset('frontend/assets/images/payment/gopay.png') }}" alt="payment"
                                            class="w-full">
                                    </div>
                                    <div class="item flex items-center justify-center lg:px-3 px-1">
                                        <img src="{{ asset('frontend/assets/images/payment/bca.webp') }}" alt="payment"
                                            class="w-full">
                                    </div>
                                    <div class="item flex items-center justify-center lg:px-3 px-1">
                                        <img src="{{ asset('frontend/assets/images/payment/qris.png') }}" alt="payment"
                                            class="w-full">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="desc-tab md:pb-20 pb-10">
            <div class="container">
                <div class="flex items-center justify-center w-full">
                    <div class="menu-tab flex items-center md:gap-[60px] gap-8">
                        <div class="tab-item heading5 has-line-before text-secondary2 hover:text-black duration-300 active">
                            Deskripsi</div>
                        <div class="tab-item heading5 has-line-before text-secondary2 hover:text-black duration-300">
                            Ingredients</div>
                    </div>
                </div>
                <div class="desc-block mt-8">
                    <div class="desc-item description" data-item="Deskripsi">
                        <div class="grid md:grid-cols-2 gap-8 gap-y-5">
                            <div class="left">
                                <div class="heading6">Deskripsi</div>
                                <div class="text-secondary mt-2">
                                    {{ $products->longdescription }}
                                </div>
                            </div>
                            <div class="right">
                                <div class="heading6">Apa Efeknya?</div>
                                <div class="list-feature">
                                    <div class="item flex gap-1 text-secondary mt-1">
                                        <i class="ph ph-dot text-2xl"></i>
                                        <p>Mencerahkan.</p>
                                    </div>
                                    <div class="item flex gap-1 text-secondary mt-1">
                                        <i class="ph ph-dot text-2xl"></i>
                                        <p>Melembabkan.</p>
                                    </div>
                                    <div class="item flex gap-1 text-secondary mt-1">
                                        <i class="ph ph-dot text-2xl"></i>
                                        <p>Menghidrasi Kulit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desc-item specifications" data-item="Ingredients">
                        <div class="grid md:grid-cols-2 items-center gap-8 gap-y-5">
                            <div class="left">
                                <div class="heading6">Ingredients</div>
                                <div class="list-feature grid grid-cols-1 sm:grid-cols-2 gap-y-2 py-3">
                                        @foreach(explode("\n", $products->ingredients) as $ingredient)
                                        <div class="item flex gap-1 text-secondary mt-1">
                                            <i class="ph ph-dot text-2xl"></i>
                                            <p>{{ trim($ingredient) }}</p>
                                        </div>
                                        @endforeach
                                </div>
                            </div>
                            <div class="right">
                                <div class="heading6">Cara Penggunaan</div>
                                <div class="list-feature grid grid-cols-1 sm:grid-cols-2 gap-y-2 py-3">
                                        @foreach(explode("\n", $products->howtouse) as $howtouse)
                                        <div class="item flex gap-1 text-secondary mt-1">
                                            <i class="ph ph-dot text-2xl"></i>
                                            <p>{{ trim($howtouse) }}</p>
                                        </div>
                                        @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="tab-features-block filter-product-block pb-10">
        <div class="shop-product">
            <div class="container">
                <div class="heading3 text-center pb-10">Produk Serupa</div>
                <div class="list-product hide-product-sold grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 sm:gap-[30px] gap-5">
                    @foreach ($produkserupa as $item)
                    <div class="product-item grid-type style-5">
                        <a href="{{ route('shop.detail', ['slug' => $item->slug]) }}"><div class="product-main cursor-pointer block">
                            <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                @if($item->discount && $item->discount > 0)
                                <div
                                    class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                    Diskon
                                </div>
                               @endif 
                                <div class="product-img w-full h-full aspect-[3/4]">
                                    <img class="w-full h-full object-cover duration-700"
                                        src="{{ asset('storage/' . $item->front_image) }}"
                                        alt="img" />
                                    <img class="w-full h-full object-cover duration-700"
                                        src="{{ asset('storage/' . $item->back_image) }}"
                                        alt="img" />
                                </div>
                            </div>
    
                            <div class="product-infor mt-4 lg:mb-7">
                                <div class="product-name text-title duration-300">
                                    {{ $item->name }}
                                    <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                        <div class="product-price text-title">
                                            @if($item->discount && $item->discount > 0)
                                                Rp {{ number_format($item->price - $item->discount, 0, ',', '.') }}
                                            @else
                                                Rp {{ number_format($item->price, 0, ',', '.') }}
                                            @endif
                                        </div>
                                        
                                        @if($item->discount && $item->discount > 0)
                                            <div class="product-origin-price caption1 text-secondary2 line-through">
                                                <del>Rp {{ number_format($item->price, 0, ',', '.') }}</del>
                                            </div>
                                            <div class="product-sale caption1 text-white font-medium bg-primary px-3 py-0.5 inline-block rounded-full">
                                                -{{ number_format(100 * ($item->discount / $item->price), 0) }}%
                                            </div>
                                        @endif
                                    </div>                                
                                </div>
                            </div>
                        </div></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleActive(checkbox) {
            const label = document.querySelector(`label[for="${checkbox.id}"]`);
            if (checkbox.checked) {
                label.classList.add('bg-blue-500', 'text-black');
                label.classList.remove('border-primary', 'border-line');
            } else {
                label.classList.remove('bg-blue-500', 'text-white');
                label.classList.add('border-primary', 'border-line');
            }
        }
        </script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const increaseButtons = document.querySelectorAll('.increase-quantity');
            const decreaseButtons = document.querySelectorAll('.decrease-quantity');
            
            increaseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const quantityDisplay = this.parentNode.querySelector('.quantity-display');
                    const quantityInput = document.getElementById('quantityInput');
                    let currentQuantity = parseInt(quantityDisplay.textContent.trim());
                    currentQuantity + 1; 
                    quantityDisplay.textContent = currentQuantity;
                    quantityInput.value = currentQuantity;
                });
            });
            
            decreaseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const quantityDisplay = this.parentNode.querySelector('.quantity-display');
                    const quantityInput = document.getElementById('quantityInput');
                    let currentQuantity = parseInt(quantityDisplay.textContent.trim());
                    if (currentQuantity > 1) {
                        currentQuantity - 1; 
                        quantityDisplay.textContent = currentQuantity;
                        quantityInput.value = currentQuantity; 
                    }
                });
            });
        });
        </script>
        <script>
            function updatePrice(sizeId) {
                // Assuming you're sending an AJAX request to get the size details
                const sizeData = @json($products->sizes);
                const selectedSize = sizeData.find(size => size.id === sizeId);
                
                if (selectedSize) {
                    const price = selectedSize.price - (selectedSize.discount || 0);
                    
                    // Update the displayed price
                    document.getElementById('product-price').innerText = 'Rp ' + new Intl.NumberFormat().format(price);
                    
                    // Update the original price and discount if available
                    if (selectedSize.discount && selectedSize.discount > 0) {
                        const originalPriceElement = document.querySelector('.product-origin-price');
                        const saleElement = document.querySelector('.product-sale');
                        const originalPrice = selectedSize.price;
            
                        originalPriceElement.innerHTML = `<del>Rp ${new Intl.NumberFormat().format(originalPrice)}</del>`;
                        saleElement.innerText = `-${Math.round(100 * (selectedSize.discount / originalPrice))}%`;
                        originalPriceElement.style.display = 'block';
                        saleElement.style.display = 'inline-block';
                    } else {
                        // Hide original price and sale if no discount
                        document.querySelector('.product-origin-price').style.display = 'none';
                        document.querySelector('.product-sale').style.display = 'none';
                    }
                }
            }
            </script>
            
@endsection
