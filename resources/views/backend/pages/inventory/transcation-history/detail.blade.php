@extends('backend.master.master-app')
@section('title', 'Transaction Detail')

@section('content')
    <div class="container-xxl">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Logo & title -->
                        <div class="clearfix pb-3 bg-info-subtle p-lg-3 p-2 m-n2 rounded position-relative">
                            <div class="float-sm-start">
                                <div class="auth-logo">
                                    <img class="logo-dark me-1" src="{{ asset('backend/assets/images/peskin.png') }}"
                                        alt="logo-dark" height="100" />
                                </div>
                                <div class="mt-4">
                                    <h4>PT Kilau Berlian Nusantara.</h4>
                                    <address class="mt-3 mb-0">
                                        Royal Spring Residence Jl. Jati Padang Raya
                                        <br>
                                        Jati Padang Pasar Minggu
                                        <br>
                                        Kota Adm. Jakarta Selatan DKI Jakarta
                                        <br>
                                    </address>
                                </div>
                            </div>
                            <div class="float-sm-end">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="p-0 pe-5 py-1">
                                                    <p class="mb-0 text-dark fw-semibold">
                                                        Transation ID :
                                                    </p>
                                                </td>
                                                <td class="text-end text-dark fw-semibold px-0 py-1">
                                                    #INV-0758267/90
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-0 pe-5 py-1">
                                                    <p class="mb-0">Date Order :</p>
                                                </td>
                                                <td class="text-end text-dark fw-medium px-0 py-1">
                                                    23 April 2024
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-0 pe-5 py-1">
                                                    <p class="mb-0">Expired Date :</p>
                                                </td>
                                                <td class="text-end text-dark fw-medium px-0 py-1">
                                                    26 April 2024
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-0 pe-5 py-1">
                                                    <p class="mb-0">Amount :</p>
                                                </td>
                                                <td class="text-end text-dark fw-medium px-0 py-1">
                                                    Rp. 737.00
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="position-absolute top-100 start-50 translate-middle">
                                <img src="assets/images/check-2.png" alt="" class="img-fluid" />
                            </div>
                        </div>

                        <div class="row pb-3 mt-4">
                            <div class="col-12">
                                <div class="table-responsive table-borderless text-nowrap table-centered">
                                    <table class="table mb-0">
                                        <thead class="bg-light bg-opacity-50">
                                            <tr>
                                                <th class="border-0 py-2">Product Name</th>
                                                <th class="border-0 py-2">Quantity</th>
                                                <th class="border-0 py-2">Price</th>
                                                <th class="border-0 py-2">Tax</th>
                                                <th class="text-end border-0 py-2">Total</th>
                                            </tr>
                                        </thead>
                                        <!-- end thead -->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <a href="#!" class="text-dark fw-medium fs-15">Men Black Slim
                                                            Fit T-shirt</a>
                                                        <p class="text-muted mb-0 mt-1 fs-13">
                                                            <span>Size : </span>M
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>1</td>
                                                <td>Rp.80.00</td>
                                                <td>Rp.3.00</td>
                                                <td class="text-end">Rp.83.00</td>
                                            </tr>
                                        </tbody>
                                        <!-- end tbody -->
                                    </table>
                                    <!-- end table -->
                                </div>
                                <!-- end table responsive -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row justify-content-end">
                            <div class="col-lg-5 col-6">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr class="">
                                                <td class="text-end p-0 pe-5 py-2">
                                                    <p class="mb-0">Sub Total :</p>
                                                </td>
                                                <td class="text-end text-dark fw-medium py-2">
                                                    Rp.777.00
                                                </td>
                                            </tr>
                                            <tr class="border-top">
                                                <td class="text-end p-0 pe-5 py-2">
                                                    <p class="mb-0 text-dark fw-semibold">
                                                        Grand Amount :
                                                    </p>
                                                </td>
                                                <td class="text-end text-dark fw-semibold py-2">
                                                    Rp.737.00
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        <div class="mt-3 mb-1">
                            <div class="text-end d-print-none">
                                <a href="javascript:window.print()" class="btn btn-info width-xl">Print</a>
                                <a href="javascript:void(0);" class="btn btn-outline-primary width-xl">Submit</a>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
@endsection
