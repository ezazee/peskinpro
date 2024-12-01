<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <style>
        /* A4 Paper size */
        @page {
            size: A4;
            margin: 20mm;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            color: #333;
            line-height: 1.4;
            font-size: 12px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        header img {
            height: 50px;
            width: auto;
        }

        header .report-title {
            text-align: right;
        }

        header .report-title h4 {
            margin: 0;
            color: #555;
        }

        header .report-title p {
            margin: 0;
            font-size: 14px;
        }

        h5 {
            color: #1D99D2;
            margin-bottom: 15px;
            border-bottom: 2px solid #1D99D2;
            padding-bottom: 5px;
            display: inline-block;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 8px 10px;
            border: 1px solid #ddd;
            text-align: left;
            font-size: 10px; /* smaller font size for print */
        }

        th {
            background-color: #1D99D2;
            color: #fff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* For the footer */
        footer {
            text-align: center;
            font-size: 12px;
            margin-top: 20px;
            color: #777;
        }

        /* Responsive for large screens or printing */
        @media print {
            body {
                font-size: 10px;
            }

            table {
                font-size: 10px;
            }

            th, td {
                padding: 6px 8px;
            }
        }

        /* Optional: If you want to print the logo to be smaller */
        header img {
            height: 40px;
        }
    </style>
</head>

<body>
    <header>
        <img src="data:image/png;base64,{{ $image }}" width="80px" height="100px" alt="Placeholder Logo">
        <div class="report-title">
            @if ($type == 'stock')
            <h4>Reporting Stock</h4>
            @elseif ($type == 'order')
            <h4>Reporting Order</h4>
            @endif
            <p>From: {{ $startDate }} To: {{ $endDate }}</p>
        </div>
    </header>

    @if ($type == 'stock')
    <h5>Stock Report</h5>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Size</th>
                <th>Stock Available</th>
                <th>Stock Sold</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['size']->size }} ML</td>
                <td>{{ $product['stock_available'] }}</td>
                <td>{{ $product['stock_sold'] }}</td>
                <td>Rp{{ number_format($product['size']->price - $product['size']->discount, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" class="text-center"><strong>Total Stock Sold:</strong></td>
                <td><strong>{{ number_format($totalStockSold, 0, ',', '.') }}</strong></td>
                <td></td>
            </tr>
        </tfoot>
    </table>
    @elseif($type == 'order')
    <h5>Order Report</h5>
    <table>
        <thead>
            <tr>
                <th>Order Number</th>
                <th>User Name</th>
                <th>Total Amount (Rp)</th>
                <th>Discount (Rp)</th>
                <th>Payment Method</th>
                <th>Status</th>
                <th>Order Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $order)
            <tr>
                <td>#{{ $order->order_number }}</td>
                <td>{{ $order->user->name }}</td>
                <td class="text-right">{{ number_format($order->total_amount, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($order->discount_chekout, 0, ',', '.') }}</td>
                <td class="text-center">{{ ucfirst($order->payment_method) }}</td>
                <td class="text-center">{{ ucfirst($order->status) }}</td>
                <td class="text-center">{{ \Carbon\Carbon::parse($order->created_at)->format('d M Y') }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6" class="text-center"><strong>Total Overall Amount:</strong></td>
                <td><strong>Rp{{ number_format($totalAmount, 0, ',', '.') }}</strong></td>
            </tr>
            <tr>
                <td colspan="6" class="text-center"><strong>Total Return Amount:</strong></td>
                <td><strong>-Rp{{ number_format($totalReturns, 0, ',', '.') }}</strong></td>
            </tr>
            <tr>
                <td colspan="6" class="text-center"><strong>Total Refund Amount:</strong></td>
                <td><strong>-Rp{{ number_format($totalRefunds, 0, ',', '.') }}</strong></td>
            </tr>
            <tr>
                <td colspan="6" class="text-center"><strong>Total:</strong></td>
                <td><strong>Rp{{ number_format($adjustedTotal, 0, ',', '.') }}</strong></td>
            </tr>
        </tfoot>        
    </table>
    @endif

    <footer>
        © {{ date('Y') }} PE Skin Professional. All rights reserved.
    </footer>
</body>

</html>
