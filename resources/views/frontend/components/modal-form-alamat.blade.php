<div id="customModal" class="modal-address hidden">
    <div class="modal-content">
        <span class="modal-addres-close">&times;</span>
        <h5 class="modal-title">Tambah Alamat Baru</h5>
        <form id="modalAddAddressForm">
            <div class="grid sm:grid-cols-2 gap-4 gap-y-5 mt-3">
                <div>
                    <input class="border-line px-4 py-3 w-full rounded-lg" id="namaPenerima" type="text"
                        placeholder="Nama Penerima" required />
                </div>
                <div>
                    <input class="border-line px-4 py-3 w-full rounded-lg" id="labelAlamat" type="text"
                        placeholder="Label Alamat" required />
                </div>
                <!-- Form Lainnya Seperti Sebelumnya -->
            </div>
            <div class="mt-3">
                <input class="border-line px-4 py-3 w-full rounded-lg" id="alamatLengkap" type="text"
                    placeholder="Alamat Lengkap" required />
            </div>
            <div class="mt-3">
                <input class="border-line px-4 py-3 w-full rounded-lg" id="nomorWhatsapp" type="number"
                    placeholder="Nomor Whatsapp" required />
            </div>
            <div class="modal-footer mt-5">
                <button type="submit" class="button-main text-xs py-1 rounded-lg flex items-center">Simpan
                    Alamat</button>
            </div>
        </form>
    </div>
</div>

{{-- Backdrop --}}
<div id="backdrop" class="hidden modal-address-backdrop"></div>
