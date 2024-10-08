@extends('frontend.master.master-app')

@section('content')
    <div class="shop-product search-result-block lg:py-20 md:py-14 py-10">
        <div class="container">
            <div class="heading flex flex-col items-center">
                <div class="heading4 text-center">Found <span class="result-quantity">1</span> results for "<span
                        class="result">Moisturizer</span>"</div>
                <div class="input-block lg:w-1/2 sm:w-3/5 w-full md:h-[52px] h-[44px] sm:mt-8 mt-5">
                    <div class="form-search w-full h-full relative">
                        <input type="text" placeholder="Search..."
                            class="caption1 w-full h-full pl-4 md:pr-[150px] pr-32 rounded-xl border border-line" />
                        <button
                            class="button-main absolute top-1 bottom-1 right-1 flex items-center justify-center">search</button>
                    </div>
                </div>
            </div>

            <div class="list-product-block relative md:pt-10 pt-6">
                <div class="heading6">Pencarian: <span class="result"></span></div>
                <div
                    class="list-product list-product-result hide-product-sold grid lg:grid-cols-4 sm:grid-cols-3 grid-cols-2 sm:gap-[30px] gap-[20px] mt-5">
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
            </div>
        </div>
    </div>
@endsection
