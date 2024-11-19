@extends('backend.master.master-app')

@section('title', 'List Processing Orders')

@section('content')
<!-- Start Container Fluid -->
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center gap-1">
                    <h4 class="card-title">All Order List</h4>

                    <form action="{{ route('orders.list') }}" method="GET" class="d-flex align-items-center me-2">
                        <input type="text" name="query" class="form-control form-control-sm" 
                               placeholder="Search Order Number..." 
                               value="{{ request('query') }}">
                        <button type="submit" class="btn btn-sm btn-outline-secondary ms-1">Search</button>
                    </form>

                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 table-hover table-centered">
                            <thead class="bg-light-subtle">
                                <tr>
                                    <th>No</th>
                                    <th>Order ID</th>
                                    <th>Created at</th>
                                    <th>Customer</th>
                                    <th>Total</th>
                                    <th>Payment Status</th>
                                    <th>Items</th>
                                    <th>Estimasi</th>
                                    <th>Delivery</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $index => $item)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>
                                        #{{ $item->order_number }}
                                    </td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        {{ $item->user->name }}
                                    </td>
                                    <td> Rp{{ number_format($item->total_amount, 0, ',', '.') }} </td>

                                    <td>
                                        @if( $item->invoice && $item->invoice->payment_status === 'unpaid' && is_null($item->invoice->bukti_tf) )
                                        <span class="badge bg-light text-dark px-2 py-1 fs-13">Unpaid</span>
                                        @elseif( $item->invoice && $item->invoice->payment_status === 'paid' )
                                        <span class="badge bg-success text-light px-2 py-1 fs-13">Paid</span>
                                        @elseif( $item->status === 'canceled' )
                                        <span class="badge bg-light text-dark px-2 py-1 fs-13">Unpaid</span>
                                        @elseif( $item->invoice && $item->invoice->payment_status === 'unpaid' && !is_null($item->invoice->bukti_tf) )
                                        <span class="badge bg-light text-info px-2 py-1 fs-13" data-bs-toggle="modal"
                                                data-bs-target="#buktiModal-{{ $item->id }}">
                                                Check Bukti
                                        </span>
                                    
                                        <!-- Modal to Display Bukti Transfer -->
                                        <div class="modal fade" id="buktiModal-{{ $item->id }}" tabindex="-1" aria-labelledby="buktiModalLabel-{{ $item->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="buktiModalLabel-{{ $item->id }}">Bukti Transfer</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @if($item->invoice && !is_null($item->invoice->bukti_tf))
                                                            <img src="{{ asset('storage/' . $item->invoice->bukti_tf) }}" alt="Bukti Transfer" class="img-fluid">
                                                        @else
                                                            <p>No bukti transfer available.</p>
                                                        @endif
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('order.accept', $item->id) }}" method="POST" style="display: inline;">
                                                            @csrf
                                                            <button type="submit" class="btn btn-success">Terima</button>
                                                        </form>
                                                        <form action="{{ route('order.reject', $item->id) }}" method="POST" style="display: inline;">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger">Tolak</button>
                                                        </form>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <span class="badge bg-light text-dark px-2 py-1 fs-13">Unpaid</span> 
                                    @endif
                                    
                                    </td>
                                    <td>{{ $item->products->sum('pivot.quantity') }}</td>
                                    @if($item->shipping)
                                    <td> {{ $item->shipping->estimated_delivery }}</td>
                                    <td> {{ $item->shipping->shipping_service }}</td>
                                    @else
                                    <td>-</td>
                                    <td>-</td>
                                    @endif
                                    <td>
                                        @if ( $item->status == 'pending')
                                        <span
                                            class="badge border border-secondary text-secondary px-2 py-1 fs-13">Pending</span>
                                        @elseif($item->status == 'processing')
                                        <span class="badge border border-warning text-warning px-2 py-1 fs-13">Processing</span>
                                        @elseif($item->status == 'completed')
                                        <span class="badge border border-success text-success px-2 py-1 fs-13">Completed</span>
                                        @elseif($item->status == 'shipping')
                                        <span class="badge border border-info text-info px-2 py-1 fs-13">Shipping</span>
                                        @else
                                        <span class="badge border border-danger text-danger px-2 py-1 fs-13">Canceled</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('orders.detail',['orderNumber' => $item->order_number]) }}"
                                                class="btn btn-light btn-sm">
                                                <iconify-icon icon="solar:eye-broken" class="align-middle fs-18">
                                                </iconify-icon>
                                            </a>
                                            @if( $item->invoice && $item->status === 'processing' )
                                            <form action="{{ route('order.delivered', $item->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-light btn-sm"><iconify-icon icon="solar:skip-next-bold"></iconify-icon></button>
                                            </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
                <div class="card-footer border-top">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end mb-0">
                            {{ $orders->onEachSide(1)->links('pagination::bootstrap-5') }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection