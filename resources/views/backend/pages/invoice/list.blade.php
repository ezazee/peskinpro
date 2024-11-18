@extends('backend.master.master-app')

@section('title', 'Invoice')

@section('content')
<div class="container-xxl">

    <!-- Start here.... -->
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title mb-2 d-flex align-items-center gap-2">Total Invoice</h4>
                            <p class="text-muted fw-medium fs-22 mb-0">{{ $totalinvoices }}</p>
                        </div>
                        <div>
                            <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                <iconify-icon icon="solar:bill-list-bold-duotone"
                                    class="fs-32 text-primary avatar-title"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title mb-2 d-flex align-items-center gap-2">Pending Invoice</h4>
                            <p class="text-muted fw-medium fs-22 mb-0">{{ $totalinvoicesunpaid }}</p>
                        </div>
                        <div>
                            <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                <iconify-icon icon="solar:bill-bold-duotone" class="fs-32 text-primary avatar-title">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title mb-2 d-flex align-items-center gap-2">Paid Invoice</h4>
                            <p class="text-muted fw-medium fs-22 mb-0">{{ $totalinvoicespaid }}</p>
                        </div>
                        <div>
                            <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                <iconify-icon icon="solar:bill-check-bold-duotone"
                                    class="fs-32 text-primary avatar-title"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title mb-2 d-flex align-items-center gap-2">Refunded Invoice</h4>
                            <p class="text-muted fw-medium fs-22 mb-0">{{ $totalinvoicerefunded }}</p>
                        </div>
                        <div>
                            <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                <iconify-icon icon="solar:bill-cross-bold-duotone"
                                class="fs-32 text-primary avatar-title"></iconify-icon>
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
                        <h4 class="card-title">All Invoices List</h4>
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <!-- Form Search -->
                        <form action="{{ route('invoice.index') }}" method="GET" class="d-flex align-items-center me-2">
                            <input type="text" name="query" class="form-control form-control-sm" 
                                   placeholder="Search Invoice Number..." 
                                   value="{{ request('query') }}">
                            <button type="submit" class="btn btn-sm btn-outline-secondary ms-1">Search</button>
                        </form>

                        <!-- Dropdown -->
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
                                This Month
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#!" class="dropdown-item">Download</a>
                                <a href="#!" class="dropdown-item">Export</a>
                                <a href="#!" class="dropdown-item">Import</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 table-hover table-centered">
                            <thead class="bg-light-subtle">
                                <tr>
                                    <th style="width: 20px;">
                                       No
                                    </th>
                                    <th>Invoice ID</th>
                                    <th>Billing Name</th>
                                    <th>Order Date</th>
                                    <th>Total</th>
                                    <th>Payment Method</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoices as $index => $item)
                                <tr>
                                    <td>
                                        {{ $index+1 }}
                                    </td>
                                    <td> #{{ $item->invoice_number }}</td>
                                    <td>
                                        @if($item->order->user->images )
                                        <img src="{{ asset('storage/' . $item->order->user->images ) }}" alt="Admin Image"
                                            class="avatar-sm rounded-circle me-2">
                                        @else
                                        <img src="{{ asset('/backend/assets/images/blank-profile.png') }}"
                                            alt="Default Profile Image" class="avatar-sm rounded-circle me-2">
                                        @endif
                                        {{ $item->order->user->name }}</td>
                                    <td> {{ $item->created_at }}</td>
                                    <td> Rp{{ number_format($item->amount, 0, ',', '.') }} </td>
                                    <td> {{ $item->order->payment_method }} </td>
                                    <td>
                                        @if ( $item->order->status == 'pending')
                                        <span class="badge border border-secondary text-secondary px-2 py-1 fs-13">Pending</span>
                                        @elseif($item->order->status == 'processing')
                                        <span class="badge border border-warning text-warning px-2 py-1 fs-13">Processing</span>
                                        @elseif($item->order->status == 'shipping')
                                        <span class="badge border border-info text-info px-2 py-1 fs-13">Shipping</span>
                                        @elseif($item->order->status == 'completed')
                                        <span class="badge border border-success text-success px-2 py-1 fs-13">Completed</span>
                                        @else
                                        <span class="badge border border-danger text-danger px-2 py-1 fs-13">Canceled</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('invoice.detail', ['invoiceNumber' => $item->invoice_number]) }}" class="btn btn-light btn-sm">
                                                <iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                            </a>
                                            <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                <iconify-icon icon="solar:printer-outline" class="align-middle fs-18">
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
                            {{ $invoices->onEachSide(1)->links('pagination::bootstrap-5') }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
