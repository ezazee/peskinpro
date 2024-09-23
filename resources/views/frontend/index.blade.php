@extends('frontend.master.master-app')

@section('content')

<!-- Slider -->
<div class="slider-block style-two bg-linear 2xl:h-[800px] xl:h-[740px] lg:h-[680px] md:h-[580px] sm:h-[500px] h-[420px] w-full">
    <div class="slider-main h-full w-full">
        <div class="swiper swiper-slider-custom h-full relative">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide slider-item h-full w-full relative overflow-hidden">
                    <div class="overlay absolute top-0 left-0 w-full h-full z-10"></div> <!-- Overlay gradient -->
                    <div class="container w-full h-full flex flex-col text-center items-center justify-center relative z-20">
                        <div class="text-content sm:w-[55%] w-2/3">
                            <div class="text-sub-display text-center text-white">Sale! Up To 50% Off!</div>
                            <div class="text-display text-center text-white md:mt-5 mt-2">Discover the Secrets of Effective Skincare</div>
                            <a href="shop-breadcrumb-img.html" class="button-main bg-white text-black md:mt-8 mt-3">Shop Now</a>
                        </div>
                    </div>
                    <div class="sub-img absolute left-0 top-0 w-full h-full z-[-1]">
                        <img src="{{ asset('frontend/assets/images/slider/bg-cos3-1.png') }}" alt="bg-cos3-1" class="w-full h-full object-cover" />
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide slider-item h-full w-full relative overflow-hidden">
                    <div class="overlay absolute top-0 left-0 w-full h-full z-10"></div> <!-- Overlay gradient -->
                    <div class="container w-full h-full flex flex-col text-center items-center justify-center relative z-20">
                        <div class="text-content sm:w-[55%] w-2/3">
                            <div class="text-sub-display text-center text-white">Sale! Up To 50% Off!</div>
                            <div class="text-display text-center text-white md:mt-5 mt-2">Experience the Beauty of Effective Skincare</div>
                            <a href="shop-breadcrumb-img.html" class="button-main bg-white text-black md:mt-8 mt-3">Shop Now</a>
                        </div>
                    </div>
                    <div class="sub-img absolute left-0 top-0 w-full h-full z-[-1]">
                        <img src="{{ asset('frontend/assets/images/slider/bg-cos3-2.png') }}" alt="bg-cos3-2" class="w-full h-full object-cover" />
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide slider-item h-full w-full relative overflow-hidden">
                    <div class="overlay absolute top-0 left-0 w-full h-full z-10"></div> <!-- Overlay gradient -->
                    <div class="container w-full h-full flex flex-col text-center items-center justify-center relative z-20">
                        <div class="text-content sm:w-[55%] w-2/3">
                            <div class="text-sub-display text-center text-white">Sale! Up To 50% Off!</div>
                            <div class="text-display text-center text-white md:mt-5 mt-2">Elevate Your Skincare Journey</div>
                            <a href="shop-breadcrumb-img.html" class="button-main bg-white text-black md:mt-8 mt-3">Shop Now</a>
                        </div>
                    </div>
                    <div class="sub-img absolute left-0 top-0 w-full h-full z-[-1]">
                        <img src="{{ asset('frontend/assets/images/slider/bg-cos3-3.png') }}" alt="bg-cos3-3" class="w-full h-full object-cover" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Marquee -->
<div class="banner-top bg-primary text-white md:py-8 py-4">
    <div class="marquee-block swiper-container flex items-center whitespace-nowrap">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="heading5 md:px-[110px] px-12">Get Glowing Skin</div>
            </div>
            <div class="swiper-slide">
                <div class="icon-leaves md:text-[32px] text-[24px]"></div>
            </div>
            <div class="swiper-slide">
                <div class="heading5 md:px-[110px] px-12">Learn Skincare Tips</div>
            </div>
            <div class="swiper-slide">
                <div class="icon-double-leaves md:text-[32px] text-[24px]"></div>
            </div>
            <div class="swiper-slide">
                <div class="heading5 md:px-[110px] px-12">Subscribe for Exclusive Offers</div>
            </div>
            <div class="swiper-slide">
                <div class="icon-leaves md:text-[32px] text-[24px]"></div>
            </div>
            <div class="swiper-slide">
                <div class="heading5 md:px-[110px] px-12">Get Glowing Skin</div>
            </div>
            <div class="swiper-slide">
                <div class="icon-double-leaves md:text-[32px] text-[24px]"></div>
            </div>
            <div class="swiper-slide">
                <div class="heading5 md:px-[110px] px-12">Learn Skincare Tips</div>
            </div>
            <div class="swiper-slide">
                <div class="icon-leaves md:text-[32px] text-[24px]"></div>
            </div>
            <div class="swiper-slide">
                <div class="heading5 md:px-[110px] px-12">Subscribe for Exclusive Offers</div>
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
            <a href="shop-breadcrumb1.html" class="banner-item relative bg-surface block rounded-[20px] overflow-hidden duration-500">
                <div class="banner-img w-full">
                    <img src="{{ asset('frontend/assets/images/banner/21.png') }}" alt="bg-img" class="w-full duration-500" />
                </div>
                <div class="heading4 absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap">Check & Coutour</div>
                <div class="button-main absolute bottom-8 left-1/2 -translate-x-1/2">Shop Now</div>
            </a>
            <a href="shop-breadcrumb1.html" class="banner-item relative bg-surface block rounded-[20px] overflow-hidden duration-500">
                <div class="banner-img w-full">
                    <img src="{{ asset('frontend/assets/images/banner/22.png') }}" alt="bg-img" class="w-full duration-500" />
                </div>
                <div class="heading4 absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap">Palettes</div>
                <div class="button-main absolute bottom-8 left-1/2 -translate-x-1/2">Shop Now</div>
            </a>
            <a href="shop-breadcrumb1.html" class="banner-item relative bg-surface block rounded-[20px] overflow-hidden duration-500">
                <div class="banner-img w-full">
                    <img src="{{ asset('frontend/assets/images/banner/23.png') }}" alt="bg-img" class="w-full duration-500" />
                </div>
                <div class="heading4 absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap">Eyes</div>
                <div class="button-main absolute bottom-8 left-1/2 -translate-x-1/2">Shop Now</div>
            </a>
        </div>
    </div>
</div>


<div class="lookbook-block cos1 bg-surface md:py-20 py-10 md:mt-20 mt-10">
            <div class="container lg:flex items-center">
                <div class="heading lg:w-1/4 lg:pr-[15px] max-lg:pb-8">
                    <div class="heading3 md:pb-5 pb-3">Everything you need to prepare the look</div>
                    <a href="shop-breadcrumb-img.html" class="text-button pb-1 border-b-2 border-black duration-300 hover:border-green">Shop Now</a>
                </div>

                <div class="list-product hide-product-sold lg:w-3/4 lg:pl-[15px] grid lg:grid-cols-3 grid-cols-2 sm:gap-[30px] gap-[20px]">
                    <div class="product-item grid-type" data-item="41">
                        <div class="product-main cursor-pointer block">
                            <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">Sale</div>
                                <div class="list-action-right absolute top-3 right-3 max-lg:hidden">
                                    <div class="add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Add To Wishlist</div>
                                        <i class="ph ph-heart text-lg"></i>
                                    </div>
                                    <div class="compare-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative mt-2">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Compare Product</div>
                                        <i class="ph ph-arrow-counter-clockwise text-lg compare-icon"></i>
                                        <i class="ph ph-check-circle text-lg checked-icon"></i>
                                    </div>
                                </div>
                                <div class="product-img w-full h-full aspect-[3/4]">
                                    <img class="w-full h-full object-cover duration-700" src="{{ asset('frontend/assets/images/product/cosmetic/1-1.png') }}" alt="img" />
                                    <img class="w-full h-full object-cover duration-700" src="{{ asset('frontend/assets/images/product/cosmetic/1-2.png') }}" alt="img" />
                                </div>
                                {{-- <div class="countdown-time-block py-1.5 flex items-center justify-center">
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
                                </div> --}}
                                <div class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5 max-lg:hidden">
                                    <div class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">Quick View</div>
                                    <div class="quick-shop-btn text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">Quick Shop</div>
                                    <div class="quick-shop-block absolute left-5 right-5 bg-white p-5 rounded-[20px]">
                                        <div class="list-size flex items-center justify-center flex-wrap gap-2">
                                            <div class="size-item px-4 py-2 rounded-full flex items-center justify-center text-button bg-white border border-line">100ml</div>
                                            <div class="size-item px-4 py-2 rounded-full flex items-center justify-center text-button bg-white border border-line">200ml</div>
                                        </div>
                                        <div class="add-cart-btn button-main w-full text-center rounded-full py-3 mt-4">Add To cart</div>
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
                                            <span class="text-secondary2 max-sm:text-xs">Sold: </span>
                                            <span class="max-sm:text-xs">24</span>
                                        </div>
                                        <div class="text-button-uppercase">
                                            <span class="text-secondary2 max-sm:text-xs">Available: </span>
                                            <span class="max-sm:text-xs">96</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-name text-title duration-300">Raglan Sleeve T-shirt</div>

                                <div class="list-color list-color-image max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                                    <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                        <img src="{{ asset('frontend/assets/images/product/cosmetic/2-2.png') }}" alt="color" class="rounded-xl w-full h-full object-cover" />
                                        <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">Yellow</div>
                                    </div>
                                    <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                        <img src="{{ asset('frontend/assets/images/product/cosmetic/9-2.png') }}" alt="color" class="rounded-xl w-full h-full object-cover" />
                                        <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">Red</div>
                                    </div>
                                    <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                        <img src="{{ asset('frontend/assets/images/product/cosmetic/7-2.png') }}" alt="color" class="rounded-xl w-full h-full object-cover" />
                                        <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">Green</div>
                                    </div>
                                </div>

                                <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">$30.00</div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>$42.00</del>
                                    </div>
                                    <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">-30%</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-item grid-type" data-item="52">
                        <div class="product-main cursor-pointer block">
                            <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                <div class="product-tag text-button-uppercase bg-green px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">New</div>
                                <div class="list-action-right absolute top-3 right-3 max-lg:hidden">
                                    <div class="add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Add To Wishlist</div>
                                        <i class="ph ph-heart text-lg"></i>
                                    </div>
                                    <div class="compare-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative mt-2">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Compare Product</div>
                                        <i class="ph ph-arrow-counter-clockwise text-lg compare-icon"></i>
                                        <i class="ph ph-check-circle text-lg checked-icon"></i>
                                    </div>
                                </div>
                                <div class="product-img w-full h-full aspect-[3/4]">
                                    <img class="w-full h-full object-cover duration-700" src="{{ asset('frontend/assets/images/product/cosmetic/6-1.png') }}" alt="img" />
                                    <img class="w-full h-full object-cover duration-700" src="{{ asset('frontend/assets/images/product/cosmetic/6-2.png') }}" alt="img" />
                                </div>
                                <div class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5 max-lg:hidden">
                                    <div class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">Quick View</div>
                                    <div class="add-cart-btn w-full text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">Add To Cart</div>
                                </div>
                            </div>
                            <div class="product-infor mt-4 lg:mb-7">
                                <div class="product-sold sm:pb-4 pb-2">
                                    <div class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                        <div class="progress-sold bg-red absolute left-0 top-0 h-full"></div>
                                    </div>
                                    <div class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                        <div class="text-button-uppercase">
                                            <span class="text-secondary2 max-sm:text-xs">Sold: </span>
                                            <span class="max-sm:text-xs">12</span>
                                        </div>
                                        <div class="text-button-uppercase">
                                            <span class="text-secondary2 max-sm:text-xs">Available: </span>
                                            <span class="max-sm:text-xs">88</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-name text-title duration-300">Off-the-Shoulder Blouse</div>
                                <div class="list-color py-2 max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                                    <div class="color-item bg-red w-8 h-8 rounded-full duration-300 relative">
                                        <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">Red</div>
                                    </div>
                                    <div class="color-item bg-yellow w-8 h-8 rounded-full duration-300 relative">
                                        <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">yellow</div>
                                    </div>
                                    <div class="color-item bg-green w-8 h-8 rounded-full duration-300 relative">
                                        <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">green</div>
                                    </div>
                                </div>

                                <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">$40.00</div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>$50.00</del>
                                    </div>
                                    <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">-20%</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-item grid-type" data-item="49">
                        <div class="product-main cursor-pointer block">
                            <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">Sale</div>
                                <div class="list-action-right absolute top-3 right-3 max-lg:hidden">
                                    <div class="add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Add To Wishlist</div>
                                        <i class="ph ph-heart text-lg"></i>
                                    </div>
                                    <div class="compare-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative mt-2">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Compare Product</div>
                                        <i class="ph ph-arrow-counter-clockwise text-lg compare-icon"></i>
                                        <i class="ph ph-check-circle text-lg checked-icon"></i>
                                    </div>
                                </div>
                                <div class="product-img w-full h-full aspect-[3/4]">
                                    <img class="w-full h-full object-cover duration-700" src="{{ asset('frontend/assets/images/product/cosmetic/7-1.png') }}" alt="img" />
                                    <img class="w-full h-full object-cover duration-700" src="{{ asset('frontend/assets/images/product/cosmetic/7-2.png') }}" alt="img" />
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
                                <div class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5 max-lg:hidden">
                                    <div class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">Quick View</div>
                                    <div class="quick-shop-btn text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">Quick Shop</div>
                                    <div class="quick-shop-block absolute left-5 right-5 bg-white p-5 rounded-[20px]">
                                        <div class="list-size flex items-center justify-center flex-wrap gap-2">
                                            <div class="size-item px-4 py-2 rounded-full flex items-center justify-center text-button bg-white border border-line">100ml</div>
                                            <div class="size-item px-4 py-2 rounded-full flex items-center justify-center text-button bg-white border border-line">200ml</div>
                                        </div>
                                        <div class="add-cart-btn button-main w-full text-center rounded-full py-3 mt-4">Add To cart</div>
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
                                            <span class="text-secondary2 max-sm:text-xs">Sold: </span>
                                            <span class="max-sm:text-xs">24</span>
                                        </div>
                                        <div class="text-button-uppercase">
                                            <span class="text-secondary2 max-sm:text-xs">Available: </span>
                                            <span class="max-sm:text-xs">96</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-name text-title duration-300">Raglan Sleeve T-shirt</div>

                                <div class="list-color list-color-image max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                                    <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                        <img src="{{ asset('frontend/assets/images/product/cosmetic/2-2.png') }}" alt="color" class="rounded-xl w-full h-full object-cover" />
                                        <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">Yellow</div>
                                    </div>
                                    <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                        <img src="{{ asset('frontend/assets/images/product/cosmetic/9-2.png') }}" alt="color" class="rounded-xl w-full h-full object-cover" />
                                        <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">Red</div>
                                    </div>
                                    <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                        <img src="{{ asset('frontend/assets/images/product/cosmetic/7-2.png') }}" alt="color" class="rounded-xl w-full h-full object-cover" />
                                        <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">Green</div>
                                    </div>
                                </div>

                                <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">$30.00</div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>$42.00</del>
                                    </div>
                                    <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">-30%</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-item grid-type">
                        <div class="product-main cursor-pointer block">
                            <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                <div class="product-tag text-button-uppercase bg-green px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">New</div>
                                <div class="list-action-right absolute top-3 right-3 max-lg:hidden">
                                    <div class="add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Add To Wishlist</div>
                                        <i class="ph ph-heart text-lg"></i>
                                    </div>
                                    <div class="compare-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative mt-2">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Compare Product</div>
                                        <i class="ph ph-arrow-counter-clockwise text-lg compare-icon"></i>
                                        <i class="ph ph-check-circle text-lg checked-icon"></i>
                                    </div>
                                </div>
                                <div class="product-img w-full h-full aspect-[3/4]">
                                    <img class="w-full h-full object-cover duration-700" src="{{ asset('frontend/assets/images/product/cosmetic/5-1.png') }}" alt="img" />
                                    <img class="w-full h-full object-cover duration-700" src="{{ asset('frontend/assets/images/product/cosmetic/5-2.png') }}" alt="img" />
                                </div>
                                <div class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5 max-lg:hidden">
                                    <div class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">Quick View</div>
                                    <div class="add-cart-btn w-full text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">Add To Cart</div>
                                </div>
                            </div>
                            <div class="product-infor mt-4 lg:mb-7">
                                <div class="product-sold sm:pb-4 pb-2">
                                    <div class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                        <div class="progress-sold bg-red absolute left-0 top-0 h-full"></div>
                                    </div>
                                    <div class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                        <div class="text-button-uppercase">
                                            <span class="text-secondary2 max-sm:text-xs">Sold: </span>
                                            <span class="max-sm:text-xs">12</span>
                                        </div>
                                        <div class="text-button-uppercase">
                                            <span class="text-secondary2 max-sm:text-xs">Available: </span>
                                            <span class="max-sm:text-xs">88</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-name text-title duration-300">Off-the-Shoulder Blouse</div>
                                <div class="list-color py-2 max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                                    <div class="color-item bg-red w-8 h-8 rounded-full duration-300 relative">
                                        <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">Red</div>
                                    </div>
                                    <div class="color-item bg-yellow w-8 h-8 rounded-full duration-300 relative">
                                        <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">yellow</div>
                                    </div>
                                    <div class="color-item bg-green w-8 h-8 rounded-full duration-300 relative">
                                        <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">green</div>
                                    </div>
                                </div>

                                <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">$40.00</div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>$50.00</del>
                                    </div>
                                    <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">-20%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="buy-pack-block md:pt-20 pt-10">
    <div class="container grid sm:grid-cols-2 max-sm:flex max-sm:w-full flex-col max-sm:flex-col-reverse items-center">
        <div class="main-content w-full">
            <div class="heading3">Cosmetic Cream packs</div>
            <div class="block mt-3">Sign up for early sale access, new in, promotions and more</div>
            <div class="list-product mt-8">
                <div class="product-item pb-5 border-b border-line cursor-pointer" data-item="43">
                    <div class="product-main flex items-center justify-between">
                        <div class="left flex items-center gap-7">
                            <img src="{{ asset('frontend/assets/images/product/cosmetic/1-1.png') }}" alt="1-1" class="w-[60px] h-20 flex-shrink-0 object-cover" />
                            <div class="infor">
                                <div class="product-name text-title">Hair Treatment</div>
                                <div class="caption2 product-brand text-secondary2 uppercase mt-1">Glurmarket</div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="text-title">$<span class="product-price">15</span>,000</div>
                        </div>
                    </div>
                </div>
                <div class="product-item pb-5 border-b border-line cursor-pointer mt-5" data-item="44">
                    <div class="product-main flex items-center justify-between">
                        <div class="left flex items-center gap-7">
                            <img src="{{ asset('frontend/assets/images/product/cosmetic/1-2.png') }}" alt="1-2" class="w-[60px] h-20 flex-shrink-0 object-cover" />
                            <div class="infor">
                                <div class="product-name text-title">After Sun- tan Booster</div>
                                <div class="caption2 product-brand text-secondary2 uppercase mt-1">Glurmarket</div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="text-title">$<span class="product-price">10</span>,000</div>
                        </div>
                    </div>
                </div>
                <div class="product-item pb-5 border-b border-line cursor-pointer mt-5" data-item="42">
                    <div class="product-main flex items-center justify-between">
                        <div class="left flex items-center gap-7">
                            <img src="{{ asset('frontend/assets/images/product/cosmetic/1-3.png') }}" alt="1-3" class="w-[60px] h-20 flex-shrink-0 object-cover" />
                            <div class="infor">
                                <div class="product-name text-title">Tinted Moisturiser</div>
                                <div class="caption2 product-brand text-secondary2 uppercase mt-1">Glurmarket</div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="text-title">$<span class="product-price">20</span>,000</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-button mt-8">
                <div class="add-cart-btn button-main w-full text-center">add set to cart</div>
            </div>
        </div>
        <div class="popular-product sm:pl-20 max-sm:pb-6 max-sm:px-8">
            <div class="item relative">
                <img src="{{ asset('frontend/assets/images/product/cosmetic/1-4.png') }}" alt="/images/product/cosmetic/1-4.png" class="w-full aspect-square object-cover" />
                <div class="dots absolute top-[20%] left-[20%] cursor-pointer">
                    <div class="top-dot w-8 h-8 rounded-full bg-outline flex items-center justify-center">
                        <span class="bg-white w-3 h-3 rounded-full duration-300"></span>
                    </div>
                    <div class="product-item product-infor bg-white rounded-2xl p-4" data-item="43">
                        <div class="text-title name">Hair Treatment</div>
                        <div class="price text-center">$10.00</div>
                        <div class="text-center underline mt-1 text-button-uppercase duration-300 text-secondary2 hover:text-black">View</div>
                    </div>
                </div>
                <div class="dots bottom-dot absolute bottom-[28%] left-[62%] cursor-pointer">
                    <div class="w-8 h-8 rounded-full bg-outline flex items-center justify-center">
                        <span class="bg-white w-3 h-3 rounded-full duration-300"></span>
                    </div>
                    <div class="product-item product-infor bg-white rounded-2xl p-4" data-item="44">
                        <div class="text-title name">After Sun - tan Booster</div>
                        <div class="price text-center">$15.00</div>
                        <div class="text-center underline mt-1 text-button-uppercase duration-300 text-secondary2 hover:text-black">View</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="image-comparison md:pt-[60px] pt-8" data-component="image-comparison-slider">
    <div class="image-comparison__slider-wrapper xl:h-[440px] md:h-[260px] overflow-hidden">
        <label for="image-compare-range" class="image-comparison__label">Move image comparison slider</label>
        <input type="range" min="0" max="100" value="50" class="image-comparison__range" id="image-compare-range" data-image-comparison-range="" />

        <div class="image-comparison__image-wrapper image-comparison__image-wrapper--overlay" data-image-comparison-overlay="">
            <figure class="image-comparison__figure image-comparison__figure--overlay">
                <picture class="image-comparison__picture">
                    <source media="(max-width: 40em)" srcset="assets/images/banner/before.png" />
                    <source media="(min-width: 40.0625em) and (max-width: 48em)" srcset="assets/images/banner/before.png" />
                    <img src="{{ asset('frontend/assets/images/banner/before.png') }}" alt="Mojave desert in the sun" class="image-comparison__image" />
                </picture>

                <figcaption class="image-comparison__caption image-comparison__caption--before absolute top-5 left-5 heading5 px-6 py-3 rounded-[30px] bg-surface2 text-white">
                    <span class="image-comparison__caption-body">Before</span>
                </figcaption>
            </figure>
        </div>

        <div class="image-comparison__slider" data-image-comparison-slider="">
            <span class="image-comparison__thumb" data-image-comparison-thumb="">
                <svg class="image-comparison__thumb-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10" fill="currentColor">
                    <path class="image-comparison__thumb-icon--left" d="M12.121 4.703V.488c0-.302.384-.454.609-.24l4.42 4.214a.33.33 0 0 1 0 .481l-4.42 4.214c-.225.215-.609.063-.609-.24V4.703z"></path>
                    <path class="image-comparison__thumb-icon--right" d="M5.879 4.703V.488c0-.302-.384-.454-.609-.24L.85 4.462a.33.33 0 0 0 0 .481l4.42 4.214c.225.215.609.063.609-.24V4.703z"></path>
                </svg>
            </span>
        </div>

        <div class="image-comparison__image-wrapper">
            <figure class="image-comparison__figure">
                <picture class="image-comparison__picture">
                    <source media="(max-width: 40em)" srcset="assets/images/banner/after.png" />
                    <source media="(min-width: 40.0625em) and (max-width: 48em)" srcset="assets/images/banner/after.png" />
                    <img src="{{ asset('frontend/assets/images/banner/after.png') }}" alt="Mojave desert in the dark" class="image-comparison__image" />
                </picture>

                <figcaption class="image-comparison__caption image-comparison__caption--after absolute top-5 right-5 heading5 px-6 py-3 rounded-[30px] bg-surface2 text-white">
                    <span class="image-comparison__caption-body">After</span>
                </figcaption>
            </figure>
        </div>
    </div>
</section>

<div class="featured-product underwear md:py-20 py-10 bg-surface">
    <div class="container flex lg:items-center justify-between gap-y-6 flex-wrap">
        <div class="list-img md:w-1/2 md:pr-4 w-full flex-shrink-0">
            <img src="{{ asset('frontend/assets/images/product/cosmetic/9-1.png') }}" class="w-full aspect-[3/4] object-cover rounded-2xl" alt="img" />
        </div>
        <div class="product-infor md:w-1/2 w-full lg:pl-16 md:pl-6">
            <div class="flex justify-between">
                <div>
                    <div class="caption2 text-secondary font-semibold uppercase">Cosmetic</div>
                    <div class="heading4 mt-1">Cassis & Grape</div>
                </div>
                <div class="add-wishlist-btn w-10 h-10 flex-shrink-0 flex items-center justify-center border border-line cursor-pointer rounded-lg duration-300 hover:bg-black hover:text-white">
                    <i class="ph ph-heart text-xl"></i>
                </div>
            </div>
            <div class="flex items-center gap-1 mt-3">
                <div class="rate flex">
                    <i class="ph-fill ph-star text-sm text-yellow"></i>
                    <i class="ph-fill ph-star text-sm text-yellow"></i>
                    <i class="ph-fill ph-star text-sm text-yellow"></i>
                    <i class="ph-fill ph-star text-sm text-yellow"></i><i class="ph-fill ph-star text-sm text-yellow"></i>
                </div>
                <span class="caption1 text-secondary">(1.234 reviews)</span>
            </div>
            <div class="flex items-center gap-3 flex-wrap mt-5 pb-6 border-b border-line">
                <div class="product-price heading5">$20.00</div>
                <div class="w-px h-4 bg-line"></div>
                <div class="product-origin-price font-normal text-secondary2">
                    <del>$32.00</del>
                </div>
                <div class="product-sale caption2 font-semibold bg-green px-3 py-0.5 inline-block rounded-full">-19%</div>
                <div class="desc text-secondary mt-3">Keep your clothes organized, yet elegant with storage cabinets by Onita Patio Furniture. Traditionally designed, they are perfect to be used in the any place where you need to store.</div>
            </div>
            <div class="list-action mt-6">
                <div class="choose-size">
                    <div class="heading flex items-center justify-between">
                        <div class="text-title">Size: <span class="text-title size">50ml</span></div>
                    </div>
                    <div class="list-size flex items-center gap-2 flex-wrap mt-3">
                        <div class="size-item w-[72px] h-12 flex items-center justify-center text-button rounded-lg bg-white border border-line">20ml</div>
                        <div class="size-item w-[72px] h-12 flex items-center justify-center text-button rounded-lg bg-white border border-line active">50ml</div>
                        <div class="size-item w-[72px] h-12 flex items-center justify-center text-button rounded-lg bg-white border border-line">100ml</div>
                    </div>
                </div>
                <div class="text-title mt-5">Quantity:</div>
                <div class="choose-quantity flex items-center max-xl:flex-wrap lg:justify-between gap-5 mt-3">
                    <div class="quantity-block md:p-3 max-md:py-1.5 max-md:px-3 flex items-center justify-between rounded-lg border border-line sm:w-[140px] w-[120px] flex-shrink-0">
                        <i class="ph-bold ph-minus cursor-pointer body1"></i>
                        <div class="quantity body1 font-semibold">1</div>
                        <i class="ph-bold ph-plus cursor-pointer body1"></i>
                    </div>
                    <div class="add-cart-btn button-main whitespace-nowrap w-full text-center bg-white text-black border border-black">Add To Cart</div>
                </div>
                <div class="button-block mt-5">
                    <a href="checkout.html" class="button-main w-full text-center">Buy It Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tab-features-block filter-product-block md:pt-20 pt-10">
    <div class="container">
        <div class="heading flex items-center justify-between gap-5 flex-wrap w-full">
            <div class="heading3">New Arrival</div>
            <div class="menu-tab flex items-center bg-surface rounded-2xl">
                <div class="menu flex items-center gap-2 p-1">
                    <div class="indicator absolute top-1 bottom-1 bg-white rounded-full shadow-md duration-300"></div>
                    <div class="tab-item relative text-secondary text-button-uppercase py-2 px-5 cursor-pointer duration-300 hover:text-black active" data-item="eye">eye</div>
                    <div class="tab-item relative text-secondary text-button-uppercase py-2 px-5 cursor-pointer duration-300 hover:text-black" data-item="hair">hair</div>
                    <div class="tab-item relative text-secondary text-button-uppercase py-2 px-5 cursor-pointer duration-300 hover:text-black" data-item="face">face</div>
                    <div class="tab-item relative text-secondary text-button-uppercase py-2 px-5 cursor-pointer duration-300 hover:text-black" data-item="lip">lip</div>
                    <div class="tab-item relative text-secondary text-button-uppercase py-2 px-5 cursor-pointer duration-300 hover:text-black" data-item="nail">nail</div>
                </div>
            </div>
        </div>
        <div class="list-product four-product hide-product-sold grid xl:grid-cols-4 sm:grid-cols-3 grid-cols-2 md:gap-[30px] gap-4 relative section-swiper-navigation style-outline style-small-border md:mt-10 mt-6">
            <!-- List four product -->
        </div>
    </div>
