@extends('backend.master.master-app')
@section('title', 'List Customers')
@section('content')
<div class="container-xxl">

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div class="avatar-md bg-primary bg-opacity-10 rounded">
                            <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"
                                class="fs-32 text-primary avatar-title"></iconify-icon>
                        </div>
                        <div>
                            <h4 class="mb-0">All Customers</h4>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="text-muted fw-medium fs-22 mb-0">{{ $totalcustomers }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div class="avatar-md bg-primary bg-opacity-10 rounded">
                            <iconify-icon icon="solar:box-bold-duotone" class="fs-32 text-primary avatar-title">
                            </iconify-icon>
                        </div>
                        <div>
                            <h4 class="mb-0">Orders</h4>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="text-muted fw-medium fs-22 mb-0">+4.5k</p>
                        <div>
                            <span class="badge text-danger bg-danger-subtle fs-12"><i
                                    class="bx bx-down-arrow-alt"></i>8.1%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div class="avatar-md bg-primary bg-opacity-10 rounded">
                            <iconify-icon icon="solar:headphones-round-sound-bold-duotone"
                                class="fs-32 text-primary avatar-title"></iconify-icon>
                        </div>
                        <div>
                            <h4 class="mb-0">Services Request</h4>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="text-muted fw-medium fs-22 mb-0">+1.03k</p>
                        <div>
                            <span class="badge text-success bg-success-subtle fs-12"><i
                                    class="bx bx-up-arrow-alt"></i>12.6%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div class="avatar-md bg-primary bg-opacity-10 rounded">
                            <iconify-icon icon="solar:bill-list-bold-duotone" class="fs-32 text-primary avatar-title">
                            </iconify-icon>
                        </div>
                        <div>
                            <h4 class="mb-0">Invoice & Payment</h4>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="text-muted fw-medium fs-22 mb-0">$38,908.00</p>
                        <div>
                            <span class="badge text-success bg-success-subtle fs-12"><i
                                    class="bx bx-up-arrow-alt"></i>45.9%</span>
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
                        <h4 class="card-title">All Customers List</h4>
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
                <div>
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 table-hover table-centered">
                            <thead class="bg-light-subtle">
                                <tr>
                                    <th style="width: 20px;">
                                        No
                                    </th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Province</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index => $item)
                                <tr>
                                    <td>
                                        {{ $index+1 }}
                                    </td>
                                    <td>
                                        @if($item->images)
                                        <img src="{{ asset('storage/' . $item->images) }}"
                                            class="avatar-sm rounded-circle me-2" alt="...">{{ $item->name }}
                                        @else
                                        <img src="{{ asset('/backend/assets/images/blank-profile.png') }}"
                                            class="avatar-sm rounded-circle me-2" alt="...">{{ $item->name }}
                                        @endif
                                    </td>
                                    <td>{{ $item->email }}</td>
                                    <td> {{ $item->no_telp }} </td>
                                    @foreach ($item->alamat as $alam)
                                    <td> {{ $alam->street }} </td>
                                    <td> {{ $alam->city->name ?? 'N/A' }} </td>
                                    <td> {{ $alam->province->name ?? 'N/A' }} </td>
                                    @endforeach
                                    <td>
                                        @if ($item->status == 'active')
                                        <span class="badge bg-success-subtle text-success py-1 px-2">Active</span>
                                        @else
                                        <span class="badge bg-danger-subtle text-danger py-1 px-2">In Active</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a class="btn btn-light btn-sm" data-bs-toggle="modal"
                                            href="#exampleModalToggle-{{ $item->slug }}" role="button">
                                            <iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                        </a>
                                        <div class="modal fade" id="exampleModalToggle-{{ $item->slug }}" aria-hidden="true"
                                            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalToggleLabel">Detail Customers
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">First Name</label>
                                                                    <input type="text" name="first_name"
                                                                        class="form-control"
                                                                        value="{{ $item->first_name }}" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Last Name</label>
                                                                    <input type="text" name="last_name" class="form-control"
                                                                        value="{{ $item->last_name }}" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="role-tag" class="form-label">Email</label>
                                                                    <input type="email" name="email" class="form-control"
                                                                        value="{{ $item->email }}" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="role-tag" class="form-label">Phone Number</label>
                                                                    <input type="email" class="form-control"
                                                                        value="{{ $item->no_telp }}" readonly>
                                                                </div>
                                                            </div>
                                                            @foreach ($item->alamat as $amat)
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Province</label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $amat->province->name }}" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">City</label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $amat->city->name }}" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Address</label>
                                                                    <textarea class="form-control bg-light-subtle" rows="5" readonly>{{ $amat->street }}</textarea>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            <div class="col-lg-6">
                                                                <p>User Status : 
                                                                    @if ($item->status == 'active')
                                                                    <span class="badge bg-success-subtle text-success py-1 px-2">Active</span>
                                                                    @else
                                                                    <span class="badge bg-danger-subtle text-danger py-1 px-2">In Active</span>
                                                                    @endif
                                                                </p>
                                                            </div>
                                                            <div class="text-end">
                                                                <p class="small mb-0">Created at: {{ $item->created_at }}</p>
                                                            </div>                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <a href="{{ route('users.edit_admin', $item->slug) }}"
                                                class="btn btn-soft-primary btn-sm">
                                                <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18">
                                                </iconify-icon>
                                            </a>
                                            <form action="{{ route('users.destroy', $item->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this users?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn btn-soft-danger btn-sm">
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
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
