@extends('frontend.master.master-app')

@section('content')

<section>
    <div class="checkout-block md:py-20 py-10">
        <div class="container">
            <div class="content-main flex max-lg:flex-col-reverse gap-y-10 justify-between">
                <div class="left lg:w-1/2">
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
                                    <div class="select-block">
                                        <select class="border border-line px-4 py-3 w-full rounded-lg" name="province" id="province">
                                            <option value="">Select a province</option>
                                            @foreach ($provinces as $province_id => $province_name)
                                            <option value="{{ $province_id }}">{{ $province_name }}</option>
                                            @endforeach
                                        </select>
                                        <i class="ph ph-caret-down arrow-down"></i>
                                    </div>
                                    <div class="select-block">
                                        <select class="border border-line px-4 py-3 w-full rounded-lg" name="city_destination" id="city_destination">
                                            <option value="">Select a city</option>
                                        </select>
                                        <i class="ph ph-caret-down arrow-down"></i>
                                    </div>
                                    <div class="">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="apartment" type="text" placeholder="Alamat" required />
                                    </div>
                                    <div class="">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="postal" type="text" placeholder="Kode Pos" required />
                                    </div>

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
                            @foreach ($cartItems as $item)
                            <div class="item flex items-center justify-between w-full pb-5 border-b border-line gap-6 mt-5">
                                <div class="bg-img w-[100px] aspect-square flex-shrink-0 rounded-lg overflow-hidden">
                                    <img src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}" alt="img" class="w-full h-full">
                                </div>
                                <div class="flex items-center justify-between w-full">
                                    <div>
                                        <div class="name text-title">{{ $item->product->name }}</div>
                                        <div class="caption1 text-secondary mt-2">
                                            <span class="capitalize">{{$item->productSize->size}}ML</span>
                                        </div>
                                    </div>
                                    <div class="text-title">
                                        <span class="quantity">{{ $item->quantity }}</span>
                                        <span class="px-1">x</span>
                                        <span>
                                            {{ ($item->productSize->price) - ($item->productSize->discount) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
                        $('#city_destination').append('<option value="">Select a city</option>');
                        $.each(data, function(key, value) {
                            $('#city_destination').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('#city_destination').empty();
            }
        });
    });
</script>
