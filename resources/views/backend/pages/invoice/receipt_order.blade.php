<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thermal Receipt</title>
  <style>
    /* Set the page size for thermal printer - 4.00x2.50 inches */
    @page {
      size: 7.8cm 10cm; /* 4.00 x 2.50 inches */
      margin: 0;
    }

    /* General body styling for better printing */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      background-color: #fff;
    }

    /* Receipt container setup */
    .receipt {
      width: 100%;
      height: 100%;
      padding: 3mm; /* Small padding for thermal receipt */
      box-sizing: border-box;
      background: #fff;
      font-size: 9px; /* Reduce font size for small paper */
      line-height: 1.2;
      overflow: hidden;
    }

    /* Header style */
    .receipt .header {
      text-align: center;
      font-weight: bold;
      margin-bottom: 3px;
      padding-bottom: 1px;
      border-bottom: 1px solid #ddd;
    }

    /* Content section styling */
    .receipt .content {
      margin: 3px 0;
    }

    /* Section titles style */
    .receipt .content .section-title {
      font-weight: bold;
      font-size: 8px;
      text-decoration: underline;
    }

    /* Table styling */
    .receipt table {
      width: 100%;
      border-collapse: collapse;
    }

    .receipt table th,
    .receipt table td {
      border: 1px solid #ddd;
      padding: 1mm;
      font-size: 7px; /* Smaller font for tables */
      text-align: left;
    }

    /* Footer style */
    .footer {
      text-align: center;
      margin-top: 5px;
      font-size: 7px;
    }

    .footer img {
      margin-top: 2px;
      width: 15px;
    }
  </style>
</head>
<body>
  <div class="receipt">
    <!-- Header -->
    <div class="header">
      <div>INFORMASI PENERIMA</div>
    </div>

    <!-- Informasi Penerima -->
    <div class="content">
      <div class="section-title">Penerima:</div>
      <div><strong>Cristiano Ronaldo</strong></div>
      <div>Jl. Semeru II No. 22 RT 02 RW 10,</div>
      <div>Perumahan Sawangan Permai,</div>
      <div>Kelurahan Jatisampurna, Kecamatan Jatisampurna,</div>
      <div>Kota Bekasi, Jawa Barat 17433</div>
    </div>

    <!-- Informasi Kontak -->
    <div class="content">
      <div><strong>No. Telepon:</strong> 081234567890</div>
    </div>

    <!-- Detail Produk -->
    <div class="content">
      <div class="section-title">Detail Produk:</div>
      <table>
        <thead>
          <tr>
            <th>Nama Barang</th>
            <th>SKU</th>
            <th>Jumlah</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Jersey Sepak Bola</td>
            <td>JSB12345</td>
            <td>2</td>
          </tr>
          <tr>
            <td>Kaos Kaki Sepak Bola</td>
            <td>KSB54321</td>
            <td>1</td>
          </tr>
          <tr>
            <td>Sepatu Futsal</td>
            <td>SFS67890</td>
            <td>1</td>
          </tr>
          <tr>
            <td>Celana Olahraga</td>
            <td>COL12333</td>
            <td>3</td>
          </tr>
          <tr>
            <td>Topi Baseball</td>
            <td>TPB98765</td>
            <td>2</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Footer -->
    <div class="footer">
      Terima kasih telah menggunakan layanan kami.
      <p>
        <img src="https://raw.githubusercontent.com/ezazee/peskinpro/refs/heads/dev/public/frontend/assets/images/logo/peskin.png" alt="Logo">
      </p>
    </div>
  </div>
</body>
</html>