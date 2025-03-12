@extends('affiliate.master.master-app')

@section('content')
    <section class="section loan-steps bg-tertiary">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <p class="text-primary text-uppercase fw-bold mb-3">Berikut Adalah</p>
                        <h1>3 Langkah Mudah Untuk Mendapatkan Komisi!</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row justify-content-center">
                        <div class="step-item col-lg-4 col-md-6">
                            <div class="text-center">
                                <p class="count">01</p>
                                <h3 class="mb-3">Daftar Melalui Website</h3>
                                <p class="mb-0">Daftar Akun Memalui Website <a href="https://peskinpro.id">PE Skinpro
                                        ID</a></p>
                            </div>
                        </div>
                        <div class="step-item col-lg-4 col-md-6">
                            <div class="text-center">
                                <p class="count">02</p>
                                <h3 class="mb-3">Bagikan Link Produk</h3>
                                <p class="mb-0">Bagikan Link Produk PE Skinpro Untuk Mendapatkan Komisi Anda</p>
                            </div>
                        </div>
                        <div class="step-item col-lg-4 col-md-6">
                            <div class="text-center">
                                <p class="count">03</p>
                                <h3 class="mb-3">Dapatkan Komisinya!</h3>
                                <p class="mb-0">Dapatkan Komisinya dan Dapat Diambil Dengan Nominal Yang Sudah Ditentukan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="bg-white shadow rounded-lg p-4 sticky-top" style="top: 30px;">
                        <h4 class="has-line-end">PE Skinpro Affiliate</h4>
                        <nav id="TableOfContents">
                            <ul>
                                <li><a href="#daftar-affiliate">Daftar Affiliate PE</a></li>
                                <li><a href="#bagikan-produk">Bagikan Link Produk PE Skinpro</a></li>
                                <li><a href="#pantau-performa">Pantau Performa Affiliate Kamu</a></li>
                                <li><a href="#tarik-komisi">Tarik Komisi</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="content">
                        <h2 id="daftar-affiliate">Daftar PE Skinpro Affiliate </h2>
                        <p>Daftar Affiliate PE Skinpro dengan cara mengunjungi website <a href="https://peskinpro.id">PE
                                Skinpro ID</a> dan melakukan pendaftaran akun. Setelah melakukan pendaftaran, Anda bisa
                            membagikan link dari produk di website resmi <a href="https://peskinpro.id">PE
                                Skinpro ID</a>.
                        </p>
                        <div class="code-tabs">
                            <ul class="nav nav-tabs"></ul>
                            <div class="tab-content">
                                <div class="tab-pane" title="Pertama">
                                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
                                        <img src="{{ asset('asset-affiliate/images/tutor/daftar/ss1.png') }}"
                                            alt="PE Skinpro" width="240" class="rounded mb-3 mb-md-0 me-md-3">
                                        <span style="max-width: 350px">
                                           Pergi ke website <a href="https://peskinpro.id">PE
                                            Skinpro ID</a> dan lakukan pendaftaran akun.
                                        </span>
                                    </div>
                                </div>
                                <div class="tab-pane" title="Kedua">
                                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
                                        <img src="{{ asset('asset-affiliate/images/tutor/daftar/ss2.png') }}"
                                            alt="PE Skinpro" width="240" class="rounded mb-3 mb-md-0 me-md-3">
                                        <span style="max-width: 350px">
                                           Isi semua data yang diperlukan dan klik tombol daftar.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <h2 id="bagikan-produk">Bagikan Link Produk</h2>
                        <p>Bagikan Link Produk dari PE Skinpro</p>
                        <div class="code-tabs">
                            <ul class="nav nav-tabs"></ul>
                            <div class="tab-content">
                                <div class="tab-pane" title="Pertama">
                                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
                                        <img src="{{ asset('asset-affiliate/images/tutor/sharelink/ss1.png') }}"
                                            alt="PE Skinpro" width="240" class="rounded mb-3 mb-md-0 me-md-3">
                                        <span style="max-width: 350px">
                                           Pergi ke website <a href="https://peskinpro.id">PE
                                            Skinpro ID</a> dan pilih produk yang ingin Anda bagikan
                                        </span>
                                    </div>
                                </div>
                                <div class="tab-pane" title="Kedua">
                                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
                                        <img src="{{ asset('asset-affiliate/images/tutor/sharelink/ss2.png') }}"
                                            alt="PE Skinpro" width="240" class="rounded mb-3 mb-md-0 me-md-3">
                                        <span style="max-width: 350px">
                                           Scroll sedikit kebawah dan klik tombol bagikan dibawah gambar produk
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <h2 id="pantau-performa">Pantau Performa Affiliatemu</h2>
                        <p>Kamu bisa lihat jumlah komisi yang kamu dapatkan dari link yang telah dipromosikan</p>
                        <div class="code-tabs">
                            <ul class="nav nav-tabs"></ul>
                            <div class="tab-content">
                                <div class="tab-pane" title="Pertama">
                                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
                                        <img src="{{ asset('asset-affiliate/images/tutor/perform/ss1.png') }}"
                                            alt="PE Skinpro" width="240" class="rounded mb-3 mb-md-0 me-md-3">
                                        <span style="max-width: 350px">
                                            Kamu bisa lihat jumlah komisi yang kamu dapatkan dari link yang telah dipromosikan. Makin besar penjualan yang datang dari link kamu, makin banyak komisi yang bisa didapatkan!
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <h2 id="tarik-komisi">Tarik Komisi</h2>
                        <p>Kamu bisa menarik semua komisi yang telah didapatkan sesuai dengan ketentuan berlaku</p>
                        <div class="code-tabs">
                            <ul class="nav nav-tabs"></ul>
                            <div class="tab-content">
                                <div class="tab-pane" title="Pertama">
                                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
                                        <img src="{{ asset('asset-affiliate/images/tutor/tarik/ss1.png') }}"
                                            alt="PE Skinpro" width="240" class="rounded mb-3 mb-md-0 me-md-3">
                                        <span style="max-width: 350px">
                                            Pastikan saldo yang kamu dapatkan minimal Rp50.00 untuk bisa tarik komisi
                                        </span>
                                    </div>
                                </div>
                                <div class="tab-pane" title="Kedua">
                                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
                                        <img src="{{ asset('asset-affiliate/images/tutor/tarik/ss2.png') }}"
                                            alt="PE Skinpro" width="240" class="rounded mb-3 mb-md-0 me-md-3">
                                        <span style="max-width: 350px">
                                           Scroll sedikit kebawah dan klik tombol bagikan dibawah gambar produk
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
