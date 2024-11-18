<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h4 {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h4>Generated Report</h4>
    <p>From: {{ $startDate }} To: {{ $endDate }}</p>

    @if($type == 'stock')
        <h5>Stock Report</h5>
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Size</th>
                    <th>Stock</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $product)
                    <tr>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['size']->size }}ML</td>
                        <td>{{ $product['size']->stock }}</td>
                        <td>Rp{{ number_format($product['size']->price, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @elseif($type == 'order')
        <h5>Order Report</h5>
        <table>
            <thead>
                <tr>
                    <th>Order Number</th>
                    <th>User</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $order)
                    <tr>
                        <td>#{{ $order->order_number }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ number_format($order->total_price, 0, ',', '.') }}</td>
                        <td>{{ ucfirst($order->status) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
