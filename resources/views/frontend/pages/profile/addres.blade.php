@extends('frontend.master.master-app')

@section('content')
    <div class="my-account-block md:py-20 py-10">
        <div class="container">
            <div class="content-main lg:px-[60px] md:px-4 flex gap-y-8 max-md:flex-col w-full">
                {{-- Bagian Kiri --}}
                @include('frontend.components.profile-user')
                {{-- Bagian Kanan --}}
                <div class="right list-filter md:w-2/3 w-full pl-2.5">
                    <div class="filter-item text-content w-full active">
                        <div class="col-span-full select-block relative flex items-center gap-4">
                            <div class="relative w-full">
                                <select
                                    class="border border-line px-4 py-3 w-full rounded-lg shadow-md focus:ring-2 focus:ring-blue-500 transition duration-200"
                                    id="region" name="region">
                                    <option value="default" disabled>Choose Your Address Format</option>
                                    <option value="format1">Format Alamat 1</option>
                                    <option value="format2">Format Alamat 2</option>
                                    <option value="format3">Format Alamat 3</option>
                                </select>
                                <i
                                    class="ph ph-caret-down absolute right-4 top-1/2 transform -translate-y-1/2 text-xl text-gray-400 pointer-events-none"></i>
                            </div>
                            <button class="button-main text-white text-xs py-1 rounded-lg flex items-center gap-2">
                                <i class="ph ph-plus text-xl"></i>
                                Tambah Alamat Baru
                            </button>
                        </div>



                        <div class="filter-item text-content w-full p-7 mt-5 border border-line rounded-xl active">
                            <form>
                                <div class="grid sm:grid-cols-2 gap-4 gap-y-5 flex-wrap">
                                    <div class="">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="firstName" type="text"
                                            placeholder="Nama Depan" required />
                                    </div>
                                    <div class="">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="lastName" type="text"
                                            placeholder="Nama Belakang" required />
                                    </div>
                                    <div class="">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="email" type="email"
                                            placeholder="Alamat Email" required />
                                    </div>
                                    <div class="">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="phoneNumber"
                                            type="number" placeholder="Nomor HP / Whatsapp" required />
                                    </div>
                                    <div class="col-span-full select-block">
                                        <select class="border border-line px-4 py-3 w-full rounded-lg" id="region"
                                            name="region">
                                            <option value="default" readonly>Indonesia</option>
                                        </select>
                                        <i class="ph ph-caret-down arrow-down"></i>
                                    </div>
                                    <div class="select-block">
                                        <select class="border border-line px-4 py-3 w-full rounded-lg" name="province"
                                            id="province">
                                            <option value="">Select a province</option>
                                            <option value="sadasdasd">asdasd</option>
                                        </select>
                                        <i class="ph ph-caret-down arrow-down"></i>
                                    </div>
                                    <div class="select-block">
                                        <select class="border border-line px-4 py-3 w-full rounded-lg"
                                            name="city_destination" id="city_destination">
                                            <option value="">Select a city</option>
                                        </select>
                                        <i class="ph ph-caret-down arrow-down"></i>
                                    </div>
                                    <div class="">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="apartment" type="text"
                                            placeholder="Alamat" required />
                                    </div>
                                    <div class="">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="postal" type="text"
                                            placeholder="Kode Pos" required />
                                    </div>

                                </div>
                                <div class="block-button md:mt-10 mt-6">
                                    <button class="button-main w-full">Simpan Alamat</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
