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
                                <span class="text-secondary">Transaksi</span>
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
                            <h6 class="heading6">Riwayat </h6>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
