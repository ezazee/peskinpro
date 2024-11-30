@extends('frontend.master.master-app')

@section('content')
    <section>
        <div class="checkout-block md:py-20 py-10">
            <div class="container">
                <div class="content-main flex max-lg:flex-col-reverse gap-y-10 justify-between">
                    <div class="left lg:w-1/2">
                        <div class="checkout-block">
                            <div class="heading5 pb-3">List Orderan</div>
                            @foreach ($cartItems as $item)
                                @php
                                    $subtotal = 0;
                                    $hemat = 0;

                                    foreach ($cartItems as $item) {
                                        $subtotal +=
                                            $item->productSize->price * $item->quantity -
                                            $item->productSize->discount * $item->quantity;
                                        $hemat += $item->productSize->discount * $item->quantity;
                                    }
                                @endphp
                            @endforeach
                            <div class="discount-block py-5 flex justify-between border-b border-line">
                                <div class="text-title">Subtotal : </div>
                                <div class="text-title">
                                    Rp.<span class="discount">{{ number_format($subtotal, 0, ',', '.') }}</span>
                                    <input type="hidden" id="subtotal" value="{{ $subtotal }}">
                                </div>
                            </div>
                            <div class="ship-block py-5 flex justify-between border-b border-line">
                                <div class="text-title">Pengiriman</div>
                                <div class="text-title" id="pengiriman">-</div>
                            </div>
                            <div class="discount-block py-5 flex justify-between border-b border-line">
                                <div class="text-title">Diskon</div>
                                <div class="text-title">-Rp.<span class="discount">0</span></div>
                            </div>
                            <div class="total-cart-block pt-5 flex justify-between">
                                <div class="heading5">Total</div>
                                <div class="heading5 total-cart" id="total">

                                </div>
                            </div>
                        </div>

                        <!-- Button for Gunakan Voucher styled like image -->
                        <div class="block-button flex flex-col items-center gap-y-2 mt-5">
                            <button id="addVoucherButton"
                                class="checkout-btn text-bold rounded-md text-start bg-light-primary border border-primary w-3/4 px-4 py-2 flex justify-between items-center gap-2">
                                <i class="ph ph-ticket"></i>
                                <span class="flex-grow text-left">Makin Hemat Pakai Promo</span>
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>

                        <!-- Checkout Button with form submission -->
                        <form action="{{ route('processpayment') }}"
                            class="block-button flex flex-col items-center gap-y-4 mt-5" method="POST">
                            @csrf
                            <input type="hidden" name="subtotal" value="{{ $subtotal }}">
                            <input type="hidden" id="shipping_cost" name="shipping_cost" value="">
                            <input type="hidden" id="total_amount" name="total_amount" value="">
                            <input type="hidden" id="shipping_courier" name="shipping_courier" value="">
                            <input type="hidden" id="estimated_days" name="estimated_days" value="">
                            @foreach ($defaultAddresses as $item)
                                <input type="hidden" name="alamat_id" value="{{ $item->id }}">
                            @endforeach

                            @foreach ($cartItems as $item)
                                <input type="hidden" name="products[{{ $loop->index }}][id]"
                                    value="{{ $item->product_id }}">
                                <input type="hidden" name="products[{{ $loop->index }}][quantity]"
                                    value="{{ $item->quantity }}">
                                <input type="hidden" name="products[{{ $loop->index }}][sizeid]"
                                    value="{{ $item->productSize->id }}">
                                <input type="hidden" name="products[{{ $loop->index }}][harga]"
                                    value="{{ $item->productSize->price - $item->productSize->discount }}">
                                <input type="hidden" name="products[{{ $loop->index }}][discount]"
                                    value="{{ $item->productSize->discount }}">
                            @endforeach


                            <!-- Checkout Button -->
                            <button type="submit" id="checkoutButton"
                                class="checkout-btn button-main text-center w-full bg-green-600 text-white font-semibold rounded-md px-5 py-3 disabled:opacity-50"
                                disabled>
                                Pilih Pembayaran
                            </button>
                        </form>

                        <!-- Checkbox for Terms -->
                        <div class="flex justify-center items-center gap-2 mt-3">
                            <input type="checkbox" id="termsCheckbox" class="h-5 w-5">
                            <label for="termsCheckbox" class="text-sm text-gray-500">
                                Dengan melanjutkan, kamu menyetujui
                                <a href="#" class="text-primary underline">S&K Return & Refunds</a>.
                            </label>
                        </div>
                    </div>
                    <div class="right lg:w-5/12">
                        <div class="heading5">Informasi Pengiriman</div>
                        @if ($user->alamat->isEmpty())
                            <div class="mt-5">
                                <p><em class="text-primary">Sepertinya kamu belum mempunyai alamat yang disimpan, tambah
                                        alamat
                                        dulu ya!</em></p>
                                <button
                                class="text-bold bg-light-primary border border-primary rounded-md w-full px-4 py-2 mt-5 flex items-center justify-center">
                                    <i class="ph ph-file-plus pr-2"></i>
                                    <a href="{{ route('profile.address') }}" class="text-left">Tambahkan Alamat</a>
                                </button>
                            </div>
                        @else
                            @if ($defaultAddresses->isEmpty())
                                <p class="no-address-text text-secondary">Tidak ada alamat default yang tersedia.</p>
                            @else
                                @foreach ($defaultAddresses as $item)
                                    <div class="address-item rounded-frame relative p-4 mt-7">
                                        <strong class="address-title block mb-2">{{ $item->label }}</strong>
                                        <p class="name-text">{{ $item->penerima }}</p>
                                        <p class="address-description text-secondary py-2">
                                            {{ $item->street }}, Kecamatan {{ $item->kecamatan }}, Kelurahan
                                            {{ $item->kelurahan }} <br>
                                            Kota/Kab {{ $item->city->name }} , {{ $item->province->name }} , <br>Indonesia
                                            ({{ $item->postal_code }})
                                        </p>
                                        <button id="gantiAlamatButton"
                                            class="text-bold bg-light-primary border border-primary rounded-md w-full px-4 py-2 mt-5 flex items-center justify-center">
                                            <i class="ph ph-map-pin-line pr-2"></i>
                                            <span class="text-left">Pilih Alamat Lain</span>
                                        </button>
                                    </div>
                                @endforeach
                            @endif
                        @endif

                        <div class="information mt-5">
                            <div class="recent_order px-5 pb-2 mt-7 border border-line rounded-xl">
                                <div class="list-product-checkout">
                                    @foreach ($cartItems as $item)
                                        <div class="item flex items-center justify-between w-full pb-5 gap-6 mt-5">
                                            <div
                                                class="bg-img w-[100px] aspect-square flex-shrink-0 rounded-lg overflow-hidden">
                                                <img src="{{ asset('storage/' . $item->product->front_image) }}"
                                                    alt="img" class="w-full h-full">
                                            </div>
                                            <div class="flex items-center justify-between w-full">
                                                <div>
                                                    <div class="name text-title">{{ $item->product->name }}</div>
                                                    <div class="caption1 text-secondary mt-2">
                                                        <span class="capitalize">{{ $item->productSize->size }}ML</span>
                                                    </div>
                                                </div>
                                                <div class="text-title">
                                                    <span class="quantity">{{ $item->quantity }}</span>
                                                    <span class="px-0.5">x</span>
                                                    <span>
                                                        @php
                                                            $price = $item->productSize->price ?? 0;
                                                            $discount = $item->productSize->discount ?? 0;

                                                            $effectivePrice = $price - $discount;
                                                        @endphp

                                                        @if ($effectivePrice > 0)
                                                            Rp {{ number_format($effectivePrice, 0, ',', '.') }}
                                                        @else
                                                            Rp {{ number_format($price, 0, ',', '.') }}
                                                        @endif

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-span-full select-box">
                                        <form id="shipping-form" action="{{ route('check_ongkir') }}" method="POST">
                                            @csrf
                                            @if ($defaultAddresses->isEmpty())
                                            @else
                                                @foreach ($defaultAddresses as $item)
                                                    <input type="text" name="province" id="province"
                                                        value="{{ $item->province_id }}" hidden>
                                                    <input type="text" name="city_destination" id="city_destination"
                                                        value="{{ $item->city_id }}" hidden>
                                                @endforeach
                                            @endif
                                            @foreach ($cartItems as $cartItem)
                                                @if ($cartItem->productSize)
                                                    <input type="number" name="weight" id="weight"
                                                        value="{{ $cartItem->productSize->size }}" hidden>
                                                @endif
                                            @endforeach
                                        </form>
                                        <!-- Loader Overlay -->
                                        <div id="loading-overlay" class="loading-overlay hidden">
                                            <div class="loader"></div>
                                            <p class="heading6 text-white mt-5">Mohon Tunggu Sedang Mengecek Ongkir...</p>
                                        </div>


                                        <div id="nested-options-container" style="display: none; margin-top: 10px;">
                                            <div class="ongkir-select-block">
                                                <select class="ongkir-select" id="ongkir-select" name="ongkir-select">
                                                    <option value="default" disabled selected>Pilih Layanan</option>
                                                </select>
                                                <i class="ph ph-caret-down arrow-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Custom Modal Voucher --}}
    @include('frontend.components.modal-voucher')
    {{-- Custom Modal Ganti Alamat --}}
    @include('frontend.components.modal-ganti-alamat')
    @include('frontend.components.chekout-js')

@endsection


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const termsCheckbox = document.getElementById('termsCheckbox');
        const checkoutButton = document.getElementById('checkoutButton');

        // Toggle button disabled state based on checkbox
        termsCheckbox.addEventListener('change', () => {
            checkoutButton.disabled = !termsCheckbox.checked;
        });
    });
</script>



<style>
    @media (max-width: 480px) {
        optgroup {
            font-size: 10px !important;
        }
    }

    optgroup {
            font-size: 13px !important;
        }

    /* Ensure that the select element is responsive */
    #ongkir-select {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        font-size: 13px;
    }

    /* Make the container responsive for mobile */
    #nested-options-container {
        width: 100%;
        overflow-x: hidden;
        /* Prevents horizontal overflow */
        padding-right: 10px;
        /* Optional, adds some space inside the container */
    }
    #loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        /* Semi-transparent background */
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        z-index: 9999;
        /* Ensure it covers everything */
    }

    .loader {
        border: 8px solid #f3f3f3;
        border-top: 8px solid #3498db;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
