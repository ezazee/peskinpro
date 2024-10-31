@extends('frontend.master.master-app')

@section('content')
    {{-- Flash Sale Promotion --}}
    <section class="flash-sale-block md:py-20 py-4 relative overflow-hidden">
        <!-- Background Image -->
        <div class="bg-img absolute top-0 left-0 w-full h-full z-[-1] opacity-80">
            <img src="https://watermark.lovepik.com/photo/40011/6653.jpg_wh1200.jpg" alt="PE Skin Professional"
                class="w-full h-full object-cover" />
        </div>
        <!-- Main Container -->
        <div
            class="container flex flex-col md:flex-row items-center justify-between max-sm:justify-center relative w-full lg:w-2/3 px-4 py-8 md:px-8">
            <!-- Flash Sale Content on the Left (Desktop) / Top (Mobile) -->
            <div class="text-content md:basis-1/2 flex flex-col items-center text-center px-8 py-10 order-1 md:order-none">
                <h2 class="heading1 text-bold text-primary">Flash Sale Promotion!</h2>
                <p class="body2 mt-3">Dapatkan 50% Potongan Harga!!</p>
                <div class="countdown-time flex items-center gap-3 max-sm:gap-2 lg:mt-9 md:mt-6 mt-4">
                    <div class="item flex flex-col items-center">
                        <div class="countdown-day time heading1">12</div>
                        <div class="text-button-uppercase font-medium">Days</div>
                    </div>
                    <span class="heading4">:</span>
                    <div class="item flex flex-col items-center">
                        <div class="countdown-hour time heading1">21</div>
                        <div class="text-button-uppercase font-medium">Hours</div>
                    </div>
                    <span class="heading4">:</span>
                    <div class="item flex flex-col items-center">
                        <div class="countdown-minute time heading1">43</div>
                        <div class="text-button-uppercase font-medium">Minutes</div>
                    </div>
                    <span class="heading4">:</span>
                    <div class="item flex flex-col items-center">
                        <div class="countdown-second time heading1">52</div>
                        <div class="text-button-uppercase font-medium">Seconds</div>
                    </div>
                </div>
                <a href="https://wa.me/6282123167895?text=Saya%20Mau%20Barang%20Di%20Flash%20Sale%20Promotion"
                    target="_blank" class="button-main lg:mt-9 md:mt-6 mt-4">Dapatkan Sekarang</a>
            </div>

            <!-- Product Carousel on the Right (Desktop) / Bottom (Mobile) -->
            <div
                class="carousel-container md:basis-1/2 gap-5 flex overflow-x-auto space-x-4 py-10 px-6 md:px-8 snap-x snap-mandatory order-2 md:order-none">
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
    </section>

    {{-- Banner Iklan --}}
    @include('frontend.components.banner-promo-shop')

    {{-- Best Seller Product --}}
    <div class="buy-pack-block md:pt-20 pt-10">
        <div class="container grid sm:grid-cols-2 max-sm:flex max-sm:w-full flex-col max-sm:flex-col-reverse items-center">
            <div class="main-content w-full">
                <div class="heading3">Cosmetic Cream packs</div>
                <div class="block mt-3">Sign up for early sale access, new in, promotions and more</div>
                <div class="list-product mt-8">
                    <div class="product-item pb-5 border-b border-line cursor-pointer" data-item="43">
                        <div class="product-main flex items-center justify-between">
                            <div class="left flex items-center gap-7">
                                <img src="./assets/images/product/cosmetic/1-1.png" alt="1-1" class="w-[60px] h-20 flex-shrink-0 object-cover" />
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
                                <img src="./assets/images/product/cosmetic/1-2.png" alt="1-2" class="w-[60px] h-20 flex-shrink-0 object-cover" />
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
                                <img src="./assets/images/product/cosmetic/1-3.png" alt="1-3" class="w-[60px] h-20 flex-shrink-0 object-cover" />
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
        </div>
    </div>

    {{-- List All Product --}}
    <section class="shop-product lg:py-20 md:py-14 py-10" id="allProduct">
        <div class="container">
            <div class="list-product-block style-grid relative">
                <div class="filter-heading flex items-center justify-between gap-5 flex-wrap">
                    <div class="heading2">
                        All Product
                    </div>
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
                    class="list-product hide-product-sold grid sm:grid-cols-3 grid-cols-2 sm:gap-[30px] gap-[20px] mt-7 lg:grid-cols-4">
                    {{-- Productt --}}
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
                                                        $sizeDiscounts = $item->sizes
                                                            ->pluck('discount')
                                                            ->sort()
                                                            ->toArray();

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
                                                    <div
                                                        class="product-origin-price caption1 text-secondary2 line-through">
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
    </section>
@endsection
