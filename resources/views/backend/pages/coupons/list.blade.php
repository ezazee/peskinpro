@extends('backend.master.master-app')
@section('title', 'Coupons List')
@section('content')

<div class="container-xxl">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center gap-1">
                    <h4 class="card-title flex-grow-1">All Coupons List</h4>
{{-- 
                    <form action="" method="" class="d-flex align-items-center me-2">
                        <input type="text" name="query" class="form-control form-control-sm" placeholder="Search Products...">
                        <button type="submit" class="btn btn-sm btn-outline-secondary ms-1">Search</button>
                    </form> --}}

                </div>
                <div>
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 table-hover table-centered">
                            <thead class="bg-light-subtle">
                                <tr>
                                    <th style="width: 20px;">
                                        No
                                    </th>
                                    <th>Coupons Code</th>
                                    <th>Minimum Purchase</th>
                                    <th>Coupons Limits</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Discount Value</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupons as $index => $item)
                                <tr>
                                    <td>
                                        {{ $index+1 }}
                                    </td>
                                    <td>
                                        {{ $item->coupons_code }}
                                    </td>
                                    <td>Rp{{ number_format($item->minimum_purchase, 0, ',', '.') }}</td>
                                    <td>{{ $item->limits }}</td>
                                    <td>{{ $item->start_date }}</td>
                                    <td>{{ $item->end_date }}</td>
                                    <td>Rp{{ number_format($item->jumlah, 0, ',', '.') }}</td>
                                    <td>
                                        @if ($item->status == 'active')
                                        <span class="badge text-success bg-success-subtle fs-12"><i
                                                class="bx bx-check-double"></i>{{ $item->status }}</span>
                                        @else
                                        <span class="badge text-danger bg-danger-subtle fs-12"><i
                                                class="bx bx-x"></i>Expired</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="#!" class="btn btn-soft-primary btn-sm">
                                                <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18">
                                                </iconify-icon>
                                            </a>
                                            <form action="{{ route('coupons.destroy', $item->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this coupons?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn btn-danger btn-sm">
                                                    <iconify-icon icon="solar:trash-bin-minimalistic-2-broken"
                                                        class="align-middle fs-18"></iconify-icon>
                                                </button>
                                            </form>
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
                            {{ $coupons->onEachSide(1)->links('pagination::bootstrap-5') }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
