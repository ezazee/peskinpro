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
                                <span class="text-secondary">Komisi</span>
                                <h5 class="heading5 mt-1">Rp.-0</h5>
                            </div>
                            <span class="ph ph-money text-4xl"></span>
                        </div>
                        <div
                            class="overview-item flex items-center justify-between p-5 border border-line rounded-lg box-shadow-xs">
                            <div class="counter">
                                <span class="text-secondary">Produk Terjual</span>
                                <h5 class="heading5 mt-1">0</h5>
                            </div>
                            <span class="ph ph-receipt-x text-4xl"></span>
                        </div>
                        <div
                            class="overview-item flex items-center justify-between p-5 border border-line rounded-lg box-shadow-xs">
                            <div class="counter">
                                <span class="text-secondary">Produk Terjual</span>
                                <h5 class="heading5 mt-1">0</h5>
                            </div>
                            <span class="ph ph-package text-4xl"></span>
                        </div>
                    </div>
                    <div class="recent_order pt-5 px-5 pb-2 mt-7 border border-line rounded-xl">
                        <div class="flex justify-between">
                            <h6 class="heading6">Riwayat Order</h6>
                            <a href="{{ route('recent_order') }}" class="link-text">Lihat Semua</a>
                        </div>
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
                                            <a href="product-default.html" class="product flex items-center gap-3">
                                                <img src="{{ asset('storage/' . $firstProduct->front_image) }}"
                                                    alt="Contrasting sweatshirt"
                                                    class="flex-shrink-0 w-12 h-12 rounded" />
                                                <div class="info flex flex-col">
                                                    <strong
                                                        class="product_name text-button">{{ Str::limit($firstProduct->name, 20) }}</strong>
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
                            @if (
                            $item->status == 'pending' &&
                            optional($item->invoice)->payment_status == 'unpaid' &&
                            optional($item->invoice)->bukti_tf == '')
                            <a
                                href="{{ route('payment', ['invoice_number' => optional($item->invoice)->invoice_number ?? '']) }}">
                                <span
                                    class="tag px-4 py-1.5 rounded-full text-white bg-opacity-10 bg-primary text-black caption1 font-semibold">Bayar
                                    Sekarang</span>
                            </a>
                            @elseif ($item->status == 'pending' && optional($item->invoice)->payment_status == 'unpaid')
                            <span
                                class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-yellow text-yellow caption1 font-semibold">Pending</span>
                            @elseif ($item->status == 'processing')
                            <span
                                class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-yellow text-yellow caption1 font-semibold">Processing</span>
                            @elseif ($item->status == 'shipping')
                            <span
                                class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-yellow text-yellow caption1 font-semibold">Shipping</span>
                            @elseif ($item->status == 'completed')
                            <span
                                class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-success text-success caption1 font-semibold">Completed</span>
                            @elseif ($item->status == 'return')
                            <span
                                class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-success text-success caption1 font-semibold">Completed</span>
                            @elseif ($item->status == 'refund')
                            <span
                                class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-danger text-danger caption1 font-semibold">Refund</span>
                            @else
                            <span
                                class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-danger text-danger caption1 font-semibold">Canceled</span>
                            @endif
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
@endsection
