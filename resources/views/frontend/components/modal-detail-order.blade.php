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
                            <div class="step-icon">✔</div>
                            <div class="step-info">
                                <p class="step-title">Pesanan Dibuat</p>
                                <p class="step-date">10 November 2024, 01:00 WIB</p>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="step completed">
                            <div class="step-icon">✔</div>
                            <div class="step-info">
                                <p class="step-title">Pesanan Diproses</p>
                                <p class="step-date">10 November 2024, 02:00 WIB</p>
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div class="step active">
                            <div class="step-icon">●</div>
                            <div class="step-info">
                                <p class="step-title">Pesanan Dikirim</p>
                                <p class="step-date">11 November 2024, 09:00 WIB</p>
                            </div>
                        </div>
                        <!-- Step 4 -->
                        <div class="step">
                            <div class="step-icon">●</div>
                            <div class="step-info">
                                <p class="step-title">Pesanan Selesai</p>
                                <p class="step-date">Estimasi: 12 November 2024</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Detail Produk -->
                <div class="product-detail">
                    <h6 class="section-title">Detail Produk</h6>
                    <div class="product-card">
                        <img src="https://via.placeholder.com/80" alt="Product Image" class="product-image">
                        <div class="product-info">
                            <p class="product-name">Cave Eau de Parfum Leather Oud - 50 ml</p>
                            <p class="product-price">1 x Rp179.000</p>
                        </div>
                        <div class="product-total">
                            <p class="total-title">Total Harga</p>
                            <p class="total-price">Rp179.000</p>
                            <button class="buy-again-btn">Beli Lagi</button>
                        </div>
                    </div>
                    <div class="product-card">
                        <img src="https://via.placeholder.com/80" alt="Product Image" class="product-image">
                        <div class="product-info">
                            <p class="product-name">Cave Eau de Parfum Leather Oud - 50 ml</p>
                            <p class="product-price">1 x Rp179.000</p>
                        </div>
                        <div class="product-total">
                            <p class="total-title">Total Harga</p>
                            <p class="total-price">Rp179.000</p>
                            <button class="buy-again-btn">Beli Lagi</button>
                        </div>
                    </div>
                </div>

                <!-- Info Pengiriman -->
                <div class="shipping-info">
                    <h6 class="section-title">Info Pengiriman</h6>
                    <p><strong>Kurir:</strong> Kurir Rekomendasi - Reguler</p>
                    <p><strong>No Resi:</strong> TKP01-6JW5F1WD</p>
                    <p><strong>Alamat:</strong> Reza, 6281313711180<br>
                        Jln. Dukuh Patra No.75 RT.01/RW.13 Menteng dalam, Tebet Tebet, Kota Administrasi Jakarta Selatan, DKI Jakarta 12870
                    </p>
                </div>
            </div>

            <!-- Bagian Kanan -->
            <div class="modal-right">
                <button class="action-btn">Beri Ulasan</button>
                <button class="action-btn">Chat Penjual</button>
                <button class="action-btn">Bantuan</button>
                <button class="action-btn">Lihat Bukti Pengiriman</button>
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
    height: 500px;
    overflow: hidden;
}

.modal-left {
    flex: 2;
    overflow-y: auto;
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
    font-size: 14px;
    color: #444;
    margin-bottom: 8px;
}

.product-card {
    display: flex;
    gap: 16px;
    align-items: center;
    padding: 12px;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    margin-bottom: 12px;
}

.product-image {
    width: 80px;
    height: 80px;
    border-radius: 4px;
    object-fit: cover;
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
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 4px;
    text-align: center;
    font-size: 14px;
    cursor: pointer;
}

.action-btn:hover {
    background-color: #218838;
}

/* Scroll Styling */
.modal-left::-webkit-scrollbar {
    width: 8px;
}

.modal-left::-webkit-scrollbar-thumb {
    background-color: #c4c4c4;
    border-radius: 4px;
}

/* Order Tracking Container */
.order-tracking {
    width: 100%;
    max-width: 600px;
    margin: 20px auto;
    font-family: Arial, sans-serif;
    color: #333;
}

.tracking-title {
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
    color: #444;
}

/* Tracking Steps */
.tracking-steps {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

/* Each Step */
.step {
    display: flex;
    align-items: center;
    gap: 16px;
}

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
}

.step-info {
    display: flex;
    flex-direction: column;
}

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
    background-color: #28a745;
    color: white;
    border-color: #28a745;
}

.step.active .step-icon {
    border-color: #007bff;
    color: #007bff;
}

.step:not(.completed):not(.active) .step-icon {
    background-color: #f5f5f5;
    color: #999;
    border-color: #e0e0e0;
}

</style>
