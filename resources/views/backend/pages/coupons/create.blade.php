@extends('backend.master.master-app')
@section('title', 'Add Coupons')
@section('content')

<div class="container-xxl">
    <form action="{{ route('coupons.add') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Date Coupons</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="start-date" class="form-label text-dark">Start Date</label>
                            <input type="date" name="start_date" class="form-control flatpickr-input active" placeholder="dd-mm-yyyy">
                        </div>
                        <div class="mb-3">
                            <label for="end-date" class="form-label text-dark">End Date</label>
                            <input type="date" name="end_date" class="form-control flatpickr-input active" placeholder="dd-mm-yyyy">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Coupon Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="coupons-code" class="form-label">Coupons Code</label>
                                    <input type="text" id="coupons-code" name="coupons_code" class="form-control" placeholder="Enter Code">
                                </div>
                            </div>                            
                            <div class="col-lg-4">
                                <label for="product-categories" class="form-label">Minimum Purchase</label>
                                <input type="number" name="minimum_purchase" class="form-control" placeholder="Minimum Purchase">
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="coupons-limits" class="form-label">Coupons Limits</label>
                                    <input type="number" name="limits" class="form-control" placeholder="Limits number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="coupons-code" class="form-label">Type</label>
                                    <select id="coupons-code" name="type" class="form-control">
                                        <option value="" disabled selected>Pilih Jenis Voucher</option>
                                        <option value="fixed_amount">Potongan Tetap</option>
                                        <option value="free_shipping">Gratis Ongkir</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Scope -->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="scope" class="form-label">Scope</label>
                                    <select id="scope" name="scope" class="form-control">
                                        <option value="all">Semua Pengguna</option>
                                        <option value="karyawan">Karyawan</option>
                                        <option value="cities">Kota Tertentu</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Pilih Kota (tampil hanya saat scope = cities) -->
                            <div class="col-lg-12" id="cities-container" style="display: none;">
                                <div class="mb-3">
                                    <label for="cities" class="form-label">Pilih Kota</label>
                                    <select id="cities" name="cities[]" class="form-control" multiple>
                                        @foreach($cities as $city)
                                            <option value="{{ strtolower($city) }}">{{ $city }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12" id="cities-container" style="display: none;">
                                <input type="text" name="cities[]" class="form-control" placeholder="Kota Yang di Pilih">
                                <div class="mb-3">
                                    <label for="cities" class="form-label">Pilih Kota</label>
                                    <select id="cities" name="cities[]" class="form-control" multiple>
                                        @foreach($cities as $city)
                                            <option value="{{ strtolower($city) }}">{{ $city }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="">
                                    <label class="form-label">Discount Value</label>
                                    <input type="text" name="jumlah" class="form-control" placeholder="Enter discount value">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-top">
                        <button class="btn btn-primary" type="submit">Create Coupon</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var couponInput = $('#coupons-code');
        
        couponInput.on('input', function() {
            var currentValue = couponInput.val();
            if (!currentValue.startsWith('PE')) {
                couponInput.val('PE' + currentValue.substring(2));
            }
        });

        if (!couponInput.val().startsWith('PE')) {
            couponInput.val('PE');
        }
    });
</script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const scopeSelect = document.getElementById('scope');
        const citiesContainer = document.getElementById('cities-container');
        const citiesSelect = $('#cities');

        citiesSelect.select2({
            placeholder: "Cari dan pilih kota",
            width: '100%'
        });

        function toggleCitiesSelect() {
            if (scopeSelect.value === 'cities') {
                citiesContainer.style.display = 'block';
            } else {
                citiesContainer.style.display = 'none';
                citiesSelect.val(null).trigger('change');
            }
        }

        toggleCitiesSelect();

        scopeSelect.addEventListener('change', toggleCitiesSelect);
    });
</script>
@endsection
