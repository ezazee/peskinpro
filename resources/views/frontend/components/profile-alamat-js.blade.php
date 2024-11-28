<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

<script>
    function setDefaultAddress(addressId) {
        fetch(`/set-default-address/${addressId}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ id: addressId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert('Failed to set default address');
            }
        })
    }
</script>
