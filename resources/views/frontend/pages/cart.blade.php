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
                                <div class="w-1/2 flex items-center px-5">
                                    <input type="checkbox" id="check-all" class="px-3" />
                                    <label for="check-all" class="text-button ml-2">Check All</label>
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
                            @foreach ($cartCollection as $item)
                            <div class="item flex md:mt-7 md:pb-7 mt-5 pb-5 border-b border-line w-full">
                                <div class="w-1/2 flex items-center">
                                    <input type="checkbox" class="product-checkbox mr-2" data-id="{{ $item->id }}"
                                    data-price="{{ ($item->productSize->price * $item->quantity) - ($item->productSize->discount * $item->quantity) }}"
                                    data-discount="{{ $item->productSize->discount * $item->quantity }}" />
                                    <div class="flex items-center px-5 gap-6">
                                        <div class="bg-img md:w-[100px] w-20 aspect-[3/4]">
                                            <img src="{{ asset('storage/' . $item->product->front_image) }}" alt="img"
                                                class="w-full h-full object-cover rounded-lg">
                                        </div>
                                        <div>
                                            <div class="text-title">{{ $item->product->name }}</div>
                                            <div class="list-select mt-3">{{ $item->productSize->size }}ml</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/12 price flex items-center justify-center">
                                    <div class="text-title text-center">
                                        Rp{{ number_format($item->productSize->price - $item->productSize->discount, 0, ',', '.') }}

                                        @if($item->productSize->discount && $item->productSize->discount > 0)
                                        <div class="font-normal text-secondary2 text-sm">
                                            <del>Rp {{ number_format($item->productSize->price, 0, ',', '.') }}</del>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="w-1/6 flex items-center justify-center">
                                    <div
                                        class="quantity-block bg-surface md:p-3 p-2 flex items-center justify-between rounded-lg border border-line md:w-[100px] flex-shrink-0 w-20">
                                        <i class="ph-bold ph-minus cursor-pointer text-base max-md:text-sm"
                                            data-id="{{ $item->id }}" id="decrease-quantity"></i>
                                        <div class="text-button quantity">{{ $item->quantity }}</div>
                                        <i class="ph-bold ph-plus cursor-pointer text-base max-md:text-sm"
                                            data-id="{{ $item->id }}" id="increase-quantity"></i>
                                    </div>
                                </div>

                                <div class="w-1/6 flex total-price items-center justify-center">
                                    <div class="text-title text-center">
                                        Rp{{ number_format(($item->productSize->price * $item->quantity) - ($item->productSize->discount * $item->quantity), 0, ',', '.') }}
                                    </div>
                                </div>
                                <div class="flex items-center justify-center">
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $item->product->id ?? $item->id }}">
                                        <button type="submit"
                                            class="remove-btn ph ph-trash text-2xl text-red cursor-pointer hover:text-black duration-300">
                                        </button>
                                    </form>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Discount Code Block -->
                <div class="input-block discount-code w-full h-12 sm:mt-7 mt-5">
                    <form class="w-full h-full relative">
                        <input type="text" placeholder="Tambahkan Diskon Voucher"
                            class="w-full h-full bg-surface pl-4 pr-14 rounded-lg border border-line" />
                        <button
                            class="button-main absolute top-1 bottom-1 right-1 px-5 rounded-lg flex items-center justify-center">Apply
                            Code</button>
                    </form>
                </div>
                <!-- Voucher Block -->
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
                    @if(!empty($cartCollection) && count($cartCollection) > 0)
                        <div class="total-block py-5 flex justify-between border-b border-line">
                            <div class="text-title">Subtotal</div>
                            <div class="text-title"></div>
                        </div>
                        <div class="discount-block py-5 flex justify-between border-b border-line">
                            <div class="text-title">Hemat</div>
                            <div class="text-title"></div>
                        </div>
                        <div class="selected-total-block total-cart-block pt-4 pb-4 flex justify-between">
                            <div class="heading5">Total</div>
                            <div class="heading5" id="total-selected-price"></div>
                        </div>
                        <div class="block-button flex flex-col items-center gap-y-4 mt-5">
                            <form id="checkout-form" action="{{ route('checkout.process') }}" method="POST">
                                @csrf
                                <input type="hidden" name="cart_items" id="cart-items" value="">

                                <button class="checkout-btn button-main text-center w-full bg-primary border-primary">
                                    Checkout Sekarang
                                </button>
                            </form>
                            <a class="text-button hover-underline" href="{{ route('home.index') }}">Lanjutkan Berbelanja</a>
                        </div>

                    @else
                    <div class="empty-cart-message py-5 text-center">
                        <p>Keranjang kosong, silakan lanjutkan berbelanja.</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const increaseButtons = document.querySelectorAll('#increase-quantity');
        const decreaseButtons = document.querySelectorAll('#decrease-quantity');

        const updateQuantity = (url, cartItemId) => {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', url, true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    const response = JSON.parse(xhr.responseText);
                    if (xhr.status === 200 && response.status === 'success') {
                        const quantityDisplay = document.querySelector(
                            `.quantity[data-id="${cartItemId}"]`);
                        if (quantityDisplay) {
                            quantityDisplay.textContent = response.quantity;
                        }
                        setTimeout(() => {
                            window.location.reload();
                        }, 200);
                    }
                }
            };

            xhr.send(JSON.stringify({
                cart_item_id: cartItemId
            }));
        };

        increaseButtons.forEach(button => {
            button.addEventListener('click', function () {
                const cartItemId = this.dataset.id;
                updateQuantity('/cart/increase', cartItemId);
            });
        });

        decreaseButtons.forEach(button => {
            button.addEventListener('click', function () {
                const cartItemId = this.dataset.id;
                updateQuantity('/cart/decrease', cartItemId);
            });
        });
    });

</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkboxes = document.querySelectorAll('.product-checkbox');
        const checkAllCheckbox = document.getElementById('check-all');
        const subtotalElement = document.querySelector('.total-block .text-title:last-child');
        const discountElement = document.querySelector('.discount-block .text-title:last-child');
        const totalSelectedPriceElement = document.getElementById('total-selected-price');
        const cartItemsInput = document.getElementById('cart-items');

        const formatRupiah = (amount) => {
            return 'Rp' + amount.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        };

        const updateTotalSelectedPrice = () => {
            let subtotal = 0;
            let totalDiscount = 0;
            let selectedItems = [];

            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    const itemPrice = parseFloat(checkbox.getAttribute('data-price')) || 0;
                    const itemId = checkbox.getAttribute('data-id');

                    subtotal += itemPrice;
                    selectedItems.push(itemId);

                    const itemDiscount = parseFloat(checkbox.getAttribute('data-discount')) || 0;
                    totalDiscount += itemDiscount;
                }
            });

            subtotalElement.textContent = formatRupiah(subtotal);
            discountElement.textContent = formatRupiah(totalDiscount);
            totalSelectedPriceElement.textContent = formatRupiah(subtotal);

            cartItemsInput.value = selectedItems.join(',');
        };

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', updateTotalSelectedPrice);
        });

        checkAllCheckbox.addEventListener('change', function () {
            checkboxes.forEach(checkbox => {
                checkbox.checked = checkAllCheckbox.checked;
            });
            updateTotalSelectedPrice();
        });

        updateTotalSelectedPrice();
    });
</script>

@endsection
