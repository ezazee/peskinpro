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

                </div>
            </div>
        </div>
    </div>

    <!-- Text Berjalan -->
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

    {{-- Product SALE --}}
    <div class="what-new-block filter-product-block md:pt-20 pt-10">
        <div class="container">
            <div class="heading flex items-center justify-between gap-5 flex-wrap">
                <div class="heading3">BIG SALE</div>
            </div>
            <div class="list-product three-product hide-last-product hide-product-sold grid xl:grid-cols-4 sm:grid-cols-3 grid-cols-2 md:gap-[30px] gap-4 md:mt-10 mt-6"
                data-gender="men">
                <a href="/shop"
                    class="banner rounded-[20px] overflow-hidden relative flex items-center justify-center">
                    <img src="{{ asset('frontend/assets/images/banner/iklan.jpg') }}" alt="banner13"
                        class="absolute top-0 left-0 w-full h-full object-cover z-[-1] duration-500" />
                </a>
                <!-- List product -->
                {{-- @foreach ($productsfacialcare as $item)
                    <div class="product-item grid-type style-5">
                        <a href="{{ route('shop.detail', ['slug' => $item->slug]) }}">
                            <div class="product-main cursor-pointer block">
                                <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                    @if ($item->discount && $item->discount > 0)
                                        <div
                                            class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                            Diskon
                                        </div>
                                    @endif
                                    <div class="product-img w-full h-full aspect-[3/4]">
                                        <img class="w-full h-full object-cover duration-700"
                                            src="{{ asset('storage/' . $item->front_image) }}" alt="img" />
                                        <img class="w-full h-full object-cover duration-700"
                                            src="{{ asset('storage/' . $item->back_image) }}" alt="img" />
                                    </div>
                                </div>

                                <div class="product-infor mt-4 lg:mb-7">
                                    <div class="product-name text-title duration-300">
                                        {{ $item->name }}
                                        <div
                                            class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                            <div class="product-price text-title">
                                                @if ($item->discount && $item->discount > 0)
                                                    Rp {{ number_format($item->price - $item->discount, 0, ',', '.') }}
                                                @else
                                                    Rp {{ number_format($item->price, 0, ',', '.') }}
                                                @endif
                                            </div>

                                            @if ($item->discount && $item->discount > 0)
                                                <div class="product-origin-price caption1 text-secondary2 line-through">
                                                    <del>Rp {{ number_format($item->price, 0, ',', '.') }}</del>
                                                </div>
                                                <div
                                                    class="product-sale caption1 text-white font-medium bg-primary px-3 py-0.5 inline-block rounded-full">
                                                    -{{ number_format(100 * ($item->discount / $item->price), 0) }}%
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach --}}
                <div class="product-item grid-type style-5">
                    <a href="/detail"><div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                            <div
                                class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Diskon
                            </div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}"
                                    alt="img" />
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh-hover1.jpg') }}"
                                    alt="img" />
                            </div>
                        </div>
                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300">
                                Nama Produk Skincare
                                <div
                                    class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">
                                        Rp.150.000
                                    </div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>Rp.300.000</del>
                                    </div>
                                    <div
                                        class="product-sale caption1 text-white font-medium bg-primary px-3 py-0.5 inline-block rounded-full">
                                        -50%
                                    </div>
                                </div>
                                {{-- <div
                                    class="quick-shop-btn text-button-uppercase py-2.5 text-center mt-2 rounded-full duration-300 bg-primary text-white border border-primary hover:bg-white hover:text-black">
                                    Tambah Keranjang
                                </div> --}}
                            </div>
                        </div>
                    </div></a>
                </div>
                <div class="product-item grid-type style-5">
                    <a href="/detail"><div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                            <div
                                class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Diskon
                            </div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}"
                                    alt="img" />
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh-hover1.jpg') }}"
                                    alt="img" />
                            </div>
                        </div>
                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300">
                                Nama Produk Skincare
                                <div
                                    class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">
                                        Rp.150.000
                                    </div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>Rp.300.000</del>
                                    </div>
                                    <div
                                        class="product-sale caption1 text-white font-medium bg-primary px-3 py-0.5 inline-block rounded-full">
                                        -50%
                                    </div>
                                </div>
                                {{-- <div
                                    class="quick-shop-btn text-button-uppercase py-2.5 text-center mt-2 rounded-full duration-300 bg-primary text-white border border-primary hover:bg-white hover:text-black">
                                    Tambah Keranjang
                                </div> --}}
                            </div>
                        </div>
                    </div></a>
                </div>
                <div class="product-item grid-type style-5">
                    <a href="/detail"><div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                            <div
                                class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Diskon
                            </div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}"
                                    alt="img" />
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh-hover1.jpg') }}"
                                    alt="img" />
                            </div>
                        </div>
                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300">
                                Nama Produk Skincare
                                <div
                                    class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">
                                        Rp.150.000
                                    </div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>Rp.300.000</del>
                                    </div>
                                    <div
                                        class="product-sale caption1 text-white font-medium bg-primary px-3 py-0.5 inline-block rounded-full">
                                        -50%
                                    </div>
                                </div>
                                {{-- <div
                                    class="quick-shop-btn text-button-uppercase py-2.5 text-center mt-2 rounded-full duration-300 bg-primary text-white border border-primary hover:bg-white hover:text-black">
                                    Tambah Keranjang
                                </div> --}}
                            </div>
                        </div>
                    </div></a>
                </div>
            </div>
        </div>
    </div>

    {{-- Banner Promo --}}
    <div class="banner-block style-toys-kids">
        <div class="container">
            <div class="content md:rounded-[28px] rounded-2xl overflow-hidden relative">
                <img src="{{ asset('frontend/assets/images/banner/bg-banner-toys.png') }}" alt="bg" class="absolute top-0 left-0 w-full h-full object-cover z-[-1]" />
                <div class="text-content xl:w-1/3 w-2/3 xl:pl-[120px] md:pl-20 pl-10 md:py-[85px] py-12">
                    <div class="text-sub-display">Sale Up To 50% Off Today!</div>
                    <div class="heading2 md:mt-4 mt-2">Created to be loved for a lifetime</div>
                    <a href="#" class="button-main md:mt-7 mt-3">Shop Now</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Bundle, Cleansing, Serum --}}
    <div class="banner-block md:pt-20 pt-10">
        <div class="container">
            <div class="list-banner grid md:grid-cols-3 gap-[20px]">
                <a href="/shop" class="banner-item relative bg-surface block rounded-[20px] overflow-hidden duration-500">
                    <div class="banner-img w-full">
                        <img src="{{ asset('frontend/assets/images/banner/21.png') }}" alt="bg-img"
                            class="w-full duration-500" />
                    </div>
                    <div class="heading4 absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap">Serum</div>
                    <div class="button-main absolute bottom-8 left-1/2 -translate-x-1/2">Belanja Sekarang</div>
                </a>
                <a href="/shop" class="banner-item relative bg-surface block rounded-[20px] overflow-hidden duration-500">
                    <div class="banner-img w-full">
                        <img src="{{ asset('frontend/assets/images/banner/22.png') }}" alt="bg-img"
                            class="w-full duration-500" />
                    </div>
                    <div class="heading4 absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap">Bundle PE Care</div>
                    <div class="button-main absolute bottom-8 left-1/2 -translate-x-1/2">Belanja Sekarang</div>
                </a>
                <a href="/shop" class="banner-item relative bg-surface block rounded-[20px] overflow-hidden duration-500">
                    <div class="banner-img w-full">
                        <img src="{{ asset('frontend/assets/images/banner/23.png') }}" alt="bg-img"
                            class="w-full duration-500" />
                    </div>
                    <div class="heading4 absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap">Cleansing Gel</div>
                    <div class="button-main absolute bottom-8 left-1/2 -translate-x-1/2">Belanja Sekarang</div>
                </a>
            </div>
        </div>
    </div>

    {{-- List Product --}}
    <div class="shop-product py-10">
        <div class="container">
            <div class="heading3 text-center py-10">Our Product</div>
            <div class="list-product hide-product-sold grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 sm:gap-[30px] gap-5">
                {{-- @foreach ($products as $prod)
                    <div class="product-item grid-type style-5">
                        <a href="{{ route('shop.detail', ['slug' => $prod->slug]) }}">
                            <div class="product-main cursor-pointer block">
                                <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                    @if ($prod->discount && $prod->discount > 0)
                                        <div
                                            class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                            Diskon
                                        </div>
                                    @endif
                                    <div class="product-img w-full h-full aspect-[3/4]">
                                        <img class="w-full h-full object-cover duration-700"
                                            src="{{ asset('storage/' . $prod->front_image) }}" alt="img" />
                                        <img class="w-full h-full object-cover duration-700"
                                            src="{{ asset('storage/' . $prod->back_image) }}" alt="img" />
                                    </div>
                                </div>
                                <div class="product-infor mt-4 lg:mb-7">
                                    <div class="product-name text-title duration-300">
                                        {{ $prod->name }}
                                        <div
                                            class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                            <div class="product-price text-title">
                                                @if ($prod->discount && $prod->discount > 0)
                                                    Rp {{ number_format($prod->price - $prod->discount, 0, ',', '.') }}
                                                @else
                                                    Rp {{ number_format($prod->price, 0, ',', '.') }}
                                                @endif
                                            </div>

                                            @if ($prod->discount && $prod->discount > 0)
                                                <div class="product-origin-price caption1 text-secondary2 line-through">
                                                    <del>Rp {{ number_format($prod->price, 0, ',', '.') }}</del>
                                                </div>
                                                <div
                                                    class="product-sale caption1 text-white font-medium bg-primary px-3 py-0.5 inline-block rounded-full">
                                                    -{{ number_format(100 * ($prod->discount / $prod->price), 0) }}%
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach --}}
                <div class="product-item grid-type style-5">
                    <a href="/detail"><div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                            <div
                                class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Diskon
                            </div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}"
                                    alt="img" />
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh-hover1.jpg') }}"
                                    alt="img" />
                            </div>
                        </div>
                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300">
                                Nama Produk Skincare
                                <div
                                    class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">
                                        Rp.150.000
                                    </div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>Rp.300.000</del>
                                    </div>
                                    <div
                                        class="product-sale caption1 text-white font-medium bg-primary px-3 py-0.5 inline-block rounded-full">
                                        -50%
                                    </div>
                                </div>
                                {{-- <div
                                    class="quick-shop-btn text-button-uppercase py-2.5 text-center mt-2 rounded-full duration-300 bg-primary text-white border border-primary hover:bg-white hover:text-black">
                                    Tambah Keranjang
                                </div> --}}
                            </div>
                        </div>
                    </div></a>
                </div>
                <div class="product-item grid-type style-5">
                    <a href="/detail"><div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                            <div
                                class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Diskon
                            </div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}"
                                    alt="img" />
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh-hover1.jpg') }}"
                                    alt="img" />
                            </div>
                        </div>
                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300">
                                Nama Produk Skincare
                                <div
                                    class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">
                                        Rp.150.000
                                    </div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>Rp.300.000</del>
                                    </div>
                                    <div
                                        class="product-sale caption1 text-white font-medium bg-primary px-3 py-0.5 inline-block rounded-full">
                                        -50%
                                    </div>
                                </div>
                                {{-- <div
                                    class="quick-shop-btn text-button-uppercase py-2.5 text-center mt-2 rounded-full duration-300 bg-primary text-white border border-primary hover:bg-white hover:text-black">
                                    Tambah Keranjang
                                </div> --}}
                            </div>
                        </div>
                    </div></a>
                </div>
                <div class="product-item grid-type style-5">
                    <a href="/detail"><div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                            <div
                                class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Diskon
                            </div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}"
                                    alt="img" />
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh-hover1.jpg') }}"
                                    alt="img" />
                            </div>
                        </div>
                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300">
                                Nama Produk Skincare
                                <div
                                    class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">
                                        Rp.150.000
                                    </div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>Rp.300.000</del>
                                    </div>
                                    <div
                                        class="product-sale caption1 text-white font-medium bg-primary px-3 py-0.5 inline-block rounded-full">
                                        -50%
                                    </div>
                                </div>
                                {{-- <div
                                    class="quick-shop-btn text-button-uppercase py-2.5 text-center mt-2 rounded-full duration-300 bg-primary text-white border border-primary hover:bg-white hover:text-black">
                                    Tambah Keranjang
                                </div> --}}
                            </div>
                        </div>
                    </div></a>
                </div>
                <div class="product-item grid-type style-5">
                    <a href="/detail"><div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                            <div
                                class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Diskon
                            </div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}"
                                    alt="img" />
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh-hover1.jpg') }}"
                                    alt="img" />
                            </div>
                        </div>
                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300">
                                Nama Produk Skincare
                                <div
                                    class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">
                                        Rp.150.000
                                    </div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>Rp.300.000</del>
                                    </div>
                                    <div
                                        class="product-sale caption1 text-white font-medium bg-primary px-3 py-0.5 inline-block rounded-full">
                                        -50%
                                    </div>
                                </div>
                                {{-- <div
                                    class="quick-shop-btn text-button-uppercase py-2.5 text-center mt-2 rounded-full duration-300 bg-primary text-white border border-primary hover:bg-white hover:text-black">
                                    Tambah Keranjang
                                </div> --}}
                            </div>
                        </div>
                    </div></a>
                </div>
                <div class="product-item grid-type style-5">
                    <a href="/detail"><div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                            <div
                                class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Diskon
                            </div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}"
                                    alt="img" />
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh-hover1.jpg') }}"
                                    alt="img" />
                            </div>
                        </div>
                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300">
                                Nama Produk Skincare
                                <div
                                    class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">
                                        Rp.150.000
                                    </div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>Rp.300.000</del>
                                    </div>
                                    <div
                                        class="product-sale caption1 text-white font-medium bg-primary px-3 py-0.5 inline-block rounded-full">
                                        -50%
                                    </div>
                                </div>
                                {{-- <div
                                    class="quick-shop-btn text-button-uppercase py-2.5 text-center mt-2 rounded-full duration-300 bg-primary text-white border border-primary hover:bg-white hover:text-black">
                                    Tambah Keranjang
                                </div> --}}
                            </div>
                        </div>
                    </div></a>
                </div>
                <div class="product-item grid-type style-5">
                    <a href="/detail"><div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                            <div
                                class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Diskon
                            </div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}"
                                    alt="img" />
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh-hover1.jpg') }}"
                                    alt="img" />
                            </div>
                        </div>
                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300">
                                Nama Produk Skincare
                                <div
                                    class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">
                                        Rp.150.000
                                    </div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>Rp.300.000</del>
                                    </div>
                                    <div
                                        class="product-sale caption1 text-white font-medium bg-primary px-3 py-0.5 inline-block rounded-full">
                                        -50%
                                    </div>
                                </div>
                                {{-- <div
                                    class="quick-shop-btn text-button-uppercase py-2.5 text-center mt-2 rounded-full duration-300 bg-primary text-white border border-primary hover:bg-white hover:text-black">
                                    Tambah Keranjang
                                </div> --}}
                            </div>
                        </div>
                    </div></a>
                </div>
                <div class="product-item grid-type style-5">
                    <a href="/detail"><div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                            <div
                                class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Diskon
                            </div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}"
                                    alt="img" />
                                <img class="w-full h-full object-cover duration-700"
                                    src="{{ asset('frontend/assets/images/product/peskin/contoh-hover1.jpg') }}"
                                    alt="img" />
                            </div>
                        </div>
                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300">
                                Nama Produk Skincare
                                <div
                                    class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">
                                        Rp.150.000
                                    </div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>Rp.300.000</del>
                                    </div>
                                    <div
                                        class="product-sale caption1 text-white font-medium bg-primary px-3 py-0.5 inline-block rounded-full">
                                        -50%
                                    </div>
                                </div>
                                {{-- <div
                                    class="quick-shop-btn text-button-uppercase py-2.5 text-center mt-2 rounded-full duration-300 bg-primary text-white border border-primary hover:bg-white hover:text-black">
                                    Tambah Keranjang
                                </div> --}}
                            </div>
                        </div>
                    </div></a>
                </div>

            </div>
        </div>
    </div>

    <div class="banner-block style-one grid sm:grid-cols-2 gap-5 md:pt-20 pt-10">
        <a href="/shop-breadcrumb-img.html" class="banner-item relative block overflow-hidden duration-500">
            <div class="banner-img">
                <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/skincare-product-sale-banner-design-template-dfdf5426ae3dce24bf880376dcd31943_screen.jpg?ts=1646834465" class="duration-1000" alt="img" />
            </div>
            <div class="banner-content absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center">
                <div class="heading2 text-white">Best Sellers</div>
                <div class="text-button text-white relative inline-block pb-1 border-b-2 border-white duration-500 mt-2">Shop Now</div>
            </div>
        </a>
        <a href="/shop-breadcrumb-img.html" class="banner-item relative block overflow-hidden duration-500">
            <div class="banner-img">
                <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/skincare-product-sale-banner-design-template-dfdf5426ae3dce24bf880376dcd31943_screen.jpg?ts=1646834465" class="duration-1000" alt="img" />
            </div>
            <div class="banner-content absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center">
                <div class="heading2 text-white">New Arrivals</div>
                <div class="text-button text-white relative inline-block pb-1 border-b-2 border-white duration-500 mt-2">Shop Now</div>
            </div>
        </a>
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

    @include('frontend.components.modal-landing')
@endsection
