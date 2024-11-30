@extends('frontend.master.master-app')

@section('content')
    <div class="my-account-block py-10 md:py-20">
        <div class="container">
            <div class="content-main flex gap-y-8 w-full max-md:flex-col lg:px-[60px] md:px-4">
                {{-- Bagian Kiri --}}
                @include('frontend.components.profile-user')
                {{-- Bagian Kanan --}}
                <div class="right list-filter w-full md:w-2/3 pl-2.5">
                    <div class="filter-item text-content w-full active">
                        <div class="flex justify-end">
                            <button id="addAddressButton"
                                class="button-main text-white text-xs py-1 rounded-lg flex items-center gap-2">
                                <i class="ph ph-plus text-xl"></i>
                                Tambah Alamat Baru
                            </button>
                        </div>

                        {{-- Form Alamat Baru --}}
                        <div class="recent_order px-5 pb-2 mt-7 border border-line rounded-xl">
                            <h6 class="heading6 mt-5">List Alamat</h6>
                            <div class="list-container-outline rounded-frame border-frame p-4">
                                @if ($user->alamat->isEmpty())
                                    <p class="no-address-text text-secondary">Tambahkan alamat terlebih dahulu</p>
                                @else
                                    @php
                                        $defaultAddress = $user->alamat()->where('default', 'yes')->first();
                                    @endphp

                                    @if ($defaultAddress)
                                        <div class="address-item rounded-frame relative p-4 mb-4 active">
                                            <strong class="address-title block mb-2">{{ $defaultAddress->label }}</strong>
                                            <p class="name-text">{{ $defaultAddress->penerima }}</p>
                                            <div>{{ $defaultAddress->street }},</div>
                                            <div>Kecamatan {{ $defaultAddress->kecamatan  }}, Kelurahan {{ $defaultAddress->kelurahan  }}</div>
                                            <div>Kota/Kab {{ $defaultAddress->city->name }} , {{ $defaultAddress->province->name }} ,</div>
                                            <div>Indonesia ({{ $defaultAddress->postal_code }})</div>
                                            <p class="contact-text">{{ $defaultAddress->no_telp }}</p>
                                            <span class="check-badge absolute top-4 right-4">Default</span>
                                            <div class="action-list mt-3 flex gap-3">
                                                <a href="{{ route('edit.address', $defaultAddress->id) }}"
                                                    class="link-text">Edit Address</a>
                                                <form action="{{ route('delete_address', $defaultAddress->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this address?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="link-text">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    @endif
                                    @foreach ($user->alamat as $item)
                                        @if ($item->default !== 'yes')
                                            <div
                                                class="address-item rounded-frame relative p-4 mb-4 {{ $item->default === 'yes' ? 'active' : '' }}">
                                                <strong class="address-title block mb-2">{{ $item->label }}</strong>
                                                <p class="name-text">{{ $item->penerima }}</p>
                                                <div>Kecamatan {{ $item->kecamatan  }}, Kelurahan {{ $item->kelurahan  }}</div>
                                                <div>Kota/Kab {{ $item->city->name }} , {{ $item->province->name }} ,</div>
                                                <div>Indonesia ({{ $item->postal_code }})</div>
                                                <p class="address-description text-secondary py-3">{{ $item->street }}</p>
                                                <p class="contact-text">{{ $item->no_telp }}</p>
                                                <div class="action-list mt-3 flex gap-3">
                                                    <a href="{{ route('edit.address', $item->id) }}" class="link-text">Edit
                                                        Address</a>
                                                    <form action="{{ route('delete_address', $item->id) }}" method="POST"
                                                        onsubmit="return confirm('Are you sure you want to delete this address?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="link-text">Delete</button>
                                                    </form>
                                                </div>
                                                @if ($item->default === 'yes')
                                                    <span class="check-badge absolute top-4 right-4">Default</span>
                                                @else
                                                    <button class="default-badge absolute top-4 right-4"
                                                        onclick="setDefaultAddress({{ $item->id }})">Pilih</button>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Custom --}}
    @include('frontend.components.modal-form-alamat')
    @include('frontend.components.profile-alamat-js')
@endsection
