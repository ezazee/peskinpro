@extends('backend.master.master-app')
@section('title', 'Affiliate Member Request')
@section('content')
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title">All Member Affiliate</h4>
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
                                            <th>Image</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>NIK</th>
                                            <th>Nomor Rekening</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($memberAffiliate as $index => $item)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    @if ($item->image)
                                                        <img src="{{ $item->images ? asset('storage/' . $item->images) : asset('/backend/assets/images/blank-profile.png') }}"
                                                             class="avatar-sm rounded-circle me-2" alt="...">
                                                        {{ $item->name }}
                                                    @else
                                                        <img src="{{ asset('/backend/assets/images/blank-profile.png') }}"
                                                             class="avatar-sm rounded-circle me-2" alt="...">
                                                        <span>{{ $item->name }}</span>
                                                    @endif
                                                </td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->no_telp }}</td>
                                                <td>{{ $item->nik }}</td>
                                                <td>{{ $item->no_rek }}</td>
                                                <td>
                                                    <a href="{{ route('detail.request', $item->id) }}" class="btn btn-light btn-sm">
                                                        <iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                                     </a>
                                                     <a href="{{ route('member.approve', $item->id) }}" class="btn btn-light btn-sm">
                                                        <iconify-icon icon="solar:check-read-outline" class="align-middle fs-18"></iconify-icon>
                                                     </a>
                                                     <a href="{{ route('member.reject', $item->id) }}" class="btn btn-light btn-sm">
                                                        <iconify-icon icon="solar:close-square-linear" class="align-middle fs-18"></iconify-icon>
                                                     </a>
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