@extends('backend.master.master-app')

@section('title', 'Detail Orders')

@section('content')
<div class="container-xxl">

    <div class="row">
        <div class="col-xl-9 col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
                                <div>
                                   <h4 class="fw-medium text-dark d-flex align-items-center gap-2">
                                        #{{ $orders->order_number }}
                                        @if ($orders->invoice->payment_status == 'paid')
                                             <span class="badge bg-success-subtle text-success px-2 py-1 fs-13">Paid</span>
                                        @elseif ($orders->invoice->payment_status == 'unpaid')
                                             <span class="badge bg-secondary-subtle text-secondary px-2 py-1 fs-13">Unpaid</span>
                                        @else
                                             <span class="badge bg-danger-subtle text-danger px-2 py-1 fs-13">Refund</span>
                                        @endif
                                        <span class="border border-warning text-warning fs-13 px-2 py-1 rounded">In Progress</span>
                                   </h4>
                                    <p class="mb-0">Order / Order Details / #{{ $orders->order_number }} -
                                        {{ $orders->created_at->format('d F Y') }}</p>
                                </div>
                                <div>
                                    <a href="#!" class="btn btn-outline-secondary">Refund</a>
                                    <a href="#!" class="btn btn-outline-secondary">Return</a>
                                </div>

                            </div>

                            <div class="mt-4">
                                <h4 class="fw-medium text-dark">Progress</h4>
                            </div>
                            <div class="row row-cols-xxl-5 row-cols-md-2 row-cols-1">
                                <div class="col">
                                    <div class="progress mt-3" style="height: 10px;">
                                        <div class="progress-bar progress-bar  progress-bar-striped progress-bar-animated bg-success"
                                            role="progressbar" style="width: 100%" aria-valuenow="70" aria-valuemin="0"
                                            aria-valuemax="70">
                                        </div>
                                    </div>
                                    <p class="mb-0 mt-2">Order Confirming</p>
                                </div>
                                <div class="col">
                                    <div class="progress mt-3" style="height: 10px;">
                                        <div class="progress-bar progress-bar  progress-bar-striped progress-bar-animated bg-success"
                                            role="progressbar" style="width: 100%" aria-valuenow="70" aria-valuemin="0"
                                            aria-valuemax="70">
                                        </div>
                                    </div>
                                    <p class="mb-0 mt-2">Payment Pending</p>
                                </div>
                                <div class="col">
                                    <div class="progress mt-3" style="height: 10px;">
                                        <div class="progress-bar progress-bar  progress-bar-striped progress-bar-animated bg-warning"
                                            role="progressbar" style="width: 60%" aria-valuenow="70" aria-valuemin="0"
                                            aria-valuemax="70">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 mt-2">
                                        <p class="mb-0">Processing</p>
                                        <div class="spinner-border spinner-border-sm text-warning" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="progress mt-3" style="height: 10px;">
                                        <div class="progress-bar progress-bar  progress-bar-striped progress-bar-animated bg-primary"
                                            role="progressbar" style="width: 0%" aria-valuenow="70" aria-valuemin="0"
                                            aria-valuemax="70">
                                        </div>
                                    </div>
                                    <p class="mb-0 mt-2">Shipping</p>
                                </div>
                                <div class="col">
                                    <div class="progress mt-3" style="height: 10px;">
                                        <div class="progress-bar progress-bar  progress-bar-striped progress-bar-animated bg-primary"
                                            role="progressbar" style="width: 0%" aria-valuenow="70" aria-valuemin="0"
                                            aria-valuemax="70">
                                        </div>
                                    </div>
                                    <p class="mb-0 mt-2">Delivered</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="card-footer d-flex flex-wrap align-items-center justify-content-between bg-light-subtle gap-2">
                            <p class="border rounded mb-0 px-2 py-1 bg-body"><i
                                    class='bx bx-arrow-from-left align-middle fs-16'></i> Estimated shipping date :
                                <span class="text-dark fw-medium">Apr 25 , 2024</span></p>
                            <div>
                                <a href="#!" class="btn btn-primary">Make As Ready To Ship</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Product</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 table-hover table-centered">
                                    <thead class="bg-light-subtle border-bottom">
                                        <tr>
                                            <th>Product Name & Size</th>
                                            <th>Quantity</th>
                                            <th></th>
                                            <th>Price</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $totalAmount = 0;
                                        $hemat = 0;
                                        @endphp
                                        @foreach ($orders->products as $product)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div
                                                        class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                        <img src="{{ asset('storage/' . $product->front_image) }}"
                                                            alt="{{ $product->name }}" class="avatar-md">
                                                    </div>
                                                    <div>
                                                        <a href="#!"
                                                            class="text-dark fw-medium fs-15">{{ $product->name }}</a>
                                                        <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>
                                                            @php
                                                            $purchasedSizeId = $product->pivot->size_id;
                                                            $purchasedSize = $product->sizes->firstWhere('id',
                                                            $purchasedSizeId);
                                                            $subtotal = $product->pivot->harga;
                                                            $totalAmount += $subtotal;
                                                            $hemat += $product->pivot->discount *
                                                            $product->pivot->quantity;
                                                            @endphp
                                                            {{ $purchasedSize->size }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> {{ $product->pivot->quantity }}</td>
                                            <td>x</td>
                                            <td>Rp{{ number_format($product->pivot->harga, 2) }}
                                            </td>
                                            <td>
                                                Rp{{ number_format(($product->pivot->harga * $product->pivot->quantity), 2) }}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Order Timeline</h4>
                        </div>
                        <div class="card-body">
                            <div class="position-relative ms-2">
                                <span class="position-absolute start-0  top-0 border border-dashed h-100"></span>
                                <div class="position-relative ps-4">
                                    <div class="mb-4">
                                        <span
                                            class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle">
                                            <div class="spinner-border spinner-border-sm text-warning" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </span>
                                        <div
                                            class="ms-2 d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                            <div>
                                                <h5 class="mb-1 text-dark fw-medium fs-15">The packing has been started
                                                </h5>
                                                <p class="mb-0">Confirmed by Gaston Lapierre</p>
                                            </div>
                                            <p class="mb-0">April 23, 2024, 09:40 am</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative ps-4">
                                    <div class="mb-4">
                                        <span
                                            class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle text-success fs-20">
                                            <i class='bx bx-check-circle'></i>
                                        </span>
                                        <div
                                            class="ms-2 d-flex flex-wrap gap-2  align-items-center justify-content-between">
                                            <div>
                                                <h5 class="mb-1 text-dark fw-medium fs-15">The Invoice has been sent to
                                                    the customer</h5>
                                                <p class="mb-2">Invoice email was sent to <a href="#!"
                                                        class="link-primary">hello@dundermuffilin.com</a></p>
                                                <a href="#!" class="btn btn-light">Resend Invoice</a>
                                            </div>
                                            <p class="mb-0">April 23, 2024, 09:40 am</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative ps-4">
                                    <div class="mb-4">
                                        <span
                                            class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle text-success fs-20">
                                            <i class='bx bx-check-circle'></i>
                                        </span>
                                        <div
                                            class="ms-2 d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                            <div>
                                                <h5 class="mb-1 text-dark fw-medium fs-15">The Invoice has been created
                                                </h5>
                                                <p class="mb-2">Invoice created by Gaston Lapierre</p>
                                                <a href="#!" class="btn btn-primary">Download Invoice</a>
                                            </div>
                                            <p class="mb-0">April 23, 2024, 09:40 am</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative ps-4">
                                    <div class="mb-4">
                                        <span
                                            class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle text-success fs-20">
                                            <i class='bx bx-check-circle'></i>
                                        </span>
                                        <div
                                            class="ms-2 d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                            <div>
                                                <h5 class="mb-1 text-dark fw-medium fs-15">Order Payment</h5>
                                                <p class="mb-2">Using Master Card</p>
                                                <div class="d-flex align-items-center gap-2">
                                                    <p class="mb-1 text-dark fw-medium">Status :</p>
                                                    <span
                                                        class="badge bg-success-subtle text-success  px-2 py-1 fs-13">Paid</span>
                                                </div>
                                            </div>
                                            <p class="mb-0">April 23, 2024, 09:40 am</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative ps-4">
                                    <div class="mb-2">
                                        <span
                                            class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle text-success fs-20">
                                            <i class='bx bx-check-circle'></i>
                                        </span>
                                        <div
                                            class="ms-2 d-flex flex-wrap gap-2  align-items-center justify-content-between">
                                            <div>
                                                <h5 class="mb-2 text-dark fw-medium fs-15">4 Order conform by Gaston
                                                    Lapierre</h5>
                                                <a href="#!"
                                                    class="badge bg-light text-dark fw-normal  px-2 py-1 fs-13">Order
                                                    1</a>
                                                <a href="#!"
                                                    class="badge bg-light text-dark fw-normal  px-2 py-1 fs-13">Order
                                                    2</a>
                                                <a href="#!"
                                                    class="badge bg-light text-dark fw-normal  px-2 py-1 fs-13">Order
                                                    3</a>
                                                <a href="#!"
                                                    class="badge bg-light text-dark fw-normal  px-2 py-1 fs-13">Order
                                                    4</a>
                                            </div>
                                            <p class="mb-0">April 23, 2024, 09:40 am</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Order Summary</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="px-0">
                                        <p class="d-flex mb-0 align-items-center gap-1">
                                            <iconify-icon icon="solar:clipboard-text-broken"></iconify-icon> Sub Total :
                                        </p>
                                    </td>
                                    <td class="text-end text-dark fw-medium px-0">
                                        Rp{{ number_format($totalAmount, 2) }}</td>
                                </tr>
                                <tr>
                                    <td class="px-0">
                                        <p class="d-flex mb-0 align-items-center gap-1">
                                            <iconify-icon icon="solar:ticket-broken" class="align-middle">
                                            </iconify-icon> Hemat :
                                        </p>
                                    </td>
                                    <td class="text-end text-dark fw-medium px-0">Rp{{ number_format($hemat, 2) }}</td>
                                </tr>
                                <tr>
                                    <td class="px-0">
                                        <p class="d-flex mb-0 align-items-center gap-1">
                                            <iconify-icon icon="solar:kick-scooter-broken" class="align-middle">
                                            </iconify-icon> Delivery Charge :
                                        </p>
                                    </td>
                                    <td class="text-end text-dark fw-medium px-0">{{ number_format($orders->shipping->shipping_cost ?? 0, 2) == 0 ? '-' : number_format($orders->shipping->shipping_cost, 2) }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between bg-light-subtle">
                    <div>
                        <p class="fw-medium text-dark mb-0">Total Amount</p>
                    </div>
                    <div>
                        <p class="fw-medium text-dark mb-0"> Rp{{ number_format($orders->total_amount, 2) }}</p>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Payment Information</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div>
                            <p class="mb-1 text-dark fw-medium">{{ strtoupper($orders->payment_method) }}
                         </p>
                        </div>
                        <div class="ms-auto">
                            <iconify-icon icon="solar:check-circle-broken" class="fs-22 text-success"></iconify-icon>
                        </div>
                    </div>
                    <p class="text-dark mb-1 fw-medium">Invoice Code : <span class="text-muted fw-normal fs-13">
                    #{{ $orders->invoice->invoice_number }}</span></p>
                    @if ($orders->payment_method == 'cash')
                        
                    @else
                    <p class="text-dark mb-0 fw-medium">Proof of payment
                        : <a class="btn btn-sm"><iconify-icon icon="solar:eye-scan-bold" class="fs-4 text-success"></iconify-icon>
                        </a></p>
                    @endif
                </div>
            </div>
            @if($orders->alamat)
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Customer Details</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center gap-2">
                        @if($user->images)
                        <img src="{{ asset('storage/' . $orders->$user->images) }}" alt=""
                        class="avatar rounded-3 border border-light border-3">
                        @else
                        <img src="{{ asset('/backend/assets/images/blank-profile.png') }}"
                            alt="Default Profile Image" class="avatar rounded-3 border border-light border-3">
                        @endif
                       
                        <div>
                            <p class="mb-1">{{ $orders->user->name }}</p>
                            <a href="#!" class="link-primary fw-medium">{{$orders->user->email}}</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <h5 class="">Recipient</h5>
                    </div>
                    <p class="mb-1">{{ $orders->alamat->penerima }}</p>
                    <div class="d-flex justify-content-between mt-3">
                        <h5 class="">Contact Number</h5>
                    </div>
                    <p class="mb-1">{{ $orders->alamat->no_telp }}</p>

                    <div class="d-flex justify-content-between mt-3">
                        <h5 class="">Shipping Address</h5>
                    </div>

                    <div>
                        <p class="mb-1">{{ $orders->alamat->street }}</p>
                        <p class="mb-1">{{ $orders->alamat->city->name }} , {{ $orders->alamat->province->name }}</p>
                        <p class="mb-1">Indonesia</p>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
