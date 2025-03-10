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
                    <div class="overview grid sm:grid-cols-2 gap-5">
                        <div
                            class="overview-item flex items-center justify-between p-5 border border-line rounded-lg box-shadow-xs">
                            <div class="counter">
                                <span class="text-secondary">Komisi</span>
                                <h5 class="heading5 mt-1">{{ 'Rp' . number_format($totalCommission, 0, ',', '.') }}</h5>
                            </div>
                            <span class="ph ph-money text-4xl"></span>
                        </div>
                        <a href="{{ route('affiliatehistory.transaksi') }}">
                            <div
                                class="overview-item flex items-center justify-between p-8 border border-line rounded-lg box-shadow-xs">
                                <div class="counter">
                                    <span class="text-secondary mt-1 heading5">History</span>
                                </div>
                                <span class="ph ph-receipt-x text-4xl"></span>
                            </div>
                        </a>
                    </div>
                    <span class="mt-3">*Isi Data untuk pencairan</span><br>
                    <span class="mt-3">*Min Rp.50.000</span>
                    <div class="filter-item text-content w-full p-7 mt-5 border border-line rounded-xl active">
                        <form action="{{ route('affiliate.Withdraw') }}" method="POST">
                            @csrf
                            <div class="heading5 pb-4">Pencairan Dana</div>
                            <div class="first-name">
                                <label for="nominal" class="caption1 capitalize">Nominal<span
                                        class="text-red">*</span></label>
                                <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" type="number"
                                    name="nominal" placeholder="Nominal" />
                            </div>
                            <div class="grid sm:grid-cols-2 gap-4 gap-y-5 mt-5">
                                <div class="first-name">
                                    <label for="paymentMethod" class="caption1 capitalize">
                                        Bank / E-wallet<span class="text-red">*</span>
                                    </label>
                                    <select class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="paymentMethod" name="payment_method">
                                        <option value="" disabled selected>Pilih Bank / E-Wallet</option>
                                        <option value="bca">BCA</option>
                                        <option value="bri">BRI</option>
                                        <option value="mandiri">Mandiri</option>
                                        <option value="bni">BNI</option>
                                        <option value="gopay">GoPay</option>
                                        <option value="ovo">OVO</option>
                                        <option value="dana">Dana</option>
                                        <option value="shopeepay">ShopeePay</option>
                                    </select>
                                </div>                                
                                <div class="last-name">
                                    <label for="lastName" class="caption1 capitalize">Nama Rekening <span
                                            class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" type="text"
                                        name="account_name"
                                        placeholder="Masukan Nama Rekening" />
                                </div>
                                <div class="phone-number">
                                    <label for="phoneNumber" class="caption1 capitalize">Nomor Rekening <span
                                            class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" type="text"
                                        name="account_number" placeholder="Masukan Nomor Rekening" />
                                </div>
                                <div class="email">
                                    <label class="caption1 capitalize">Password</label>
                                    <input class="border-line mt-2 px-4 py-3 bg-gray w-full rounded-lg" type="password" name="password"
                                        placeholder="Masukan Password" />
                                </div>
                            </div>
                            <div class="block-button lg:mt-10 mt-6">
                                <button class="button-main">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
