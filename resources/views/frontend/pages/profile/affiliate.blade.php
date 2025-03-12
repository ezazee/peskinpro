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
                                <h5 class="heading5 mt-1">{{ 'Rp' . number_format($totalCommission, 0, ',', '.') }}</h5>
                            </div>
                            <span class="ph ph-money text-4xl"></span>
                        </div>
                        <a href="{{ route('affiliate.transaksi') }}">
                            <div
                                class="overview-item flex items-center justify-between p-8 border border-line rounded-lg box-shadow-xs">
                                <div class="counter">
                                    <span class="text-secondary mt-1 heading5">Transaksi</span>
                                </div>
                                <span class="ph ph-arrows-left-right text-4xl"></span>
                            </div>
                        </a>
                        <div
                            class="overview-item flex items-center justify-between p-5 border border-line rounded-lg box-shadow-xs">
                            <div class="counter">
                                <span class="text-secondary">Produk Terjual</span>
                                <h5 class="heading5 mt-1">{{ $totalProductsSold }}</h5>
                            </div>
                            <span class="ph ph-package text-4xl"></span>
                        </div>
                    </div>
                    <h6 class="mt-3">*Klik transaksi untuk pencairan dana</h6>
                    <div class="recent_order pt-5 px-5 pb-2 mt-5 border border-line rounded-xl">
                        <div class="flex justify-between">
                            <h6 class="heading6">Riwayat Komisi</h6>
                            <a href="{{ route('affiliatehistory.komisi') }}" class="link-text">Lihat Semua</a>
                        </div>
                        <div class="list overflow-x-auto w-full mt-5">
                            <table class="w-full max-[1400px]:w-[700px] max-md:w-[700px]">
                                <thead class="border-b border-line">
                                    <tr>
                                        <th scope="col"
                                            class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                            Produk</th>
                                        <th scope="col"
                                            class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                            User Referral</th>
                                        <th scope="col"
                                            class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                            Komisi</th>
                                        <th scope="col"
                                            class="pb-3 text-right text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                            Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($affiliateHistory as $index => $item)
                                    <tr class="item duration-300 border-b border-line">
                                        <td>
                                            @if($item->order && $item->order->products->isNotEmpty())
                                            {{ $item->order->products->pluck('name')->join(', ') }}
                                        @else
                                            Produk Tidak Ditemukan
                                        @endif
                                        </td>
                                        <td>{{ $item->referredUser->name ?? 'Tidak Ada Referral' }}</td>
                                        <td>Rp {{ number_format($item->affiliate->commission, 0, ',', '.') }}</td>
                                        <td class="py-3 text-right">{{ $item->created_at->format('d M Y') }}</td>
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
</div>
@endsection
