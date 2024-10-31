@extends('frontend.master.master-app')

@section('content')
    <section>
        <div class="checkout-block md:py-20 py-10">
            <div class="container">
                <div class="content-main flex max-lg:flex-col-reverse gap-y-10 justify-between">
                    <div class="left lg:w-1/2">
                        <div class="heading5 pb-3">Informasi Pengiriman</div>
                        <div class="address-item rounded-frame relative p-4 mb-4">
                            <strong class="address-title block mb-2">Garut House</strong>
                            <p class="name-text">Reza</p>
                            <p class="address-description text-secondary py-2">Jl. Pembangunan (Gang Haji Usman, near
                                Al-usman Mosque)</p>
                            <p class="contact-text">6281313711180</p>
                            <div class="action-list mt-3 flex gap-3">
                                <a href="#" class="link-text">Pilih Alamat Lain</a>
                            </div>
                        </div>
                        <div class="information mt-5">
                            <div class="recent_order px-5 pb-2 mt-7 border border-line rounded-xl">
                                <div class="list-product-checkout">
                                    @foreach ($cartItems as $item)
                                        <div class="item flex items-center justify-between w-full pb-5 gap-6 mt-5">
                                            <div
                                                class="bg-img w-[100px] aspect-square flex-shrink-0 rounded-lg overflow-hidden">
                                                <img src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}"
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
                                                        {{ $item->productSize->price - $item->productSize->discount }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-span-full select-box">
                                        <!-- Custom Dropdown for Main Selection -->
                                        <div class="ongkir-select-block" onclick="toggleDropdown()">
                                            <div class="ongkir-select" id="main-select-display">Pilih Pengiriman</div>
                                            <i class="ph ph-caret-down arrow-icon"></i>
                                        </div>
                                        <ul class="dropdown-options" id="main-select-options" style="display: none; width:32%">
                                            <li onclick="selectMainOption('JNE')">
                                                <span>JNE - Jalur Nugraha Ekakurir</span><br>
                                                <small>Estimasi 2-3 Hari : Rp20,000</small>
                                            </li>
                                            <li onclick="selectMainOption('TIKI')">
                                                <span>TIKI - Citra Van Titipan Kilat</span><br>
                                                <small>Estimasi 2-3 Hari : Rp25,000</small>
                                            </li>
                                            <li onclick="selectMainOption('POS')">
                                                <span>POS - POS Indonesia</span><br>
                                                <small>Estimasi 2-3 Hari : Rp30,000</small>
                                            </li>
                                        </ul>

                                        <!-- Nested Options Container -->
                                        <div id="nested-options-container" style="display: none; margin-top: 10px;">
                                            <div class="ongkir-select-block">
                                                <select class="ongkir-select" id="nested-select" name="nested-select">
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
                    <div class="right lg:w-5/12">
                        <div class="checkout-block">
                            <div class="heading5 pb-3">List Orderan</div>
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

                        <!-- Button for Gunakan Voucher styled like image -->
                        <div class="block-button flex flex-col items-center gap-y-2 mt-5">
                            <button id="addVoucherButton"
                                class   ="checkout-btn text-bold rounded-md text-start bg-light-primary border border-primary w-3/4 px-4 py-2 flex justify-between items-center gap-2">
                                <i class="ph ph-ticket"></i>
                                <span class="flex-grow text-left">Makin Hemat Pakai Promo</span>
                                {{-- Ketika Sudah Memakai Promo --}}
                                {{-- <span class="flex-grow text-left">Ketuk Untuk Mengubah Promo</span> --}}
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>

                        <!-- Checkout Button with form submission -->
                        <form action="#" method="POST" class="block-button flex flex-col items-center gap-y-4 mt-5">
                            @csrf
                            <button type="submit"
                                class="checkout-btn button-main text-center w-full bg-green-600 text-white font-semibold rounded-md px-5 py-3">
                                Pilih Pembayaran
                            </button>
                        </form>

                        <!-- Terms & Conditions Text -->
                        <div class="text-center mt-3 text-sm text-gray-500">
                            Dengan melanjutkan, kamu menyetujui <a href="#" class="text-primary underline">S&K
                                Asuransi & Proteksi</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Custom Modal Voucher --}}
    @include('frontend.components.modal-voucher')
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#province').on('change', function() {
            var provinceId = $(this).val();
            if (provinceId) {
                $.ajax({
                    url: '/cities/' + provinceId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#city_destination').empty();
                        $('#city_destination').append(
                            '<option value="">Select a city</option>');
                        $.each(data, function(key, value) {
                            $('#city_destination').append('<option value="' + key +
                                '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('#city_destination').empty();
            }
        });
    });
</script>
