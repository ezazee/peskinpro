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
                            <div class="col-md-3">
                                <label for="inputEmail4" class="form-label">Type</label>
                                <select class="form-select" name="type" id="inputGroupSelect01">
                                    <option disabled selected>Choose...</option>
                                    <option value="stock" {{ request('type') == 'stock' ? 'selected' : '' }}>Stock</option>
                                    <option value="order" {{ request('type') == 'order' ? 'selected' : '' }}>Order</option>
                                </select>
                            </div>
                            <div class="col-md-3 mt-3">
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
                                            <td>Rp{{ number_format($product['size']->price - $product['size']->discount, 0, ',', '.') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @elseif(request('type') == 'order')
                            <h5>Order Report</h5>
                            <table class="table">
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
                                            <td>Rp{{ number_format($order->total_amount, 0, ',', '.') }}</td>
                                            <td>{{ ucfirst($order->status) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
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
@endsection
