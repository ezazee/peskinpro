@extends('backend.master.master-app')
@section('title', 'Coupons List')
@section('content')

<div class="container-xxl">
    <div class="row">
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
                <div class="card-header d-flex justify-content-between align-items-center gap-1">
                    <h4 class="card-title flex-grow-1">All Coupons List</h4>

                    <form action="" method="" class="d-flex align-items-center me-2">
                        <input type="text" name="query" class="form-control form-control-sm" placeholder="Search Products...">
                        <button type="submit" class="btn btn-sm btn-outline-secondary ms-1">Search</button>
                    </form>

                    <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary">
                        Add Product
                    </a>
                </div>
                <div>
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 table-hover table-centered">
                            <thead class="bg-light-subtle">
                                <tr>
                                    <th style="width: 20px;">
                                        No
                                    </th>
                                    <th>Coupons Code</th>
                                    <th>Discount Products</th>
                                    <th>Coupons Types</th>
                                    <th>Coupons Limits</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Discount Value</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupons as $index => $item)
                                <tr>
                                    <td>
                                        {{ $index+1 }}
                                    </td>
                                    <td>
                                        {{ $item->coupons_code }}
                                    </td>
                                    <td>{{ $item->product }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->limits }}</td>
                                    <td>{{ $item->start_date }}</td>
                                    <td>{{ $item->end_date }}</td>
                                    @if ($item->type == 'freeshiping')
                                    <td>{{ $item->jumlah }}</td>
                                    @elseif( $item->type == 'percentage' )
                                    <td>{{ $item->jumlah }} %</td>
                                    @else
                                    <td>{{ $item->jumlah }}</td>
                                    @endif
                                    <td>
                                        @if ($item->status == 'active')
                                        <span class="badge text-success bg-success-subtle fs-12"><i
                                                class="bx bx-check-double"></i>{{ $item->status }}</span>
                                        @else
                                        <span class="badge text-danger bg-danger-subtle fs-12"><i
                                                class="bx bx-x"></i>Expired</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="#!" class="btn btn-light btn-sm">
                                                <iconify-icon icon="solar:eye-broken" class="align-middle fs-18">
                                                </iconify-icon>
                                            </a>
                                            <a href="#!" class="btn btn-soft-primary btn-sm">
                                                <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18">
                                                </iconify-icon>
                                            </a>
                                            <form action="{{ route('coupons.destroy', $item->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this coupons?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn btn-danger btn-sm">
                                                    <iconify-icon icon="solar:trash-bin-minimalistic-2-broken"
                                                        class="align-middle fs-18"></iconify-icon>
                                                </button>
                                            </form>
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
                            {{ $coupons->onEachSide(1)->links('pagination::bootstrap-5') }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
