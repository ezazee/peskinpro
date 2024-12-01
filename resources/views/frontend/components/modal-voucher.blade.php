<!-- Modal Voucher -->
<div id="customModalVoucher" class="modal-voucher hidden">
    <div class="modal-content">
        <span class="modal-voucher-close">&times;</span>
        <h5 class="modal-title">Apply Discount Code</h5>

        <!-- Voucher Block -->
        @foreach ($validCoupons as $item)
            <div class="list-voucher-modal flex items-center gap-5 flex-wrap sm:mt-7 mt-5 overflow-y-auto max-h-[300px]">
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
                            onclick="applyCoupon(event, '{{ $item->coupons_code }}', {{ $item->jumlah }})">
                            Gunakan
                        </button>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

<!-- Backdrop -->
<div id="backdrop-voucher" class="hidden modal-voucher-backdrop"></div>
