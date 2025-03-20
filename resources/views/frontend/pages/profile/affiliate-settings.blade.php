@extends('frontend.master.master-app')
@section('content')
    <div class="my-account-block md:py-20 py-10">
        <div class="container">
            <div class="content-main lg:px-[60px] md:px-4 flex gap-y-8 max-md:flex-col w-full">
                {{-- Bagian Kiri --}}
                @include('frontend.components.profile-user')
                {{-- Bagian Kanan --}}
                <div class="right list-filter md:w-2/3 w-full pl-2.5">
                    @if (in_array(auth()->user()->role->name, ['Affiliate']) && auth()->user()->affiliate_status === 'approve')
                        <div class="filter-item text-content w-full p-7 mt-5 border border-line rounded-xl active">
                            <form action="https://peskinpro.id/profiles/4/update" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="bfZ4fWVinBOPsQzuKPTXCXQzmv8BYmrICv8CtKCL"
                                    autocomplete="off"> <input type="hidden" name="_method" value="PUT">
                                <div class="heading5 pb-4">Informasi</div>
                                <div class="upload_image col-span-full">
                                    <label for="uploadImage">Upload Avatar: <span class="text-red">*</span></label>
                                    <div class="flex flex-wrap items-center gap-5 mt-3">
                                        <div
                                            class="bg_img flex-shrink-0 relative w-[7.5rem] h-[7.5rem] rounded-lg overflow-hidden bg-surface">
                                            <span
                                                class="ph ph-image text-5xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-secondary"></span>

                                            <img src="https://media.istockphoto.com/id/517998264/vector/male-user-icon.jpg?b=1&s=612x612&w=0&k=20&c=XQPO5sxBVwANqHTIVNli3gnXLCbmcpOn-23biJPkO3E="
                                                alt="User Image"
                                                class="upload_img relative z-[1] w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <strong class="text-button">Upload File:</strong>
                                            <p class="caption1 text-secondary mt-1">JPG 120x120px</p>
                                            <div
                                                class="upload_file flex items-center gap-3 w-[220px] mt-3 px-3 py-2 border border-line rounded">
                                                <label for="uploadImage"
                                                    class="caption2 py-1 px-3 rounded bg-line whitespace-nowrap cursor-pointer">Choose
                                                    File</label>
                                                <input type="file" name="images" class="caption2 cursor-pointer">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="first-name mt-5">
                                    <label for="namaLengkap" class="caption1 capitalize">Nama Lengkap</label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="namaLengkap"
                                        type="text" name="first_name" value="Affiliate Admin"
                                        placeholder="Masukan Nama Depan">
                                </div>
                                <div class="grid sm:grid-cols-2 gap-4 gap-y-5 mt-5">
                                    <div class="phone-number">
                                        <label for="phoneNumber" class="caption1 capitalize">No WhatsApp</label>
                                        <input class="border-line bg-readonly mt-2 px-4 py-3 bg-gray w-full rounded-lg"
                                            id="phoneNumber" type="number" value="029832742938" readonly="true"
                                            placeholder="Masukan Email Address">
                                    </div>
                                    <div class="email">
                                        <label for="email" class="caption1 capitalize">Email</label>
                                        <input class="border-line bg-readonly mt-2 px-4 py-3 bg-gray w-full rounded-lg"
                                            id="email" type="email" value="yukiirima123@gmail.com" readonly="true"
                                            placeholder="Masukan Email Address">
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <label class="mt-5" for="alamat">Alamat</label>
                                    <div class="">
                                        <textarea class="border-line px-4 pt-3 pb-3 w-full rounded-lg form-control" id="alamat" placeholder="Alamat Lengkap"
                                            required="" rows="9"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="filter-item text-content w-full p-7 mt-5 border border-line rounded-xl active">
                            <div class="heading5 pb-4">Ganti Password</div>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="new-pass">
                                    <label for="newPassword" class="caption1">Password Baru <span
                                            class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="newPassword"
                                        type="password" name="password" placeholder="Masukan Password Baru *">
                                </div>
                                <div class="confirm-pass">
                                    <label for="confirmPassword" class="caption1">Konfirmasi Password <span
                                            class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="confirmPassword"
                                        type="password" name="password_confirmation"
                                        placeholder="Masukan Konfirmasi Password *">
                                </div>
                            </div>
                            <div class="block-button lg:mt-10 mt-6">
                                <button class="button-main">Save Change</button>
                            </div>

                        </div>
                    @else
                        <div class="container flex justify-center items-center"
                            style="padding-top: 50px; padding-bottom: 50px;">
                            <div class="bg-white shadow-lg rounded-lg p-8 text-center max-w-md w-full">
                                <div class="flex justify-center">

                                    <svg style="width: 75px; height:75px;" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 122.88 122.88"
                                        style="enable-background:new 0 0 122.88 122.88" xml:space="preserve">
                                        <style type="text/css">
                                            <![CDATA[
                                            .st0 {
                                                fill-rule: evenodd;
                                                clip-rule: evenodd;
                                                fill: #FF7900;
                                            }
                                            ]]>
                                        </style>
                                        <g>
                                            <path class="st0"
                                                d="M61.44,0c33.93,0,61.44,27.51,61.44,61.44c0,33.93-27.51,61.44-61.44,61.44C27.51,122.88,0,95.37,0,61.44 C0,27.51,27.51,0,61.44,0L61.44,0z M54.22,37.65c0-9.43,14.37-9.44,14.37,0.02v25.75l16.23,8.59c0.08,0.04,0.16,0.09,0.23,0.15 l0.14,0.1c7.54,4.94,0.53,16.81-7.53,12.15l-0.03-0.02L57.99,73.87c-2.3-1.23-3.79-3.67-3.79-6.29l0.01,0L54.22,37.65L54.22,37.65z" />
                                        </g>
                                    </svg>

                                </div>
                                <h2 class="text-2xl font-semibold text-green-600 mt-4">Akunmu Sedang Ditinjau!</h2>
                                <p class="text-gray-600 mt-2">Akunmu Akan Di Verifikasi Selama Kurang Lebih 3 Hari Lamanya.
                                </p>
                                <p class="text-gray-600 mt-2">Silahkan Menunggu Konfirmasi Akun Affiliate dari Team
                                    PESKINPRO ID.</p>
                                <p class="text-sm text-gray-500 mt-6">Jika ada pertanyaan, hubungi tim support kami.</p>
                                <div style="margin-top: 45px; margin-bottom: 45px">
                                    <button class="button-main">
                                        <a href="#" class="font-bold py-2 px-4 rounded-lg">
                                            Contact Customer Service
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
