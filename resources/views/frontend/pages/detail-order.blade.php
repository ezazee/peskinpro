@extends('frontend.master.master-app')

@section('content')
    <div class="my-account-block py-10 md:py-20">
        <div class="container">
            <div class="content-main flex gap-y-8 w-full max-md:flex-col lg:px-[60px] md:px-4">
                {{-- Bagian Kiri --}}
                @include('frontend.components.profile-user')
                {{-- Bagian Kanan --}}
                <div class="right list-filter w-full md:w-2/3 pl-2.5">
                    <div class="container py-5">
                        <div class="order-tracking pb-5">
                            <div class="tracking-steps">
                                <!-- Step 1 -->
                                <div class="step completed">
                                    <div class="step-icon"></div>
                                    <div class="step-info">
                                        <p class="step-title">Pesanan Dibuat</p>
                                        <p class="step-date">10 November 2024, 01:00 WIB</p>
                                    </div>
                                </div>
                                <!-- Step 2 -->
                                <div class="step completed">
                                    <div class="step-icon"></div>
                                    <div class="step-info">
                                        <p class="step-title">Pesanan Diproses</p>
                                        <p class="step-date">10 November 2024, 02:00 WIB</p>
                                    </div>
                                </div>
                                <!-- Step 3 -->
                                <div class="step active">
                                    <div class="step-icon"></div>
                                    <div class="step-info">
                                        <p class="step-title">Pesanan Dikirim</p>
                                        <p class="step-date">11 November 2024, 09:00 WIB</p>
                                    </div>
                                </div>
                                <!-- Step 4 -->
                                <div class="step">
                                    <div class="step-icon"></div>
                                    <div class="step-info">
                                        <p class="step-title">Pesanan Selesai</p>
                                        <p class="step-date">Estimasi: 12 November 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="shipping-info py-5">
                            <h6 class="section-title"></h6>
                            <div class="info-box">
                                <div class="flex justify-between items-center">
                                    <p class="highlight-text text-bold">Tanggal Pembelian:</p>
                                    <p class="highlight-text text-right">12-Oktober-2024</p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <p class="highlight-text text-bold">ID Transaksi:</p>
                                    <p class="highlight-text text-right">TKP01-XEYNJLV9</p>
                                </div>
                            </div>
                        </div>

                        <div class="product-detail mt-5">
                            <h6 class="section-title">Detail Produk</h6>
                            <div
                                class="prd_item flex flex-wrap items-center justify-between gap-3 py-2 border-b border-line">
                                <a href="product-default.html" class="flex items-center gap-5">
                                    <div
                                        class="bg-img flex-shrink-0 md:w-[100px] w-20 aspect-square rounded-lg overflow-hidden">
                                        <img src="assets/images/product/fashion/1-1.png"
                                            alt="Contrasting sheepskin sweatshirt" class="w-full h-full object-cover" />
                                    </div>
                                    <div>
                                        <div class="prd_name text-title">Contrasting sheepskin sweatshirt</div>
                                        <div class="caption1 text-secondary mt-2">
                                            <span class="prd_size uppercase">XL</span>
                                            <span>/</span>
                                            <span class="prd_color capitalize">Yellow</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="text-title">
                                    <span class="prd_quantity">1</span>
                                    <span> X </span>
                                    <span class="prd_price">$45.00</span>
                                </div>
                            </div>
                        </div>

                        <!-- Shipping and Payment Information Section -->
                        <div class="shipping-info py-5">
                            <h6 class="section-title">Info Pengiriman</h6>
                            <div class="info-box">
                                <div class="flex justify-between items-center">
                                    <p class="highlight-text text-bold">Kurir:</p>
                                    <p class="highlight-text text-right">Kurir: Kurir Rekomendasi - Reguler</p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <p class="highlight-text text-bold">No Resi:</p>
                                    <p class="highlight-text text-right">TKP01-XEYNJLV9</p>
                                </div>
                                <div class="flex justify-between">
                                    <p class="highlight-text text-bold">Alamat:</p>
                                    <p class="highlight-text text-right">Jln. Dukuh Patra No.75 RT.01/RW.13 Menteng Dalam,
                                        Tebet<br>
                                        Tebet, Kota Administrasi Jakarta Selatan<br>
                                        DKI Jakarta 12870</p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <p class="highlight-text text-bold">Nama Penerima:</p>
                                    <p class="highlight-text text-right">Reza</p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <p class="highlight-text text-bold">No Whatsapp:</p>
                                    <p class="highlight-text text-right">054321358143</p>
                                </div>
                            </div>
                        </div>
                        <div class="shipping-info py-5">
                            <h6 class="section-title">Rincian Pembayaran</h6>
                            <div class="info-box">
                                <div class="flex justify-between items-center">
                                    <p class="highlight-text text-bold">Metode Pemvbayaran:</p>
                                    <p class="highlight-text text-right">Gopay</p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <p class="highlight-text text-bold">Subtotal Harga Barang:</p>
                                    <p class="highlight-text text-right">Rp54.900</p>
                                </div>
                                <div class="flex justify-between">
                                    <p class="highlight-text text-bold">Kupon Diskon Barang dari Platform:</p>
                                    <p class="highlight-text text-right">Rp29.048 </p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <p class="highlight-text text-bold">Total Ongkos Kirim:</p>
                                    <p class="highlight-text text-right">Rp11.500</p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <p class="highlight-text text-bold">Kupon Diskon Ongkos Kirim:</p>
                                    <p class="highlight-text text-right">-Rp11.500</p>
                                </div>
                                <div class="flex justify-between items-center mt-5">
                                    <p class="highlight-text text-bold">Total Belanja:</p>
                                    <p class="highlight-text text-right text-bold">Rp26.252</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

