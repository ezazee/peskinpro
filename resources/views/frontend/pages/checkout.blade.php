@extends('frontend.master.master-app')

@section('content')

<section>
    <div class="checkout-block md:py-20 py-10">
        <div class="container">
            <div class="content-main flex max-lg:flex-col-reverse gap-y-10 justify-between">
                <div class="left lg:w-1/2">
                    {{-- <div class="login bg-surface py-3 px-4 flex justify-between rounded-lg">
                        <div class="left flex items-center"><span class="text-on-surface-variant1 pr-4">Sudah Punya akun ? </span><span class="text-button text-on-surface hover-underline cursor-pointer hover:underline">Login</span></div>
                    </div>
                    <div class="form-login-block mt-3">
                        <form class="p-5 border border-line rounded-lg">
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div class="email">
                                    <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" id="username" type="email" placeholder="Username or email" required />
                                </div>
                                <div class="pass">
                                    <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" id="password" type="password" placeholder="Password" required />
                                </div>
                            </div>
                            <div class="block-button mt-3">
                                <button class="button-main button-blue-hover">Login</button>
                            </div>
                        </form>
                    </div> --}}
                    <div class="information mt-5">
                        <div class="heading5">Informasi Pengiriman</div>
                        <div class="form-checkout mt-5">
                            <form>
                                <div class="grid sm:grid-cols-2 gap-4 gap-y-5 flex-wrap">
                                    <div class="">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="firstName" type="text" placeholder="Nama Depan" required />
                                    </div>
                                    <div class="">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="lastName" type="text" placeholder="Nama Belakang" required />
                                    </div>
                                    <div class="">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="email" type="email" placeholder="Alamat Email" required />
                                    </div>
                                    <div class="">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="phoneNumber" type="number" placeholder="Nomor HP / Whatsapp" required />
                                    </div>
                                    <div class="col-span-full select-block">
                                        <select class="border border-line px-4 py-3 w-full rounded-lg" id="region" name="region">
                                            <option value="default" readonly>Indonesia</option>
                                        </select>
                                        <i class="ph ph-caret-down arrow-down"></i>
                                    </div>
                                    <div class="">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="city" type="text" placeholder="Kota" required />
                                    </div>
                                    <div class="">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="apartment" type="text" placeholder="Alamat" required />
                                    </div>
                                    <div class="select-block">
                                        <select class="border border-line px-4 py-3 w-full rounded-lg" id="country" name="country">
                                            <option value="default">Jakarta</option>
                                        </select>
                                        <i class="ph ph-caret-down arrow-down"></i>
                                    </div>
                                    <div class="">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="postal" type="text" placeholder="Kode Pos" required />
                                    </div>
                                    {{-- <div class="col-span-full">
                                        <textarea class="border border-line px-4 py-3 w-full rounded-lg" id="note" name="note" placeholder="Write note..."></textarea>
                                    </div> --}}
                                </div>
                                <div class="block-button md:mt-10 mt-6">
                                    <button class="button-main w-full">Bayar Sekarang</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="right lg:w-5/12">
                    <div class="checkout-block">
                        <div class="heading5 pb-3">List Orderan</div>
                        <div class="list-product-checkout">
                            <div class="item flex items-center justify-between w-full pb-5 border-b border-line gap-6 mt-5">
                                <div class="bg-img w-[100px] aspect-square flex-shrink-0 rounded-lg overflow-hidden">
                                    <img src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}" alt="img" class="w-full h-full">
                                </div>
                                <div class="flex items-center justify-between w-full">
                                    <div>
                                        <div class="name text-title">Nama Produk Skincare</div>
                                        <div class="caption1 text-secondary mt-2">
                                            <span class="capitalize">50ML</span>
                                        </div>
                                    </div>
                                    <div class="text-title">
                                        <span class="quantity">1</span>
                                        <span class="px-1">x</span>
                                        <span>
                                            Rp.150.000
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="discount-block py-5 flex justify-between border-b border-line">
                            <div class="text-title">Diskon</div>
                            <div class="text-title">-Rp.<span class="discount">0</span></div>
                        </div>
                        <div class="ship-block py-5 flex justify-between border-b border-line">
                            <div class="text-title">Pengiriman</div>
                            <div class="text-title">Gratis</div>
                        </div>
                        <div class="total-cart-block pt-5 flex justify-between">
                            <div class="heading5">Total</div>
                            <div class="heading5 total-cart">Rp.150.000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
