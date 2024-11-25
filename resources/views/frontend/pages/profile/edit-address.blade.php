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
                    <div class="filter-item text-content w-full p-7 mt-5 border border-line rounded-xl active">
                        <form action="{{ route('updateAddress', $alamat->id) }}" method="POST">
                            @csrf
                            <div class="grid sm:grid-cols-2 gap-4 gap-y-5 flex-wrap">
                                <!-- Nama Penerima -->
                                <div>
                                    <input class="border-line px-4 py-3 w-full rounded-lg" id="namaPenerima" type="text"
                                        placeholder="Nama Penerima" value="{{ $alamat->penerima }}" name="penerima" />
                                </div>

                                <!-- Label Alamat -->
                                <div>
                                    <input class="border-line px-4 py-3 w-full rounded-lg" id="lastName" type="text"
                                        placeholder="Label Alamat" value="{{ $alamat->label }}" name="label"/>
                                </div>

                                <select name="province" id="province" class="border-line px-4 py-3 w-full rounded-lg">
                                    <option value="">Select a province</option>
                                    @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}"
                                        {{ $alamat->province_id == $province->id ? 'selected' : '' }}>
                                        {{ $province->name }}
                                    </option>
                                    @endforeach
                                </select>
                                <select name="city_destination" id="city_destination"
                                    class="border-line px-4 py-3 w-full rounded-lg">
                                    <option value="">Select a city</option>
                                    @foreach ($cities as $city)
                                    <option value="{{ $city->city_id }}"
                                        {{ $alamat->city_id == $city->city_id ? 'selected' : '' }}>
                                        {{ $city->name }}
                                    </option>
                                    @endforeach
                                </select>

                                <!-- Alamat and Kode Pos fields -->
                                <div class="grid grid-cols-3 gap-4 col-span-full">
                                    <!-- Alamat field (2/3 width) -->
                                    <div class="col-span-2">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="apartment"
                                            type="text" value="{{ $alamat->street }}" name="street" />
                                    </div>

                                    <!-- Kode Pos field (1/3 width) -->
                                    <div class="col-span-1">
                                        <input class="border-line px-4 py-3 w-full rounded-lg" id="postal" type="text"
                                            placeholder="Kode Pos" value="{{ $alamat->postal_code }}" name="postal_code" />
                                    </div>
                                </div>

                                <!-- No WhatsApp -->
                                <div class="col-span-full">
                                    <input class="border-line px-4 py-3 w-full rounded-lg" id="whatsapp" type="number"
                                        placeholder="No WhatsApp" value="{{ $alamat->no_telp }}" name="no_telp"/>
                                </div>

                            </div>

                            <!-- Submit Button -->
                            <div class="block-button md:mt-10 mt-6">
                                <button class="button-main w-full">Update Alamat</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#province').on('change', function() {
            var provinceId = $(this).val();

            // Reset city dropdown when province changes
            $('#city_destination').empty();
            $('#city_destination').append('<option value="">Select a city</option>');

            if (provinceId) {
                // Fetch new cities for the selected province
                $.ajax({
                    url: '/cities/' + provinceId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $.each(data, function(key, value) {
                            $('#city_destination').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                    error: function() {
                        alert('Failed to load cities. Please try again.');
                    }
                });
            }
        });
    });
</script>

@endsection
