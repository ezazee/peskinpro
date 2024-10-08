@extends('frontend.master.master-app')

@section('content')
    {{-- <div class="breadcrumb-block style-img">
    <div class="breadcrumb-main bg-linear overflow-hidden">
        <div class="container lg:pt-[134px] pt-24 pb-10 relative">
            <div class="main-content w-full h-full flex flex-col items-center justify-center relative z-[1]">
                <div class="swiper swiper-inshop w-full lg:w-2/3 mx-auto mt-10">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://t4.ftcdn.net/jpg/03/72/21/29/360_F_372212921_l0wtrUbGY168QTCIRHp1W02ug8CVuWSV.jpg" class="img-fluid" alt="Product 1">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://t4.ftcdn.net/jpg/03/72/21/29/360_F_372212921_l0wtrUbGY168QTCIRHp1W02ug8CVuWSV.jpg" class="img-fluid" alt="Product 2">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://t4.ftcdn.net/jpg/03/72/21/29/360_F_372212921_l0wtrUbGY168QTCIRHp1W02ug8CVuWSV.jpg" class="img-fluid" alt="Product 3">
                        </div>
                    </div>
                    <!-- Add Pagination and Navigation -->
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


    <div class="shop-product breadcrumb1 lg:py-20 md:py-14 py-10">
        <div class="container">
            <div class="flex max-md:flex-wrap max-md:flex-col-reverse gap-y-8">
                {{-- Sidebar --}}
                <div class="sidebar lg:w-1/4 md:w-1/3 w-full md:pr-12">
                    <!-- Filter Kategori -->
                    <div class="filter-brand pb-8 mt-8 border-b">
                        <div class="heading6">Filter Kategori</div>
                        <div class="list-brand mt-4">
                            <div class="brand-item flex items-center justify-between" data-item="face-care">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="face-care" id="face-care" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="face-care" class="brand-name capitalize pl-2 cursor-pointer">Face
                                        Care</label>
                                </div>
                            </div>
                            <div class="brand-item flex items-center justify-between" data-item="body-care">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="body-care" id="body-care" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="body-care" class="brand-name capitalize pl-2 cursor-pointer">Body
                                        Care</label>
                                </div>
                            </div>
                            <div class="brand-item flex items-center justify-between" data-item="hair-care">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="hair-care" id="hair-care" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="hair-care" class="brand-name capitalize pl-2 cursor-pointer">Hair
                                        Care</label>
                                </div>
                            </div>
                            <div class="brand-item flex items-center justify-between" data-item="mani-pedi">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="mani-pedi" id="mani-pedi" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="mani-pedi" class="brand-name capitalize pl-2 cursor-pointer">Mani &
                                        Pedi</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Filter Series -->
                    <div class="filter-brand pb-8 mt-8 border-b">
                        <div class="heading6">Filter Series</div>
                        <div class="list-brand mt-4">
                            <div class="brand-item flex items-center justify-between" data-item="remover-cleanser">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="remover-cleanser" id="remover-cleanser" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="remover-cleanser"
                                        class="brand-name capitalize pl-2 cursor-pointer">Remover/Cleanser</label>
                                </div>
                            </div>
                            <div class="brand-item flex items-center justify-between" data-item="exfoliate">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="exfoliate" id="exfoliate" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="exfoliate"
                                        class="brand-name capitalize pl-2 cursor-pointer">Exfoliate</label>
                                </div>
                            </div>
                            <div class="brand-item flex items-center justify-between" data-item="toner">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="toner" id="toner" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="toner" class="brand-name capitalize pl-2 cursor-pointer">Toner</label>
                                </div>
                            </div>
                            <div class="brand-item flex items-center justify-between" data-item="ampoule">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="ampoule" id="ampoule" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="ampoule" class="brand-name capitalize pl-2 cursor-pointer">Ampoule</label>
                                </div>
                            </div>
                            <div class="brand-item flex items-center justify-between" data-item="serum">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="serum" id="serum" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="serum" class="brand-name capitalize pl-2 cursor-pointer">Serum</label>
                                </div>
                            </div>
                            <div class="brand-item flex items-center justify-between" data-item="gel-mask">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="gel-mask" id="gel-mask" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="gel-mask"
                                        class="brand-name capitalize pl-2 cursor-pointer">Gel/Mask</label>
                                </div>
                            </div>
                            <div class="brand-item flex items-center justify-between" data-item="eye-care">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="eye-care" id="eye-care" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="eye-care" class="brand-name capitalize pl-2 cursor-pointer">Eye
                                        Care</label>
                                </div>
                            </div>
                            <div class="brand-item flex items-center justify-between" data-item="moisturizer">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="moisturizer" id="moisturizer" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="moisturizer"
                                        class="brand-name capitalize pl-2 cursor-pointer">Moisturizer</label>
                                </div>
                            </div>
                            <div class="brand-item flex items-center justify-between" data-item="massage">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="massage" id="massage" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="massage"
                                        class="brand-name capitalize pl-2 cursor-pointer">Massage</label>
                                </div>
                            </div>
                            <div class="brand-item flex items-center justify-between" data-item="sun-protection">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="sun-protection" id="sun-protection" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="sun-protection" class="brand-name capitalize pl-2 cursor-pointer">Sun
                                        Protection</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Filter Sensifitas -->
                    <div class="filter-brand pb-8 mt-8">
                        <div class="heading6">Filter Sensifitas</div>
                        <div class="list-brand mt-4">
                            <div class="brand-item flex items-center justify-between" data-item="normal">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="normal" id="normal" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="normal" class="brand-name capitalize pl-2 cursor-pointer">Normal</label>
                                </div>
                            </div>
                            <div class="brand-item flex items-center justify-between" data-item="sensitive">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="sensitive" id="sensitive" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="sensitive"
                                        class="brand-name capitalize pl-2 cursor-pointer">Sensitive</label>
                                </div>
                            </div>
                            <div class="brand-item flex items-center justify-between" data-item="oily-acne">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="oily-acne" id="oily-acne" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="oily-acne" class="brand-name capitalize pl-2 cursor-pointer">Oily-acne
                                        prone</label>
                                </div>
                            </div>
                            <div class="brand-item flex items-center justify-between" data-item="dry-skin">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="dry-skin" id="dry-skin" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="dry-skin" class="brand-name capitalize pl-2 cursor-pointer">Dry
                                        Skin</label>
                                </div>
                            </div>
                            <div class="brand-item flex items-center justify-between" data-item="anti-aging">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="anti-aging" id="anti-aging" />
                                        <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="anti-aging"
                                        class="brand-name capitalize pl-2 cursor-pointer">Anti-aging</label>
                                </div>
                            </div>
                            <div class="brand-item flex items-center justify-between" data-item="whitening">
                                <div class="left flex items-center cursor-pointer">
                                    <div class="block-input">
                                        <input type="checkbox" name="whitening" id="whitening" />
                                        <i class="ph-fill ph-check icon-checkbox text-2xl"></i>
                                    </div>
                                    <label for="whitening"
                                        class="brand-name capitalize pl-2 cursor-pointer">Whitening</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="list-product-block style-grid lg:w-3/4 md:w-2/3 w-full md:pl-3">
                    {{-- Filter Sort --}}
                    <div class="filter-heading flex items-center justify-between gap-5 flex-wrap">
                        <div class="sort-product right flex items-center gap-3">
                            <label for="select-filter" class="caption1 capitalize">Sort by</label>
                            <div class="select-block relative">
                                <select id="select-filter" name="select-filter"
                                    class="caption1 py-2 pl-3 md:pr-20 pr-10 rounded-lg border border-line">
                                    <option value="Sorting">Sorting</option>
                                    <option value="soldQuantityHighToLow">Best Selling</option>
                                    <option value="discountHighToLow">Best Discount</option>
                                    <option value="priceHighToLow">Price High To Low</option>
                                    <option value="priceLowToHigh">Price Low To High</option>
                                </select>
                                <i class="ph ph-caret-down absolute top-1/2 -translate-y-1/2 md:right-4 right-2"></i>
                            </div>
                        </div>
                    </div>

                    <div class="list-filtered flex items-center gap-3 flex-wrap"></div>


                    {{-- List Product Shop --}}
                    <div
                        class="list-product hide-product-sold grid lg:grid-cols-3 grid-cols-2 sm:gap-[30px] gap-[20px] mt-7">
                        {{-- Productt --}}
                        <div class="product-item grid-type style-5">
                            <div class="product-main cursor-pointer block">
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
                            </div>

                        </div>
                        <div class="product-item grid-type style-5">
                            <div class="product-main cursor-pointer block">
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
                            </div>

                        </div>
                        <div class="product-item grid-type style-5">
                            <div class="product-main cursor-pointer block">
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
                            </div>

                        </div>
                        <div class="product-item grid-type style-5">
                            <div class="product-main cursor-pointer block">
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
                            </div>

                        </div>
                        <div class="product-item grid-type style-5">
                            <div class="product-main cursor-pointer block">
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
                            </div>

                        </div>
                        <div class="product-item grid-type style-5">
                            <div class="product-main cursor-pointer block">
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
                            </div>

                        </div>
                        <div class="product-item grid-type style-5">
                            <div class="product-main cursor-pointer block">
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
                            </div>

                        </div>
                        <div class="product-item grid-type style-5">
                            <div class="product-main cursor-pointer block">
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
                            </div>

                        </div>
                        <div class="product-item grid-type style-5">
                            <div class="product-main cursor-pointer block">
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
                            </div>

                        </div>
                    </div>

                    <div class="list-pagination w-full flex items-center gap-4 mt-10">
                        <button class="active">1</button>
                        <button>2</button>
                        <button>3</button>
                        <button>&gt;</button>
                        <button>&gt;&gt;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
