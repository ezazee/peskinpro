@extends('frontend.master.master-app')

@section('content')
    <div class="breadcrumb-block style-img">
        <div class="breadcrumb-main bg-light-primary overflow-hidden">
            <div class="container py-16 relative">
                <div class="main-content w-full h-full flex flex-col items-center justify-center relative z-[1]">
                    <div class="text-content">
                        <div class="heading2 text-center text-white">Our Product</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.components.banner-promo-shop')

    <div class="shop-product lg:py-20 md:py-14 py-10">
        <div class="container">
            <div class="list-product-block style-grid relative">
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
                    class="list-product hide-product-sold grid sm:grid-cols-3 grid-cols-2 sm:gap-[30px] gap-[20px] mt-7 lg:grid-cols-4">
                    {{-- Productt --}}
                    @foreach ($products as $prod)
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
