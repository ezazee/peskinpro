@extends('backend.master.master-app')
@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid">

        <!-- Start here.... -->
        <div class="row">
            <div class="col-xxl-5">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-primary text-black mb-3" role="alert">
                            👋 Welcome To PE Skin Professional Dashboard
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-md bg-soft-primary rounded">
                                            <iconify-icon icon="solar:cart-5-bold-duotone"
                                                class="avatar-title fs-32 text-primary"></iconify-icon>
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-6 text-end">
                                        <p class="text-muted mb-0 text-truncate">Total Orders</p>
                                        <h3 class="text-dark mt-1 mb-0">13, 647</h3>
                                    </div> <!-- end col -->
                                </div> <!-- end row-->
                            </div> <!-- end card body -->
                            <div class="card-footer py-2 bg-light bg-opacity-50">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                </div>
                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                    <div class="col-md-6">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-md bg-soft-primary rounded">
                                            <i class="bx bx-award avatar-title fs-24 text-primary"></i>
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-6 text-end">
                                        <p class="text-muted mb-0 text-truncate">New Product</p>
                                        <h3 class="text-dark mt-1 mb-0">540</h3>
                                    </div> <!-- end col -->
                                </div> <!-- end row-->
                            </div> <!-- end card body -->
                            <div class="card-footer py-2 bg-light bg-opacity-50">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                </div>
                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                    <div class="col-md-6">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-md bg-soft-primary rounded">
                                            <i class="bx bxs-backpack avatar-title fs-24 text-primary"></i>
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-6 text-end">
                                        <p class="text-muted mb-0 text-truncate">Deals</p>
                                        <h3 class="text-dark mt-1 mb-0">976</h3>
                                    </div> <!-- end col -->
                                </div> <!-- end row-->
                            </div> <!-- end card body -->
                            <div class="card-footer py-2 bg-light bg-opacity-50">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                </div>
                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                    <div class="col-md-6">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-md bg-soft-primary rounded">
                                            <i class="bx bx-dollar-circle avatar-title text-primary fs-24"></i>
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-6 text-end">
                                        <p class="text-muted mb-0 text-truncate">Booked Revenue</p>
                                        <h3 class="text-dark mt-1 mb-0">$123.6k</h3>
                                    </div> <!-- end col -->
                                </div> <!-- end row-->
                            </div> <!-- end card body -->
                            <div class="card-footer py-2 bg-light bg-opacity-50">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                </div>
                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end col -->

            <div class="col-xxl-7">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Visitors</h4>
                            <div>
                                <button type="button" class="btn btn-sm btn-outline-light">ALL</button>
                                <button type="button" class="btn btn-sm btn-outline-light">1M</button>
                                <button type="button" class="btn btn-sm btn-outline-light">6M</button>
                                <button type="button" class="btn btn-sm btn-outline-light active">1Y</button>
                            </div>
                        </div> <!-- end card-title-->

                        <div dir="ltr">
                            <div id="dash-performance-chart" class="apex-charts"></div>
                        </div>
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="card-title">
                                Order History
                            </h4>

                            {{-- <a href="#!" class="btn btn-sm btn-soft-primary">
                                <i class="bx bx-plus me-1"></i>Create Order
                            </a> --}}
                        </div>
                    </div>
                    <!-- end card body -->
                    <div class="table-responsive table-centered">
                        <table class="table mb-0">
                            <thead class="bg-light bg-opacity-50">
                                <tr>
                                    <th class="ps-3">
                                        Order Number.
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                    <th>
                                        Product
                                    </th>
                                    <th>
                                        Customer Name
                                    </th>
                                    <th>
                                        Email ID
                                    </th>
                                    <th>
                                        Phone No.
                                    </th>
                                    <th>
                                        Address
                                    </th>
                                    <th>
                                        Payment Type
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <!-- end thead-->
                            <tbody>
                                @foreach ($orders as $item)
                                <tr>
                                    <td class="ps-3">
                                        <a href="{{ route('orders.detail',['orderNumber' => $item->order_number]) }}">#{{ $item->order_number }}</a>
                                    </td>
                                    <td>{{ $item->created_at->format('d F Y') }}</td>
                                    <td>
                                        @if ($item->products->isNotEmpty())
                                        @php
                                            $firstProduct = $item->products->first();
                                            $firstSize = $firstProduct->sizes->first(); 
                                        @endphp
                                        <img src="{{ asset('storage/' . $firstProduct->front_image) }}"
                                            alt="product-1(1)" class="img-fluid avatar-sm">
                                            @if ($item->products->count() > 1)
                                                <span class="product_tag caption1 text-primary">Lainnya ..</span>
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                       {{ $item->alamat->penerima ?? '-' }}
                                    </td>
                                    <td>{{ $item->user->email }}</td>
                                    <td> {{ $item->alamat->no_telp ?? '-' }}</td>
                                    <td>{{ $item->alamat->street ?? '-' }}</td>
                                    <td>{{ strtoupper($item->payment_method) }}</td>
                                    <td>
                                        @if ($item->status == 'pending')
                                        <i class="bx bxs-circle text-secondary me-1"></i>Pending
                                        @elseif ($item->status == 'processing')
                                        <i class="bx bxs-circle text-warning me-1"></i>Processing
                                        @elseif ($item->status == 'completed')
                                        <i class="bx bxs-circle text-success me-1"></i>Completed
                                        @elseif ($item->status == 'shipping')
                                        <i class="bx bxs-circle text-light me-1"></i>shipping
                                        @else
                                        <i class="bx bxs-circle text-danger me-1"></i>Canceled
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <!-- end tbody -->
                        </table>
                        <!-- end table -->
                    </div>
                    <!-- table responsive -->

                    <div class="card-footer border-top">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end mb-0">
                                {{ $orders->onEachSide(1)->links('pagination::bootstrap-5') }}
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div> <!-- end row -->

    </div>
@endsection
