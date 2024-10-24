@extends('frontend.master.master-app')

@section('content')
    <div class="my-account-block py-10 md:py-20">
        <div class="container">
            <div class="content-main flex gap-y-8 w-full max-md:flex-col lg:px-[60px] md:px-4">
                {{-- Bagian Kiri --}}
                @include('frontend.components.profile-user')
                {{-- Bagian Kanan --}}
                <div class="right list-filter w-full md:w-2/3 pl-2.5">
                    <div class="filter-item text-content w-full active">
                        <div class="flex justify-end">
                            <button id="addAddressButton"
                                class="button-main text-white text-xs py-1 rounded-lg flex items-center gap-2">
                                <i class="ph ph-plus text-xl"></i>
                                Tambah Alamat Baru
                            </button>
                        </div>

                        {{-- Form Alamat Baru --}}
                        <div class="recent_order pt-5 px-5 pb-2 mt-7 border border-line rounded-xl">
                            <h6 class="heading6">List Alamat</h6>
                            <div class="list overflow-x-auto w-full mt-5">
                                <table class="w-full max-[1400px]:w-[700px] max-md:w-[700px]">
                                    <thead class="border-b border-line">
                                        <tr>
                                            <th scope="col"
                                                class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                                Label</th>
                                            <th scope="col"
                                                class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                                Alamat</th>
                                            <th scope="col"
                                                class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                                No Whatsapp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="item duration-300 border-b border-line">
                                            <th scope="row" class="py-3 text-left">
                                                <strong class="text-title">Rumah Patra</strong>
                                            </th>
                                            <td class="py-3">
                                                <div class="product flex items-center gap-3">
                                                    <div class="info flex flex-col">
                                                        <strong class="product_name text-button">Reza</strong>
                                                        <span class="product_tag caption1 text-secondary">JL.Patra Keras</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>081321347634756</td>
                                            <td class="py-3 text-right">
                                                <span
                                                    class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-success text-success caption1 font-semibold">Default</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Custom --}}
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
                    <button type="submit" class="button-main text-white text-xs py-1 rounded-lg flex items-center">Simpan
                        Alamat</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Backdrop --}}
    <div id="backdrop" class="hidden modal-address-backdrop"></div>
@endsection
