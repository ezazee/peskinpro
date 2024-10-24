@extends('backend.master.master-app')
@section('title', 'Add Coupons')
@section('content')

<div class="container-xxl">

    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Coupon Status</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d-flex gap-2 align-items-center">
                                <div class="form-check">
                                     <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault9" checked="">
                                     <label class="form-check-label" for="flexRadioDefault9">
                                          Active
                                     </label>
                                </div>
                                
                           </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault10">
                                <label class="form-check-label" for="flexRadioDefault10">
                                     In Active
                                </label>
                           </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault11">
                                <label class="form-check-label" for="flexRadioDefault11">
                                    Future Plan
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
                             <input type="date" id="start-date" class="form-control flatpickr-input active" placeholder="dd-mm-yyyy" >
                        </div>
                        <div class="mb-3">
                             <label for="end-date" class="form-label text-dark">End Date</label>
                             <input type="date" id="end-date" class="form-control flatpickr-input active" placeholder="dd-mm-yyyy">
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
                                <input type="text" id="coupons-code" name="coupons-code" class="form-control" placeholder="Code enter">
                           </div>
                        </div>
                        <div class="col-lg-4">
                            <form>
                                <label for="product-categories" class="form-label">Discount Products</label>
                                <select class="form-control" id="product-categories" data-choices data-choices-groups data-placeholder="Select Categories" name="choices-single-groups">
                                     <option value="">Choose a categories</option>
                                     <option value="Fashion">Fashion</option>
                                     <option value="Electronics">Electronics</option>
                                     <option value="Footwear">Footwear</option>
                                     <option value="Sportswear">Sportswear</option>
                                     <option value="Watches">Watches</option>
                                     <option value="Furniture">Furniture</option>
                                     <option value="Appliances">Appliances</option>
                                     <option value="Headphones">Headphones</option>
                                     <option value="Other Accessories">Other Accessories</option>
                                </select>
                           </form>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="coupons-limits" class="form-label">Coupons Limits</label>
                                <input type="number" id="coupons-limits" name="coupons-limits" class="form-control" placeholder="limits nu">
                           </div>
                        </div>
                    </div>
                    <h4 class="card-title mb-3 mt-2">Coupons Types</h4>
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <div class="d-flex gap-2 align-items-center">
                                <div class="form-check">
                                     <input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault12" checked="">
                                     <label class="form-check-label" for="flexRadioDefault12">
                                        Free Shipping
                                     </label>
                                </div>
                                
                           </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault13">
                                <label class="form-check-label" for="flexRadioDefault13">
                                    Percentage
                                </label>
                           </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault14">
                                <label class="form-check-label" for="flexRadioDefault14">
                                    Fixed Amount
                                </label>
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="">
                                <label for="discount-value" class="form-label">Discount Value</label>
                                <input type="text" id="discount-value" name="discount-value" class="form-control" placeholder="value enter">
                           </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top">
                    <a href="#!" class="btn btn-primary">Create Coupon</a>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection