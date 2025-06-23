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
                                <div class="text-title">-<span id="discount-chekout">0</span></div>
                            </div>
                            <div class="total-cart-block pt-5 flex justify-between">
                                <div class="heading5">Total</div>
                                <div class="heading5 total-cart" id="total">
                                </div>
                            </div>
                        </div>

                        <div class="block-button flex flex-col items-center gap-y-2 mt-5">
                            <button id="addVoucherButton"
                                class="checkout-btn text-bold rounded-md text-start bg-light-primary border border-primary w-3/4 px-4 py-2 flex justify-between items-center gap-2">
                                <i class="ph ph-ticket"></i>
                                <span class="flex-grow text-left">Makin Hemat Pakai Promo</span>
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>

                        <form action="{{ route('processpayment') }}"
                            class="block-button flex flex-col items-center gap-y-4 mt-5" method="POST">
                            @csrf
                            <input type="hidden" name="subtotal" value="{{ $subtotal }}">
                            <input type="hidden" id="shipping_cost" name="shipping_cost" value="">
                            <input type="hidden" id="total_amount" name="total_amount" value="">
                            <input type="hidden" id="shipping_courier" name="shipping_courier" value="">
                            <input type="hidden" id="estimated_days" name="estimated_days" value="">
                            <input type="hidden" id="discount_value" name="discount_value" value="">
                            <input type="hidden" id="coupon_code" name="coupon_code" value="">
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
                                <a href="{{ route('returnrefund') }}" class="text-primary underline">S&K Return & Refunds</a>.
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
                                                    <div class="name text-title">{{ Str::limit($item->product->name, 20) }}</div>
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
    document.addEventListener("DOMContentLoaded", function () {
        const shippingForm = document.getElementById('shipping-form');
        const overlay = document.getElementById('loading-overlay');
        const container = document.getElementById('nested-options-container');
        const select = document.getElementById('ongkir-select');

        if (shippingForm) {
            async function submitForm() {
                const formData = new FormData(shippingForm);
                overlay.classList.remove('hidden');

                try {
                    const response = await fetch(shippingForm.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    });

                    if (!response.ok) throw new Error(response.statusText);
                    const results = await response.json();
                    overlay.classList.add('hidden');
                    container.style.display = 'block';

                    displayResults(results);
                } catch (error) {
                    overlay.classList.add('hidden');
                    console.error('Shipping Fetch Error:', error);
                }
            }

            function displayResults(results) {
                select.innerHTML = '';
                    const destinationProvince = results.jne.destination_province || null;
                    if (destinationProvince === "DKI Jakarta") {
                        results["ANTAR PE"] = {
                            destination_province: "DKI Jakarta",
                            costs: [
                                {
                                    service: "PEANTAR",
                                    description: "PESKIN ANTAR",
                                    cost: [
                                        {
                                            value: 20000,
                                            etd: "1-2",
                                            note: ""
                                        }
                                    ]
                                }
                            ]
                        };
                    }

                    let allCosts = [];
                for (const [courier, data] of Object.entries(results)) {
                    const services = data.costs;

                    services.forEach(service => {
                        if (!["T15", "T25", "T60", "TRC", "DAT","CTCYES","ECO","SRP","TRX","FRZ","ONS"].includes(service.service)) {
                            (service.cost || []).forEach(costDetail => {
                                allCosts.push({
                                    courier: courier.toUpperCase(),
                                    service: service.service,
                                    description: service.description,
                                    value: costDetail.value,
                                    etd: costDetail.etd
                                });
                            });
                        }
                    });
                }


                const getTop2Bottom2 = (courierName) => {
                    const filtered = allCosts.filter(x => x.courier === courierName.toUpperCase()).sort((a, b) => a.value - b.value);
                    return {
                        cheapest: filtered.slice(0, 2),
                        mostExpensive: filtered.slice(-2)
                    };
                };

                const jneCosts = getTop2Bottom2('JNE');
                const tikiCosts = getTop2Bottom2('TIKI');

                const defaultTop = jneCosts.cheapest.length > 0 ? jneCosts.cheapest[0] : allCosts.sort((a, b) => a.value - b.value)[0];

                if (defaultTop) {
                    const defaultOption = document.createElement('option');
                    defaultOption.value = `${defaultTop.courier}|${defaultTop.description}|${defaultTop.value}|${defaultTop.etd}|${defaultTop.service}`;
                    defaultOption.selected = true;
                    defaultOption.textContent = `${defaultTop.description} (${defaultTop.service}) - Estimasi ${defaultTop.etd} Hari: Rp${formatNumber(defaultTop.value)} ${defaultTop.courier}`;
                    select.appendChild(defaultOption);

                    document.getElementById('pengiriman').textContent = `Rp${formatNumber(defaultTop.value)}`;
                    document.getElementById('shipping_cost').value = defaultTop.value;
                    document.getElementById('shipping_courier').value = defaultTop.courier;
                    document.getElementById('estimated_days').value = `${defaultTop.etd} Hari`;
                }

                const grouped = {};
                allCosts.forEach(service => {
                    const courier = service.courier;
                    if (!grouped[courier]) grouped[courier] = [];
                    grouped[courier].push(service);
                });

                for (const [courier, services] of Object.entries(grouped)) {
                    const groupOption = document.createElement('optgroup');
                    groupOption.label = courier;

                    services.sort((a, b) => a.value - b.value);

                    services.forEach(service => {
                        const option = document.createElement('option');
                        option.value = `${service.courier}|${service.description}|${service.value}|${service.etd}|${service.service}`;
                        option.textContent = `${service.description} (${service.service}) - Estimasi ${service.etd} Hari: Rp${formatNumber(service.value)} ${service.courier}`;
                        groupOption.appendChild(option);
                    });

                    select.appendChild(groupOption);
                }

                // Event saat select berubah
                select.addEventListener('change', function () {
                    const selectedOption = select.options[select.selectedIndex];
                    const [courier, description, costValue, etd] = selectedOption.value.split('|');
                    const selectedCost = parseFloat(costValue) || 0;

                    if (selectedCost > 0) {
                        document.getElementById('pengiriman').textContent = `Rp${formatNumber(selectedCost)}`;
                        document.getElementById('shipping_cost').value = selectedCost;
                        document.getElementById('shipping_courier').value = courier;
                        document.getElementById('estimated_days').value = `${etd} Hari`;
                    } else {
                        document.getElementById('pengiriman').textContent = '-';
                        document.getElementById('shipping_cost').value = '';
                        document.getElementById('estimated_days').value = '';
                    }

                    calculateTotal();
                });

                const discountElement = document.getElementById('discount-chekout');
                if (discountElement) {
                    const observer = new MutationObserver(() => {
                        calculateTotal();
                    });
                    observer.observe(discountElement, { childList: true, subtree: true });
                }

                calculateTotal();
            }

            submitForm();
        }

    const couponForm = document.getElementById('applyCouponForm');
    if (couponForm) {
        couponForm.addEventListener('submit', async function (e) {
            e.preventDefault();

            const formData = new FormData(couponForm);
            const messageEl = document.getElementById('coupon-message');

            try {
                const res = await fetch('{{ route('voucher.apply') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                });

                const data = await res.json();

                if (data.status) {
                    messageEl.classList.remove('text-red-500');
                    messageEl.classList.add('text-green-600');
                    messageEl.textContent = data.message;

                    const discountValue = parseInt(data.discount) || 0;
                    const couponType = data.type;
                    if (couponType === 'free_shipping') {
                        const shippingInput = document.getElementById('shipping_cost');
                        const originalShippingCost = parseInt(shippingInput?.value || 0);
                        
                        const reducedShippingCost = discountValue === 0 ? 0 : Math.max(originalShippingCost - discountValue, 0);
                        shippingInput.value = reducedShippingCost;
                        shippingInput.dataset.original = originalShippingCost;

                        const shippingLabel = document.getElementById('pengiriman');
                        if (shippingLabel) {
                            shippingLabel.innerText = reducedShippingCost === 0 ? 'Gratis' : `Rp${formatNumber(reducedShippingCost)}`;
                        }
                        const estimatedDays = document.getElementById('estimated_days');
                        if (reducedShippingCost === 0 && estimatedDays) estimatedDays.value = '-';

                        document.getElementById('discount-chekout').value = discountValue;
                    } else {
                        document.getElementById('discount-chekout').textContent = `Rp.${formatNumber(discountValue)}`;
                        document.getElementById('discount_value').value = discountValue;
                    }
                        
                    const couponInput = document.getElementById('coupon_code');
    
                    const newCouponCode = data.coupon_code;

                    let currentCoupons = [];
                        try {
                            currentCoupons = couponInput.value ? JSON.parse(couponInput.value) : [];
                        } catch (error) {
                            currentCoupons = [];
                        }
                        if (!currentCoupons.includes(newCouponCode)) {
                             currentCoupons.push(newCouponCode);
                        }

                    couponInput.value = JSON.stringify(currentCoupons);
                    calculateTotal();

                } else {
                    messageEl.classList.remove('text-green-600');
                    messageEl.classList.add('text-red-500');
                    messageEl.textContent = data.message;

                    document.getElementById('discount-chekout').textContent = `Rp0`;
                    document.getElementById('discount_value').value = 0;
                    document.getElementById('discount-chekout').value = 0;

                    calculateTotal();
                }

            } catch (error) {
                console.error('Fetch Error:', error);
                messageEl.classList.remove('text-green-600');
                messageEl.classList.add('text-red-500');
            }
        });
    }


    function calculateTotal() {
        const subtotalEl = document.getElementById('subtotal');
        const shippingEl = document.getElementById('shipping_cost');
        const discountEl = document.getElementById('discount-chekout');
        const discountInput = document.getElementById('discount_value');
        const totalTextEl = document.getElementById('total');
        const totalInputEl = document.getElementById('total_amount');

        const subtotal = parseFloat(subtotalEl?.value || 0);
        const shippingCost = parseFloat(shippingEl?.value || 0);

        let discount = 0;
        if (discountEl) {
            discount = parseFloat(
                discountEl.textContent.replace(/[^\d]/g, '')
            ) || 0;
        }

        if (discountInput) {
            discountInput.value = discount;
        }

        const totalAmount = subtotal + shippingCost - discount;

        const formattedTotal = totalAmount > 0
            ? `Rp${formatNumber(totalAmount)}`
            : 'Pilih Ongkir Terlebih Dahulu';

        if (totalTextEl) totalTextEl.textContent = formattedTotal;
        if (totalInputEl) totalInputEl.value = totalAmount > 0 ? totalAmount : '';
    }

        function formatNumber(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }
    });
    </script>




        <script>
        document.addEventListener('DOMContentLoaded', () => {
            const termsCheckbox = document.getElementById('termsCheckbox');
            const checkoutButton = document.getElementById('checkoutButton');

            function updateCheckoutButtonState() {
                checkoutButton.disabled = !termsCheckbox.checked;
            }

            termsCheckbox.addEventListener('change', updateCheckoutButtonState);

            updateCheckoutButtonState();
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
