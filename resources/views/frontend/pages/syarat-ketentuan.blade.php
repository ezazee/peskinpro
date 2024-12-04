@extends('frontend.master.master-app')
@section('content')
<div class="section py-10">
    <div class="container mx-auto max-w-4xl">
        <!-- Header Halaman -->
        <div class="page-wrap bg-white shadow-lg rounded-lg p-8">
            <header class="page-header text-center mb-8">
                <h1 class="text-primary font-bold mb-2 heading2">Syarat dan Ketentuan Pengguna</h1>
                <p class="text-lg text-gray-600">Ketentuan penggunaan layanan kami.</p>
            </header>

            <!-- Konten Halaman -->
            <div class="page-content">
                <!-- Bagian Overview -->
                <h3 class="text-2xl font-semibold text-blue-600 mb-6">Gambaran Umum</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-4 ul-list-syarat">
                    <li>Dengan menggunakan layanan kami, Anda setuju untuk mematuhi syarat dan ketentuan yang berlaku.</li>
                    <li>Anda bertanggung jawab untuk menjaga keamanan akun Anda dan informasi pribadi yang Anda berikan pada saat pendaftaran.</li>
                    <li>Jika Anda memilih untuk menggunakan layanan kami, Anda setuju untuk menerima segala pembaruan atau perubahan yang mungkin terjadi di masa depan terkait dengan kebijakan dan prosedur.</li>
                </ul>

                <!-- Bagian Penggunaan Layanan -->
                <h3 class="text-2xl font-semibold text-blue-600 mt-8 mb-6">Penggunaan Layanan</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-4 ul-list-syarat">
                    <li>Anda tidak boleh menggunakan layanan kami untuk tujuan yang melanggar hukum atau dilarang oleh kebijakan yang berlaku.</li>
                    <li>Setiap penggunaan layanan harus sesuai dengan kebijakan privasi dan ketentuan yang telah ditetapkan.</li>
                    <li>Anda tidak diperbolehkan untuk menyalin, mengubah, atau mendistribusikan materi yang ada di platform kami tanpa izin yang jelas.</li>
                </ul>

                <!-- Bagian Pembayaran dan Pengembalian -->
                <h3 class="text-2xl font-semibold text-blue-600 mt-8 mb-6">Pembayaran dan Pengembalian</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-4 ul-list-syarat">
                    <li>Pembayaran untuk barang atau layanan harus dilakukan sesuai dengan metode yang disediakan di platform.</li>
                    <li>Pengembalian barang hanya dapat dilakukan jika barang yang diterima tidak sesuai dengan pesanan atau rusak selama pengiriman, sesuai dengan kebijakan pengembalian kami.</li>
                </ul>

                <!-- Bagian Kewajiban Pengguna -->
                <h3 class="text-2xl font-semibold text-blue-600 mt-8 mb-6">Kewajiban Pengguna</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-4 ul-list-syarat">
                    <li>Anda bertanggung jawab untuk memastikan bahwa semua informasi yang Anda masukkan akurat dan tidak menyesatkan.</li>
                    <li>Jika ada perubahan pada informasi yang Anda berikan, Anda diwajibkan untuk memperbarui data tersebut sesegera mungkin.</li>
                </ul>

                <!-- Bagian Penyelesaian Sengketa -->
                <h3 class="text-2xl font-semibold text-blue-600 mt-8 mb-6">Penyelesaian Sengketa</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-4 ul-list-syarat">
                    <li>Jika terjadi sengketa terkait penggunaan layanan, kedua belah pihak sepakat untuk menyelesaikannya melalui mekanisme penyelesaian sengketa yang telah disepakati.</li>
                </ul>

            </div>

            <!-- Footer Halaman -->
            <footer class="text-center mt-12">
                <p class="text-sm text-gray-500">Terakhir diperbarui: Oktober 2024</p>
            </footer>
        </div>
    </div>
</div>
@endsection


<style>
    .ul-list-syarat li{
        list-style: circle !important;
        padding: 10px 0 5px 0
    }
</style>
