<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Check Shipping Cost</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Check Shipping Cost</h2>
    <form action="{{ route('check_ongkir') }}" method="POST">
        @csrf <!-- Laravel CSRF token -->

        <!-- Province Dropdown -->
        <label for="province">Province:</label>
        <select name="province" id="province" required>
            <option value="">Select a province</option>
            @foreach ($provinces as $province_id => $province_name)
                <option value="{{ $province_id }}">{{ $province_name }}</option>
            @endforeach
        </select>
        <br><br>

        <!-- City Dropdown (Dynamically populated) -->
        <label for="city_destination">City Destination:</label>
        <select name="city_destination" id="city_destination" required>
            <option value="">Select a city</option>
        </select>
        <br><br>

        <!-- Weight Input -->
        <label for="weight">Weight (in grams):</label>
        <input type="number" name="weight" id="weight" placeholder="Enter weight in grams" required>
        <br><br>

        <!-- Courier Input -->
        {{-- <label for="courier">Courier (e.g., jne, pos, tiki):</label>
        <input type="text" name="courier" id="courier" placeholder="Enter courier service" required>
        <br><br> --}}

        <!-- Submit Button -->
        <button type="submit">Check Shipping Cost</button>
    </form>

    <!-- jQuery for fetching cities based on selected province -->
    <script>
        $(document).ready(function() {
            $('#province').on('change', function() {
                var provinceId = $(this).val();
                if (provinceId) {
                    $.ajax({
                        url: '/cities/' + provinceId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#city_destination').empty();
                            $('#city_destination').append('<option value="">Select a city</option>');
                            $.each(data, function(key, value) {
                                $('#city_destination').append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('#city_destination').empty();
                }
            });
        });
    </script>
</body>
</html>
