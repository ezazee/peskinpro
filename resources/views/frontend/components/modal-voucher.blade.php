<div id="customModalVoucher" class="modal-voucher hidden">
    <div class="modal-content">
        <span class="modal-voucher-close">&times;</span>
        <h5 class="modal-title">Apply Discount Code</h5>

        @if ($validCoupons->where('type', 'free_shipping')->count() > 0)
            <h4 class="text-sm font-semibold mt-5 mb-2 text-primary">Free Shipping Voucher</h4>
            @foreach ($validCoupons->where('type', 'free_shipping') as $item)
                <div class="list-voucher-modal flex items-center gap-5 flex-wrap sm:mt-4 mt-3 overflow-y-auto max-h-[300px]">
                    <div class="item border w-full border-line rounded-lg py-2 @if($cartTotal < $item->minimum_purchase) opacity-50 cursor-not-allowed @endif">
                        <div class="top flex gap-10 justify-between px-3 pb-2 border-b border-dashed border-line">
                            <div class="left">
                                <div class="caption1">Free Shipping</div>
                                <div class="caption1 text-primary font-bold">
                                    {{ $item->jumlah == 0 ? 'Gratis Ongkir' : 'Diskon Ongkir Rp' . number_format($item->jumlah, 0, ',', '.') }}
                                </div>
                            </div>
                            <div class="right">
                                <div class="caption1">Untuk Semua Barang <br />Mulai Belanja dari Rp{{ number_format($item->minimum_purchase, 0, ',', '.') }}</div>
                            </div>
                        </div>
                        <div class="bottom gap-6 items-center flex justify-between px-3 pt-2">
                            <div class="text-button-uppercase">Code: {{ $item->coupons_code }}</div>

                            @if ($item->isUsed())
                                <span class="text-primary text-bold py-1 px-2.5 capitalize text-xs">Dipakai</span>
                            @else
                                <button 
                                    class="apply-coupon-button py-1 px-4 bg-primary text-white rounded text-xs coupon-button"
                                    data-coupon-id="{{ $item->id }}"
                                    data-coupon-code="{{ $item->coupons_code }}"
                                    data-discount-amount="{{ $item->jumlah }}"
                                    data-type="{{ $item->type }}"
                                    onclick="applyCoupon(event, '{{ $item->coupons_code }}', {{ $item->jumlah }}, '{{ $item->type }}')">
                                    Gunakan
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

        @if ($validCoupons->where('type', 'fixed_amount')->count() > 0)
            <h4 class="text-sm font-semibold mt-6 mb-2 text-primary">Discount Voucher</h4>
            @foreach ($validCoupons->where('type', 'fixed_amount') as $item)
                <div class="list-voucher-modal flex items-center gap-5 flex-wrap sm:mt-4 mt-3 overflow-y-auto max-h-[300px]">
                    <div class="item border w-full border-line rounded-lg py-2 @if($cartTotal < $item->minimum_purchase) opacity-50 cursor-not-allowed @endif">
                        <div class="top flex gap-10 justify-between px-3 pb-2 border-b border-dashed border-line">
                            <div class="left">
                                <div class="caption1">Discount</div>
                                <div class="caption1 text-primary font-bold">Rp{{ number_format($item->jumlah, 0, ',', '.') }}</div>
                            </div>
                            <div class="right">
                                <div class="caption1">Untuk Semua Barang <br />Mulai Belanja dari Rp{{ number_format($item->minimum_purchase, 0, ',', '.') }}</div>
                            </div>
                        </div>
                        <div class="bottom gap-6 items-center flex justify-between px-3 pt-2">
                            <div class="text-button-uppercase">Code: {{ $item->coupons_code }}</div>

                            @if ($item->isUsed())
                                <span class="text-primary text-bold py-1 px-2.5 capitalize text-xs">Dipakai</span>
                            @else
                                <button 
                                    class="apply-coupon-button py-1 px-4 bg-primary text-white rounded text-xs coupon-button"
                                    data-coupon-id="{{ $item->id }}"
                                    data-coupon-code="{{ $item->coupons_code }}"
                                    data-discount-amount="{{ $item->jumlah }}"
                                    data-type="{{ $item->type }}"
                                    onclick="applyCoupon(event, '{{ $item->coupons_code }}', {{ $item->jumlah }}, '{{ $item->type }}')">
                                    Gunakan
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

        <div class="manual-coupon-section mt-6">
                <h4 class="text-sm font-semibold mb-2 text-primary">Punya kode voucher?</h4>
                <form id="applyCouponForm" class="flex flex-col sm:flex-row gap-2 sm:items-center">
                    <input type="text" name="coupon_code" placeholder="Masukkan kode voucher" required class="flex-1 border border-line focus:ring-2 focus:ring-primary focus:outline-none p-2 rounded-md text-sm placeholder-gray-400">
                    <input type="hidden" name="cart_total" value="{{ $cartTotal }}">
                    <button type="submit" class="bg-primary hover:bg-primary-dark transition-colors text-white text-sm font-medium py-2 px-4 rounded-md">Gunakan</button>
                </form>
                
                <div id="coupon-message" class="text-sm mt-2 text-center"></div>

            </div>
        </div>


</div>

<!-- Backdrop -->
<div id="backdrop-voucher" class="hidden modal-voucher-backdrop"></div>
