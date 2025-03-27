<div id="customPKS" class="modal-pks hidden">
    <div class="modal-content">
        <!-- Tombol Close -->
        <span class="modal-pks-close">&times;</span>
        <!-- Container Modal -->
        <div class="modal-container">
            <div class="modal-left">
                <!-- Detail Produk -->
                <h6 class="section-title text-center">PERJANJIAN KERJASAMA AFFILIATE</h6>
                <h6 class="section-title text-center">PESKINPRO.ID</h6>
                <div class="mt-5">
                    <!-- PASAL 1 -->
                    <div class="pasal">
                        <h2><strong>PASAL 1 - MAKSUD</strong></h2>
                        <ol>
                            <li>Perjanjian ini mengatur Program Affiliate yang disediakan oleh PESKINPRO.ID.</li>
                            <li>Dengan mengikuti program Affiliate PESKINPRO.ID, Pihak Pendaftar telah setuju untuk
                                mematuhi semua syarat dan ketentuan Program Affiliate ini.</li>
                        </ol>
                    </div>

                    <!-- PASAL 2 -->
                    <div class="pasal">
                        <h2><strong>PASAL 2 - LINK ORDER</strong></h2>
                        <ol>
                            <li>PESKINPRO.ID akan memberikan link order untuk dipromosikan dan digunakan sebagai link
                                yang dipakai untuk pembelian produk di web PESKINPRO.ID.</li>
                            <li>Link order Pihak Pendaftar Affiliate akan terdata di sistem web PESKINPRO.ID.</li>
                            <li>Pihak Pendaftar Affiliate tidak diperbolehkan mengubah link yang telah dibuat termasuk
                                cookie dengan cara apa pun.</li>
                        </ol>
                    </div>

                    <!-- PASAL 3 -->
                    <div class="pasal">
                        <h2><strong>PASAL 3 - KOMISI DAN PEMBAYARAN</strong></h2>
                        <ol>
                            <li>Pihak Pendaftar Affiliate berhak menerima komisi dari setiap pembelanjaan yang dilakukan
                                melalui link order yang telah dibuat. Besaran <strong>komisi yang didapatkan adalah 10%</strong> dari
                                masing-masing harga jual produk PESKINPRO.ID <strong>setelah dikurangi pajak penjualan 11%</strong>, dan
                                akan diberikan apabila pesanan sudah diterima customer.</li>
                            <li>Semua komisi hanya akan dibayarkan dalam bentuk Rupiah. <strong> Pembayaran akan dilakukan
                                melalui Transfer Bank sesuai nomor rekening yang tertera pada waktu pendaftaran. (diluar
                                bank BCA, biaya admin bank akan dipotong dari komisi).</strong></li>
                            <li><strong>Transfer akan dilakukan jika komisi sudah mencapai minimal Rp. 150.000.</strong></li>
                            <li>Pentransferan akan dilakukan di jam kerja kantor. <strong>Senin-Jumat 09.00-17.00, Sabtu,
                                Minggu</strong>, dan hari libur tidak ada pentransferan.</li>
                        </ol>
                    </div>

                    <!-- PASAL 4 -->
                    <div class="pasal">
                        <h2><strong>PASAL 4 - LARANGAN</strong></h2>
                        <ol>
                            <li>PESKINPRO.ID akan melakukan pengecekan terhadap detail order dari Pihak Pendaftar
                                Affiliate sehingga pembelian untuk pribadi tidak diperbolehkan.</li>
                            <li>Jika ditemukan adanya indikasi kecurangan, PESKINPRO.ID akan melakukan penyesuaian
                                komisi yang didapatkan dan tidak akan memproses pencairan dana kepada Pihak Pendaftar
                                Affiliate.</li>
                        </ol>
                    </div>

                    <!-- PASAL 5 -->
                    <div class="pasal">
                        <h2><strong>PASAL 5 - PENGHENTIAN</strong></h2>
                        <ol>
                            <li>PESKINPRO.ID memiliki hak untuk membatalkan kerjasama dengan Pihak Pendaftar Affiliate
                                atas kebijakannya sendiri, atas pelanggaran Perjanjian ini, atau aktivitas apa pun yang
                                merugikan bisnis PESKINPRO.ID.</li>
                            <li>Setelah pengakhiran, Pihak Pendaftar Affiliate akan dicabut aksesnya dan akan kehilangan
                                semua potensi dan/atau komisi yang belum dibayar.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer mt-5 flex gap-5 justify-center">
            <button id="agreeButton" class="button-main text-xs py-1 rounded-lg flex items-end">Setuju</button>
            <button id="disagreeButton" class="text-danger text-xs py-1 rounded-lg flex items-end">Tidak Setuju</button>

        </div>
    </div>
</div>

<div id="modal-pks-backdrop" class="hidden modal-pks-backdrop"></div>

<style>
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

    .modal-left::-webkit-scrollbar {
        width: 8px;
    }

    .modal-left::-webkit-scrollbar-thumb {
        background-color: #c4c4c4;
        border-radius: 4px;
    }

    .tracking-steps {
        display: flex;
        justify-content: space-between;
        gap: 16px;
    }

    .step {
        display: flex;
        align-items: center;
        gap: 16px;
        flex-direction: row;
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
        position: relative;
    }

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

    /* RESPONSIVE DESIGN */

    /* Untuk layar tablet dan lebih kecil */
    @media (max-width: 1024px) {
        .modal-container {
            flex-direction: column;
            gap: 12px;
            padding: 12px;
        }

        .modal-left {
            height: 400px;
            /* Kurangi tinggi konten agar tidak terlalu panjang */
            padding-right: 0;
            border-right: none;
        }
    }

    /* Untuk layar HP */
    @media (max-width: 768px) {
        .modal-container {
            padding: 10px;
        }

        .modal-left {
            height: 350px;
            /* Sesuaikan tinggi modal di HP */
            padding: 8px;
        }

        .modal-text p {
            font-size: 13px;
            line-height: 1.4;
        }

        .section-title {
            font-size: 15px;
            /* Judul lebih kecil */
        }

        .action-btn {
            font-size: 13px;
            padding: 10px 12px;
            /* Tombol lebih nyaman di HP */
        }
    }

    /* Untuk layar sangat kecil (di bawah 480px) */
    @media (max-width: 480px) {
        .modal-left {
            height: auto;
            max-height: 300px;
        }

        .modal-text p {
            font-size: 12px;
        }

        .action-btn {
            font-size: 12px;
            padding: 8px 10px;
        }
    }

    /* Pasal Styling */
    .pasal {
        margin-bottom: 20px;
    }

    .pasal h2 {
        margin-bottom: 10px;
    }

    .pasal ol {
        margin-left: 20px;
    }

    .pasal li {
        margin: 15px 0 15px 0;
    }
</style>
