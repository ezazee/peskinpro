@extends('backend.master.master-app')

@section('title', 'Affiliate History')

@section('content')
<div class="container-xxl">

    <div class="row">
        <div class="col-xl-9 col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">History Commission</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-middle mb-3 table-hover table-centered">
                                    <thead class="bg-light-subtle border-bottom">
                                        <tr>
                                            <th>Product Name & Size</th>
                                            <th>Commission</th>
                                            <th>User Affiliate</th>
                                            <th>Penerima</th>
                                            <th>Alamat Penerima</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($his as $item)
                                            @if ($item->type === 'addcommission')
                                                @php
                                                    $order = optional($item->affiliate->order);
                                                    $products = $order ? $order->products : collect();
                                                @endphp
                                                <tr>
                                                    <td>
                                                        @foreach ($products as $product)
                                                            {{ $product->name }}<br>
                                                        @endforeach
                                                    </td>
                                                    <td>Rp {{ number_format($item->amount, 0, ',', '.') }}</td>
                                                    <td>{{ optional($item->referredUser)->name ?? '-' }}</td>
                                                        @if($item->order)
                                                            @foreach ($item->order->products as $product)
                                                            <td>{{ $product->pivot->penerima }}</td>
                                                            <td>{{ $product->pivot->street }},{{ $product->pivot->kecamatan }},{{ $product->pivot->kelurahan }},{{ $product->pivot->city_name }},{{ $product->pivot->province_name }}, {{ $product->pivot->postal_code }}</td>
                                                            @endforeach
                                                        @endif
                                                    <td>{{ $item->created_at->format('d M Y H:i') }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">History Transaksi</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 table-hover table-centered">
                                    <thead class="bg-light-subtle border-bottom">
                                        <tr>
                                            <th>Withdraw Amount</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($his as $item)
                                        @if (in_array($item->type, ['withdraw', 'approved', 'rejected']))
                                                <tr>
                                                    <td>Rp {{ number_format($item->amount, 0, ',', '.') }}</td>
                                                    <td>{{ ucfirst($item->history_status) }}</td>
                                                    <td>{{ $item->created_at->format('d M Y H:i') }}</td>
                                                </tr>
                                            @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Customer Details</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center gap-2">
                        @if($user->images)
                        <img src="{{ asset('storage/' . $user->images) }}" alt=""
                            class="avatar rounded-3 border border-light border-3">
                        @else
                        <img src="{{ asset('/backend/assets/images/blank-profile.png') }}" alt="Default Profile Image"
                            class="avatar rounded-3 border border-light border-3">
                        @endif

                        <div>
                            <p class="mb-1">{{ $user->name }}</p>
                            <a href="#!" class="link-primary fw-medium">{{$user->email}}</a>
                        </div>
                    </div>
                    <p class="mb-1"></p>
                    <div class="d-flex justify-content-between mt-3">
                        <h5 class="">Contact Number</h5>
                    </div>
                    <p class="mb-1">{{ $user->no_telp }}</p>
                    <div class="d-flex justify-content-between mt-3">
                        <h5 class="">NIK</h5>
                    </div>
                    <p class="mb-1">{{ $user->nik }}</p>
                    <div class="d-flex justify-content-between mt-3">
                        <h5 class="">Current Commission</h5>
                    </div>
                    <h4>{{ 'Rp' . number_format($totalCommission, 0, ',', '.') }}</h4>
                    <div class="d-flex justify-content-between mt-3">
                        <h5 class="">ALAMAT</h5>
                    </div>
                    <p class="mb-1">{{ $user->affiliate_alamat }}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sosial Media</h4>
                </div>
                <div class="card-body">
                    @if($user->data_sosmed)
                        @php
                            $sosmed = is_string($user->data_sosmed) ? json_decode($user->data_sosmed, true) : $user->data_sosmed;
                        @endphp

                        @if(is_array($sosmed))
                            @foreach($sosmed as $platform => $link)
                            <div class="d-flex justify-content-between">
                                <h5 class="">{{ ucfirst($platform) }}</h5>
                                <p><a href="{{ $link }}" target="_blank">{{ $link }}</a></p>
                            </div>
                            @endforeach
                        @endif
                    @endif
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">KTP</h4>
                </div>
                <div class="card-body text-center">
                    <img class="rounded" src="{{ asset('storage/'. $user->ktp) }}" alt="KTP" width="150" height="auto">
                </div>                
            </div>
        </div>
        
    </div>
</div>
@endsection
