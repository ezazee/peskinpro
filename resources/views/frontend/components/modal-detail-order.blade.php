<div id="customModalOrder" class="modal-order hidden">
    <div class="modal-content">
        <!-- Tombol Close -->
        <span class="modal-order-close">&times;</span>

        <!-- Container Modal -->
        <div class="modal-container">
            <!-- Bagian Kiri (Detail Transaksi) -->
            <div class="modal-left">
                <!-- Pesanan Selesai -->
                <div class="order-tracking">
                    <h3 class="tracking-title">Order Tracking</h3>
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

                <!-- Detail Produk -->
                <div class="product-detail mt-5">
                    <h6 class="section-title">Detail Produk</h6>
                    <div class="prd_item flex flex-wrap gap-3 py-2 border-b border-line">
                        <!-- Gambar dan Deskripsi Produk -->
                        <a href="product-default.html" class="flex items-center gap-5">
                            <div
                                class="bg-img flex-shrink-0 md:w-[100px] w-20 aspect-square rounded-lg overflow-hidden">
                                <img src="assets/images/product/fashion/1-1.png" alt="Contrasting sheepskin sweatshirt"
                                    class="w-full h-full object-cover" />
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

                        <!-- Harga dan Tombol -->
                        <div class="price-review w-full px-2 flex items-center justify-between">
                            <span class="prd_quantity text-title">1 x $45.00</span>
                            <a href="#!"
                                class="button-main text-primary font-semibold rounded-md px-2 py-1 text-center hover:bg-blue-700">
                                Beri Ulasan
                            </a>
                        </div>
                    </div>

                    <div class="prd_item flex flex-wrap items-center justify-between gap-3 py-2 border-b border-line">
                        <a href="product-default.html" class="flex items-center gap-5">
                            <div
                                class="bg-img flex-shrink-0 md:w-[100px] w-20 aspect-square rounded-lg overflow-hidden">
                                <img src="assets/images/product/fashion/1-1.png" alt="Contrasting sheepskin sweatshirt"
                                    class="w-full h-full object-cover" />
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

                <!-- Info Pengiriman -->
                <div class="shipping-info mt-4">
                    <h6 class="section-title">Info Pengiriman</h6>
                    <p><strong>Kurir:</strong> Kurir Rekomendasi - Reguler</p>
                    <p><strong>No Resi:</strong> TKP01-6JW5F1WD</p>
                    <p><strong>Alamat:</strong> Reza, 6281313711180<br>
                        Jln. Dukuh Patra No.75 RT.01/RW.13 Menteng dalam, Tebet Tebet, Kota Administrasi Jakarta
                        Selatan, DKI Jakarta 12870
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Backdrop --}}
<div id="modal-order-backdrop" class="hidden modal-order-backdrop"></div>

<style>
    /* Layout */
    .modal-container {
        display: flex;
        gap: 16px;
        padding: 16px;
        height: auto;
        max-height: 90vh;
        overflow: hidden;
        flex-direction: row;
    }

    .modal-left {
        flex: 2;
        overflow-y: auto;
        height: 500px;
        padding-right: 16px;
        border-right: 1px solid #e0e0e0;
    }

    .modal-right {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 16px;
        align-items: flex-start;
    }

    /* Styling untuk Teks dan Elemen */
    .transaction-status .status-title {
        font-weight: bold;
        font-size: 16px;
        color: #333;
        margin-bottom: 4px;
    }

    .transaction-status .invoice-number {
        color: #007bff;
        text-decoration: none;
        font-size: 14px;
    }

    .section-title {
        font-weight: bold;
        font-size: 17px;
        color: var(--primary);
    }

    .buy-again-btn {
        background-color: #007bff;
        color: #fff;
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        font-size: 12px;
        cursor: pointer;
    }

    /* Tombol Aksi di Kanan */
    .action-btn {
        width: 100%;
        padding: 8px;
        background-color: var(--primary);
        color: #fff;
        border: none;
        border-radius: 4px;
        text-align: center;
        font-size: 14px;
        cursor: pointer;
    }

    .action-btn:hover {
        background-color: var(--primary);
    }

    /* Scroll Styling */
    .modal-left::-webkit-scrollbar {
        width: 8px;
    }

    .modal-left::-webkit-scrollbar-thumb {
        background-color: #c4c4c4;
        border-radius: 4px;
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

    /* Responsive */
    @media (max-width: 768px) {
        .modal-container {
            flex-direction: column;
        }

        .modal-left {
            padding-right: 0;
            border-right: none;
            margin-bottom: 16px;
        }

        .modal-right {
            width: 100%;
        }

        .tracking-title {
            font-size: 18px;
        }

        .tracking-steps {
            flex-direction: column;
            /* Stack steps vertically */
            align-items: flex-start;
            /* Align to the start */
            gap: 10px;
            /* Reduced gap for better spacing */
        }

        /* Adjust individual step items */
        .step {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            /* Reduced gap */
            width: 100%;
            /* Make each step take full width */
        }

        .step-icon {
            width: 24px;
            /* Reduced size for small screens */
            height: 24px;
            font-size: 14px;
            /* Adjust icon text size */
        }

        .step-info {
            display: block;
            /* Stack the title and date vertically */
        }

        .step-title {
            font-size: 13px;
            /* Smaller title font size */
        }

        .step-date {
            font-size: 11px;
            /* Smaller date font size */
        }

        .action-btn {
            font-size: 12px;
            padding: 10px 15px;
        }
    }
</style>
