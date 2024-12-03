@extends('frontend.master.master-app')

@section('content')
<div class="section py-10">
    <div class="container mx-auto max-w-4xl">
        <!-- Header Halaman -->
        <div class="page-wrap bg-white shadow-lg rounded-lg p-8">
            <header class="page-header text-center mb-8">
                <h1 class="text-primary font-bold mb-2 heading2">Kebijakan Pengembalian & Refund</h1>
                <p class="text-lg text-gray-600">Panduan jelas untuk proses pengembalian dan refund</p>
            </header>

            <!-- Konten Halaman -->
            <div class="page-content">
                <!-- Bagian Overview -->
                <h3 class="text-2xl font-semibold text-blue-600 mb-6">Gambaran Umum</h3>
                <ul class="ul-list-refund">
                    <li>Jika Anda merasa tidak puas dengan pembelian Anda (misalnya, barang rusak saat pengiriman, salah produk/jenis/warna), harap hubungi Layanan Pelanggan terlebih dahulu sebelum mengembalikan barang. Jika tidak, permintaan tidak akan diproses.</li>
                    <li>Permintaan pengembalian harus dilakukan dalam waktu 7 hari kerja sejak barang diterima.</li>
                    <li>Barang yang rusak harus dikembalikan beserta kotak dan struk aslinya.</li>
                    <li>Barang yang dibeli saat acara promosi tidak dapat dikembalikan atau ditukar.</li>
                    <li>Pastikan untuk menginformasikan kepada Layanan Pelanggan sebelum mengirim barang kembali, jika tidak, permintaan tidak akan diproses.</li>
                    <li>Sertakan nomor pelacakan paket pengembalian untuk semua barang yang dikembalikan.</li>
                    <li>Barang yang sudah dibeli tidak dapat di-refund. Hanya barang yang salah kirim atau rusak yang bisa ditukar.</li>
                </ul>

                <!-- Bagian Proses Pengembalian -->
                <h3 class="text-2xl font-semibold text-blue-600 mt-8 mb-6">Proses Pengembalian</h3>
                <p class="text-gray-700 mb-8">
                    Untuk pertanyaan seputar biaya pengiriman dan kemasan pengembalian, silakan kirim email ke <a href="https://mail.google.com/mail/?view=cm&fs=1&to=adm.peskinproid@gmail.com" class="underline text-primary">adm.peskinproid@gmail.com</a> dengan subjek "Pertanyaan Pengembalian Barang", atau hubungi kami langsung melalui WhatsApp.
                </p>
            </div>

            <!-- Footer Halaman -->
            <footer class="text-center mt-12">
                <p class="text-sm text-gray-500">Terakhir diperbarui: Oktober 2024</p>
            </footer>
        </div>
    </div>
</div>
@endsection