</div>

<div class="container">
    <div class="benefit-block md:py-20 py-10">
        <div class="list-benefit grid items-start md:grid-cols-4 grid-cols-2 gap-[30px]">
            <div class="benefit-item flex flex-col items-center justify-center">
                <i class="icon-double-leaves lg:text-7xl text-5xl"></i>
                <div class="body1 font-semibold uppercase text-center mt-5">Clean skincare</div>
                <div class="caption1 text-secondary text-center mt-2">Clean and natural skincare with safe and transparent ingredients</div>
            </div>
            <div class="benefit-item flex flex-col items-center justify-center">
                <i class="icon-earth lg:text-7xl text-5xl"></i>
                <div class="body1 font-semibold uppercase text-center mt-5">european delivery</div>
                <div class="caption1 text-secondary text-center mt-3">Fast delivery options with tracking No EU import duties</div>
            </div>
            <div class="benefit-item flex flex-col items-center justify-center">
                <i class="icon-update lg:text-7xl text-5xl"></i>
                <div class="body1 font-semibold uppercase text-center mt-5">Sustainability</div>
                <div class="caption1 text-secondary text-center mt-3">Our signature shipping boxes are fully recyclable and biodegradable</div>
            </div>
            <div class="benefit-item flex flex-col items-center justify-center">
                <i class="icon-user-shield lg:text-7xl text-5xl"></i>
                <div class="body1 font-semibold uppercase text-center mt-5">authorized retailer</div>
                <div class="caption1 text-secondary text-center mt-3">We are an authorized retailer for all the brands we carry</div>
            </div>
        </div>
    </div>
