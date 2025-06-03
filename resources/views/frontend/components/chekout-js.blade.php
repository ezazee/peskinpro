<script>
    function setDefaultAddress(addressId) {
        fetch(`/set-default-address/${addressId}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    id: addressId
                })
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

<style>
    #total {
        color: var(--primary);
    }

    .hidden{
        display: none !important;
    }
</style>
