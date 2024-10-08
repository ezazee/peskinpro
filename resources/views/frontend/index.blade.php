@extends('frontend.master.master-app')

@section('content')
    <!-- Slider -->
    <div
        class="slider-block style-two bg-linear 2xl:h-[700px] xl:h-[740px] lg:h-[680px] md:h-[580px] sm:h-[500px] h-[420px] w-full">
        <div class="slider-main h-full w-full">
            <div class="swiper swiper-slider-custom h-full relative">
                <div class="swiper-wrapper">
                    @foreach ($banners as $item)
                      <!-- Slide 1 -->
                      <div class="swiper-slide slider-item h-full w-full relative overflow-hidden">
                        <div class="sub-img absolute left-0 top-0 w-full h-full z-[-2]">
                            <img src="{{ asset($item->banner_desktop) }}" alt="bg-cos3-1"
                                class="w-full h-full object-cover img-desktop" />
                            <img src="{{ asset($item->banner_mobile) }}" alt="bg-cos3-1"
                                class="w-full h-full object-cover img-mobile" />
                        </div>
                    </div>
                        
                    @endforeach
                  
{{-- 
                    <!-- Slide 2 -->
                    <div class="swiper-slide slider-item h-full w-full relative overflow-hidden">
                        <div class="sub-img absolute left-0 top-0 w-full h-full z-[-2]">
                            <img src="{{ asset('frontend/assets/images/slider/banner-hr2.jpg') }}" alt="bg-cos3-2"
                                class="w-full h-full object-cover img-desktop" />
                            <img src="{{ asset('frontend/assets/images/slider/ig-hr2.jpg') }}" alt="bg-cos3-1"
                                class="w-full h-full object-cover img-mobile" />
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide slider-item h-full w-full relative overflow-hidden">
                        <div class="sub-img absolute left-0 top-0 w-full h-full z-[-2]">
                            <img src="{{ asset('frontend/assets/images/slider/banner-hr3.jpg') }}" alt="bg-cos3-3"
                                class="w-full h-full object-cover img-desktop" />
                            <img src="{{ asset('frontend/assets/images/slider/ig-hr3.jpg') }}" alt="bg-cos3-1"
                                class="w-full h-full object-cover img-mobile" />
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    <!-- Marquee -->
    <div class="banner-top bg-primary text-white md:py-8 py-4">
        <div class="marquee-block swiper-container flex items-center whitespace-nowrap">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="heading5 md:px-[110px] px-12">Kulit Seperti Kaca</div>
                </div>
                <div class="swiper-slide">
                    <div class="icon-leaves md:text-[32px] text-[24px]"></div>
                </div>
                <div class="swiper-slide">
                    <div class="heading5 md:px-[110px] px-12">Kulit Glowing</div>
                </div>
                <div class="swiper-slide">
                    <div class="icon-double-leaves md:text-[32px] text-[24px]"></div>
                </div>
                <div class="swiper-slide">
                    <div class="heading5 md:px-[110px] px-12">Brightenin Product</div>
                </div>
                <div class="swiper-slide">
                    <div class="icon-leaves md:text-[32px] text-[24px]"></div>
                </div>
                <div class="swiper-slide">
                    <div class="heading5 md:px-[110px] px-12">Body Care & Hair Care</div>
                </div>
                <div class="swiper-slide">
                    <div class="icon-double-leaves md:text-[32px] text-[24px]"></div>
                </div>
                <div class="swiper-slide">
                    <div class="heading5 md:px-[110px] px-12">Brightenin Product</div>
                </div>
                <div class="swiper-slide">
                    <div class="icon-leaves md:text-[32px] text-[24px]"></div>
                </div>
                <div class="swiper-slide">
                    <div class="heading5 md:px-[110px] px-12">Kulit Glowing</div>
                </div>
                <div class="swiper-slide">
                    <div class="icon-double-leaves md:text-[32px] text-[24px]"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-block md:pt-20 pt-10">
        <div class="container">
            <div class="list-banner grid md:grid-cols-3 gap-[20px]">
                <a href="/shop"
                    class="banner-item relative bg-surface block rounded-[20px] overflow-hidden duration-500">
                    <div class="banner-img w-full">
                        <img src="{{ asset('frontend/assets/images/banner/21.png') }}" alt="bg-img"
                            class="w-full duration-500" />
                    </div>
                    <div class="heading4 absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap">Face Care</div>
                    <div class="button-main absolute bottom-8 left-1/2 -translate-x-1/2">Belanja Sekarang</div>
                </a>
                <a href="/shop"
                    class="banner-item relative bg-surface block rounded-[20px] overflow-hidden duration-500">
                    <div class="banner-img w-full">
                        <img src="{{ asset('frontend/assets/images/banner/22.png') }}" alt="bg-img"
                            class="w-full duration-500" />
                    </div>
                    <div class="heading4 absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap">Body Care</div>
                    <div class="button-main absolute bottom-8 left-1/2 -translate-x-1/2">Belanja Sekarang</div>
                </a>
                <a href="/shop"
                    class="banner-item relative bg-surface block rounded-[20px] overflow-hidden duration-500">
                    <div class="banner-img w-full">
                        <img src="{{ asset('frontend/assets/images/banner/23.png') }}" alt="bg-img"
                            class="w-full duration-500" />
                    </div>
                    <div class="heading4 absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap">Hair Care</div>
                    <div class="button-main absolute bottom-8 left-1/2 -translate-x-1/2">Belanja Sekarang</div>
                </a>
            </div>
        </div>
    </div>


    <div class="what-new-block filter-product-block md:pt-20 pt-10">
        <div class="container">
            <div class="heading flex items-center justify-between gap-5 flex-wrap">
                <div class="heading3">Face Care</div>
            </div>
            <div class="list-product three-product hide-last-product hide-product-sold grid xl:grid-cols-4 sm:grid-cols-3 grid-cols-2 md:gap-[30px] gap-4 md:mt-10 mt-6"
                data-gender="men">
                <a href="/shop"
                    class="banner bg-blacktrans rounded-[20px] overflow-hidden relative flex items-center justify-center">
                    <div class="heading4 text-white text-center">Kebersihan Alami <br />Untuk Wajah</div>
                    <img src="{{ asset('frontend/assets/images/banner/face-care.jpg') }}" alt="banner13"
                        class="absolute top-0 left-0 w-full h-full object-cover z-[-1] duration-500" />
                </a>
                <!-- List product -->
                @foreach ($productsfacialcare as $item)
                <div class="product-item grid-type style-5">
                    <a href="/detail"><div class="product-main cursor-pointer block">
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

    <div class="container mt-5">
        <div class="benefit-block md:py-20 py-10">
            <div class="list-benefit grid items-start md:grid-cols-4 grid-cols-2 gap-[30px]">
                <div class="benefit-item flex flex-col items-center justify-center">
                    <i class="icon-double-leaves lg:text-7xl text-5xl"></i>
                    <div class="body1 font-semibold uppercase text-center mt-5">Clean skincare</div>
                    <div class="caption1 text-secondary text-center mt-2">Clean and natural skincare with safe and
                        transparent ingredients</div>
                </div>
                <div class="benefit-item flex flex-col items-center justify-center">
                    <i class="icon-earth lg:text-7xl text-5xl"></i>
                    <div class="body1 font-semibold uppercase text-center mt-5">european delivery</div>
                    <div class="caption1 text-secondary text-center mt-3">Fast delivery options with tracking No EU
                        import
                        duties</div>
                </div>
                <div class="benefit-item flex flex-col items-center justify-center">
                    <i class="icon-update lg:text-7xl text-5xl"></i>
                    <div class="body1 font-semibold uppercase text-center mt-5">Sustainability</div>
                    <div class="caption1 text-secondary text-center mt-3">Our signature shipping boxes are fully
                        recyclable
                        and biodegradable</div>
                </div>
                <div class="benefit-item flex flex-col items-center justify-center">
                    <i class="icon-user-shield lg:text-7xl text-5xl"></i>
                    <div class="body1 font-semibold uppercase text-center mt-5">authorized retailer</div>
                    <div class="caption1 text-secondary text-center mt-3">We are an authorized retailer for all the
                        brands
                        we carry</div>
                </div>
            </div>
        </div>
    </div>

    <div class="shop-product py-10">
        <div class="container">
            <div class="heading3 text-center py-10">Hot product skincare</div>
            <div class="list-product hide-product-sold grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 sm:gap-[30px] gap-5">
                @foreach ($products as $prod)
                <div class="product-item grid-type style-5">
                    <a href="/detail"><div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                            @if($prod->discount && $prod->discount > 0)
                            <div
                                class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Diskon
                            </div>
                            @endif
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('storage/' . $prod->front_image) }}"
                                    alt="img" />
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('storage/' . $prod->back_image) }}"
                                    alt="img" />
                            </div>
                        </div>
                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300">
                                {{ $prod->name }}
                                <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">
                                        @if($prod->discount && $prod->discount > 0)
                                            Rp {{ number_format($prod->price - $prod->discount, 0, ',', '.') }}
                                        @else
                                            Rp {{ number_format($prod->price, 0, ',', '.') }}
                                        @endif
                                    </div>
                                    
                                    @if($prod->discount && $prod->discount > 0)
                                        <div class="product-origin-price caption1 text-secondary2 line-through">
                                            <del>Rp {{ number_format($prod->price, 0, ',', '.') }}</del>
                                        </div>
                                        <div class="product-sale caption1 text-white font-medium bg-primary px-3 py-0.5 inline-block rounded-full">
                                            -{{ number_format(100 * ($prod->discount / $prod->price), 0) }}%
                                        </div>
                                    @endif
                                </div>  
                                {{-- <div
                                    class="quick-shop-btn text-button-uppercase py-2.5 text-center mt-2 rounded-full duration-300 bg-primary text-white border border-primary hover:bg-white hover:text-black">
                                    Tambah Keranjang
                                </div> --}}
                            </div>
                        </div>
                    </div></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    {{-- <div class="container md:py-20 sm:py-14 py-10">
        <div class="newsletter-block bg-transparent sm:px-8 px-6 sm:rounded-[32px] rounded-3xl flex flex-col items-center">
            <div class="heading3 text-white text-center">Sign up and get 20% off <br />your first order</div>
            <div class="text-white text-center mt-3">Sign up for early sale access, new in, promotions and more</div>
            <div class="input-block lg:w-1/2 sm:w-3/5 w-full h-[52px] sm:mt-10 mt-7">
                <form class="w-full h-full relative">
                    <input type="text" placeholder="Enter your e-mail"
                        class="caption1 w-full h-full pl-4 pr-14 rounded-xl border border-line" />
                    <button
                        class="button-main bg-primary text-white text-black absolute top-1 bottom-1 right-1 flex items-center justify-center">Subscribe</button>
                </form>
            </div>
        </div>
    </div> --}}

    {{-- <div class="video-tutorial-block relative max-sm:h-[240px]">
        <div class="bg-img w-full h-full">
            <img src="{{ asset('frontend/assets/images/banner/video-cos3.png') }}" alt="bg-img"
                class="w-full h-full object-cover" />
        </div>
        <div class="container w-full h-full">
            <div class="text-content absolute top-1/2 -translate-y-1/2">
                <div class="heading3">Night routines Skincare tutorials</div>
                <div class="mt-3">Experience the Power of Nighttime Skincare Rituals</div>
                <div class="button-main btn-play inline-flex items-center gap-3 mt-8">
                    View Now
                    <span class="play-btn ph-fill ph-play text-lg text-white duration-500"> </span>
                </div>
            </div>
        </div>
    </div> --}}


    {{-- Modal Doang --}}

    @include('frontend.components.modal-landing')
