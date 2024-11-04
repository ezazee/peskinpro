<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>POS | PEskin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/peskin.ico')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/pos/css/bootstrap.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('backend/pos/css/bootstrap-datetimepicker.min.css') }}">

    <!-- animation CSS -->
    <link rel="stylesheet" href="{{ asset('backend/pos/css/animate.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('backend/pos/plugins/select2/css/select2.min.css') }}">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ asset('backend/pos/css/dataTables.bootstrap5.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('backend/pos/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/pos/plugins/fontawesome/css/all.min.css') }}">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ asset('backend/pos/plugins/daterangepicker/daterangepicker.css') }}">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('backend/pos/plugins/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/pos/plugins/owlcarousel/owl.theme.default.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('backend/pos/css/style.css') }}">
</head>

<body>
    @include('sweetalert::alert')
    <div class="pos-pg-wrapper ms-0">
        <div class="content pos-design p-0">
            <div class="btn-row d-sm-flex align-items-center">
                <a href="{{ route('dashboard.index') }}" class="btn btn-danger mb-xs-3"><span class="me-1 d-flex align-items-center"><i
                            data-feather="skip-back" class="feather-16"></i></span> Close</a>
                <a href="javascript:void(0);" class="btn btn-info"><span class="me-1 d-flex align-items-center"><i
                            data-feather="rotate-cw" class="feather-16"></i></span>Reset</a>
                <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#recents"><span class="me-1 d-flex align-items-center"><i data-feather="refresh-ccw"
                            class="feather-16"></i></span>Transaction</a>
            </div>
            <div class="row align-items-start pos-wrapper">
                <div class="col-md-12 col-lg-8">
                    <div class="pos-categories tabs_wrapper">
                        <div class="pos-products">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="mb-3">Products</h5>
                            </div>
                            <div class="tabs_container">
                                <div class="tab_content active" data-tab="all">
                                    <div class="row">
                                        @foreach ($expandedProducts as $item)
                                        <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3">
                                            <div class="product-info default-cover card">
                                                <div class="img-bg overflow-hidden h-50">
                                                    <img src="{{ asset('storage/' . $item['images']) }}" alt="{{ $item['name'] }}" class="img-fluid w-100">
                                                    <span><i data-feather="check" class="feather-16"></i></span>
                                                </div>

                                                <h6 class="cat-name">{{ $item['category']->name ?? 'Uncategorized' }}</h6>
                                                <h6 class="product-name">{{ $item['name'] }} - {{ $item['size']->size }}ML</h6>
                                                <div class="d-flex align-items-center justify-content-between price">
                                                    <span>{{ $item['size']->stock }} Pcs</span>
                                                    <p>Rp{{ number_format($item['size']->price - $item['size']->discount, 0, ',', '.') }}</p>
                                                </div>
                                                @if($item['size']->discount && $item['size']->discount > 0)
                                                <del class="text-sm">Rp {{ number_format($item['size']->price, 0, ',', '.') }}</del>
                                                @else
                                                -
                                                @endif
                                                <form action="{{ route('add_cart_pos') }}" method="POST" class="mt-2">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $item['id'] }}">
                                                    <input type="hidden" name="product_size_id" value="{{ $item['size']->id }}">
                                                    <input type="hidden" name="quantity" id="quantityInput" value="1">
                                                    <button type="submit" class="btn btn-primary btn-block">Add to Cart</button>
                                                </form>
                                            </div>
                                        <div>

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 ps-0">
                    <aside class="product-order-list">
                        <div class="head d-flex align-items-center justify-content-between w-100">
                            <div class="">
                                <h5>Order List</h5>
                                <span>Transaction ID : #65565</span>
                            </div>
                        </div>

                        <div class="product-added block-section">
                            <div class="head-text d-flex align-items-center justify-content-between">
                                <h6 class="d-flex align-items-center mb-0">Product Added<span
                                        class="count">{{ $countcart }}</span>
                                </h6>
                                <a href="{{ route('cart.clearall') }}" class="d-flex align-items-center text-danger">
                                    <span class="me-1"><i data-feather="x" class="feather-16"></i></span>Clear all
                                </a>
                            </div>
                            <div class="product-wrap">
                                @if(empty($cartItems) || count($cartItems) === 0)
                                    <div class="empty-cart-message text-center py-4">
                                        <p>Silahkan pilih produk untuk menambahkan ke keranjang.</p>
                                    </div>
                                @else
                                    @foreach ($cartItems as $item)
                                        <div class="product-list d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center product-info" data-bs-toggle="modal"
                                                data-bs-target="#products">
                                                <a href="javascript:void(0);" class="img-bg">
                                                    <img src="{{ asset('storage/' . $item->product->front_image) }}" alt="Products">
                                                </a>
                                                <div class="info">
                                                    <h6><a href="javascript:void(0);">{{ $item->product->name }}-{{ $item->productSize->size }}Ml</a></h6>
                                                    <p>Rp{{ number_format($item->productSize->price - $item->productSize->discount, 0, ',', '.') }}</p>
                                                </div>
                                            </div>
                                            <div class="qty-item text-center">
                                                <a href="javascript:void(0);" class="dec d-flex justify-content-center align-items-center"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="minus">
                                                    <i data-feather="minus-circle" class="feather-14"></i>
                                                </a>
                                                <input type="text" class="form-control text-center" name="qty" value="{{ $item->quantity }}">
                                                <a href="javascript:void(0);" class="inc d-flex justify-content-center align-items-center"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="plus">
                                                    <i data-feather="plus-circle" class="feather-14"></i>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center action">
                                                <a class="btn-icon edit-icon me-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-product">
                                                    <i data-feather="edit" class="feather-14"></i>
                                                </a>
                                                <a class="btn-icon delete-icon" href="{{ route('cart.delete', ['id' => $item->id]) }}">
                                                    <i data-feather="trash-2" class="feather-14"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                        </div>
                        <div class="block-section">
                            <div class="order-total">
                                <table class="table table-responsive table-borderless">
                                    <tbody>
                                        @php
                                            $subtotal = 0;
                                            $hemat = 0;

                                            foreach ($cartItems as $item) {
                                                $subtotal += ($item->productSize->price * $item->quantity) - ($item->productSize->discount * $item->quantity);
                                                $hemat += $item->productSize->discount * $item->quantity;
                                            }

                                            $total = $subtotal;
                                            @endphp
                                        <tr>
                                            <td>Sub Total</td>
                                            <td class="text-end">Rp{{ number_format($subtotal, 0, ',', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Hemat</td>
                                            <td class="text-end">Rp{{ number_format($hemat, 0, ',', '.') }}</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>

                        <form action="{{ route('pos_order') }}" method="POST">
                            @csrf
                            <input type="text" name="total_amount" value="{{ $total }}" hidden>

                            <div class="block-section payment-method">
                                <h6>Payment Method</h6>
                                <div class="row d-flex align-items-center justify-content-center methods">
                                    <div class="col-md-6 col-lg-4 item mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment_method" id="cash" value="cash" checked>
                                            <label class="form-check-label d-flex align-items-center" for="cash">
                                                <img src="{{ asset('backend/pos/img/icons/cash-pay.svg') }}" alt="Payment Method" class="me-2" style="width: 30px; height: 30px;">
                                                Cash
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 item mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment_method" id="transfer" value="transfer">
                                            <label class="form-check-label d-flex align-items-center" for="transfer">
                                                <img src="{{ asset('backend/pos/img/icons/credit-card.svg') }}" alt="Payment Method" class="me-2" style="width: 30px; height: 30px;">
                                                Transfer
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 item mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment_method" id="qris" value="qris">
                                            <label class="form-check-label d-flex align-items-center" for="qris">
                                                <img src="{{ asset('backend/pos/img/icons/qr-scan.svg') }}" alt="Payment Method" class="me-2" style="width: 30px; height: 30px;">
                                                Qris
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @foreach ($cartItems as $item)
                                <input type="hidden" name="products[{{ $loop->index }}][id]" value="{{ $item->product_id }}">
                                <input type="hidden" name="products[{{ $loop->index }}][quantity]" value="{{ $item->quantity }}">
                                <input type="hidden" name="products[{{ $loop->index }}][sizeid]" value="{{ $item->productSize->id }}">
                            @endforeach

                            <div class="d-grid btn-block">
                                <button class="btn btn-success">
                                    Payment Grand Total : {{ number_format($total, 0, ',', '.') }}
                                </button>
                            </div>
                        </form>

                    </aside>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- /Main Wrapper -->

    <!-- Print Receipt -->
    <div class="modal fade modal-default" id="print-receipt" aria-labelledby="print-receipt">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="d-flex justify-content-end">
                    <button type="button" class="close p-0" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="icon-head text-center">
                        <a href="javascript:void(0);">
                            <img src="assets/img/logo.png" width="100" height="30" alt="Receipt Logo">
                        </a>
                    </div>
                    <div class="text-center info text-center">
                        <h6>Dreamguys Technologies Pvt Ltd.,</h6>
                        <p class="mb-0">Phone Number: +1 5656665656</p>
                        <p class="mb-0">Email: <a
                                href="/cdn-cgi/l/email-protection#6c09140d011c00092c0b010d0500420f0301"><span
                                    class="__cf_email__"
                                    data-cfemail="016479606c716d6441666c60686d2f626e6c">[email&nbsp;protected]</span></a>
                        </p>
                    </div>
                    <div class="tax-invoice">
                        <h6 class="text-center">Tax Invoice</h6>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="invoice-user-name"><span>Name: </span><span>John Doe</span></div>
                                <div class="invoice-user-name"><span>Invoice No: </span><span>CS132453</span></div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="invoice-user-name"><span>Customer Id: </span><span>#LL93784</span></div>
                                <div class="invoice-user-name"><span>Date: </span><span>01.07.2022</span></div>
                            </div>
                        </div>
                    </div>
                    <table class="table-borderless w-100 table-fit">
                        <thead>
                            <tr>
                                <th># Item</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th class="text-end">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1. Red Nike Laser</td>
                                <td>$50</td>
                                <td>3</td>
                                <td class="text-end">$150</td>
                            </tr>
                            <tr>
                                <td>2. Iphone 14</td>
                                <td>$50</td>
                                <td>2</td>
                                <td class="text-end">$100</td>
                            </tr>
                            <tr>
                                <td>3. Apple Series 8</td>
                                <td>$50</td>
                                <td>3</td>
                                <td class="text-end">$150</td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <table class="table-borderless w-100 table-fit">
                                        <tbody>
                                            <tr>
                                                <td>Sub Total :</td>
                                                <td class="text-end">$700.00</td>
                                            </tr>
                                            <tr>
                                                <td>Discount :</td>
                                                <td class="text-end">-$50.00</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping :</td>
                                                <td class="text-end">0.00</td>
                                            </tr>
                                            <tr>
                                                <td>Tax (5%) :</td>
                                                <td class="text-end">$5.00</td>
                                            </tr>
                                            <tr>
                                                <td>Total Bill :</td>
                                                <td class="text-end">$655.00</td>
                                            </tr>
                                            <tr>
                                                <td>Due :</td>
                                                <td class="text-end">$0.00</td>
                                            </tr>
                                            <tr>
                                                <td>Total Payable :</td>
                                                <td class="text-end">$655.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center invoice-bar">
                        <p>**VAT against this challan is payable through central registration. Thank you for your
                            business!</p>
                        <a href="javascript:void(0);">
                            <img src="assets/img/barcode/barcode-03.jpg" alt="Barcode">
                        </a>
                        <p>Sale 31</p>
                        <p>Thank You For Shopping With Us. Please Come Again</p>
                        <a href="javascript:void(0);" class="btn btn-primary">Print Receipt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Print Receipt -->


    <!-- Recent Transactions -->
    <div class="modal fade pos-modal" id="recents" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header p-4">
                    <h5 class="modal-title">Recent Transactions</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <div class="tabs-sets">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="purchase" role="tabpanel"
                                aria-labelledby="purchase-tab">
                                <div class="table-top">
                                    <div class="search-set">
                                        <div class="search-input">
                                            <a class="btn btn-searchset d-flex align-items-center h-100"><img
                                                    src="{{ asset('backend/pos/assets/img/icons/search-white.svg') }}" alt="img"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table datanew">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Reference</th>
                                                <th>Items</th>
                                                <th>Amount </th>
                                                <th class="no-sort">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $item)
                                            <tr>
                                                <td>{{ $item->created_at->format('d F Y') }}</td>
                                                <td>#{{ $item->invoice->invoice_number }}</td>
                                                @foreach ($item->products as $p)
                                                <td>{{ $p->pivot->quantity }}</td>
                                                @endforeach
                                                <td>Rp{{ number_format($item->total_amount, 2) }}</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2" class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Recent Transactions -->

        <!-- jQuery -->
        {{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
        <script src="{{ asset('backend/pos/js/jquery-3.7.1.min.js') }}"></script>

        <!-- Feather Icon JS -->
        <script src="{{ asset('backend/pos/js/feather.min.js') }}"></script>

        <!-- Slimscroll JS -->
        <script src="{{ asset('backend/pos/js/jquery.slimscroll.min.js') }}"></script>

        <!-- Datatable JS -->
        <script src="{{ asset('backend/pos/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/pos/js/dataTables.bootstrap5.min.js') }}"></script>

        <!-- Bootstrap Core JS -->
        <script src="{{ asset('backend/pos/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Chart JS -->
        <script src="{{ asset('backend/pos/plugins/apexchart/apexcharts.min.js') }}"></script>
        <script src="{{ asset('backend/pos/plugins/apexchart/chart-data.js') }}"></script>

        <!-- Daterangepikcer JS -->
        <script src="{{ asset('backend/pos/js/moment.min.js') }}"></script>
        <script src="{{ asset('backend/pos/plugins/daterangepicker/daterangepicker.js') }}"></script>

        <!-- Owl JS -->
        <script src="{{ asset('backend/pos/plugins/owlcarousel/owl.carousel.min.js') }}"></script>

        <!-- Select2 JS -->
        <script src="{{ asset('backend/pos/plugins/select2/js/select2.min.js') }}"></script>

        <!-- Sweetalert 2 -->
        <script src="{{ asset('backend/pos/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
        <script src="{{ asset('backend/pos/plugins/sweetalert/sweetalerts.min.js') }}"></script>

        <!-- Custom JS -->
        <script src="{{ asset('backend/pos/js/script.js') }}"></script>
</body>

</html>
