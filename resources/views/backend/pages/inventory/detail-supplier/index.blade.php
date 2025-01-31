@extends('backend.master.master-app')
@section('title', 'Detail Supplier')

@section('content')
    <div class="container-xxl">
        <div class="row">
            <div class="col-lg-4">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="bg-primary profile-bg rounded-top p-5 position-relative mx-n3 mt-n3">
                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                                alt=""
                                class="avatar-lg border border-light border-3 rounded-circle position-absolute top-100 start-0 translate-middle ms-5" />
                        </div>
                        <div class="mt-4 pt-3">
                            <h4 class="mb-1">
                                Supplier Name / Company Name <i class="bx bxs-badge-check text-success align-middle"></i>
                            </h4>
                        </div>
                    </div>
                    <div class="card-body py-2">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td class="px-0">
                                            <p class="d-flex mb-0 align-items-center gap-1 fw-semibold text-dark">
                                                Name :
                                            </p>
                                        </td>
                                        <td class="text-dark fw-medium px-0">Rispet</td>
                                    </tr>
                                    <tr>
                                        <td class="px-0">
                                            <p class="d-flex mb-0 align-items-center gap-1 fw-semibold text-dark">
                                                Email :
                                            </p>
                                        </td>
                                        <td class="text-dark fw-medium px-0">
                                            rispet@email.com
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-0">
                                            <p class="d-flex mb-0 align-items-center gap-1 fw-semibold text-dark">
                                                Phone :
                                            </p>
                                        </td>
                                        <td class="text-dark fw-medium px-0">
                                            +72 123 456 789
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-0">
                                            <p class="d-flex mb-0 align-items-center gap-1 fw-semibold text-dark">
                                                Address :
                                            </p>
                                        </td>
                                        <td class="text-dark fw-medium px-0">rue des Nations Unies 22000 SAINT-BRIEUC</td>
                                    </tr>
                                    <tr>
                                        <td class="px-0">
                                            <p class="d-flex mb-0 align-items-center gap-1 fw-semibold text-dark">
                                                Last Order :
                                            </p>
                                        </td>
                                        <td class="text-dark fw-medium px-0">12-10-2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
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
                    <div class="col-lg-6">
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
                </div>

                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Transaction History</h4>
                        <button class="btn btn-primary">View All</button>
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
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer border-top">
                        <ul class="pagination pagination-rounded m-0 justify-content-end">
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