<style>
/* Styling untuk box utama */
.info-box {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 15px;
    background-color: #f9f9f9;
    display: flex;
    flex-direction: column;
    gap: 15px; /* Jarak antar elemen di dalam info-box */
}

/* Styling tambahan untuk highlight-text */
.highlight-text {
    font-size: 14px;
    line-height: 1.6; /* Menambahkan spasi antar baris */
    color: #333;
}

/* Styling khusus untuk responsivitas */
@media (max-width: 768px) {
    .highlight-text {
        font-size: 13px;
    }
}


    /* Section Title */
    .section-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #333;
    }

    /* Box Styling */
    .info-box {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        background-color: #f9f9f9;
    }

    /* Additional Info */
    .additional-info {
        font-size: 12px;
        color: #777;
        margin-top: 10px;
    }

    /* Adjust Tracking Steps Layout */
    .tracking-steps {
        display: flex;
        justify-content: space-between;
        gap: 16px;
        /* Space between steps */
    }

    /* Each Step */
    .step {
        display: flex;
        align-items: center;
        gap: 16px;
        flex-direction: row;
        /* Ensures step items are laid out horizontally */
    }

    /* Step Icons */
    .step-icon {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        font-weight: bold;
        border: 2px solid #e0e0e0;
        background-color: #f5f5f5;
        color: #999;
        flex-shrink: 0;
        position: relative;
    }

    /* Add Icon through CSS */
    .step-icon::before {
        content: '●';
        font-size: 16px;
        color: inherit;
    }

    .step.completed .step-icon::before {
        content: '✔';
    }

    .step.active .step-icon::before {
        content: '◉';
    }

    /* Step Info */
    .step-info {
        display: flex;
        flex-direction: column;
    }

    /* Optional: Adjust the size of the titles and dates for horizontal layout */
    .step-title {
        font-weight: bold;
        margin: 0;
        font-size: 14px;
    }

    .step-date {
        font-size: 12px;
        color: #666;
    }

    /* Step States */
    .step.completed .step-icon {
        background-color: var(--light-primary);
        color: var(--primary);
        border-color: var(--light-primary);
    }

    .step.active .step-icon {
        background-color: var(--primary);
        color: white;
        border-color: var(--primary);
    }

    .step:not(.completed):not(.active) .step-icon {
        background-color: #f5f5f5;
        color: #999;
        border-color: #e0e0e0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .tracking-steps {
            flex-direction: column;
            gap: 10px;
        }

        .prd_item {
            flex-direction: column;
        }

        .prd_item .price-review {
            flex-direction: column;
            align-items: flex-start;
        }

        .prd_item .prd_name,
        .prd_item .caption1 {
            font-size: 14px;
        }

        .prd_item img {
            width: 100px;
            height: 100px;
        }
    }
</style>
