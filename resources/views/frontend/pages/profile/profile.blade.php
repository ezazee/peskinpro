@extends('frontend.master.master-app')

@section('content')
    <div class="my-account-block md:py-20 py-10">
        <div class="container">
            <div class="content-main lg:px-[60px] md:px-4 flex gap-y-8 max-md:flex-col w-full">
                {{-- Bagian Kiri --}}
                @include('frontend.components.profile-user')
                {{-- Bagian Kanan --}}
                <div class="right list-filter md:w-2/3 w-full pl-2.5">
                    <div class="filter-item text-content w-full active">
                        {{-- Main Dashboard --}}
                        <div class="overview grid sm:grid-cols-3 gap-5">
                            <div
                                class="overview-item flex items-center justify-between p-5 border border-line rounded-lg box-shadow-xs">
                                <div class="counter">
                                    <span class="text-secondary">Pesanan Pending</span>
                                    <h5 class="heading5 mt-1">{{ $pendingOrdersCount }}</h5>
                                </div>
                                <span class="ph ph-hourglass-medium text-4xl"></span>
                            </div>
                            <div
                                class="overview-item flex items-center justify-between p-5 border border-line rounded-lg box-shadow-xs">
                                <div class="counter">
                                    <span class="text-secondary">Pesanan Di Cancel</span>
                                    <h5 class="heading5 mt-1">{{ $canceledOrdersCount }}</h5>
                                </div>
                                <span class="ph ph-receipt-x text-4xl"></span>
                            </div>
                            <div
                                class="overview-item flex items-center justify-between p-5 border border-line rounded-lg box-shadow-xs">
                                <div class="counter">
                                    <span class="text-secondary">Total Orderan</span>
                                    <h5 class="heading5 mt-1">{{ $totalOrders }}</h5>
                                </div>
                                <span class="ph ph-package text-4xl"></span>
                            </div>
                        </div>
                        <div class="recent_order pt-5 px-5 pb-2 mt-7 border border-line rounded-xl">
                            <h6 class="heading6">Recent Orders</h6>
                            <div class="list overflow-x-auto w-full mt-5">
                                <table class="w-full max-[1400px]:w-[700px] max-md:w-[700px]">
                                    <thead class="border-b border-line">
                                        <tr>
                                            <th scope="col"
                                                class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                                Order ID</th>
                                            <th scope="col"
                                                class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                                Produk</th>
                                            <th scope="col"
                                                class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                                Harga Total</th>
                                            <th scope="col"
                                                class="pb-3 text-right text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                                Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $item)
                                            <tr class="item duration-300 border-b border-line">
                                                <th scope="row" class="py-3 text-left">
                                                    <strong class="text-title">#{{ $item->order_number }}</strong>
                                                </th>
                                                <td class="py-3">
                                                    @if ($item->products->isNotEmpty())
                                                        @php
                                                            $firstProduct = $item->products->first();
                                                            $firstSize = $firstProduct->sizes->first();
                                                        @endphp
                                                        <a href="product-default.html"
                                                            class="product flex items-center gap-3">
                                                            <img src="{{ asset('storage/' . $firstProduct->front_image) }}"
                                                                alt="Contrasting sweatshirt"
                                                                class="flex-shrink-0 w-12 h-12 rounded" />
                                                            <div class="info flex flex-col">
                                                                <strong
                                                                    class="product_name text-button">{{ $firstProduct->name }}</strong>
                                                                <span
                                                                    class="product_tag caption1 text-secondary">{{ $firstProduct->category->name }}
                                                                    ,
                                                                    {{ $firstSize->size }} ml
                                                                </span>
                                                                @if ($item->products->count() > 1)
                                                                    <span class="product_tag caption1 text-primary">Lainnya
                                                                        ..</span>
                                                                @endif
                                                            </div>
                                                        </a>
                                                    @endif
                                                </div>
                                            </a>
                                        </td>
                                        <td class="py-3 price">Rp{{ number_format($item->total_amount, 0, ',', '.') }}</td>
                                        <td class="py-3 text-right">
                                            @if ($item->status == 'pending' && optional($item->invoice)->payment_status == 'unpaid' && optional($item->invoice)->bukti_tf == '')
                                                <a href="{{ route('payment', ['invoice_number' => optional($item->invoice)->invoice_number ?? '']) }}">
                                                    <span class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-primary text-black caption1 font-semibold">Bayar Sekarang</span>
                                                </a>
                                            @elseif ($item->status == 'pending' && optional($item->invoice)->payment_status == 'unpaid')
                                                <span class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-yellow text-yellow caption1 font-semibold">Pending</span>
                                            @elseif ($item->status == 'processing')
                                                <span class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-yellow text-yellow caption1 font-semibold">Processing</span>
                                            @elseif ($item->status == 'shipping')
                                                <span class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-yellow text-yellow caption1 font-semibold">Shipping</span>
                                            @elseif ($item->status == 'completed')
                                                <span class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-success text-success caption1 font-semibold">Completed</span>
                                            @else
                                                <span class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-danger text-danger caption1 font-semibold">Canceled</span>
                                            @endif
                                        </td>                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- Personal Information --}}
                        <div class="filter-item text-content w-full p-7 mt-5 border border-line rounded-xl active">
                            <form action="{{ route('profile.update', $user->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="heading5 pb-4">Informasi</div>
                                <div class="upload_image col-span-full">
                                    <label for="uploadImage">Upload Avatar: <span class="text-red">*</span></label>
                                    <div class="flex flex-wrap items-center gap-5 mt-3">
                                        <div
                                            class="bg_img flex-shrink-0 relative w-[7.5rem] h-[7.5rem] rounded-lg overflow-hidden bg-surface">
                                            <span
                                                class="ph ph-image text-5xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-secondary"></span>

                                            @if ($user->images)
                                                <img src="{{ asset('storage/' . $user->images) }}" alt="User Image"
                                                    class="upload_img relative z-[1] w-full h-full object-cover">
                                            @else
                                                <img src="https://media.istockphoto.com/id/517998264/vector/male-user-icon.jpg?b=1&s=612x612&w=0&k=20&c=XQPO5sxBVwANqHTIVNli3gnXLCbmcpOn-23biJPkO3E="
                                                    alt="avatar"
                                                    class="upload_img relative z-[1] w-full h-full object-cover" />
                                            @endif
                                        </div>
                                        <div>
                                            <strong class="text-button">Upload File:</strong>
                                            <p class="caption1 text-secondary mt-1">JPG 120x120px</p>
                                            <div
                                                class="upload_file flex items-center gap-3 w-[220px] mt-3 px-3 py-2 border border-line rounded">
                                                <label for="uploadImage"
                                                    class="caption2 py-1 px-3 rounded bg-line whitespace-nowrap cursor-pointer">Choose
                                                    File</label>
                                                <input type="file" name="images" class="caption2 cursor-pointer" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm:grid-cols-2 gap-4 gap-y-5 mt-5">
                                    <div class="first-name">
                                        <label for="firstName" class="caption1 capitalize">Nama Depan <span
                                                class="text-red">*</span></label>
                                        <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="firstName"
                                            type="text" name="first_name" value="{{ $user->first_name }}"
                                            placeholder="Masukan Nama Depan" />
                                    </div>
                                    <div class="last-name">
                                        <label for="lastName" class="caption1 capitalize">Nama Belakang <span
                                                class="text-red">*</span></label>
                                        <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="lastName"
                                            type="text" name="last_name" value="{{ $user->last_name }}"
                                            placeholder="Masukan Nama Belakang" />
                                    </div>
                                    <div class="phone-number">
                                        <label for="phoneNumber" class="caption1 capitalize">Nomor Whatsapp <span
                                                class="text-red">*</span></label>
                                        <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="phoneNumber"
                                            type="text" name="no_telp" value="{{ $user->no_telp }}"
                                            placeholder="Masukan No Whatsapp" />
                                    </div>
                                    <div class="email">
                                        <label for="email" class="caption1 capitalize">Email</label>
                                        <input class="border-line bg-readonly mt-2 px-4 py-3 bg-gray w-full rounded-lg"
                                            id="email" type="email" value="{{ $user->email }}" readonly
                                            placeholder="Masukan Email Address" />
                                    </div>
                                </div>
                        </div>
                        {{-- Ganti Password --}}
                        <div class="filter-item text-content w-full p-7 mt-5 border border-line rounded-xl active">
                            <div class="heading5 pb-4">Ganti Password</div>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="new-pass">
                                    <label for="newPassword" class="caption1">Password Baru <span
                                            class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="newPassword"
                                        type="password" name="password" placeholder="Masukan Password Baru *" />
                                </div>
                                <div class="confirm-pass">
                                    <label for="confirmPassword" class="caption1">Konfirmasi Password <span
                                            class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="confirmPassword"
                                        type="password" name="password_confirmation"
                                        placeholder="Masukan Konfirmasi Password *" />
                                </div>
                            </div>
                            <div class="block-button lg:mt-10 mt-6">
                                <button class="button-main">Save Change</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
