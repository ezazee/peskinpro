<!-- Modal Voucher -->
<div id="customGantiAlamat" class="modal-ganti-alamat hidden">
    <div class="modal-content">
        <span class="modal-ganti-alamat-close">&times;</span>
        <h5 class="modal-title">Pilih alamat kamu</h5>

        <div class="input-block discount-code w-full h-12 sm:mt-7 mt-5">
            <button class="button-main w-full">
                <a href="{{ route('profile.address') }}">Tambah Alamat Baru</a>
            </button>
        </div>

        <div class="recent_order list-ganti-alamat-modal px-5 pb-2 mt-7 border border-line rounded-xl">
            <h6 class="heading6 mt-5">List Alamat</h6>
            <div class="list-container-outline rounded-frame border-frame p-4">
                @if ($user->alamat->isEmpty())
                <p class="no-address-text text-secondary">Tambahkan alamat terlebih dahulu</p>
                @else
                @foreach ($defaultAddresses as $adds)
                <div class="address-item rounded-frame relative p-4 mb-4 active">
                    <strong class="address-title block mb-2">{{ $adds->label }}</strong>
                    <p class="name-text">{{ $adds->penerima }}</p>
                    <p class="address-description text-secondary py-3">{{ $adds->street }}</p>
                    <p class="contact-text">{{ $adds->no_telp }}</p>
                    <span class="check-badge absolute top-4 right-4">Default</span>
                    <div class="action-list mt-3 flex gap-3">
                        <a href="#" class="link-text">Edit Address</a>
                    </div>
                </div>
                @endforeach
                @endif
                @foreach ($user->alamat as $item)
                    @if ($item->default !== 'yes')
                        <div class="address-item rounded-frame relative p-4 mb-4 {{ $item->default === 'yes' ? 'active' : '' }}">
                            <strong class="address-title block mb-2">{{ $item->label }}</strong>
                            <p class="name-text">{{ $item->penerima }}</p>
                            <p class="address-description text-secondary py-3">{{ $item->street }}</p>
                            <p class="contact-text">{{ $item->no_telp }}</p>
                            <div class="action-list mt-3 flex gap-3">
                                <a href="#" class="link-text">Edit Address</a>                               
                            </div>
                            @if ($item->default === 'yes')
                            <span class="check-badge absolute top-4 right-4">Default</span>
                            @else
                                <button class="default-badge absolute top-4 right-4" onclick="setDefaultAddress({{ $item->id }})">Pilih</button>
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Backdrop -->
<div id="backdrop-ganti-alamat" class="hidden modal-ganti-alamat-backdrop"></div>
