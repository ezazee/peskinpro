@extends('backend.master.master-app')
@section('title', 'Add Coupons')
@section('content')

<div class="container-xxl">
    <form action="{{ route('coupons.add') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Coupon Status</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="active"
                                            checked=''>
                                        <label class="form-check-label">
                                            Active
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" value="inactive">
                                    <label class="form-check-label">
                                        In Active
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Date Schedule</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="start-date" class="form-label text-dark">Start Date</label>
                            <input type="date" name="start_date" class="form-control flatpickr-input active"
                                placeholder="dd-mm-yyyy">
                        </div>
                        <div class="mb-3">
                            <label for="end-date" class="form-label text-dark">End Date</label>
                            <input type="date" name="end_date" class="form-control flatpickr-input active"
                                placeholder="dd-mm-yyyy">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Coupon Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="coupons-code" class="form-label">Coupons Code</label>
                                    <input type="text" id="coupons-code" name="coupons_code" class="form-control"
                                        placeholder="Enter Code">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label for="product-categories" class="form-label">Discount Products</label>
                                <select class="form-control" name="product"  data-choices data-choices-groups required>
                                    <option value="">Choose a category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="coupons-limits" class="form-label">Coupons Limits</label>
                                    <input type="number" name="limits" class="form-control"
                                        placeholder="limits nu">
                                </div>
                            </div>
                        </div>
                        <h4 class="card-title mb-3 mt-2">Coupons Types</h4>
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="type" value="freeshiping"
                                            checked=''>
                                        <label class="form-check-label">
                                            Free Shipping
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" value="percentage">
                                    <label class="form-check-label" >
                                        Percentage
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" value="fix-amount">
                                    <label class="form-check-label">
                                        Fixed Amount
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <label class="form-label">Discount Value</label>
                                    <input type="text" name="jumlah" class="form-control"
                                        placeholder="value enter">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-top">
                        <button class="btn btn-primary" type="submit">Create Coupon</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>

@endsection
