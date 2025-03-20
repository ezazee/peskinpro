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
                            <h4 class="card-title">
                                User Affiliate Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-middle mb-3 table-hover table-centered">
                                    <tbody>
                                        <tr>
                                            <td>Nama Lengkap :</td>
                                            <td>
                                                @if ($user->image)
                                                    <img src="{{ $user->images ? asset('storage/' . $user->images) : asset('/backend/assets/images/blank-profile.png') }}"
                                                         class="avatar-sm rounded-circle me-2" alt="...">
                                                    {{ $user->name }}
                                                @else
                                                    <img src="{{ asset('/backend/assets/images/blank-profile.png') }}"
                                                         class="avatar-sm rounded-circle me-2" alt="...">
                                                    <span>{{ $user->name }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>NIK:</td>
                                            <td>{{ $user->nik }}</td>
                                        </tr>
                                        <tr>
                                            <td>Contact Number:</td>
                                            <td>{{ $user->no_telp }}</td>
                                        </tr>
                                        <tr>
                                            <td>Rek Bank:</td>
                                            <td>{{ $user->no_rek }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat:</td>
                                            <td>{{ $user->affiliate_alamat }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sosial Media</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 table-hover table-centered">
                                    <thead class="bg-light-subtle border-bottom">
                                        <tr>
                                            <th>Platform</th>
                                            <th>Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($user->data_sosmed)
                                            @php
                                                $sosmed = is_string($user->data_sosmed) ? json_decode($user->data_sosmed, true) : $user->data_sosmed;
                                            @endphp
                                
                                            @if(is_array($sosmed) && count($sosmed) > 0)
                                                @foreach($sosmed as $platform => $link)
                                                    <tr>
                                                        <td>{{ ucfirst($platform) }}</td>
                                                        <td><a href="{{ $link }}" target="_blank">{{ $link }}</a></td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="2" class="text-center">Tidak ada data sosial media</td>
                                                </tr>
                                            @endif
                                        @else
                                            <tr>
                                                <td colspan="2" class="text-center">Tidak ada data sosial media</td>
                                            </tr>
                                        @endif
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
                    <h4 class="card-title">KTP</h4>
                </div>
                <div class="card-body text-center">
                    <img class="rounded" src="{{ asset('storage/'. $user->ktp) }}" alt="KTP" width="150" height="auto"
                        data-bs-toggle="modal" data-bs-target="#ktpModal" style="cursor: pointer;">
                </div>                
            </div>
            <a href="{{ route('member.approve', $user->id) }}" class="btn btn-success">Terima</a>
            <a href="{{ route('member.reject', $user->id) }}" class="btn btn-danger">Tolak</a>
        </div>        
    </div>
    <div class="modal fade" id="ktpModal" tabindex="-1" aria-labelledby="ktpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ktpModalLabel">KTP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img class="img-fluid rounded" src="{{ asset('storage/'. $user->ktp) }}" alt="KTP">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
