@extends('frontend.master.master-app')

@section('content')
    <div class="container flex justify-center items-center" style="padding-top: 100px; padding-bottom: 100px;">
        <div class="bg-white shadow-lg rounded-lg p-8 text-center max-w-md w-full">
            <div class="flex justify-center">

                <svg style="width:75px; height: 75px;" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <circle style="fill:#25AE88;" cx="25" cy="25" r="25"></circle>
                        <polyline
                            style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                            points=" 38,15 22,33 12,25 "></polyline>
                    </g>
                </svg>

            </div>
            <h2 class="text-2xl font-semibold text-green-600 mt-4">Pendaftaran Berhasil!</h2>
            <p class="text-gray-600 mt-2">Selamat! Akun Anda telah berhasil didaftarkan dengan email (namaEmail).</p>
            <p class="text-gray-600 mt-2">Ssilahkan Menunggu Konfirmasi Akun Affiliate dari Team PESKINPRO ID.</p>

            <div style="margin-top: 45px; margin-bottom: 45px">
                <button class="button-main">
                    <a href="{{ route('login') }}" class="font-bold py-2 px-4 rounded-lg">
                        Login Sekarang
                    </a>
                </button>
            </div>

            <div class="mt-4">
                <p class="text-sm text-gray-500">Jika ada pertanyaan, hubungi tim support kami.</p>
                <div class="mt-6">
                    <a href="#" class="text-center text-primary text-bold">Contact Custoer Service</a>
                </div>
            </div>
        </div>
    </div>
@endsection
