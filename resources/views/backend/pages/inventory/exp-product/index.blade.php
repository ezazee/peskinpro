@extends('backend.master.master-app')
@section('title', 'Expired Product')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1">
                        <h4 class="card-title flex-grow-1">All Most Expired Product</h4>

                        <form action="{{ route('product.list') }}" method="GET" class="d-flex align-items-center me-2">
                            <input type="text" name="query" class="form-control form-control-sm"
                                placeholder="Search Products..." value="{{ request('query') }}">
                            <button type="submit" class="btn btn-sm btn-outline-secondary ms-1">Search</button>
                        </form>
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
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer border-top">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end mb-0">

                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
