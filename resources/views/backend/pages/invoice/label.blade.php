<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thermal Receipt</title>
  <style>
    /* Aturan CSS untuk pengaturan ukuran kertas thermal saat mencetak */
    @page {
      size: 7cm 10cm; /* Ukuran kertas thermal */
      margin: 0 !important; /* Menghilangkan margin default */
    }

    /* Menghapus margin body dan elemen lainnya */
    body, html {
      margin: 0 !important;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .receipt {
      width: 7cm; /* Lebar kertas thermal */
      height: 10cm; /* Tinggi kertas thermal */
      padding: 2mm; /* Padding kecil */
      box-sizing: border-box;
      background: #fff;
      font-size: 9px; /* Ukuran font lebih kecil */
      line-height: 1.3; /* Jarak antar baris */
      display: flex;
      flex-direction: column;
      justify-content: flex-start; /* Menjaga elemen tetap rapih */
      overflow: hidden;
    }

    .receipt .header {
      text-align: center;
      margin-bottom: 1mm;
      border-bottom: 1px solid #ddd;
    }

    .receipt .header .title {
      font-weight: bold;
      font-size: 10px; /* Ukuran font header */
    }

    .receipt .content {
      margin: 1mm 0;
      flex-grow: 1;
      overflow: hidden;
    }

    .receipt .content .section-title {
      font-weight: bold;
      margin-bottom: 2px;
      font-size: 10px; /* Ukuran font judul section */
    }

    .receipt table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 3mm;
    }

    .receipt table th,
    .receipt table td {
      border: 1px solid #ddd;
      padding: 1mm; /* Padding lebih kecil untuk sel tabel */
      text-align: left;
      font-size: 8px; /* Ukuran font lebih kecil pada tabel */
    }

    .footer {
      text-align: center;
      font-size: 7px; /* Ukuran font footer lebih kecil */
    }

    .footer img {
      margin-top: 1px;
      width: 18px;
    }

    /* Aturan untuk pencetakan */
    @media print {
      body {
        margin: 0 !important;
        padding: 0;
      }

      .receipt {
        width: 7cm;
        height: 10cm;
        padding: 2mm;
        background: #fff;
        font-size: 9px;
        line-height: 1.3;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        overflow: hidden;
      }

      .receipt .header {
        text-align: center;
        margin-bottom: 1mm;
        border-bottom: 1px solid #ddd;
      }

      .receipt .content {
        flex-grow: 1;
        margin: 1mm 0;
        overflow: hidden;
      }

      .footer {
        text-align: center;
        font-size: 7px;
      }
    }
  </style>
</head>
<body>
  <div class="receipt">
    <!-- Header -->
    <div class="header">
      <div class="title">INFORMASI PENERIMA</div>
    </div>

    <!-- Informasi Penerima -->
    <div>
      <div class="section-title">Penerima:</div>
      <div><strong>{{ $order->user->name }}</strong></div>
      <div>{{ $order->alamat->street }},</div>
      <div>Kecamatan {{ $order->alamat->kecamatan  }}, Kelurahan {{ $order->alamat->kelurahan  }}</div>
      <div>Kota/Kab {{ $order->alamat->city->name }} , {{ $order->alamat->province->name }} ,</div>
      <div>Indonesia ({{ $order->alamat->postal_code }})</div>
    </div>

    <!-- Informasi Kontak -->
    <div>
      <div><strong>No. Telepon:</strong> {{ $order->alamat->no_telp }}</div>
    </div>

    <!-- Detail Produk -->
    <div>
      <div class="section-title">Detail Produk:</div>
      <table>
        <thead>
          <tr>
            <th>Nama Barang</th>
            <th>Jumlah</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($order->products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->pivot->quantity }}</td>
            </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    <!-- Footer -->
    <div class="footer">
      Thank you for your purchase! <br>
      Follow Us To See More Update 😊  <br>
      (ig, tiktok, website pe)

      <p>
        <img src="https://raw.githubusercontent.com/ezazee/peskinpro/refs/heads/dev/public/frontend/assets/images/logo/peskin.png" alt="Logo">
      </p>
    </div>
  </div>
  <script>
    window.onload = function () {
      window.print();
    };
    </script>
</body>
</html>
