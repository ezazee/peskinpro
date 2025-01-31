@extends('backend.master.master-app')
@section('title', 'Create Transaction History')

@section('content')
    <div class="container-xxl">
        <form enctype="multipart/form-data">
            <div class="row">
                <div class="col-xl-12 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Transactions</h4>
                        </div>
                        <div class="card-body">
                            <!-- Product Details -->
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Product Name</label>
                                        <select class="form-control" name="category_id" id="product-name" data-choices
                                            data-choices-groups data-placeholder="Select Categories" required>
                                            <option value="">Choose a category</option>
                                            <option value="peskinpro1">peskinpro1</option>
                                            <option value="peskinpro2">peskinpro2</option>
                                            <option value="peskinpro3">peskinpro3</option>
                                            <option value="323swdasdas">323swdasdas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label for="product-stock" class="form-label">Stock</label>
                                        <input type="number" name="stock[]" class="form-control" placeholder="Quantity"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label class="form-label">Date Of Order</label>
                                        <input type="date" name="start_date" class="form-control"
                                            value="{{ request('start_date') }}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label class="form-label">Expired Product</label>
                                    <input type="date" name="start_date" class="form-control"
                                        value="{{ request('start_date') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