@endsection





{{-- <div class="shop-product lg:py-20 md:py-14 py-10">
        <div class="container">
            <div
                class="list-product hide-product-sold grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 sm:gap-[30px] gap-5">
                <div class="product-item grid-type style-5" data-item="1">
                    <div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                            <div
                                class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Sale
                            </div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700"
                                    src="assets/images/product/fashion/1-1.png" alt="img" />
                                <img class="w-full h-full object-cover duration-700"
                                    src="assets/images/product/fashion/1-2.png" alt="img" />
                            </div>
                            <div class="countdown-time-block py-1.5 flex items-center justify-center">
                                <div class="text-xs font-semibold uppercase text-red">
                                    <span class="countdown-day">24</span>
                                    <span>D : </span>
                                    <span class="countdown-hour">14</span>
                                    <span>H : </span>
                                    <span class="countdown-minute">36</span>
                                    <span>M : </span>
                                    <span class="countdown-second">51</span>
                                    <span>S</span>
                                </div>
                            </div>
                            <div
                                class="list-action flex items-center justify-center gap-3 px-5 absolute w-full bottom-5">
                                <div
                                    class="add-wishlist-btn sm:w-9 w-8 sm:h-9 h-8 flex items-center justify-center rounded-full bg-white duration-300 relative flex-shrink-0">
                                    <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                        Add To Wishlist
                                    </div>
                                    <i class="ph ph-heart text-xl"></i>
                                </div>
                                <div
                                    class="compare-btn sm:w-9 w-8 sm:h-9 h-8 flex items-center justify-center rounded-full bg-white duration-300 relative flex-shrink-0">
                                    <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                        Compare Product
                                    </div>
                                    <i class="ph ph-arrow-counter-clockwise text-xl compare-icon"></i>
                                    <i class="ph ph-check-circle text-xl checked-icon"></i>
                                </div>
                                <div
                                    class="quick-view-btn sm:w-9 w-8 sm:h-9 h-8 flex items-center justify-center rounded-full bg-white duration-300 relative flex-shrink-0">
                                    <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                        Quick View
                                    </div>
                                    <i class="ph ph-eye text-xl"></i>
                                </div>
                                <div
                                    class="quick-shop-block absolute left-5 right-5 bg-white sm:p-5 p-4 rounded-[20px]">
                                    <div class="list-size flex items-center justify-center flex-wrap gap-2">
                                        <div
                                            class="size-item w-9 h-9 rounded-full flex flex-shrink-0 items-center justify-center text-button bg-white border border-line hover:border-black">
                                            S
                                        </div>
                                        <div
                                            class="size-item w-9 h-9 rounded-full flex flex-shrink-0 items-center justify-center text-button bg-white border border-line hover:border-black">
                                            M
                                        </div>
                                        <div
                                            class="size-item w-9 h-9 rounded-full flex flex-shrink-0 items-center justify-center text-button bg-white border border-line hover:border-black">
                                            L
                                        </div>
                                        <div
                                            class="size-item w-9 h-9 rounded-full flex flex-shrink-0 items-center justify-center text-button bg-white border border-line hover:border-black">
                                            XL
                                        </div>
                                    </div>
                                    <div class="add-cart-btn button-main w-full text-center rounded-full py-3 mt-4">
                                        Add To cart
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-sold sm:pb-4 pb-2">
                                <div class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                    <div class="progress-sold bg-red absolute left-0 top-0 h-full"></div>
                                </div>
                                <div class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                    <div class="text-button-uppercase">
                                        <span class="text-secondary2 max-sm:text-xs">Sold:
                                        </span>
                                        <span class="max-sm:text-xs">24</span>
                                    </div>
                                    <div class="text-button-uppercase">
                                        <span class="text-secondary2 max-sm:text-xs">Available:
                                        </span>
                                        <span class="max-sm:text-xs">96</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-name text-title duration-300">
                                Raglan Sleeve T-shirt
                            </div>
                            <div
                                class="list-color list-color-image max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                                <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                    <img src="assets/images/product/fashion/1-2.png" alt="color"
                                        class="rounded-xl w-full h-full object-cover" />
                                    <div
                                        class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                        Yellow
                                    </div>
                                </div>
                                <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                    <img src="assets/images/product/fashion/1-1.png" alt="color"
                                        class="rounded-xl w-full h-full object-cover" />
                                    <div
                                        class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                        Red
                                    </div>
                                </div>
                                <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                    <img src="assets/images/product/fashion/1-3.png" alt="color"
                                        class="rounded-xl w-full h-full object-cover" />
                                    <div
                                        class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                        Green
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                <div class="product-price text-title">
                                    $30.00
                                </div>
                                <div class="product-origin-price caption1 text-secondary2">
                                    <del>$42.00</del>
                                </div>
                                <div
                                    class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                    -30%
                                </div>
                            </div>
                            <div
                                class="quick-shop-btn text-button-uppercase py-2.5 text-center mt-2 rounded-full duration-300 bg-white border border-black hover:bg-black hover:text-white">
                                Quick Shop
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item grid-type style-5" data-item="3">
                    <div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                            <div
                                class="product-tag text-button-uppercase bg-green px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                New
                            </div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700"
                                    src="assets/images/product/fashion/3-1.png" alt="img" />
                                <img class="w-full h-full object-cover duration-700"
                                    src="assets/images/product/fashion/3-2.png" alt="img" />
                            </div>
                            <div
                                class="list-action flex items-center justify-center gap-3 px-5 absolute w-full bottom-5">
                                <div
                                    class="add-wishlist-btn sm:w-9 w-8 sm:h-9 h-8 flex items-center justify-center rounded-full bg-white duration-300 relative flex-shrink-0">
                                    <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                        Add To Wishlist
                                    </div>
                                    <i class="ph ph-heart text-xl"></i>
                                </div>
                                <div
                                    class="compare-btn sm:w-9 w-8 sm:h-9 h-8 flex items-center justify-center rounded-full bg-white duration-300 relative flex-shrink-0">
                                    <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                        Compare Product
                                    </div>
                                    <i class="ph ph-arrow-counter-clockwise text-xl compare-icon"></i>
                                    <i class="ph ph-check-circle text-xl checked-icon"></i>
                                </div>
                                <div
                                    class="quick-view-btn sm:w-9 w-8 sm:h-9 h-8 flex items-center justify-center rounded-full bg-white duration-300 relative flex-shrink-0">
                                    <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                        Quick View
                                    </div>
                                    <i class="ph ph-eye text-xl"></i>
                                </div>
                                <div
                                    class="quick-shop-block absolute left-5 right-5 bg-white sm:p-5 p-4 rounded-[20px]">
                                    <div class="list-size flex items-center justify-center flex-wrap gap-2">
                                        <div
                                            class="size-item w-9 h-9 rounded-full flex flex-shrink-0 items-center justify-center text-button bg-white border border-line hover:border-black">
                                            S
                                        </div>
                                        <div
                                            class="size-item w-9 h-9 rounded-full flex flex-shrink-0 items-center justify-center text-button bg-white border border-line hover:border-black">
                                            M
                                        </div>
                                        <div
                                            class="size-item w-9 h-9 rounded-full flex flex-shrink-0 items-center justify-center text-button bg-white border border-line hover:border-black">
                                            L
                                        </div>
                                        <div
                                            class="size-item w-9 h-9 rounded-full flex flex-shrink-0 items-center justify-center text-button bg-white border border-line hover:border-black">
                                            XL
                                        </div>
                                    </div>
                                    <div class="add-cart-btn button-main w-full text-center rounded-full py-3 mt-4">
                                        Add To cart
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-sold sm:pb-4 pb-2">
                                <div class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                    <div class="progress-sold bg-red absolute left-0 top-0 h-full"></div>
                                </div>
                                <div class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                    <div class="text-button-uppercase">
                                        <span class="text-secondary2 max-sm:text-xs">Sold:
                                        </span>
                                        <span class="max-sm:text-xs">12</span>
                                    </div>
                                    <div class="text-button-uppercase">
                                        <span class="text-secondary2 max-sm:text-xs">Available:
                                        </span>
                                        <span class="max-sm:text-xs">88</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-name text-title duration-300">
                                Off-the-Shoulder Blouse
                            </div>
                            <div class="list-color py-2 max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                                <div class="color-item bg-red w-8 h-8 rounded-full duration-300 relative">
                                    <div
                                        class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                        Red
                                    </div>
                                </div>
                                <div class="color-item bg-yellow w-8 h-8 rounded-full duration-300 relative">
                                    <div
                                        class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                        yellow
                                    </div>
                                </div>
                                <div class="color-item bg-green w-8 h-8 rounded-full duration-300 relative">
                                    <div
                                        class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                        green
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                <div class="product-price text-title">
                                    $40.00
                                </div>
                                <div class="product-origin-price caption1 text-secondary2">
                                    <del>$50.00</del>
                                </div>
                                <div
                                    class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                    -20%
                                </div>
                            </div>
                            <div
                                class="add-cart-btn w-full text-button-uppercase py-2.5 text-center mt-2 rounded-full duration-300 bg-white border border-black hover:bg-black hover:text-white">
                                Add To Cart
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item grid-type style-5" data-item="4">
                    <div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                            <div
                                class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Sale
                            </div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700"
                                    src="assets/images/product/fashion/4-1.png" alt="img" />
                                <img class="w-full h-full object-cover duration-700"
                                    src="assets/images/product/fashion/4-2.png" alt="img" />
                            </div>
                            <div class="countdown-time-block py-1.5 flex items-center justify-center">
                                <div class="text-xs font-semibold uppercase text-red">
                                    <span class="countdown-day">24</span>
                                    <span>D : </span>
                                    <span class="countdown-hour">14</span>
                                    <span>H : </span>
                                    <span class="countdown-minute">36</span>
                                    <span>M : </span>
                                    <span class="countdown-second">51</span>
                                    <span>S</span>
                                </div>
                            </div>
                            <div
                                class="list-action flex items-center justify-center gap-3 px-5 absolute w-full bottom-5">
                                <div
                                    class="add-wishlist-btn sm:w-9 w-8 sm:h-9 h-8 flex items-center justify-center rounded-full bg-white duration-300 relative flex-shrink-0">
                                    <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                        Add To Wishlist
                                    </div>
                                    <i class="ph ph-heart text-xl"></i>
                                </div>
                                <div
                                    class="compare-btn sm:w-9 w-8 sm:h-9 h-8 flex items-center justify-center rounded-full bg-white duration-300 relative flex-shrink-0">
                                    <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                        Compare Product
                                    </div>
                                    <i class="ph ph-arrow-counter-clockwise text-xl compare-icon"></i>
                                    <i class="ph ph-check-circle text-xl checked-icon"></i>
                                </div>
                                <div
                                    class="quick-view-btn sm:w-9 w-8 sm:h-9 h-8 flex items-center justify-center rounded-full bg-white duration-300 relative flex-shrink-0">
                                    <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                        Quick View
                                    </div>
                                    <i class="ph ph-eye text-xl"></i>
                                </div>
                                <div
                                    class="quick-shop-block absolute left-5 right-5 bg-white sm:p-5 p-4 rounded-[20px]">
                                    <div class="list-size flex items-center justify-center flex-wrap gap-2">
                                        <div
                                            class="size-item w-9 h-9 rounded-full flex flex-shrink-0 items-center justify-center text-button bg-white border border-line hover:border-black">
                                            S
                                        </div>
                                        <div
                                            class="size-item w-9 h-9 rounded-full flex flex-shrink-0 items-center justify-center text-button bg-white border border-line hover:border-black">
                                            M
                                        </div>
                                        <div
                                            class="size-item w-9 h-9 rounded-full flex flex-shrink-0 items-center justify-center text-button bg-white border border-line hover:border-black">
                                            L
                                        </div>
                                        <div
                                            class="size-item w-9 h-9 rounded-full flex flex-shrink-0 items-center justify-center text-button bg-white border border-line hover:border-black">
                                            XL
                                        </div>
                                    </div>
                                    <div class="add-cart-btn button-main w-full text-center rounded-full py-3 mt-4">
                                        Add To cart
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-sold sm:pb-4 pb-2">
                                <div class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                    <div class="progress-sold bg-red absolute left-0 top-0 h-full"></div>
                                </div>
                                <div class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                    <div class="text-button-uppercase">
                                        <span class="text-secondary2 max-sm:text-xs">Sold:
                                        </span>
                                        <span class="max-sm:text-xs">24</span>
                                    </div>
                                    <div class="text-button-uppercase">
                                        <span class="text-secondary2 max-sm:text-xs">Available:
                                        </span>
                                        <span class="max-sm:text-xs">96</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-name text-title duration-300">
                                Raglan Sleeve T-shirt
                            </div>
                            <div
                                class="list-color list-color-image max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                                <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                    <img src="assets/images/product/fashion/4-2.png" alt="color"
                                        class="rounded-xl w-full h-full object-cover" />
                                    <div
                                        class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                        Yellow
                                    </div>
                                </div>
                                <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                    <img src="assets/images/product/fashion/4-1.png" alt="color"
                                        class="rounded-xl w-full h-full object-cover" />
                                    <div
                                        class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                        Red
                                    </div>
                                </div>
                                <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                    <img src="assets/images/product/fashion/4-3.png" alt="color"
                                        class="rounded-xl w-full h-full object-cover" />
                                    <div
                                        class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                        Green
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                <div class="product-price text-title">
                                    $30.00
                                </div>
                                <div class="product-origin-price caption1 text-secondary2">
                                    <del>$42.00</del>
                                </div>
                                <div
                                    class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                    -30%
                                </div>
                            </div>
                            <div
                                class="quick-shop-btn text-button-uppercase py-2.5 text-center mt-2 rounded-full duration-300 bg-white border border-black hover:bg-black hover:text-white">
                                Quick Shop
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item grid-type style-5" data-item="5">
                    <div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                            <div
                                class="product-tag text-button-uppercase bg-green px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                New
                            </div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700"
                                    src="assets/images/product/fashion/5-1.png" alt="img" />
                                <img class="w-full h-full object-cover duration-700"
                                    src="assets/images/product/fashion/5-2.png" alt="img" />
                            </div>
                            <div
                                class="list-action flex items-center justify-center gap-3 px-5 absolute w-full bottom-5">
                                <div
                                    class="add-wishlist-btn sm:w-9 w-8 sm:h-9 h-8 flex items-center justify-center rounded-full bg-white duration-300 relative flex-shrink-0">
                                    <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                        Add To Wishlist
                                    </div>
                                    <i class="ph ph-heart text-xl"></i>
                                </div>
                                <div
                                    class="compare-btn sm:w-9 w-8 sm:h-9 h-8 flex items-center justify-center rounded-full bg-white duration-300 relative flex-shrink-0">
                                    <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                        Compare Product
                                    </div>
                                    <i class="ph ph-arrow-counter-clockwise text-xl compare-icon"></i>
                                    <i class="ph ph-check-circle text-xl checked-icon"></i>
                                </div>
                                <div
                                    class="quick-view-btn sm:w-9 w-8 sm:h-9 h-8 flex items-center justify-center rounded-full bg-white duration-300 relative flex-shrink-0">
                                    <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                        Quick View
                                    </div>
                                    <i class="ph ph-eye text-xl"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-sold sm:pb-4 pb-2">
                                <div class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                    <div class="progress-sold bg-red absolute left-0 top-0 h-full"></div>
                                </div>
                                <div class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                    <div class="text-button-uppercase">
                                        <span class="text-secondary2 max-sm:text-xs">Sold:
                                        </span>
                                        <span class="max-sm:text-xs">12</span>
                                    </div>
                                    <div class="text-button-uppercase">
                                        <span class="text-secondary2 max-sm:text-xs">Available:
                                        </span>
                                        <span class="max-sm:text-xs">88</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-name text-title duration-300">
                                Off-the-Shoulder Blouse
                            </div>
                            <div class="list-color py-2 max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                                <div class="color-item bg-red w-8 h-8 rounded-full duration-300 relative">
                                    <div
                                        class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                        Red
                                    </div>
                                </div>
                                <div class="color-item bg-yellow w-8 h-8 rounded-full duration-300 relative">
                                    <div
                                        class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                        yellow
                                    </div>
                                </div>
                                <div class="color-item bg-green w-8 h-8 rounded-full duration-300 relative">
                                    <div
                                        class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                        green
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                <div class="product-price text-title">
                                    $40.00
                                </div>
                                <div class="product-origin-price caption1 text-secondary2">
                                    <del>$50.00</del>
                                </div>
                                <div
                                    class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                    -20%
                                </div>
                            </div>
                            <div
                                class="add-cart-btn w-full text-button-uppercase py-2.5 text-center mt-2 rounded-full duration-300 bg-white border border-black hover:bg-black hover:text-white">
                                Add To Cart
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
