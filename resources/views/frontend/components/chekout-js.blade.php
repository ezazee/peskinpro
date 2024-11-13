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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('shipping-form');
        
        async function submitForm() {
            const formData = new FormData(form);
            const pengirimanElement = document.getElementById('load');
            pengirimanElement.textContent = 'Mohon Tunggu Sedang Mengecek Ongkir...';

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
                    displayResults(results);
                    pengirimanElement.textContent = ''; 
                } else {
                    console.error('Error:', response.statusText); 
                    pengirimanElement.textContent = '-'; 
                }
            } catch (error) {
                console.error('Error:', error);
                pengirimanElement.textContent = '-'; 
            }
        }

        function displayResults(results) {
            const selectContainer = document.getElementById('nested-options-container');
            const selectElement = document.getElementById('ongkir-select');
            selectElement.innerHTML = ''; 

            selectContainer.style.display = 'block';

            const defaultOption = document.createElement('option');
            defaultOption.value = "";
            defaultOption.disabled = true;
            defaultOption.selected = true;
            defaultOption.textContent = "Pilih Layanan"; 
            selectElement.appendChild(defaultOption);

            for (const [courier, services] of Object.entries(results)) {
                services.forEach(service => {
                    service.costs.forEach(costDetail => {
                        costDetail.cost.forEach(cost => {
                            if (costDetail.service !== "T15" && costDetail.service !== "T25" && costDetail.service !== "T60" && costDetail.service !== "TRC" && costDetail.service !== "TRC") {
                                const option = document.createElement('option');
                                option.value = `${courier.toUpperCase()}|${costDetail.description}|${cost.value}|${cost.etd}|${costDetail.service}`;
                                option.textContent = `<option value="" disabled selected>Pilih Layanan</option>`;
                                option.textContent = ` ${costDetail.description} (${costDetail.service}) - Estimasi ${cost.etd} Hari: Rp${formatNumber(cost.value)} ${courier.toUpperCase()}`;
                                selectElement.appendChild(option);
                            }
                        });
                    });
                });
            }

            selectElement.addEventListener('change', function() {
                const selectedOption = selectElement.options[selectElement.selectedIndex];
                const selectedCost = parseFloat(selectedOption.value.split('|')[2]);
                const selectedestimated = selectedOption.value.split('|')[3];
                const subtotal = parseFloat(document.getElementById('subtotal').value);
                if (selectedOption.value) {
                        document.getElementById('pengiriman').textContent = `Rp${formatNumber(selectedCost)}`;
                        document.getElementById('shipping_cost').value = selectedCost;
                        document.getElementById('shipping_courier').value = selectedOption.value.split('|')[0];
                        document.getElementById('total').textContent = `Rp${formatNumber(subtotal+selectedCost)}`; 
                        document.getElementById('total_amount').value = subtotal+selectedCost;
                        document.getElementById('estimated_days').value = `${selectedestimated} Hari`;

                    } else {
                        document.getElementById('pengiriman').textContent = '-';
                        document.getElementById('shipping_cost').value = '';
                        document.getElementById('total_amount').value = '';
                        document.getElementById('estimated_days').value = '';
                    }
            });
        }

            function formatNumber(num) {
            return Number(num).toLocaleString('id-ID', {
                style: 'decimal',
                minimumFractionDigits: 0, 
                maximumFractionDigits: 0 
            });
        }

        submitForm();
    });
</script>


