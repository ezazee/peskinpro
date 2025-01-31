@extends('backend.master.master-app')
@section('title', 'List Stock')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1">
                        <h4 class="card-title flex-grow-1">All Product List</h4>

                        <form action="{{ route('product.list') }}" method="GET" class="d-flex align-items-center me-2">
                            <input type="text" name="query" class="form-control form-control-sm"
                                placeholder="Search Products..." value="{{ request('query') }}">
                            <button type="submit" class="btn btn-sm btn-outline-secondary ms-1">Search</button>
                        </form>

                        <a href="{{ route('listStock.create') }}" class="btn btn-sm btn-primary">
                            Add Product
                        </a>
                    </div>

                    <div>
                        <div class="table-responsive">
                            <table class="table align-middle mb-0 table-hover table-centered">
                                <thead class="bg-light-subtle">
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="form-check ms-1">
                                                No
                                            </div>
                                        </th>
                                        <th>Product Name</th>
                                        <th>Date Of Order</th>
                                        <th>Stock</th>
                                        <th>Category</th>
                                        <th>Expired</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check ms-1">
                                                1
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <a href="#!" class="text-dark fw-medium fs-15">Honey Cleansing
                                                        Gel</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="mb-1 text-muted"><span class="text-dark fw-medium">10-04-2024
                                        </td>
                                        <td class="mb-1 text-muted"><span class="text-dark fw-medium">1000
                                        </td>
                                        <td>
                                            <p class="mb-1 text-muted"><span class="text-dark fw-medium">Facial Care</span>
                                            </p>
                                        </td>
                                        <td>01-04-2025</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a class="btn btn-light btn-sm" data-bs-toggle="modal"
                                                    href="#exampleModalToggle" role="button">
                                                    <iconify-icon icon="solar:eye-broken"
                                                        class="align-middle fs-18"></iconify-icon>
                                                </a>
                                                <a href="{{ route('listStock.edit') }}"
                                                    class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:pen-2-broken"
                                                        class="align-middle fs-18"></iconify-icon></a>
                                                <form action="#" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this product?');">
                                                    <button type="submit" class="btn btn btn-danger btn-sm"><iconify-icon
                                                            icon="solar:trash-bin-minimalistic-2-broken"
                                                            class="align-middle fs-18"></iconify-icon></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check ms-1">
                                                2
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <a href="#!" class="text-dark fw-medium fs-15">CICA-B5 Refreshing
                                                        Toner</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="mb-1 text-muted"><span class="text-dark fw-medium">10-04-2024
                                        </td>
                                        <td class="mb-1 text-muted"><span class="text-dark fw-medium">1000
                                        </td>
                                        <td>
                                            <p class="mb-1 text-muted"><span class="text-dark fw-medium">Facial Care</span>
                                            </p>
                                        </td>
                                        <td>01-04-2025</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a class="btn btn-light btn-sm" data-bs-toggle="modal"
                                                    href="#exampleModalToggle" role="button">
                                                    <iconify-icon icon="solar:eye-broken"
                                                        class="align-middle fs-18"></iconify-icon>
                                                </a>
                                                <a href="{{ route('listStock.edit') }}"
                                                    class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:pen-2-broken"
                                                        class="align-middle fs-18"></iconify-icon></a>
                                                <form action="#" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this product?');">
                                                    <button type="submit" class="btn btn btn-danger btn-sm"><iconify-icon
                                                            icon="solar:trash-bin-minimalistic-2-broken"
                                                            class="align-middle fs-18"></iconify-icon></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check ms-1">
                                                3
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <a href="#!" class="text-dark fw-medium fs-15">Skin Awakening Glow
                                                        Serum</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="mb-1 text-muted"><span class="text-dark fw-medium">10-04-2024
                                        </td>
                                        <td class="mb-1 text-muted"><span class="text-dark fw-medium">1000
                                        </td>
                                        <td>
                                            <p class="mb-1 text-muted"><span class="text-dark fw-medium">Facial Care</span>
                                            </p>
                                        </td>
                                        <td>01-04-2025</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a class="btn btn-light btn-sm" data-bs-toggle="modal"
                                                    href="#exampleModalToggle" role="button">
                                                    <iconify-icon icon="solar:eye-broken"
                                                        class="align-middle fs-18"></iconify-icon>
                                                </a>
                                                <a href="{{ route('listStock.edit') }}"
                                                    class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:pen-2-broken"
                                                        class="align-middle fs-18"></iconify-icon></a>
                                                <form action="#" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this product?');">
                                                    <button type="submit" class="btn btn btn-danger btn-sm"><iconify-icon
                                                            icon="solar:trash-bin-minimalistic-2-broken"
                                                            class="align-middle fs-18"></iconify-icon></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check ms-1">
                                                4
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <a href="#!" class="text-dark fw-medium fs-15">Prebiotic Pore-EX
                                                        Pad</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="mb-1 text-muted"><span class="text-dark fw-medium">10-04-2024
                                        </td>
                                        <td class="mb-1 text-muted"><span class="text-dark fw-medium">1000
                                        </td>
                                        <td>
                                            <p class="mb-1 text-muted"><span class="text-dark fw-medium">Facial
                                                    Care</span>
                                            </p>
                                        </td>
                                        <td>01-04-2025</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a class="btn btn-light btn-sm" data-bs-toggle="modal"
                                                    href="#exampleModalToggle" role="button">
                                                    <iconify-icon icon="solar:eye-broken"
                                                        class="align-middle fs-18"></iconify-icon>
                                                </a>
                                                <a href="{{ route('listStock.edit') }}"
                                                    class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:pen-2-broken"
                                                        class="align-middle fs-18"></iconify-icon></a>
                                                <form action="#" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this product?');">
                                                    <button type="submit" class="btn btn btn-danger btn-sm"><iconify-icon
                                                            icon="solar:trash-bin-minimalistic-2-broken"
                                                            class="align-middle fs-18"></iconify-icon></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check ms-1">
                                                5
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <a href="#!" class="text-dark fw-medium fs-15">Hydro Restorative
                                                        Cream</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="mb-1 text-muted"><span class="text-dark fw-medium">10-04-2024
                                        </td>
                                        <td class="mb-1 text-muted"><span class="text-dark fw-medium">1000
                                        </td>
                                        <td>
                                            <p class="mb-1 text-muted"><span class="text-dark fw-medium">Facial
                                                    Care</span>
                                            </p>
                                        </td>
                                        <td>01-04-2025</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a class="btn btn-light btn-sm" data-bs-toggle="modal"
                                                    href="#exampleModalToggle" role="button">
                                                    <iconify-icon icon="solar:eye-broken"
                                                        class="align-middle fs-18"></iconify-icon>
                                                </a>
                                                <a href="{{ route('listStock.edit') }}"
                                                    class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:pen-2-broken"
                                                        class="align-middle fs-18"></iconify-icon></a>
                                                <form action="#" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this product?');">
                                                    <button type="submit" class="btn btn btn-danger btn-sm"><iconify-icon
                                                            icon="solar:trash-bin-minimalistic-2-broken"
                                                            class="align-middle fs-18"></iconify-icon></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check ms-1">
                                                6
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <a href="#!" class="text-dark fw-medium fs-15">VIT-C Tone Up
                                                        Cream SPF50</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="mb-1 text-muted"><span class="text-dark fw-medium">10-04-2024
                                        </td>
                                        <td class="mb-1 text-muted"><span class="text-dark fw-medium">1000
                                        </td>
                                        <td>
                                            <p class="mb-1 text-muted"><span class="text-dark fw-medium">Facial
                                                    Care</span>
                                            </p>
                                        </td>
                                        <td>01-04-2025</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a class="btn btn-light btn-sm" data-bs-toggle="modal"
                                                    href="#exampleModalToggle" role="button">
                                                    <iconify-icon icon="solar:eye-broken"
                                                        class="align-middle fs-18"></iconify-icon>
                                                </a>
                                                <a href="{{ route('listStock.edit') }}"
                                                    class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:pen-2-broken"
                                                        class="align-middle fs-18"></iconify-icon></a>
                                                <form action="#" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this product?');">
                                                    <button type="submit" class="btn btn btn-danger btn-sm"><iconify-icon
                                                            icon="solar:trash-bin-minimalistic-2-broken"
                                                            class="align-middle fs-18"></iconify-icon></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check ms-1">
                                                7
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <a href="#!" class="text-dark fw-medium fs-15">Prebiotic Feminine
                                                        Mousse Cleanser</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="mb-1 text-muted"><span class="text-dark fw-medium">10-04-2024
                                        </td>
                                        <td class="mb-1 text-muted"><span class="text-dark fw-medium">1000
                                        </td>
                                        <td>
                                            <p class="mb-1 text-muted"><span class="text-dark fw-medium">Facial
                                                    Care</span>
                                            </p>
                                        </td>
                                        <td>01-04-2025</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a class="btn btn-light btn-sm" data-bs-toggle="modal"
                                                    href="#exampleModalToggle" role="button">
                                                    <iconify-icon icon="solar:eye-broken"
                                                        class="align-middle fs-18"></iconify-icon>
                                                </a>
                                                <a href="{{ route('listStock.edit') }}"
                                                    class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:pen-2-broken"
                                                        class="align-middle fs-18"></iconify-icon></a>
                                                <form action="#" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this product?');">
                                                    <button type="submit" class="btn btn btn-danger btn-sm"><iconify-icon
                                                            icon="solar:trash-bin-minimalistic-2-broken"
                                                            class="align-middle fs-18"></iconify-icon></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                                aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalToggleLabel">Honey Cleansing Gel</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Here you can add details about the Honey Cleansing Gel. Include ingredients,
                                                usage instructions, and any other relevant information.</p>
                                            <table class="table table-bordered mt-3">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Date of Order</th>
                                                        <th>Expired</th>
                                                        <th>Total Stock</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>01</td>
                                                        <td>01 Jan 2025</td>
                                                        <td>01 Jan 2026</td>
                                                        <td>150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>02</td>
                                                        <td>01 Jan 2025</td>
                                                        <td>01 Jan 2026</td>
                                                        <td>150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>03</td>
                                                        <td>01 Jan 2025</td>
                                                        <td>01 Jan 2026</td>
                                                        <td>150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>04</td>
                                                        <td>01 Jan 2025</td>
                                                        <td>01 Jan 2026</td>
                                                        <td>150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05</td>
                                                        <td>01 Jan 2025</td>
                                                        <td>01 Jan 2026</td>
                                                        <td>150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>06</td>
                                                        <td>01 Jan 2025</td>
                                                        <td>01 Jan 2026</td>
                                                        <td>150</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
