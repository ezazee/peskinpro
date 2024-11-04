@extends('backend.master.master-app')

@section('title', 'List Orders')

@section('content')
<!-- Start Container Fluid -->
<div class="container-xxl">

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title mb-2">Payment Refund</h4>
                            <p class="text-muted fw-medium fs-22 mb-0">{{ $paymentrefund }}</p>
                        </div>
                        <div>
                            <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                <iconify-icon icon="solar:chat-round-money-broken"
                                    class="fs-32 text-primary avatar-title"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title mb-2">Order Cancel</h4>
                            <p class="text-muted fw-medium fs-22 mb-0">{{ $ordercancel }}</p>
                        </div>
                        <div>
                            <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                <iconify-icon icon="solar:cart-cross-broken" class="fs-32 text-primary avatar-title">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title mb-2">Order Shipped</h4>
                            <p class="text-muted fw-medium fs-22 mb-0">630</p>
                        </div>
                        <div>
                            <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                <iconify-icon icon="solar:box-broken" class="fs-32 text-primary avatar-title">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title mb-2">Order Delivering</h4>
                            <p class="text-muted fw-medium fs-22 mb-0">170</p>
                        </div>
                        <div>
                            <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                <iconify-icon icon="solar:tram-broken" class="fs-32 text-primary avatar-title">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title mb-2">Pending Review</h4>
                            <p class="text-muted fw-medium fs-22 mb-0">210</p>
                        </div>
                        <div>
                            <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                <iconify-icon icon="solar:clipboard-remove-broken"
                                    class="fs-32 text-primary avatar-title"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title mb-2">Pending Payment</h4>
                            <p class="text-muted fw-medium fs-22 mb-0">608</p>
                        </div>
                        <div>
                            <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                <iconify-icon icon="solar:clock-circle-broken" class="fs-32 text-primary avatar-title">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title mb-2">Delivered</h4>
                            <p class="text-muted fw-medium fs-22 mb-0">200</p>
                        </div>
                        <div>
                            <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                <iconify-icon icon="solar:clipboard-check-broken"
                                    class="fs-32 text-primary avatar-title"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title mb-2">In Progress</h4>
                            <p class="text-muted fw-medium fs-22 mb-0">656</p>
                        </div>
                        <div>
                            <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                <iconify-icon icon="solar:inbox-line-broken" class="fs-32 text-primary avatar-title">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title">All Order List</h4>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            This Month
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="#!" class="dropdown-item">Download</a>
                            <!-- item-->
                            <a href="#!" class="dropdown-item">Export</a>
                            <!-- item-->
                            <a href="#!" class="dropdown-item">Import</a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 table-hover table-centered">
                            <thead class="bg-light-subtle">
                                <tr>
                                    <th>No</th>
                                    <th>Order ID</th>
                                    <th>Created at</th>
                                    <th>Customer</th>
                                    <th>Priority</th>
                                    <th>Total</th>
                                    <th>Payment Status</th>
                                    <th>Items</th>
                                    <th>Delivery</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $index => $item)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>
                                       #{{ $item->order_number }}
                                    </td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        {{ $item->user->name }}
                                    </td>
                                    <td> Normal</td>
                                    <td>  Rp{{ number_format($item->total_amount, 0, ',', '.') }} </td>

                                    <td>
                                        @if( $item->invoice && $item->invoice->payment_status === 'paid' )
                                        <span class="badge bg-success text-light  px-2 py-1 fs-13">Paid</span>
                                        @elseif( $item->invoice && $item->invoice->payment_status === 'unpaid' )
                                        <span class="badge bg-light text-dark  px-2 py-1 fs-13">Unpaid</span>
                                        @else
                                        <span class="badge bg-danger text-dark  px-2 py-1 fs-13">Refunded</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->products->sum('pivot.quantity') }}</td>
                                    <td> -</td>
                                    <td> 
                                        @if ( $item->status == 'pending')
                                        <span class="badge border border-secondary text-secondary px-2 py-1 fs-13">Pending</span>
                                        @elseif($item->status == 'processing')
                                        <span class="badge border border-warning text-warning px-2 py-1 fs-13">Processing</span>
                                        @elseif($item->status == 'completed')
                                        <span class="badge border border-success text-success px-2 py-1 fs-13">Completed</span>
                                        @else
                                        <span class="badge border border-danger text-danger px-2 py-1 fs-13">Canceled</span>
                                        @endif 
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('orders.detail',['orderNumber' => $item->order_number]) }}" class="btn btn-light btn-sm">
                                                <iconify-icon icon="solar:eye-broken" class="align-middle fs-18">
                                                </iconify-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
                <div class="card-footer border-top">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end mb-0">
                            {{ $orders->onEachSide(1)->links('pagination::bootstrap-5') }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- End Container Fluid -->
@endsection
