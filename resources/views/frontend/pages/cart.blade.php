@extends('frontend.master.master-app')

@section('content')

<div class="cart-block md:py-20 py-10">
    <div class="container">
        <div class="content-main flex justify-between max-xl:flex-col gap-y-8">
            <div class="xl:w-2/3 xl:pr-3 w-full">
                <div class="list-product w-full sm:mt-7 mt-5">
                    <div class="w-full">
                        <div class="heading bg-surface bora-4 pt-4 pb-4">
                            <div class="flex">
                                <div class="w-1/2">
                                    <div class="text-button text-center">Produk</div>
                                </div>
                                <div class="w-1/12">
                                    <div class="text-button text-center">Harga</div>
                                </div>
                                <div class="w-1/6">
                                    <div class="text-button text-center">Jumlah</div>
                                </div>
                                <div class="w-1/6">
                                    <div class="text-button text-center">Total Harga</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-product-main w-full mt-3">
                            <div class="item flex md:mt-7 md:pb-7 mt-5 pb-5 border-b border-line w-full">
                                <div class="w-1/2">
                                    <div class="flex items-center gap-6">
                                        <div class="bg-img md:w-[100px] w-20 aspect-[3/4]">
                                            <img src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}" alt="img" class="w-full h-full object-cover rounded-lg">
                                        </div>
                                        <div>
                                            <div class="text-title">Nama Produk Skincare</div>
                                            <div class="list-select mt-3"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/12 price flex items-center justify-center">
                                    <div class="text-title text-center">Rp.150.000</div>
                                </div>
                                <div class="w-1/6 flex items-center justify-center">
                                    <div class="quantity-block bg-surface md:p-3 p-2 flex items-center justify-between rounded-lg border border-line md:w-[100px] flex-shrink-0 w-20">
                                        <i class="ph-bold ph-minus cursor-pointer text-base max-md:text-sm"></i>
                                        <div class="text-button quantity">1</div>
                                        <i class="ph-bold ph-plus cursor-pointer text-base max-md:text-sm"></i>
                                    </div>
                                </div>
                                <div class="w-1/6 flex total-price items-center justify-center">
                                    <div class="text-title text-center">Rp.150.000
                                    </div>
                                </div>
                                <div class="w-1/12 flex items-center justify-center">
                                    <i class="remove-btn ph ph-x-circle text-xl max-md:text-base text-red cursor-pointer hover:text-black duration-300"></i>
                                </div>
                            </div>
                            <div class="item flex md:mt-7 md:pb-7 mt-5 pb-5 border-b border-line w-full">
                                <div class="w-1/2">
                                    <div class="flex items-center gap-6">
                                        <div class="bg-img md:w-[100px] w-20 aspect-[3/4]">
                                            <img src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}" alt="img" class="w-full h-full object-cover rounded-lg">
                                        </div>
                                        <div>
                                            <div class="text-title">Nama Produk Skincare</div>
                                            <div class="list-select mt-3"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/12 price flex items-center justify-center">
                                    <div class="text-title text-center">Rp.150.000</div>
                                </div>
                                <div class="w-1/6 flex items-center justify-center">
                                    <div class="quantity-block bg-surface md:p-3 p-2 flex items-center justify-between rounded-lg border border-line md:w-[100px] flex-shrink-0 w-20">
                                        <i class="ph-bold ph-minus cursor-pointer text-base max-md:text-sm"></i>
                                        <div class="text-button quantity">1</div>
                                        <i class="ph-bold ph-plus cursor-pointer text-base max-md:text-sm"></i>
                                    </div>
                                </div>
                                <div class="w-1/6 flex total-price items-center justify-center">
                                    <div class="text-title text-center">Rp.150.000
                                    </div>
                                </div>
                                <div class="w-1/12 flex items-center justify-center">
                                    <i class="remove-btn ph ph-x-circle text-xl max-md:text-base text-red cursor-pointer hover:text-black duration-300"></i>
                                </div>
                            </div>
                            <div class="item flex md:mt-7 md:pb-7 mt-5 pb-5 border-b border-line w-full">
                                <div class="w-1/2">
                                    <div class="flex items-center gap-6">
                                        <div class="bg-img md:w-[100px] w-20 aspect-[3/4]">
                                            <img src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}" alt="img" class="w-full h-full object-cover rounded-lg">
                                        </div>
                                        <div>
                                            <div class="text-title">Nama Produk Skincare</div>
                                            <div class="list-select mt-3"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/12 price flex items-center justify-center">
                                    <div class="text-title text-center">Rp.150.000</div>
                                </div>
                                <div class="w-1/6 flex items-center justify-center">
                                    <div class="quantity-block bg-surface md:p-3 p-2 flex items-center justify-between rounded-lg border border-line md:w-[100px] flex-shrink-0 w-20">
                                        <i class="ph-bold ph-minus cursor-pointer text-base max-md:text-sm"></i>
                                        <div class="text-button quantity">1</div>
                                        <i class="ph-bold ph-plus cursor-pointer text-base max-md:text-sm"></i>
                                    </div>
                                </div>
                                <div class="w-1/6 flex total-price items-center justify-center">
                                    <div class="text-title text-center">Rp.150.000
                                    </div>
                                </div>
                                <div class="w-1/12 flex items-center justify-center">
                                    <i class="remove-btn ph ph-x-circle text-xl max-md:text-base text-red cursor-pointer hover:text-black duration-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-block discount-code w-full h-12 sm:mt-7 mt-5">
                    <form class="w-full h-full relative">
                        <input type="text" placeholder="Tambahkan Diskon Voucher" class="w-full h-full bg-surface pl-4 pr-14 rounded-lg border border-line" required />
                        <button class="button-main absolute top-1 bottom-1 right-1 px-5 rounded-lg flex items-center justify-center">Apply Code</button>
                    </form>
                </div>
                <div class="list-voucher flex items-center gap-5 flex-wrap sm:mt-7 mt-5">
                    <div class="item border border-line rounded-lg py-2">
                        <div class="top flex gap-10 justify-between px-3 pb-2 border-b border-dashed border-line">
                            <div class="left">
                                <div class="caption1">Discount</div>
                                <div class="caption1 text-primary font-bold">10% OFF</div>
                            </div>
                            <div class="right">
                                <div class="caption1">Untuk Semua Barang <br />Mulai Belanja dari 0 Rupiah</div>
                            </div>
                        </div>
                        <div class="bottom gap-6 items-center flex justify-between px-3 pt-2">
                            <div class="text-button-uppercase">Code: PESKIN2024</div>
                            <div class="button-main py-1 px-2.5 capitalize text-xs">Apply Code</div>
                        </div>
                    </div>
                    <div class="item border border-line rounded-lg py-2">
                        <div class="top flex gap-10 justify-between px-3 pb-2 border-b border-dashed border-line">
                            <div class="left">
                                <div class="caption1">Discount</div>
                                <div class="caption1 text-primary font-bold">15% OFF</div>
                            </div>
                            <div class="right">
                                <div class="caption1">Untuk Semua Barang <br />Mulai Belanja dari 0 Rupiah</div>
                            </div>
                        </div>
                        <div class="bottom gap-6 items-center flex justify-between px-3 pt-2">
                            <div class="text-button-uppercase">Code: KBN2024</div>
                            <div class="button-main py-1 px-2.5 capitalize text-xs">Apply Code</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xl:w-1/3 xl:pl-12 w-full">
                <div class="checkout-block bg-surface p-6 rounded-2xl">
                    <div class="heading5">Ringkasan Order</div>
                    <div class="total-block py-5 flex justify-between border-b border-line">
                        <div class="text-title">Subtotal</div>
                        <div class="text-title">Rp.150.000</div>
                    </div>
                    <div class="discount-block py-5 flex justify-between border-b border-line">
                        <div class="text-title">Discounts</div>
                        <div class="text-title">Rp.0</div>
                    </div>
                    {{-- <div class="ship-block py-5 flex justify-between border-b border-line">
                        <div class="text-title">Pengiriman</div>
                        <div class="choose-type flex gap-12">
                            <div class="left">
                                <div class="type">
                                    <input id="shipping" type="radio" name="ship" />
                                    <label class="pl-1" for="shipping">Free Shipping:</label>
                                </div>
                                <div class="type mt-1">
                                    <input id="local" type="radio" name="ship" value="{30}" />
                                    <label class="text-on-surface-variant1 pl-1" for="local">Local:</label>
                                </div>
                                <div class="type mt-1">
                                    <input id="flat" type="radio" name="ship" value="{40}" />
                                    <label class="text-on-surface-variant1 pl-1" for="flat">Flat Rate:</label>
                                </div>
                            </div>
                            <div class="right">
                                <div class="ship">$0.00</div>
                                <div class="local text-on-surface-variant1 mt-1">$30.00</div>
                                <div class="flat text-on-surface-variant1 mt-1">$40.00</div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="total-cart-block pt-4 pb-4 flex justify-between">
                        <div class="heading5">Total</div>
                        <div class="heading5">Rp.150.000</div>
                    </div>
                    <div class="block-button flex flex-col items-center gap-y-4 mt-5">
                        <a href="checkout.html" class="checkout-btn button-main text-center w-full"> Chekcout Sekarang</a>
                        <a class="text-button hover-underline" href="shop-breadcrumb1.html">Lanjutkan Berbelanja </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
