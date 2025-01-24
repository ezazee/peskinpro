@extends('backend.master.master-app')
@section('title', 'Transaction History')

@section('content')
    <div class="container-xxl">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="card-title mb-2 d-flex align-items-center gap-2">
                                            Total Transaction
                                        </h4>
                                        <p class="text-muted fw-medium fs-22 mb-0">234</p>
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
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="card-title mb-2 d-flex align-items-center gap-2">
                                            Total Product Purchased
                                        </h4>
                                        <p class="text-muted fw-medium fs-22 mb-0">219</p>
                                    </div>
                                    <div>
                                        <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                            <iconify-icon icon="solar:box-bold-duotone"
                                                class="fs-32 text-primary avatar-title"></iconify-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="card-title mb-2 d-flex align-items-center gap-2">
                                            Total Expense
                                        </h4>
                                        <p class="text-muted fw-medium fs-22 mb-0">
                                            Rp.2,189
                                        </p>
                                    </div>
                                    <div>
                                        <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                            <iconify-icon icon="solar:chat-round-money-bold-duotone"
                                                class="fs-32 text-primary avatar-title"></iconify-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Transaction History</h4>
                        <a href="#" class="btn btn-sm btn-primary">
                            Add Transaction
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0 table-hover table-centered">
                                <thead class="bg-light-subtle">
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Date Order</th>
                                        <th>Product Name</th>
                                        <th>Total Stock</th>
                                        <th>Total Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="javascript: void(0);" class="text-body">#INV2540</a>
                                        </td>
                                        <td>
                                            05-21-2024
                                        </td>
                                        <td>Honey Cleansing Gel</td>
                                        <td>3000</td>
                                        <td>Rp.15.000.000</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="{{ route('transactionHistory.detail') }}" class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript: void(0);" class="text-body">#INV2540</a>
                                        </td>
                                        <td>
                                            05-21-2024
                                        </td>
                                        <td>Honey Cleansing Gel</td>
                                        <td>3000</td>
                                        <td>Rp.15.000.000</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#" class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript: void(0);" class="text-body">#INV2540</a>
                                        </td>
                                        <td>
                                            05-21-2024
                                        </td>
                                        <td>Honey Cleansing Gel</td>
                                        <td>3000</td>
                                        <td>Rp.15.000.000</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#" class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript: void(0);" class="text-body">#INV2540</a>
                                        </td>
                                        <td>
                                            05-21-2024
                                        </td>
                                        <td>Honey Cleansing Gel</td>
                                        <td>3000</td>
                                        <td>Rp.15.000.000</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#" class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript: void(0);" class="text-body">#INV2540</a>
                                        </td>
                                        <td>
                                            05-21-2024
                                        </td>
                                        <td>Honey Cleansing Gel</td>
                                        <td>3000</td>
                                        <td>Rp.15.000.000</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#" class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript: void(0);" class="text-body">#INV2540</a>
                                        </td>
                                        <td>
                                            05-21-2024
                                        </td>
                                        <td>Honey Cleansing Gel</td>
                                        <td>3000</td>
                                        <td>Rp.15.000.000</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#" class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript: void(0);" class="text-body">#INV2540</a>
                                        </td>
                                        <td>
                                            05-21-2024
                                        </td>
                                        <td>Honey Cleansing Gel</td>
                                        <td>3000</td>
                                        <td>Rp.15.000.000</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#" class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript: void(0);" class="text-body">#INV2540</a>
                                        </td>
                                        <td>
                                            05-21-2024
                                        </td>
                                        <td>Honey Cleansing Gel</td>
                                        <td>3000</td>
                                        <td>Rp.15.000.000</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#" class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript: void(0);" class="text-body">#INV2540</a>
                                        </td>
                                        <td>
                                            05-21-2024
                                        </td>
                                        <td>Honey Cleansing Gel</td>
                                        <td>3000</td>
                                        <td>Rp.15.000.000</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#" class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript: void(0);" class="text-body">#INV2540</a>
                                        </td>
                                        <td>
                                            05-21-2024
                                        </td>
                                        <td>Honey Cleansing Gel</td>
                                        <td>3000</td>
                                        <td>Rp.15.000.000</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#" class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer border-top d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-primary">
                            Export All
                        </a>
                        <ul class="pagination pagination-rounded m-0">
                            <li class="page-item">
                                <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
