@extends('backend.master.master-app')

@section('title', 'Report')

@section('content')
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('report.generate') }}" method="GET">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="inputEmail4" class="form-label">Start Date</label>
                                <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                            </div>
                            <div class="col-md-3">
                                <label for="inputPassword4" class="form-label">End Date</label>
                                <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                            </div>
                            <div class="col-md-2">
                                <label for="inputEmail4" class="form-label">Type</label>
                                <select class="form-select" name="type" id="typeSelect">
                                    <option disabled selected>Choose...</option>
                                    <option value="stock" {{ request('type') == 'stock' ? 'selected' : '' }}>Stock</option>
                                    <option value="order" {{ request('type') == 'order' ? 'selected' : '' }}>Order</option>
                                </select>
                            </div>
                            <div class="col-md-2" id="statusContainer" style="display: none;">
                                <label for="inputStatus" class="form-label">Status</label>
                                <select class="form-select" name="status" id="inputStatus">
                                    <option value="all" {{ request('status') == '' ? 'selected' : '' }}>All</option>
                                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="processing" {{ request('status') == 'processing' ? 'selected' : '' }}>Processing</option>
                                    <option value="shipping" {{ request('status') == 'shipping' ? 'selected' : '' }}>Shipping</option>
                                    <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                    <option value="canceled" {{ request('status') == 'canceled' ? 'selected' : '' }}>Cancelled</option>
                                </select>
                            </div>                            
                            <div class="col-md-2 mt-3">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if(request()->has('start_date') && request()->has('end_date') && request()->has('type'))
        <div class="row mt-4">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1">
                        <h4 class="card-title">Generated Report</h4>
                        <p>From: {{ request('start_date') }} To: {{ request('end_date') }}</p>

                        <a href="{{ route('report.generatePdf', ['start_date' => request('start_date'), 'end_date' => request('end_date'), 'type' => request('type')]) }}" class="btn btn-sm btn-primary">
                            <iconify-icon icon="solar:printer-broken" class="avatar-title fs-24"></iconify-icon>
                        </a>
                    </div>
                    <div class="card-body">
                        @if(request('type') == 'stock')
                            <h5>Stock Report</h5>
                            <table class="table">
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
                        @elseif(request('type') == 'order')
                            <h5>Order Report</h5>
                            <table class="table">
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
                                    @foreach($data as $order)
                                        <tr>
                                            <td>#{{ $order->order_number }}</td>
                                            <td>{{ $order->user->name }}</td>
                                            <td class="text-right">Rp{{ number_format($order->total_amount, 0, ',', '.') }}</td>
                                            <td class="text-right">Rp{{ number_format($order->discount_chekout, 0, ',', '.') }}</td>
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
                    </div>
                </div>
            </div>
        </div>
    @else
        <p class="text-center mt-4">Please submit the form to generate the report.</p>
    @endif
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const typeSelect = document.getElementById('typeSelect');
        const statusContainer = document.getElementById('statusContainer');

        // Fungsi untuk menampilkan/menghilangkan dropdown status
        const toggleStatusDropdown = () => {
            if (typeSelect.value === 'order') {
                statusContainer.style.display = 'block';
            } else {
                statusContainer.style.display = 'none';
            }
        };

        // Jalankan fungsi saat halaman dimuat
        toggleStatusDropdown();

        // Jalankan fungsi saat dropdown type berubah
        typeSelect.addEventListener('change', toggleStatusDropdown);
    });
</script>

@endsection
