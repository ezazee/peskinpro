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
                <a href="/shop" class="banner rounded-[20px] overflow-hidden relative flex items-center justify-center">
                    <img src="https://placehold.co/300x498" alt="banner13"
                        class="absolute top-0 left-0 w-full h-full object-cover z-[-1] duration-500" />
                </a>
                <!-- List product -->
                {{-- @foreach ($itemuctsfacialcare as $item)
                    <div class="product-item grid-type style-5">
                        <a href="{{ route('shop.detail', ['slug' => $item->slug]) }}">
                            <div class="product-main cursor-pointer block">
                                <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                    @if (
                                        $item->sizes->pluck('discount')->filter(function ($discount) {
                                                return $discount > 0;
                                            })->isNotEmpty())
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
                                                @php
                                                    $sizePrices = $item->sizes->pluck('price')->sort()->toArray();
                                                    $sizeDiscounts = $item->sizes->pluck('discount')->sort()->toArray();

                                                    $minPrice = $sizePrices ? min($sizePrices) : $item->price;
                                                    $maxDiscount = $sizeDiscounts ? max($sizeDiscounts) : 0;

                                                    $effectivePrice = $minPrice - $maxDiscount;
                                                @endphp

                                                @if ($effectivePrice > 0)
                                                    Rp {{ number_format($effectivePrice, 0, ',', '.') }}
                                                @else
                                                    Rp {{ number_format($minPrice, 0, ',', '.') }}
                                                @endif
                                            </div>

                                            @if ($minPrice > 0 && $maxDiscount > 0)
                                                <div class="product-origin-price caption1 text-secondary2 line-through">
                                                    <del>Rp {{ number_format($minPrice, 0, ',', '.') }}</del>
                                                </div>
                                                <div
                                                    class="product-sale caption1 text-white font-medium bg-primary px-3 py-0.5 inline-block rounded-full">
                                                    -{{ number_format(100 * ($maxDiscount / $minPrice), 0) }}%
                                                </div>
                                            @endif
                                        </div>

                                        <div class="product-sizes mt-2">
                                            <h4 class="text-title">Available Sizes:</h4>
                                            @if ($item->sizes->isNotEmpty())
                                                <ul class="sizes-list flex gap-2">
                                                    @foreach ($item->sizes as $size)
                                                        <li
                                                            class="size-item text-secondary2 px-2 py-1 border border-gray-300 rounded">
                                                            {{ $size->size }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <p class="text-secondary">No sizes available</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach --}}

            </div>
        </div>
    </div>

    {{-- Banner Promo --}}
    <div class="banner-block style-toys-kids">
        <div class="container">
            <a href="#" class="banner-item relative block overflow-hidden duration-500">
                <div class="content md:rounded-[28px] banner-img rounded-2xl overflow-hidden relative">
                    <img src="https://placehold.co/1290x440" alt="bg"
                        class="top-0 left-0 w-full h-full object-contain duration-1000 z-[-1]" />
                </div>
            </a>
        </div>
    </div>

    {{-- Bundle, Cleansing, Serum --}}
    <div class="banner-block md:pt-20 pt-10">
        <div class="container">
            <div class="list-banner grid md:grid-cols-3 gap-[20px]">
                <a href="/shop" class="banner-item relative bg-surface block rounded-[20px] overflow-hidden duration-500">
                    <div class="banner-img w-full">
                        <img src="https://placehold.co/410x548" alt="bg-img" class="w-full duration-500" />
                    </div>
                    <div class="heading4 absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap">Serum</div>
                    <div class="button-main absolute bottom-8 left-1/2 -translate-x-1/2">Belanja Sekarang</div>
                </a>
                <a href="/shop" class="banner-item relative bg-surface block rounded-[20px] overflow-hidden duration-500">
                    <div class="banner-img w-full">
                        <img src="https://placehold.co/410x548" alt="bg-img" class="w-full duration-500" />
                    </div>
                    <div class="heading4 absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap">Bundle PE Care</div>
                    <div class="button-main absolute bottom-8 left-1/2 -translate-x-1/2">Belanja Sekarang</div>
                </a>
                <a href="/shop"
                    class="banner-item relative bg-surface block rounded-[20px] overflow-hidden duration-500">
                    <div class="banner-img w-full">
                        <img src="https://placehold.co/410x548" alt="bg-img" class="w-full duration-500" />
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
            <div class="heading3 text-center py-10">Hot product skincare</div>
            <div class="list-product hide-product-sold grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 sm:gap-[30px] gap-5">
                @foreach ($products as $item)
                    <div class="product-item grid-type style-5">
                        <a href="{{ route('shop.detail', ['slug' => $item->slug]) }}">
                            <div class="product-main cursor-pointer block">
                                <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                    @if (
                                        $item->sizes->pluck('discount')->filter(function ($discount) {
                                                return $discount > 0;
                                            })->isNotEmpty())
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
                                                @php
                                                    $sizePrices = $item->sizes->pluck('price')->sort()->toArray();
                                                    $sizeDiscounts = $item->sizes->pluck('discount')->sort()->toArray();

                                                    $minPrice = $sizePrices ? min($sizePrices) : $item->price;
                                                    $maxDiscount = $sizeDiscounts ? max($sizeDiscounts) : 0;

                                                    $effectivePrice = $minPrice - $maxDiscount;
                                                @endphp

                                                @if ($effectivePrice > 0)
                                                    Rp {{ number_format($effectivePrice, 0, ',', '.') }}
                                                @else
                                                    Rp {{ number_format($minPrice, 0, ',', '.') }}
                                                @endif
                                            </div>
                                            @if ($minPrice > 0 && $maxDiscount > 0)
                                                <div class="product-origin-price caption1 text-secondary2 line-through">
                                                    <del>Rp {{ number_format($minPrice, 0, ',', '.') }}</del>
                                                </div>
                                                <div
                                                    class="product-sale caption1 text-white font-medium bg-primary px-3 py-0.5 inline-block rounded-full">
                                                    -{{ number_format(100 * ($maxDiscount / $minPrice), 0) }}%
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Banner Knowledge 1 --}}
    <div class="banner-block style-one w-full">
        <a href="#" class="banner-item relative block overflow-hidden duration-500">
            <div class="banner-img">
                <img src="https://placehold.co/1920x600" class="duration-1000 w-full" alt="img" />
            </div>
            <div class="banner-content absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center">
                <div class="heading2 text-white">Banner Knowledge</div>
            </div>
        </a>
    </div>

    {{-- Banner Knowledge 2 --}}
    <div class="banner-block style-one w-full">
        <a href="#" class="banner-item relative block overflow-hidden duration-500">
            <div class="banner-img">
                <img src="https://placehold.co/1920x600" class="duration-1000 w-full" alt="img" />
            </div>
            <div class="banner-content absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center">
                <div class="heading2 text-white">Banner Knowledge</div>
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

    <div class="shop-product py-10">
        <div class="container">
            <div class="heading3 text-center py-10">Hot product skincare</div>
            <div class="list-product hide-product-sold grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 sm:gap-[30px] gap-5">
                @foreach ($products as $prod)
                <div class="product-item grid-type style-5">
                    <a href="{{ route('shop.detail', ['slug' => $prod->slug]) }}"><div class="product-main cursor-pointer block">
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
                            </div>
                        </div>
                    </div></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@include('frontend.components.modal-landing')
@endsection
