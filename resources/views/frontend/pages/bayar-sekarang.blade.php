@extends('frontend.master.master-app')

@section('content')
    <section>
        <div class="checkout-block md:py-20 py-10">
            <div class="container">
                <div class="content-main flex max-lg:flex-col-reverse gap-y-10 justify-between">
                    <div class="left lg:w-1/2">
                        <div class="checkout-block">
                            <div class="heading5 pb-3">Rincian Orderan</div>
                            <div class="discount-block py-5 flex justify-between border-b border-line">
                                <div class="text-title">Subtotal</div>
                                <div class="text-title">Rp.<span
                                        class="discount">{{ number_format($subtotal, 0, ',', '.') }}</span></div>
                            </div>
                            <div class="ship-block py-5 flex justify-between border-b border-line">
                                <div class="text-title">Pengiriman</div>
                                <div class="text-title">
                                    Rp{{ number_format($orders->shipping->shipping_cost, 0, ',', '.') }}
                                </div>
                            </div>
                            <div class="discount-block py-5 flex justify-between border-b border-line">
                                <div class="text-title">Diskon</div>
                                <div class="text-title">-Rp.<span class="discount">{{ number_format($orders->discount_chekout ?? 0, 0, ',', '.') }}
                                </span></div>
                            </div>
                            <div class="total-cart-block pt-5 flex justify-between">
                                <div class="heading5">Total</div>
                                <div class="heading5 total-cart">Rp{{ number_format($orders->total_amount, 0, ',', '.') }}
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center">
                            @if ($orders->status !== 'canceled')
                            <button type="submit" id="submitButton" class="checkout-btn button-main text-center w-full text-white font-semibold rounded-md px-5 mt-3 py-3">
                                Selesaikan Pembayaran
                            </button>
                            <form action="{{ route('order.OrderBatal', $orders->order_number) }}" method="POST">
                                @csrf
                                    <button type="submit" class="mt-2 bg-red text-white font-semibold rounded-md px-5 py-2 w-full text-center bg-red-500">
                                        Batalkan Pesanan
                                    </button>
                            </form>
                            @endif
                            <a class="checkout-btn text-center w-full text-black font-semibold rounded-md px-5 mt-3 py-3 mt-3" href="{{ route('home.index') }}">Lanjutkan Berbelanja</a>
                        </div>

                        <div class="text-center mt-3 text-sm text-gray-500">
                            Dengan melanjutkan, kamu menyetujui <a href="{{ route('returnrefund') }}" target="_blank" class="text-primary underline">S&K
                                Return
                                & Refunds</a>.
                        </div>
                    </div>
                    <div class="right lg:w-5/12">
                        <div class="payment-block">
                            <div class="heading5">Pembayaran: </div><p id="countdown" class="text-red-500 "></p>
                            @if ($orders->status !== 'canceled')
                            <div class="list-payment mt-5">
                                @foreach ($bank as $payment)
                                    <div class="type bg-surface p-5 border border-line rounded-lg mt-5">
                                        <input class="cursor-pointer" type="radio" id="credit" name="bank_id" value="{{ $payment->id }}" />
                                        <label class="text-button pl-2 cursor-pointer"
                                            for="credit">{{ $payment->nama_bank }} -
                                            (A/N)
                                            {{ $payment->atas_nama }}</label>
                                        <div class="infor">
                                            <div class="row">
                                                <div class="col-12 mt-3 relative">
                                                    <input class="cursor-pointer border-line px-4 py-3 w-full rounded mt-2"
                                                        type="text" id="cardNumberCredit1" placeholder="ex.1234567290"
                                                        readonly value="{{ $payment->no_rek }}" />
                                                    <button style="margin-top: 5px"
                                                        onclick="copyToClipboard('cardNumberCredit1')"
                                                        class="copy-btn bg-primary text-white px-4 py-2 rounded absolute right-2 top-1/2 transform -translate-y-1/2">
                                                        Copy
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @endif

                            @if ($orders->status !== 'canceled')
                            {{-- Upload --}}
                            <div class="filter-item text-content w-full p-7 mt-5 border border-line rounded-xl active">
                                <form id="paymentForm" action="{{ route('pembayaran', ['invoice_number' => $invoice->invoice_number ?? '']) }}"
                                    method="POST" enctype="multipart/form-data">
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
                                                    <input type="file" name="payment" id="uploadImage"
                                                        class="caption2 cursor-pointer w-full"
                                                        onchange="previewImage(event)" />
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

                                            <div
                                                class="bg_img flex-shrink-0 relative w-full rounded-lg overflow-hidden bg-surface mt-5">
                                                <span
                                                    class="ph ph-image text-5xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-secondary"></span>
                                                <img id="preview"
                                                    src="{{ asset('frontend/assets/images/payment/bukti-tf.jpg') }}"
                                                    alt="avatar" class="upload_img relative z-[1] max-w-full h-auto" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    <script>
        // Toggle Accordion Function
        function toggleAccordion(id) {
            const accordion = document.getElementById(id);
            accordion.classList.toggle('hidden');
        }

        // Copy to Clipboard Function
        function copyToClipboard(inputId) {
            const input = document.getElementById(inputId);
            input.select();
            input.setSelectionRange(0, 99999); // For mobile devices
            navigator.clipboard.writeText(input.value);
            alert('Nomor Virtual Account berhasil disalin!');
        }
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const createdAt = new Date("{{ $orders->created_at }}");
        const expirationTime = new Date(createdAt.getTime() + 30 * 60000);
        const countdownElement = document.getElementById('countdown');

        function updateCountdown() {
            const now = new Date();
            const timeRemaining = expirationTime - now;

            if (timeRemaining <= 0) {
                countdownElement.innerText = "Waktu pembayaran telah habis!";
                clearInterval(interval);

                fetch('{{ route("update-order-status") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ order_id: {{ $orders->id }} })
                }).then(response => response.json())
                  .then(data => console.log(data.message));
            } else {
                const minutes = Math.floor(timeRemaining / 60000);
                const seconds = Math.floor((timeRemaining % 60000) / 1000);
                countdownElement.innerText = `Waktu tersisa: ${minutes} menit ${seconds} detik`;
            }
        }

        const interval = setInterval(updateCountdown, 1000);
        updateCountdown();
    });
</script>

<script>
    document.getElementById('submitButton').addEventListener('click', function () {
        document.getElementById('paymentForm').submit();
    });
</script>
@endsection
