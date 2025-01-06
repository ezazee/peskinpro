<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thermal Receipt</title>
    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
      }

      .receipt {
        width: 300px;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        font-size: 12px; /* Ukuran font lebih kecil */
        line-height: 1.4; /* Jarak antar baris lebih rapat */
      }

      .receipt .logo {
        display: block;
        margin: 0 auto 10px;
        width: 70px;
      }

      .receipt .header {
        text-align: center;
        margin-bottom: 20px;
      }

      .receipt .header h1 {
        font-size: 16px; /* Ukuran font judul lebih kecil */
        margin: 0;
      }

      .receipt .header p {
        font-size: 12px; /* Ukuran font untuk alamat dan info kontak lebih kecil */
        margin: 5px 0;
      }

      .receipt .date-time {
        text-align: center;
        font-size: 12px; /* Ukuran font untuk tanggal dan waktu lebih kecil */
        margin-bottom: 15px;
      }

      .receipt table {
        width: 100%;
        border-collapse: collapse;
        margin: 10px 0;
      }

      .receipt .row {
        display: flex;
        justify-content: space-between;
        margin: 5px 0;
      }

      .receipt th,
      .receipt td {
        padding: 5px;
        text-align: left;
        font-size: 12px; /* Ukuran font untuk tabel lebih kecil */
      }

      .receipt .total {
        margin: 15px 0;
        font-weight: bold;
        text-align: right;
      }

      .receipt .footer {
        text-align: center;
        font-size: 10px; /* Ukuran font untuk footer lebih kecil */
        margin-top: 15px;
      }

      .receipt .zigzag {
        margin-top: 15px;
        height: 10px;
        background: repeating-linear-gradient(
          -45deg,
          #fff,
          #fff 5px,
          #000 5px,
          #000 10px
        );
      }
      .alamat {
        font-size: 10px !important; /* Ukuran font untuk alamat lebih kecil */
      }
      .back-button {
        position: absolute;
        top: 10px;
        left: 10px;
        background: #3498db;
        color: white;
        padding: 5px 10px;
        text-decoration: none;
        border-radius: 5px;
      }

      .back-button:hover {
        background: #2980b9;
      }

      /* Hide back button from printing */
      @media print {
        .back-button {
          display: none;
        }
      }
    </style>
  </head>
  <body>
    <div class="receipt">
      <img
        src="https://raw.githubusercontent.com/ezazee/peskinpro/refs/heads/dev/public/frontend/assets/images/logo/peskin.png"
        class="logo"
        alt="PE Skin Pro"
      />
      <div class="header">
        <h1>PE SKINPRO ID</h1>
        <p>PT Kilau Berlian Nusantara</p>
        <p>02.809.009.0-416.000</p>
        <p class="alamat">
            Royal Spring Residence, Block Titanium No. 05, 006/006, Jati Padang, Ps. Minggu, Jakarta Selatan
        </p>
        <p class="alamat">
            Jl. Dukuh Patra No.75 001/013, Menteng Dalam, Tebet, Jakarta Selatan
          </p>
        <p>0812-1234-5678</p>
        <p>adm.peskinproid@gmail.com</p>
      </div>
      <div class="date-time">{{ $order->created_at->format('D, M d, Y • h:i A') }}</div>

      <div class="details">
        <div class="row">
            <span>Invoice Number :</span>
            <span>#{{ $order->invoice->invoice_number }}</span>
          </div>
          <div class="row">
            <span>Order Number :</span>
            <span>#{{ $order->order_number }}</span>
          </div>
          <div class="row">
            <span>Payment Method :</span>
            <span>{{ strtoupper($order->payment_method) }}</span>
          </div>
        <div style="text-align: center">
          ****************************************************************
        </div>

        <table>
          <thead>
            <tr>
              <th>SKU</th>
              <th>Product</th>
              <th>Qty</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($order->products as $product)
            <tr>
              @php
                $subtotal = $product->pivot->harga * $product->pivot->quantity;
              @endphp
              <td>{{ $product->sku }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->pivot->quantity }} pcs</td>
              <td>{{ number_format($product['harga'], 0, ',', '.') }} IDR</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div style="text-align: center">
          ****************************************************************
        </div>
        <table>
          <tbody>
            <tr>
              <td>Subtotal:</td>
              <td class="total">{{ number_format($subtotal, 0, ',', '.') }} IDR</td>
            </tr>
            <tr>
              <td>Discount:</td>
              <td class="total">
                @php
                  $discount = $order->discount_chekout ?? 0;
                @endphp
                {{ $discount == 0 ? '-0' : number_format($discount, 0, ',', '.') }} IDR
              </td>
            </tr>
            <tr>
              <td>Amount Due:</td>
              <td class="total">{{ number_format($order->total_amount, 0, ',', '.') }} IDR</td>
            </tr>
            @if($order->kembali !== null)
            <tr>
                <td>Return:</td>
                <td class="total">{{ number_format($order->kembali, 0, ',', '.') }} IDR</td>
            </tr>
            @endif
          </tbody>
        </table>
        <div style="text-align: center">
          ****************************************************************
        </div>
      </div>
      <div class="footer">
        <p>Thank You For Your Purchase!</p>
        <p>Follow Us To See More Update</p>
        <li style="list-style: none;">
            <i class="fa fa-brands fa-instagram"></i> <span>peskinpro.id</span>
        </li>
        <li style="list-style: none;">
            <i class="fa fa-brands fa-tiktok"></i> <span>@peskinproid</span>
        </li>
        <li style="list-style: none;">
            <i class="fa fa-solid fa-globe"></i> <span>www.peskinpro.id</span>
        </li>
      </div>
      <div class="zigzag"></div>
    </div>
    <script>
      window.print();
    </script>
  </body>
</html>