</div>

<div class="video-tutorial-block relative max-sm:h-[240px]">
    <div class="bg-img w-full h-full">
        <img src="{{ asset('frontend/assets/images/banner/video-cos3.png') }}" alt="bg-img" class="w-full h-full object-cover" />
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
</div>

<div class="testimonial-block cosmetic3 lg:-mt-[100px] md:-mt-8 -mt-6 relative z-[1]">
    <div class="container">
        <div class="content bg-white lg:py-20 md:py-16 py-8 md:rounded-[20px] rounded-xl box-shadow-sm flex items-center justify-center">
            <div class="main xl:w-5/6 max-xl:px-10 max-lg:px-8 max-sm:px-4 w-full">
                <div class="list-testi w-full section-swiper-navigation style-center style-small-border relative">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper swiper-testimonial-four">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-item flex items-center justify-center">
                                    <div class="main w-4/5">
                                        <div class="desc heading6 font-semibold text-center">"I'm absolutely in love with the skincare products from Onita. They have revolutionized my skincare routine and given me incredible results."</div>
                                        <div class="text-button-uppercase mt-5 text-center">Maverick Nguyen</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-item flex items-center justify-center">
                                    <div class="main w-4/5">
                                        <div class="desc heading6 font-semibold text-center">"I'm absolutely in love with the skincare products from Onita. They have revolutionized my skincare routine and given me incredible results."</div>
                                        <div class="text-button-uppercase mt-5 text-center">Maverick Nguyen</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-item flex items-center justify-center">
                                    <div class="main w-4/5">
                                        <div class="desc heading6 font-semibold text-center">"I'm absolutely in love with the skincare products from Onita. They have revolutionized my skincare routine and given me incredible results."</div>
                                        <div class="text-button-uppercase mt-5 text-center">Maverick Nguyen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                </div>

                <div class="list-brand flex items-center justify-between md:mt-[60px] mt-10">
                    <div class="swiper swiper-list-five-brand">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand-item relative flex items-center justify-center h-[32px]">
                                    <img src="{{ asset('frontend/assets/images/brand/1.png') }}" alt="1" class="h-full w-auto duration-500 relative object-cover" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item relative flex items-center justify-center h-[32px]">
                                    <img src="{{ asset('frontend/assets/images/brand/2.png') }}" alt="2" class="h-full w-auto duration-500 relative object-cover" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item relative flex items-center justify-center h-[32px]">
                                    <img src="{{ asset('frontend/assets/images/brand/3.png') }}" alt="3" class="h-full w-auto duration-500 relative object-cover" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item relative flex items-center justify-center h-[32px]">
                                    <img src="{{ asset('frontend/assets/images/brand/4.png') }}" alt="4" class="h-full w-auto duration-500 relative object-cover" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item relative flex items-center justify-center h-[32px]">
                                    <img src="{{ asset('frontend/assets/images/brand/5.png') }}" alt="5" class="h-full w-auto duration-500 relative object-cover" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item relative flex items-center justify-center h-[32px]">
                                    <img src="{{ asset('frontend/assets/images/brand/6.png') }}" alt="6" class="h-full w-auto duration-500 relative object-cover" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item relative flex items-center justify-center h-[32px]">
                                    <img src="{{ asset('frontend/assets/images/brand/7.png') }}" alt="7" class="h-full w-auto duration-500 relative object-cover" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-video-block">
        <div class="modal-video-main">
            <iframe src="https://www.youtube.com/embed/CxZI6R1VKJY?si=VB9g1QxpuTyoYFls" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
        </div>
    </div>
