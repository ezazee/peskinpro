@extends('backend.master.master-app')

@section('title', 'Detail Invoice')

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
                                <img class="logo-dark me-1" src="{{ asset('backend/assets/images/peskin.png') }}" alt="logo-dark" height="50" />
                            </div>
                            <div class="mt-2">
                                <h4>PE SKINPRO ID OFFICIAL.</h4>
                                <address class="mt-3 mb-0">
                                    <abbr title="Instagram">Instagram:</abbr> @peskinproid<br>
                                    <abbr title="Phone">Phone:</abbr> +6282-123-167895
                                </address>
                            </div>
                        </div>
                        <div class="float-sm-end">
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="p-0 pe-5 py-1">
                                                <p class="mb-0 text-dark fw-semibold"> Invoice : </p>
                                            </td>
                                            <td class="text-end text-dark fw-semibold px-0 py-1">#{{ $invoices->invoice_number }}</td>
                                        </tr>
                                        <tr>
                                            <td class="p-0 pe-5 py-1">
                                                <p class="mb-0">Date: </p>
                                            </td>
                                            <td class="text-end text-dark fw-medium px-0 py-1">{{ $invoices->created_at->format('d F Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="p-0 pe-5 py-1">
                                                <p class="mb-0">Amount : </p>
                                            </td>
                                            <td class="text-end text-dark fw-medium px-0 py-1">Rp{{ number_format($invoices->amount, 0, ',', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="p-0 pe-5 py-1">
                                                <p class="mb-0">Status : </p>
                                            </td>
                                            <td class="text-end px-0 py-1">
                                                @if ($invoices->payment_status == 'paid')
                                                <span class="badge bg-success text-white px-2 py-1 fs-13">Paid</span>
                                                @elseif($invoices->payment_status == 'unpaid')
                                                <span class="badge bg-secondary text-white px-2 py-1 fs-13">Unpaid</span>
                                                @else
                                                <span class="badge bg-danger text-white px-2 py-1 fs-13">Refunded</span>
                                                @endif
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="position-absolute top-100 start-50 translate-middle">
                            <img src="{{ asset('backend/assets/images/check-2.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="clearfix pb-3 mt-4">
                        @if(  $invoices->order->user->role_id !== 1 )
                        <div class="float-sm-end">
                            <div class="">
                                <div class="mt-3">
                                    <h4>{{ $invoices->order->user->name }}</h4>
                                    <p class="mb-2">{{ $invoices->order->alamat->street }}, {{ $invoices->order->alamat->city->name }} , {{ $invoices->order->alamat->province->name }}, Indonesia ({{ $invoices->order->alamat->postal_code }})</p>
                                    <p class="mb-2"><span class="text-decoration-underline">Phone :</span> {{ $invoices->order->alamat->no_telp }}</p>
                                    <p class="mb-2"><span class="text-decoration-underline">Email :</span> {{ $invoices->order->user->email }}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive table-borderless text-nowrap table-centered">
                                <table class="table mb-0">
                                    <thead class="bg-light bg-opacity-50">
                                        <tr>
                                            <th class="border-0 py-2">Product Name</th>
                                            <th class="border-0 py-2">Quantity</th>
                                            <th class="border-0 py-2">Price</th>
                                            <th class="text-end border-0 py-2">Total</th>
                                        </tr>
                                    </thead> <!-- end thead -->
                                    <tbody>
                                        @php
                                            $totalAmount = 0;
                                            $hemat = 0;
                                        @endphp
                                    @foreach ($invoices->order->products as $product)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="rounded bg-light avatar d-flex align-items-center justify-content-center">
                                                        <img src="{{ asset('storage/' . $product->front_image) }}" alt="{{ $product->name }}" class="avatar">
                                                    </div>
                                                    <div>
                                                        <a href="#!" class="text-dark fw-medium fs-15">{{ $product->name }}</a>
                                                        <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>
                                                        @php
                                                            $purchasedSizeId = $product->pivot->size_id;
                                                            $purchasedSize = $product->sizes->firstWhere('id', $purchasedSizeId);
                                                            $subtotal = ($purchasedSize->price * $product->pivot->quantity) - ($purchasedSize->discount * $product->pivot->quantity);
                                                            $totalAmount += $subtotal;
                                                            $hemat += $purchasedSize->discount * $product->pivot->quantity;
                                                        @endphp
                                                            {{ $purchasedSize->size }}ML
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $product->pivot->quantity }}</td>
                                            <td>Rp{{ number_format($purchasedSize->price - $purchasedSize->discount, 2) }}</td>
                                            <td class="text-end">Rp{{ number_format(($purchasedSize->price * $product->pivot->quantity) - ($purchasedSize->discount * $product->pivot->quantity), 2) }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody> <!-- end tbody -->
                                </table> <!-- end table -->
                            </div> <!-- end table responsive -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row justify-content-end">
                        <div class="col-lg-5 col-6">
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr class="">
                                            <td class="text-end p-0 pe-5 py-2">
                                                <p class="mb-0"> Sub Total : </p>
                                            </td>
                                            <td class="text-end text-dark fw-medium  py-2">
                                                Rp{{ number_format($totalAmount, 2) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-end p-0 pe-5 py-2">
                                                <p class="mb-0">Ongkir : </p>
                                            </td>
                                            <td class="text-end text-dark fw-medium  py-2">Rp{{ number_format($invoices->order->shipping->shipping_cost, 0, ',', '.') }}</td>
                                        </tr>
                                        <tr class="border-top">
                                            <td class="text-end p-0 pe-5 py-2">
                                                <p class="mb-0 text-dark fw-semibold">Grand Amount : </p>
                                            </td>
                                            <td class="text-end text-dark fw-semibold py-2">Rp{{ number_format($invoices->amount, 0, ',', '.') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <div class="alert alert-danger alert-icon p-2" role="alert">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm rounded bg-danger d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0">
                                        <i class="bx bx-info-circle text-white"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                       All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 mb-1">
                        <div class="text-end d-print-none">
                            <a href="javascript:window.print()" class="btn btn-info width-xl">Print</a>
                            <a href="javascript:void(0);" class="btn btn-outline-primary width-xl">Submit</a>
                        </div>
                    </div>

                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>

@endsection