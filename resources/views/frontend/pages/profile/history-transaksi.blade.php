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
                    <div class="recent_order pt-5 px-5 pb-2 mt-5 border border-line rounded-xl">
                        <div class="flex justify-between">
                            <h6 class="heading6">Riwayat Transaksi</h6>
                        </div>
                        <div class="list overflow-x-auto w-full mt-5">
                            <table class="w-full max-[1400px]:w-[700px] max-md:w-[700px]">
                                <thead class="border-b border-line">
                                    <tr>
                                        <th scope="col"
                                            class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                            Nominal</th>
                                        <th scope="col"
                                            class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                            Deskripsi</th>
                                        <th scope="col"
                                            class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                            Status</th>
                                        <th scope="col"
                                            class="pb-3 text-right text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                            Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($affiliateHistory as $index => $item)
                                        <tr class="item duration-300 border-b border-line">
                                            <td>Rp {{ number_format(optional($item)->amount, 0, ',', '.') }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td class="">{{ optional($item)->status ?? '-' }}</td>
                                            <td class="py-3 text-right">{{ $item->created_at->format('d M Y') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                
                                {{-- <tbody>
                                    @foreach ($affiliateHistory as $index => $item)
                                    <tr class="item duration-300 border-b border-line">
                                        <td>Rp {{ isset($item->withdraw) ? number_format($item->withdraw->amount, 0, ',', '.') : '-' }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td class="">{{ isset($item->withdraw) ? $item->withdraw->status : '-' }}</td>
                                        <td class="py-3 text-right">{{ $item->created_at->format('d M Y') }}</td>
                                    </tr>
                                    @endforeach
                                </tbody> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
