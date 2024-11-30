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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('shipping-form');
        const loadingOverlay = document.getElementById('loading-overlay'); // Reference to the loader

        async function submitForm() {
            const formData = new FormData(form);
            loadingOverlay.classList.remove('hidden');

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });

                if (response.ok) {
                    const results = await response.json();
                    loadingOverlay.classList.add('hidden');
                    displayResults(results);
                } else {
                    console.error('Error:', response.statusText);
                }
            } catch (error) {
                console.error('Error:', error);
            }
        }

        function displayResults(results) {
            const selectContainer = document.getElementById('nested-options-container');
            const selectElement = document.getElementById('ongkir-select');
            selectElement.innerHTML = ''; // Clear previous results

            selectContainer.style.display = 'block';

            // Add a default 'Pilih Layanan' option
            const defaultOption = document.createElement('option');
            defaultOption.value = "";
            defaultOption.disabled = true;
            defaultOption.selected = true;
            defaultOption.textContent = "Pilih Layanan";
            selectElement.appendChild(defaultOption);

            // Loop through the results and display each service
            for (const [courier, services] of Object.entries(results)) {
                const groupOption = document.createElement('optgroup');
                groupOption.label = `${courier.toUpperCase()}`;

                services.forEach(service => {
                    service.costs.forEach(costDetail => {
                        costDetail.cost.forEach(cost => {
                            // Filter out specific services (e.g., "T15", "T25")
                            if (!["T15", "T25", "T60", "TRC"].includes(costDetail
                                    .service)) {
                                const option = document.createElement('option');
                                option.value =
                                    `${courier.toUpperCase()}|${costDetail.description}|${cost.value}|${cost.etd}|${costDetail.service}`;
                                option.textContent =
                                    `${costDetail.description} (${costDetail.service}) - Estimasi ${cost.etd} Hari: Rp${formatNumber(cost.value)} ${courier.toUpperCase()}`;
                                groupOption.appendChild(option);
                            }
                        });
                    });
                });

                selectElement.appendChild(groupOption);
            }

            // Handle the change event to update the total cost and shipping details
            selectElement.addEventListener('change', function() {
                const selectedOption = selectElement.options[selectElement.selectedIndex];
                const selectedCost = parseFloat(selectedOption.value.split('|')[2]);
                const selectedEstimated = selectedOption.value.split('|')[3];
                const subtotal = parseFloat(document.getElementById('subtotal').value);

                if (selectedOption.value) {
                    const shippingCost = `Rp${formatNumber(selectedCost)}`;
                    const totalAmount = subtotal + selectedCost;
                    const formattedTotal = `Rp${formatNumber(totalAmount)}`;

                    document.getElementById('pengiriman').textContent = shippingCost;
                    document.getElementById('shipping_cost').value = selectedCost;
                    document.getElementById('shipping_courier').value = selectedOption.value.split('|')[
                        0];
                    document.getElementById('total').textContent = formattedTotal;
                    document.getElementById('total_amount').value = totalAmount;
                    document.getElementById('estimated_days').value = `${selectedEstimated} Hari`;
                } else {
                    document.getElementById('pengiriman').textContent = '-';
                    document.getElementById('shipping_cost').value = '';
                    document.getElementById('total_amount').value = '';
                    document.getElementById('estimated_days').value = '';
                }
            });
        }

        function formatNumber(number) {
            return number.toLocaleString('id-ID'); // Formats the number as Indonesian currency
        }

        submitForm();
    });
</script>


<style>
    #total {
        color: var(--primary);
    }

    .hidden{
        display: none !important;
    }
</style>
