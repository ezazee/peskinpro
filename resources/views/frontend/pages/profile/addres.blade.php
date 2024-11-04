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
                        <div class="recent_order px-5 pb-2 mt-7 border border-line rounded-xl">
                            <h6 class="heading6 mt-5">List Alamat</h6>
                            <div class="list-container-outline rounded-frame border-frame p-4">
                                <div class="address-item rounded-frame relative p-4 mb-4 active">
                                    <strong class="address-title block mb-2">Office Patra</strong>
                                    <p class="name-text">Reza</p>
                                    <p class="address-description text-secondary py-3">Jl. Dukuh Patra No.75 RT.01/RW.13
                                        Menteng dalam, Tebet</p>
                                    <p class="contact-text">6281313711180</p>
                                    <div class="action-list mt-3 flex gap-3">
                                        <a href="#" class="link-text">Edit Address</a>
                                        <a href="#" class="link-text">Delete</a>
                                    </div>
                                    <span class="check-badge absolute top-4 right-4">Default</span>
                                </div>

                                <div class="address-item rounded-frame relative p-4 mb-4">
                                    <strong class="address-title block mb-2">Garut House</strong>
                                    <p class="name-text">Reza</p>
                                    <p class="address-description text-secondary py-3">Jl. Pembangunan (Gang Haji Usman,
                                        near Al-usman Mosque)</p>
                                    <p class="contact-text">6281313711180</p>
                                    <div class="action-list mt-3 flex gap-3">
                                        <a href="#" class="link-text">Edit Address</a>
                                        <a href="#" class="link-text">Delete</a>
                                    </div>
                                    <button class="default-badge absolute top-4 right-4">Pilih</button>
                                </div>

                                <div class="address-item rounded-frame relative p-4 mb-4">
                                    <strong class="address-title block mb-2">Garut House</strong>
                                    <p class="name-text">Reza</p>
                                    <p class="address-description text-secondary py-3">Jl. Pembangunan (Gang Haji Usman,
                                        near Al-usman Mosque)</p>
                                    <p class="contact-text">6281313711180</p>
                                    <div class="action-list mt-3 flex gap-3">
                                        <a href="#" class="link-text">Edit Address</a>
                                        <a href="#" class="link-text">Delete</a>
                                    </div>
                                    <button class="default-badge absolute top-4 right-4">Pilih</button>
                                </div>

                                <div class="address-item rounded-frame relative p-4 mb-4">
                                    <strong class="address-title block mb-2">Garut House</strong>
                                    <p class="name-text">Reza</p>
                                    <p class="address-description text-secondary py-3">Jl. Pembangunan (Gang Haji Usman,
                                        near Al-usman Mosque)</p>
                                    <p class="contact-text">6281313711180</p>
                                    <div class="action-list mt-3 flex gap-3">
                                        <a href="#" class="link-text">Edit Address</a>
                                        <a href="#" class="link-text">Delete</a>
                                    </div>
                                    <button class="default-badge absolute top-4 right-4">Pilih</button>
                                </div>

                                <div class="address-item rounded-frame relative p-4 mb-4">
                                    <strong class="address-title block mb-2">Garut House</strong>
                                    <p class="name-text">Reza</p>
                                    <p class="address-description text-secondary py-3">Jl. Pembangunan (Gang Haji Usman,
                                        near Al-usman Mosque)</p>
                                    <p class="contact-text">6281313711180</p>
                                    <div class="action-list mt-3 flex gap-3">
                                        <a href="#" class="link-text">Edit Address</a>
                                        <a href="#" class="link-text">Delete</a>
                                    </div>
                                    <button class="default-badge absolute top-4 right-4">Pilih</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Custom --}}
    @include('frontend.components.modal-form-alamat')
@endsection
