@extends('backend.master.master-app')
@section('title', 'Create Order Stock')
@section('content')
    <div class="container-xxl">
        <form method="#" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xl-12 col-lg-8">
                    <div class="card">
                        <table class="table mb-0">
                            <thead class="bg-light bg-opacity-50">
                                <tr>
                                    <th class="border-0 py-2">Product Name</th>
                                    <th class="border-0 py-2">Stock Quantity</th>
                                    <th class="border-0 py-2">Amount Price</th>
                                    <th class="border-0 py-2">Category</th>
                                    <th class="border-0 py-2">Date of Order</th>
                                    <th class="border-0 py-2">Expired Product</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex gap-3">
                                            <select id="product-product" class="form-select">
                                                <option value="">Select Product</option>
                                                <option value="peskinpro1">peskinpro1</option>
                                                <option value="peskinpro2">peskinpro2</option>
                                                <option value="peskinpro3">peskinpro3</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="quantity">
                                            <div
                                                class="input-step border bg-body-secondary p-1 rounded d-inline-flex overflow-visible">
                                                <button type="button"
                                                    class="minus bg-light text-dark border-0 rounded-1 fs-20 lh-1 h-100">
                                                    -
                                                </button>
                                                <input type="number"
                                                    class="text-dark text-center border-0 bg-body-secondary rounded h-100"
                                                    value="1" min="0" max="100" readonly="" />
                                                <button type="button"
                                                    class="plus bg-light text-dark border-0 rounded-1 fs-20 lh-1 h-100">
                                                    +
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text fs-15 bg-light text-dark">Rp.</i></span>
                                            <input type="number" id="product-price" class="form-control"
                                                placeholder="5452451">
                                        </div>
                                    </td>
                                    <td>
                                        <select id="product-category" class="form-select">
                                            <option value="">Select Category</option>
                                            <option value="peskinpro1">peskinpro1</option>
                                            <option value="peskinpro2">peskinpro2</option>
                                            <option value="peskinpro3">peskinpro3</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="date" name="start_date" class="form-control"
                                            value="{{ request('start_date') }}">
                                    </td>
                                    <td class="">
                                        <input type="date" name="expired_date" class="form-control"
                                            value="{{ request('expired_date') }}">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="card-footer border-top d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-primary">
                                Submit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