</div>

<div class="container md:py-20 sm:py-14 py-10">
    <div class="newsletter-block bg-transparent sm:px-8 px-6 sm:rounded-[32px] rounded-3xl flex flex-col items-center">
        <div class="heading3 text-white text-center">Sign up and get 20% off <br />your first order</div>
        <div class="text-white text-center mt-3">Sign up for early sale access, new in, promotions and more</div>
        <div class="input-block lg:w-1/2 sm:w-3/5 w-full h-[52px] sm:mt-10 mt-7">
            <form class="w-full h-full relative">
                <input type="text" placeholder="Enter your e-mail" class="caption1 w-full h-full pl-4 pr-14 rounded-xl border border-line" />
                <button class="button-main bg-green text-black absolute top-1 bottom-1 right-1 flex items-center justify-center">Subscribe</button>
            </form>
        </div>
    </div>
    <div class="help flex items-center justify-between gap-6 gap-y-3 max-sm:grid max-sm:grid-cols-1 mt-10 py-4 border-t border-b border-line w-full">
        <div>Need help?</div>
        <div class="line bg-line w-px h-[26px] max-sm:hidden"></div>
        <div>Working hours : 8:00am - 6:00pm, Mon to Sun</div>
        <div class="line bg-line w-px h-[26px] max-sm:hidden"></div>
        <div>Email: hi.avitex@gmail.com</div>
        <div class="line bg-line w-px h-[26px] max-sm:hidden"></div>
        <div>Phone: +84-123-234-3456</div>
    </div>
</div>

@endsection
