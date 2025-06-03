@extends('backend.master.master-app')
@section('title', 'Affiliate Withdraw')
@section('content')
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title"></h4>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <!-- Form Search -->
                        <form action="{{ route('commision.affiliate') }}" method="GET" class="d-flex align-items-center">
                            <input type="text" name="query" class="form-control form-control-sm"
                                placeholder="Search Article..." value="{{ request('query') }}">
                            <button type="submit" class="btn btn-sm btn-outline-secondary ms-1">Search</button>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <form id="bulk-update-form" method="POST" action="{{ route('commision.bulkUpdateCommission') }}">
                            @csrf
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 table-hover table-centered">
                                    <thead class="bg-light-subtle">
                                        <tr>
                                            <th style="width: 20px;">No</th>
                                            <th>Customer Name</th>
                                            <th>Bank / E-wallet</th>
                                            <th>Nama Rekening</th>
                                            <th>Nomor Rekening</th>
                                            <th>Commission</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($withdrawRequests as $index => $withdraw)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            @php $us = $withdraw->user; @endphp
                                            <td>
                                                @if ($us)
                                                    <img src="{{ $us->images ? asset('storage/' . $us->images) : asset('/backend/assets/images/blank-profile.png') }}"
                                                         class="avatar-sm rounded-circle me-2" alt="...">
                                                    {{ $us->name }}
                                                @else
                                                    <img src="{{ asset('/backend/assets/images/blank-profile.png') }}"
                                                         class="avatar-sm rounded-circle me-2" alt="...">
                                                    <span>{{ $us->name }}</span>
                                                @endif
                                            </td>
                                            <td>{{ $withdraw->payment_method }}</td>
                                            <td>{{ $withdraw->account_number }}</td>
                                            <td>{{ $withdraw->account_name }}</td>
                                            <td class="px-4 py-2">Rp {{ number_format($withdraw->amount, 0, ',', '.') }}</td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="{{ route('withdraw.accept', $withdraw->id) }}" 
                                                        onclick="return confirm('Apakah Anda yakin ingin menerima withdraw ini?');" 
                                                        class="btn btn-success btn-sm">
                                                         Terima
                                                     </a>
                                                                                                  
                                                    <form action="{{ route('withdraw.reject', $withdraw->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menolak withdraw ini?');">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            Tolak
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </form>                        
                    </div>                    
                </div>                
                <div class="card-footer border-top">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end mb-0">
                            {{-- {{ $products->onEachSide(1)->links('pagination::bootstrap-5') }} --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection