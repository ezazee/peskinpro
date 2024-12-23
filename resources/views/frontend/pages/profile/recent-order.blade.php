@extends('frontend.master.master-app')
@section('content')
    <div class="my-account-block py-10 md:py-20">
        <div class="container">
            <div class="content-main flex gap-y-8 w-full max-md:flex-col lg:px-[60px] md:px-4">
                {{-- Bagian Kiri --}}
                @include('frontend.components.profile-user')
                {{-- Bagian Kanan --}}
                <div class="right list-filter w-full md:w-2/3 pl-2.5">
                    <div class="filter-item text-content w-full active">
                        <div class="filter-item tab_order text-content overflow-hidden w-full p-7 border border-line rounded-xl"
                            data-item="orders">
                            <!-- Search Bar -->
                            <div class="flex justify-between items-center px-5">
                                <h6 class="heading6">Recent Orders</h6>
                                <input type="text" id="searchInput" onkeyup="filterTable()" placeholder="Search orders..."
                                    class="w-1/2 px-4 py-2 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                            <div class="w-full overflow-x-auto">
                                <div class="menu-tab relative grid grid-cols-5 max-lg:w-[500px] max-md:max-w-max border-b border-line mt-3">
                                    @foreach ($tabs as $key => $label)
                                        <button 
                                            class="tab-item relative px-3 py-2.5 text-button text-secondary text-center duration-300 hover:text-black 
                                            {{ $activeTab === $key ? 'active' : '' }}" 
                                            data-tab="{{ $key }}"
                                            onclick="window.location.href='?tab={{ $key }}'">
                                            {{ $label }}
                                        </button>
                                    @endforeach
                                </div>
                            </div>
                            
                            <div class="list_order">
                                @foreach ($orders as $item)
                                    <div class="order_item mt-5 border border-line rounded-lg box-shadow-xs">
                                        <div class="flex flex-wrap items-center justify-between gap-4 p-5 border-b border-line">
                                            <div class="flex items-center gap-2">
                                                <strong class="text-title">Order Number:</strong>
                                                <strong class="order_number text-button uppercase">#{{ $item->order_number }}</strong>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <strong class="text-title">Order status:</strong>
                                                <p class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-purple text-purple caption1 font-semibold">
                                                    {{ $item->status }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="list_prd px-5">
                                            @if ($item->products->isNotEmpty())
                                                @php
                                                $firstProduct = $item->products->first();
                                                $firstSize = $firstProduct->sizes->first();
                                                @endphp
                                                <div class="prd_item flex flex-wrap items-center justify-between gap-3 py-5 border-b border-line">
                                                    <a href="product-default.html" class="flex items-center gap-5">
                                                        <div class="bg-img flex-shrink-0 md:w-[100px] w-20 aspect-square rounded-lg overflow-hidden">
                                                            <img src="{{ asset('storage/' . $firstProduct->front_image) }}" alt="Product Image" class="w-full h-full object-cover" />
                                                        </div>
                                                        <div>
                                                            <div class="prd_name text-title">{{ $firstProduct->name }}</div>
                                                            <div class="caption1 text-secondary mt-2">
                                                                <span class="prd_size uppercase">{{ $firstSize->size }} ml</span>
                                                                <span>/</span>
                                                                <span class="prd_color capitalize">{{ $firstProduct->category->name }}</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="text-title">
                                                        @foreach ($item->products as $it)
                                                            <span class="prd_quantity">{{ $it->pivot->quantity }}</span>
                                                            <span> X </span>
                                                            <span class="prd_price">Rp{{ number_format($it->pivot->harga, 0, ',', '.') }}</span>
                                                        @endforeach
                                                    </div>
                                                </div>
                            
                                                @if ($item->status == 'pending' && 
                                                    optional($item->invoice)->payment_status == 'unpaid' && 
                                                    optional($item->invoice)->bukti_tf == '')
                                                    <!-- Tombol Bayar Sekarang -->
                                                    <div class="prd_item flex justify-center py-5 border-b border-line">
                                                        <a href="{{ route('payment', ['invoice_number' => optional($item->invoice)->invoice_number ?? '']) }}" 
                                                        class="button-main text-white font-semibold rounded-md px-5 py-2 w-full text-center hover:bg-blue-700">
                                                        Bayar Sekarang
                                                        </a>
                                                    </div>
                                                @elseif ($item->status == 'canceled')
                                                    <!-- Tombol dengan Status Dibatalkan -->
                                                    <div class="prd_item flex justify-center py-5 border-b border-line">
                                                        <button disabled 
                                                        class="bg-red text-white font-semibold rounded-md px-5 py-2 w-full text-center bg-red-500 cursor-not-allowed">
                                                        Order Dibatalkan
                                                        </button>
                                                    </div>
                                                @else
                                                    <!-- Tombol Detail -->
                                                    <div class="prd_item flex justify-center py-5 border-b border-line">
                                                        <a href="{{ route('detail-order', ['order_number' => $item->order_number]) }}"
                                                        class="button-main text-primary font-semibold rounded-md px-5 py-2 w-full text-center hover:bg-blue-700">
                                                        Detail
                                                        </a>
                                                    </div>
                                                @endif

                                                @if ($item->products->count() > 1)
                                                    <div class="prd_item flex justify-center py-5 border-b border-line">
                                                        <a href="{{ route('detail-order', ['order_number' => $item->order_number]) }}"
                                                        class="bg-light-primary text-primary font-semibold rounded-md px-5 py-2 w-full text-center hover:bg-blue-700">
                                                        +1 Produk Lainnya
                                                        </a>
                                                    </div>
                                                @endif

                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.components.modal-detail-order')
@endsection
<script>
    const rowsPerPage = 5;
    let currentPage = 1;

    function filterTable() {
        const input = document.getElementById('searchInput').value.toLowerCase();
        const table = document.getElementById('orderTable');
        const rows = table.getElementsByTagName('tr');

        Array.from(rows).forEach((row, index) => {
            if (index === 0) return; // Skip header row
            const cells = row.getElementsByTagName('td');
            const match = Array.from(cells).some(cell =>
                cell.textContent.toLowerCase().includes(input)
            );
            row.style.display = match ? '' : 'none';
        });
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.menu-tab .tab-item');

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Hapus class active dari semua tab
                tabs.forEach(t => t.classList.remove('active'));

                // Tambahkan class active pada tab yang diklik
                this.classList.add('active');
            });
        });
    });
</script>
