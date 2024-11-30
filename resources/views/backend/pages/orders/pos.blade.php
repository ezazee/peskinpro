<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>POS | PEskin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/peskin.ico') }}">

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
    <style>
        .item input[type="radio"] {
        display: none;
        }


        .item input[type="radio"]:checked + label {
            background-color: #007bff; 
            color: white; 
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
            border-radius: 8px;
        }

        .item input[type="radio"]:checked + label img {
            filter: brightness(0) invert(1);
        }

        .item:hover {
            border-color: #007bff; 
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .item input[type="radio"]:checked + label::before {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if(session('log'))
            <script>
                console.log("Log from backend:", @json(session('log')));
            </script>
        @endif
    <div class="pos-pg-wrapper ms-0">
        <div class="content pos-design p-0">
            <div class="btn-row d-sm-flex align-items-center">
                <a href="{{ route('dashboard.index') }}" class="btn btn-danger mb-xs-3"><span
                        class="me-1 d-flex align-items-center"><i data-feather="skip-back"
                            class="feather-16"></i></span> Close</a>
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
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <form action="{{ route('add_cart_pos') }}" method="POST" class="text-decoration-none text-dark">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $item['id'] }}">
                                                <input type="hidden" name="product_size_id" value="{{ $item['size']->id }}">
                                                <input type="hidden" name="quantity" value="1">
                                        
                                                <button type="submit" class="btn btn-link p-0 text-start text-decoration-none w-100" style="border: none; background: none;">
                                                    <div class="product-info default-cover card">
                                                        <div class="img-bg overflow-hidden h-50">
                                                            <img src="{{ asset('storage/' . $item['images']) }}" alt="{{ $item['name'] }}" class="img-fluid w-100">
                                                            <span><i data-feather="check" class="feather-16"></i></span>
                                                        </div>
                                        
                                                        <h6 class="cat-name">
                                                            {{ $item['category']->name ?? 'Uncategorized' }}
                                                        </h6>
                                                        <h6 class="product-name">{{ $item['name'] }} - {{ $item['size']->size }}ML</h6>
                                                        <div class="d-flex align-items-center justify-content-between price">
                                                            <span>{{ $item['size']->stock }} Pcs</span>
                                                            <p>Rp{{ number_format($item['size']->price - $item['size']->discount, 0, ',', '.') }}</p>
                                                        </div>
                                                        @if ($item['size']->discount && $item['size']->discount > 0)
                                                            <del class="text-sm">Rp{{ number_format($item['size']->price, 0, ',', '.') }}</del>
                                                        @else
                                                            -
                                                        @endif
                                                    </div>
                                                </button>
                                            </form>
                                        </div>                                        
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
                                <span>Transaction ID : #ORD{{ strtoupper(uniqid()) }}</span>
                            </div>
                        </div>

                        <div class="product-added block-section">
                            <div class="head-text d-flex align-items-center justify-content-between">
                                <h6 class="d-flex align-items-center mb-0">Product Added<span
                                        class="count">{{ $countcart }}</span>
                                </h6>
                                <a href="{{ route('cart.clearall') }}" class="d-flex align-items-center text-danger">
                                    <span class="me-1"><i data-feather="x" class="feather-16"></i></span>Clear
                                    all
                                </a>
                            </div>
                            <div class="product-wrap">
                                @if (empty($cartItems) || count($cartItems) === 0)
                                    <div class="empty-cart-message text-center py-4">
                                        <p>Silahkan pilih produk untuk menambahkan ke keranjang.</p>
                                    </div>
                                @else
                                    @foreach ($cartItems as $item)
                                        <div class="product-list d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center product-info" data-bs-toggle="modal"
                                                data-bs-target="#products">
                                                <a href="javascript:void(0);" class="img-bg">
                                                    <img src="{{ asset('storage/' . $item->product->front_image) }}"
                                                        alt="Products">
                                                </a>
                                                <div class="info">
                                                    <h6><a
                                                            href="javascript:void(0);">{{ $item->product->name }}-{{ $item->productSize->size }}Ml</a>
                                                    </h6>
                                                    <p>Rp{{ number_format($item->productSize->price - $item->productSize->discount, 0, ',', '.') }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="qty-item text-center">
                                                <a href="javascript:void(0);"
                                                   class="dec d-flex justify-content-center align-items-center"
                                                   data-bs-toggle="tooltip" data-bs-placement="top" title="minus">
                                                    <i data-feather="minus-circle" class="feather-14" data-id="{{ $item->id }}" id="decrease-quantity"></i>
                                                </a>
                                                <input type="text" class="form-control text-center quantity" name="qty"
                                                       value="{{ $item->quantity }}" data-id="{{ $item->id }}">
                                                <a href="javascript:void(0);"
                                                   class="inc d-flex justify-content-center align-items-center"
                                                   data-bs-toggle="tooltip" data-bs-placement="top" title="plus">
                                                    <i data-feather="plus-circle" class="feather-14" data-id="{{ $item->id }}" id="increase-quantity"></i>
                                                </a>
                                            </div>                                            
                                            <div class="d-flex align-items-center action">
                                                <a class="btn-icon delete-icon"
                                                    href="{{ route('cart.delete', ['id' => $item->id]) }}">
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
                                                $subtotal +=
                                                    $item->productSize->price * $item->quantity -
                                                    $item->productSize->discount * $item->quantity;
                                                $hemat += $item->productSize->discount * $item->quantity;
                                            }

                                            $total = $subtotal;
                                        @endphp
                                        <tr>
                                            <td>Sub Total</td>
                                            <td class="text-end">Rp{{ number_format($subtotal, 0, ',', '.') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hemat</td>
                                            <td class="text-end">Rp{{ number_format($hemat, 0, ',', '.') }}</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class="block-section payment-method">
                            <h6>Payment Method</h6>
                            <div class="btn-row d-sm-flex align-items-center justify-content-between">
                                <a href="javascript:void(0);" class="btn btn-primary btn-icon flex-fill" data-bs-toggle="modal" data-bs-target="#hold-order"><span class="me-1 d-flex align-items-center"><img src="{{ asset('backend/pos/img/icons/cash-pay.svg') }}" alt="Payment Method" class="me-2"
                                    style="width: 30px; height: 30px;"></span>Cash</a>
                                <a href="javascript:void(0);" class="btn btn-secondary btn-icon flex-fill" data-bs-toggle="modal" data-bs-target="#transfer"><span class="me-1 d-flex align-items-center"><img src="{{ asset('backend/pos/img/icons/credit-card.svg') }}" alt="Payment Method" class="me-2"
                                    style="width: 30px; height: 30px;"></span>Debit/CC</a>
                                <a href="javascript:void(0);" class="btn btn-success btn-icon flex-fill" data-bs-toggle="modal" data-bs-target="#qris"><span class="me-1 d-flex align-items-center">   <img src="{{ asset('backend/pos/img/icons/qr-scan.svg') }}" alt="Payment Method" class="me-2"
                                    style="width: 30px; height: 30px;"></span>Qris</a>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>

    </div>
    <!-- /Main Wrapper -->


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
                                <div class="table-responsive">
                                    <table class="table datanew">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Reference</th>
                                                <th>Items</th>
                                                <th>Amount </th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $item)
                                                <tr>
                                                    <td>{{ $item->created_at->format('d F Y') }}</td>
                                                    <td>#{{ $item->invoice->invoice_number }}</td>
                                                    <td>
                                                        {{ $item->products->sum('pivot.quantity') }}
                                                    </td>                                                    
                                                    <td>Rp{{ number_format($item->total_amount, 2) }}</td>
                                                    <td class="action-table-data">
                                                        <div class="edit-delete-action">
                                                            <a class="me-2 p-2" href="javascript:void(0);">
                                                                <i data-feather="printer" class="feather-print"></i>
                                                            </a>
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


        {{-- cash modal --}}
		<div class="modal fade modal-default pos-modal" id="hold-order" aria-labelledby="hold-order">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header p-4">
						<h5>Cash order</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
                    <div class="modal-body p-4">
                        <form id="payment-form" action="{{ route('pos_order') }}" method="POST">
                            @csrf
                            <input type="hidden" name="total_amount" value="{{ $subtotal }}">
                            <input type="hidden" name="payment_method" value="cash"> 
                            <input type="hidden" name="kembali" id="kembalian-hidden">

                            @foreach ($cartItems as $item)
                                <input type="hidden" name="products[{{ $loop->index }}][id]"
                                    value="{{ $item->product_id }}">
                                <input type="hidden" name="products[{{ $loop->index }}][quantity]"
                                    value="{{ $item->quantity }}">
                                <input type="hidden" name="products[{{ $loop->index }}][sizeid]"
                                    value="{{ $item->productSize->id }}">
                                <input type="hidden" name="products[{{ $loop->index }}][harga]"
                                    value="{{ $item->productSize->price - $item->productSize->discount }}">
                                <input type="hidden" name="products[{{ $loop->index }}][discount]"
                                    value="{{ $item->productSize->discount }}">
                            @endforeach

                            <h6>Harga Total :</h6>
                            <h2 class="text-center p-4" id="subtotal">Rp{{ number_format($subtotal, 0, ',', '.') }}</h2>
                            <h6>Kembalian : </h6>
                            <h2 class="text-center p-4" id="kembalian">Rp0</h2>
                    
                            <div class="input-block">
                                <label>Order Reference</label>
                                <input class="form-control" id="uang-diberikan" type="number" placeholder="Uang yang diberikan" />
                            </div>
                            <div class="modal-footer d-sm-flex justify-content-end">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </div>
                        </form>
                    </div>
				</div>
			</div>
		</div>
        {{-- end cash modal --}}

        {{-- transfer modal --}}
		<div class="modal fade modal-default pos-modal" id="transfer" aria-labelledby="transfer">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header p-4">
						<h5>Debit/CC Order</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
                    <div class="modal-body p-4">
                        <form id="payment-form" action="{{ route('pos_order') }}" method="POST">
                            @csrf
                            <input type="hidden" name="total_amount" value="{{ $subtotal }}">
                            <input type="hidden" name="payment_method" value="debit"> 

                            @foreach ($cartItems as $item)
                                <input type="hidden" name="products[{{ $loop->index }}][id]"
                                    value="{{ $item->product_id }}">
                                <input type="hidden" name="products[{{ $loop->index }}][quantity]"
                                    value="{{ $item->quantity }}">
                                <input type="hidden" name="products[{{ $loop->index }}][sizeid]"
                                    value="{{ $item->productSize->id }}">
                                <input type="hidden" name="products[{{ $loop->index }}][harga]"
                                    value="{{ $item->productSize->price - $item->productSize->discount }}">
                                <input type="hidden" name="products[{{ $loop->index }}][discount]"
                                    value="{{ $item->productSize->discount }}">
                            @endforeach

                            <h6>Harga Total :</h6>
                            <h2 class="text-center p-4" id="subtotal">Rp{{ number_format($subtotal, 0, ',', '.') }}</h2>
                    
                            <div class="input-block">
                                <label>Kode Unik Pembayaran</label>
                                <input class="form-control" type="text" name="kode_bayar" placeholder="Kode Unik Pembayaran" />
                            </div>
                            <div class="modal-footer d-sm-flex justify-content-end">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </div>
                        </form>
                    </div>
				</div>
			</div>
		</div>
        {{-- end transfer modal --}}


          {{-- qris  modal --}}
		<div class="modal fade modal-default pos-modal" id="qris" aria-labelledby="qris">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header p-4">
						<h5>Qris Order</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
                    <div class="modal-body p-4">
                        <form id="payment-form" action="{{ route('pos_order') }}" method="POST">
                            @csrf
                            <input type="hidden" name="total_amount" value="{{ $subtotal }}">
                            <input type="hidden" name="payment_method" value="qris"> 

                            @foreach ($cartItems as $item)
                                <input type="hidden" name="products[{{ $loop->index }}][id]"
                                    value="{{ $item->product_id }}">
                                <input type="hidden" name="products[{{ $loop->index }}][quantity]"
                                    value="{{ $item->quantity }}">
                                <input type="hidden" name="products[{{ $loop->index }}][sizeid]"
                                    value="{{ $item->productSize->id }}">
                                <input type="hidden" name="products[{{ $loop->index }}][harga]"
                                    value="{{ $item->productSize->price - $item->productSize->discount }}">
                                <input type="hidden" name="products[{{ $loop->index }}][discount]"
                                    value="{{ $item->productSize->discount }}">
                            @endforeach

                            <h6>Harga Total :</h6>
                            <h2 class="text-center p-4" id="subtotal">Rp{{ number_format($subtotal, 0, ',', '.') }}</h2>
                    
                            <div class="input-block">
                                <label>Kode Unik Pembayaran</label>
                                <input class="form-control" type="text" name="kode_bayar" placeholder="Kode Unik Pembayaran" />
                            </div>
                            <div class="modal-footer d-sm-flex justify-content-end">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </div>
                        </form>
                    </div>
				</div>
			</div>
		</div>
        {{-- end qris modal --}}

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const subtotalElement = document.getElementById("subtotal");
            const uangDiberikanInput = document.getElementById("uang-diberikan");
            const kembalianElement = document.getElementById("kembalian");
            const kembalianHiddenInput = document.getElementById("kembalian-hidden");
    
            const subtotal = parseInt("{{ $subtotal }}", 10);
    
            uangDiberikanInput.addEventListener("input", () => {
                const uangDiberikan = parseInt(uangDiberikanInput.value, 10) || 0;
                const kembalian = uangDiberikan - subtotal;
    
                const formattedKembalian = kembalian >= 0 ? kembalian.toLocaleString() : "0";
                kembalianElement.textContent = formattedKembalian;
    
                kembalianHiddenInput.value = kembalian >= 0 ? kembalian : 0;
            });
        });
    </script>
    
    <!-- jQuery -->
    {{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{ asset('backend/pos/js/jquery-3.7.1.min.js') }}"></script>

    <!-- Feather Icon JS -->
    <script src="{{ asset('backend/pos/js/feather.min.js') }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('backend/pos/js/jquery.slimscroll.min.js') }}"></script>

    <!-- Datatable JS -->
    {{-- <script src="{{ asset('backend/pos/js/jquery.dataTables.min.js') }}"></script> --}}
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
