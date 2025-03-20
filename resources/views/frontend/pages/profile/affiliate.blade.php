@extends('frontend.master.master-app')

@section('content')
    <div class="my-account-block md:py-20 py-10">
        <div class="container">
            <div class="content-main lg:px-[60px] md:px-4 flex gap-y-8 max-md:flex-col w-full">
                {{-- Bagian Kiri --}}
                @include('frontend.components.profile-user')
                {{-- Bagian Kanan --}}
                <div class="right list-filter md:w-2/3 w-full pl-2.5">
                    @if (in_array(auth()->user()->role->name, ['Affiliate']) && auth()->user()->affiliate_status === 'approve')
                        <div class="filter-item text-content w-full active">
                            {{-- Main Dashboard --}}
                            <div class="overview grid sm:grid-cols-3 gap-5">
                                <div
                                    class="overview-item flex items-center justify-between p-5 border border-line rounded-lg box-shadow-xs">
                                    <div class="counter">
                                        <span class="text-secondary">Komisi</span>
                                        <h5 class="heading5 mt-1">{{ 'Rp' . number_format($totalCommission, 0, ',', '.') }}
                                        </h5>
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
                                                        @if ($item->order && $item->order->products->isNotEmpty())
                                                            {{ $item->order->products->pluck('name')->join(', ') }}
                                                        @else
                                                            Produk Tidak Ditemukan
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->referredUser->name ?? 'Tidak Ada Referral' }}</td>
                                                    <td>Rp {{ number_format($item->affiliate->commission, 0, ',', '.') }}
                                                    </td>
                                                    <td class="py-3 text-right">{{ $item->created_at->format('d M Y') }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="container flex justify-center items-center"
                            style="padding-top: 50px; padding-bottom: 50px;">
                            <div class="bg-white shadow-lg rounded-lg p-8 text-center max-w-md w-full">
                                <div class="flex justify-center">

                                    <svg style="width: 75px; height:75px;" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 122.88 122.88"
                                        style="enable-background:new 0 0 122.88 122.88" xml:space="preserve">
                                        <style type="text/css">
                                            <![CDATA[
                                            .st0 {
                                                fill-rule: evenodd;
                                                clip-rule: evenodd;
                                                fill: #FF7900;
                                            }
                                            ]]>
                                        </style>
                                        <g>
                                            <path class="st0"
                                                d="M61.44,0c33.93,0,61.44,27.51,61.44,61.44c0,33.93-27.51,61.44-61.44,61.44C27.51,122.88,0,95.37,0,61.44 C0,27.51,27.51,0,61.44,0L61.44,0z M54.22,37.65c0-9.43,14.37-9.44,14.37,0.02v25.75l16.23,8.59c0.08,0.04,0.16,0.09,0.23,0.15 l0.14,0.1c7.54,4.94,0.53,16.81-7.53,12.15l-0.03-0.02L57.99,73.87c-2.3-1.23-3.79-3.67-3.79-6.29l0.01,0L54.22,37.65L54.22,37.65z" />
                                        </g>
                                    </svg>

                                </div>
                                <h2 class="text-2xl font-semibold text-green-600 mt-4">Akunmu Sedang Ditinjau!</h2>
                                <p class="text-gray-600 mt-2">Akunmu Akan Di Verifikasi Selama Kurang Lebih 3 Hari Lamanya.
                                </p>
                                <p class="text-gray-600 mt-2">Silahkan Menunggu Konfirmasi Akun Affiliate dari Team
                                    PESKINPRO ID.</p>
                                <p class="text-sm text-gray-500 mt-6">Jika ada pertanyaan, hubungi tim support kami.</p>


                                <div style="margin-top: 45px; margin-bottom: 45px">
                                    <button class="button-main">
                                        <a href="#" class="font-bold py-2 px-4 rounded-lg">
                                            Contact Customer Service
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
