<div id="customModal" class="modal-address hidden">
    <div class="modal-content">
        <span class="modal-addres-close">&times;</span>
        <h5 class="modal-title">Tambah Alamat Baru</h5>
        <form id="modalAddAddressForm">
            <div class="grid sm:grid-cols-2 gap-4 gap-y-5">
                <div>
                    <input class="border-line px-4 py-3 w-full rounded-lg" id="modalFirstName" type="text"
                        placeholder="Nama Depan" required />
                </div>
                <div>
                    <input class="border-line px-4 py-3 w-full rounded-lg" id="modalLastName" type="text"
                        placeholder="Nama Belakang" required />
                </div>
                <!-- Form Lainnya Seperti Sebelumnya -->
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
