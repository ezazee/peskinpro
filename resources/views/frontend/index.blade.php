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
                <div class="left flex items-center gap-6 gap-y-3 flex-wrap">
                    <div class="heading3">Big Flash Sale</div>
                    <div class="countdown-time bg-primary py-1 px-5 rounded-lg">
                        <div class="heading6 text-white">
                            <span class="countdown-day time">24</span>
                            <span> : </span>
                            <span class="countdown-hour time">14</span>
                            <span> : </span>
                            <span class="countdown-minute time">36</span>
                            <span> : </span>
                            <span class="countdown-second time">51</span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <a href="/shop#allProduct" class="text-button text-primary pb-1 border-b-2 border-primary">Lihat Detail</a>
            </div>
            <div class="list-product three-product hide-last-product hide-product-sold grid xl:grid-cols-4 sm:grid-cols-3 grid-cols-2 md:gap-[30px] gap-4 md:mt-10 mt-6"
                data-gender="men">
                <a href="/shop" class="banner rounded-[20px] overflow-hidden relative flex items-center justify-center">
                    <img src="https://placehold.co/300x498" alt="banner13"
                        class="absolute top-0 left-0 w-full h-full object-cover z-[-1] duration-500" />
                </a>
                <!-- List product -->
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

    @include('frontend.components.banner-promo-home')

    {{-- List Product --}}
    <div class="shop-product py-10">
        <div class="container">
            <div class="heading3 text-center py-10">Hot product Face Care</div>
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

    @include('frontend.components.banner-knowledge')

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

    <div class="md:pb-20 pb-10">
        <div class="news-block md:pt-20 pt-10">
            <div class="container">
                <div class="heading3 text-center">Artikel Kami</div>
                <div class="list grid lg:grid-cols-3 sm:grid-cols-2 md:gap-[30px] gap-4 md:mt-10 mt-6">
                    @foreach ($articles as $item)
                    <a href="{{ route('articlebyTittle', $item->slug) }}">
                    <div class="blog-item style-one h-full cursor-pointer" data-item="16">
                        <div class="blog-main h-full block">
                            <div class="blog-thumb rounded-[20px] overflow-hidden">
                                <img src="{{ asset('storage/' . $item->images) }}" alt="{{ $item->tittle }}" class="w-full duration-500" />
                            </div>
                            <div class="blog-infor mt-7">
                                @foreach ($item->tag as $t)   
                                <div class="blog-tag bg-primary text-white py-1 px-2.5 rounded-full text-button-uppercase inline-block">
                                    {{ $t->nama_tags }}</div>
                                @endforeach
                                <div class="heading6 blog-title mt-3 duration-300">{{ $item->tittle }}</div>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="blog-date caption1 text-secondary">{{ $item->created_at->format('M d, Y') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@include('frontend.components.modal-landing')
@endsection
