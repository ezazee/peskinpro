@extends('frontend.master.master-app')

@section('content')
<section>
    <div class="checkout-block md:py-20 py-10">
        <div class="container">
            <div class="content-main flex max-lg:flex-col-reverse gap-y-10 justify-between">
                <div class="left lg:w-1/2">
                    <div class="payment-block">
                        <div class="heading5">Pembayaran:</div>
                        <div class="list-payment mt-5">

                            <!-- VA BCA (A/N Reza) - Selalu Terbuka -->
                            <div class="type bg-surface p-5 border border-line rounded-lg open">
                                <h1 class="text-button pl-2">VA BCA (A/N Reza)</h1>
                                <div class="infor">
                                    <div class="row">
                                        <div class="col-12 mt-3 relative">
                                            <input class="cursor-pointer border-line px-4 py-3 w-full rounded mt-2 "
                                                type="text" id="cardNumberCredit" placeholder="ex.1234567290" readonly
                                                value="1234567890" />
                                            <button style="margin-top: 5px" onclick="copyToClipboard()"
                                                class="copy-btn bg-primary text-white px-4 py-2 rounded absolute right-2 top-1/2 transform -translate-y-1/2">
                                                Copy
                                            </button>
                                        </div>
                                        <!-- Box Step-by-Step Pembayaran -->
                                        <div class="type bg-surface p-5 border border-line rounded-lg mt-5">
                                            <h2 class="text-button pl-2">Cara Pembayaran</h2>
                                            <ul class="ul-tutor-bayar pl-6 mt-3">
                                                <li>Buka aplikasi mobile banking atau internet banking Anda.</li>
                                                <li>Pilih menu <strong>Transfer</strong> atau <strong>Transfer ke
                                                        VA</strong>.</li>
                                                <li>Masukkan nomor Virtual Account: <span
                                                        class="font-semibold">1234567890</span>.</li>
                                                <li>Masukkan jumlah pembayaran sesuai total tagihan Anda.</li>
                                                <li>Konfirmasi dan selesaikan pembayaran.</li>
                                                <li>Setelah pembayaran selesai, simpan bukti transaksi sebagai
                                                    bukti pembayaran telah berhasil.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Upload --}}
                            <div class="filter-item text-content w-full p-7 mt-5 border border-line rounded-xl active">
                                <form action="{{ route('pembayaran', ['invoice_number' => $invoice->invoice_number ?? '']) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="upload_image col-span-full">
                                        <div class="flex flex-wrap flex-col gap-5">
                                            <div>
                                                <strong class="text-button">Upload Bukti Transfer:</strong>
                                                <p class="caption1 text-secondary mt-1">JPG 120x120px</p>
                                                <div
                                                    class="upload_file flex items-center gap-3 w-full mt-3 px-3 py-2 border border-line rounded">
                                                    <label for="uploadImage"
                                                        class="caption2 py-1 px-3 rounded bg-line whitespace-nowrap cursor-pointer">Choose
                                                        File</label>
                                                        <input type="file" name="payment" id="uploadImage" class="caption2 cursor-pointer w-full" onchange="previewImage(event)" />
                                                </div>
                                                @if ($errors->any())
                                                    <div class="alert text-sm text-red">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="bg_img flex-shrink-0 relative w-full rounded-lg overflow-hidden bg-surface mt-5">
                                                <span class="ph ph-image text-5xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-secondary"></span>
                                                <img id="preview" src="https://i.pinimg.com/736x/68/ed/dc/68eddcea02ceb29abde1b1c752fa29eb.jpg" alt="avatar" class="upload_img relative z-[1] max-w-full h-auto" />
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="right lg:w-5/12">
                    <div class="checkout-block">
                        <div class="heading5 pb-3">Rincian Orderan</div>
                        <div class="discount-block py-5 flex justify-between border-b border-line">
                            <div class="text-title">Subtotal</div>
                            <div class="text-title">Rp.<span
                                    class="discount">{{ number_format($subtotal, 0, ',', '.') }}</span></div>
                        </div>
                        <div class="discount-block py-5 flex justify-between border-b border-line">
                            <div class="text-title">Diskon</div>
                            <div class="text-title">-Rp.<span class="discount">0</span></div>
                        </div>
                        <div class="ship-block py-5 flex justify-between border-b border-line">
                            <div class="text-title">Pengiriman</div>
                            <div class="text-title">Rp{{ number_format($orders->shipping->shipping_cost, 0, ',', '.') }}</div>
                        </div>
                        <div class="total-cart-block pt-5 flex justify-between">
                            <div class="heading5">Total</div>
                            <div class="heading5 total-cart">Rp{{ number_format($orders->total_amount, 0, ',', '.') }}
                            </div>
                        </div>
                    </div>
                    <!-- Terms & Conditions Text -->

                    <!-- Checkout Button with form submission -->
                    <button type="submit"
                        class="checkout-btn button-main text-center w-full bg-green-600 text-white font-semibold rounded-md px-5 mt-3 py-3">
                        Selesaikan Pembayaran
                    </button>
                    <div class="text-center mt-3 text-sm text-gray-500">
                        Dengan melanjutkan, kamu menyetujui <a href="#" class="text-primary underline">S&K Return & Refunds</a>.
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function(){
            const output = document.getElementById('preview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
