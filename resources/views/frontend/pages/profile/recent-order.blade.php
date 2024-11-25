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
                        {{-- Form Alamat Baru --}}
                        <div class="recent_order px-5 pb-2 mt-7 border border-line rounded-xl">
                            <!-- Search Bar -->
                            <div class="flex justify-between items-center pt-5 px-5">
                                <h6 class="heading6 mt-5">Recent Orders</h6>
                                <input type="text" id="searchInput" onkeyup="filterTable()" placeholder="Search orders..."
                                    class="w-1/2 px-4 py-2 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>

                            <!-- Order List -->
                            <div class="recent_order pt-5 px-5 pb-2 mt-7 border border-line rounded-xl">
                                <div class="list overflow-x-auto w-full mt-5">
                                    <table id="orderTable" class="w-full max-[1400px]:w-[700px] max-md:w-[700px]">
                                        <thead class="border-b border-line">
                                            <tr>
                                                <th scope="col"
                                                    class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                                    Order ID</th>
                                                <th scope="col"
                                                    class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                                    Produk</th>
                                                <th scope="col"
                                                    class="pb-3 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                                    Harga Total</th>
                                                <th scope="col"
                                                    class="pb-3 text-right text-sm font-bold uppercase text-secondary whitespace-nowrap">
                                                    Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $item)
                                            <tr class="item duration-300 border-b border-line">
                                                <th scope="row" class="py-3 text-left">
                                                    <strong class="text-title">#{{ $item->order_number }}</strong>
                                                </th>
                                                <td class="py-3">
                                                    @if ($item->products->isNotEmpty())
                                                    @php
                                                    $firstProduct = $item->products->first();
                                                    $firstSize = $firstProduct->sizes->first();
                                                    @endphp
                                                    <a href="product-default.html" class="product flex items-center gap-3">
                                                        <img src="{{ asset('storage/' . $firstProduct->front_image) }}"
                                                            alt="Contrasting sweatshirt"
                                                            class="flex-shrink-0 w-12 h-12 rounded" />
                                                        <div class="info flex flex-col">
                                                            <strong
                                                                class="product_name text-button">{{ $firstProduct->name }}</strong>
                                                            <span
                                                                class="product_tag caption1 text-secondary">{{ $firstProduct->category->name }}
                                                                ,
                                                                {{ $firstSize->size }} ml
                                                            </span>
                                                            @if ($item->products->count() > 1)
                                                            <span class="product_tag caption1 text-primary">Lainnya
                                                                ..</span>
                                                            @endif
                                                        </div>
                                                    </a>
                                                    @endif
                                </div>
                                </a>
                                </td>
                                <td class="py-3 price">Rp{{ number_format($item->total_amount, 0, ',', '.') }}</td>
                                <td class="py-3 text-right">
                                    @if (
                                    $item->status == 'pending' &&
                                    optional($item->invoice)->payment_status == 'unpaid' &&
                                    optional($item->invoice)->bukti_tf == '')
                                    <a
                                        href="{{ route('payment', ['invoice_number' => optional($item->invoice)->invoice_number ?? '']) }}">
                                        <span
                                            class="tag px-4 py-1.5 rounded-full text-white bg-opacity-10 bg-primary text-black caption1 font-semibold">Bayar
                                            Sekarang</span>
                                    </a>
                                    @elseif ($item->status == 'pending' && optional($item->invoice)->payment_status == 'unpaid')
                                    <span
                                        class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-yellow text-yellow caption1 font-semibold">Pending</span>
                                    @elseif ($item->status == 'processing')
                                    <span
                                        class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-yellow text-yellow caption1 font-semibold">Processing</span>
                                    @elseif ($item->status == 'shipping')
                                    <span
                                        class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-yellow text-yellow caption1 font-semibold">Shipping</span>
                                    @elseif ($item->status == 'completed')
                                    <span
                                        class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-success text-success caption1 font-semibold">Completed</span>
                                    @elseif ($item->status == 'return')
                                    <span
                                        class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-success text-success caption1 font-semibold">Completed</span>
                                    @elseif ($item->status == 'refund')
                                    <span
                                        class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-danger text-danger caption1 font-semibold">Refund</span>
                                    @else
                                    <span
                                        class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-danger text-danger caption1 font-semibold">Canceled</span>
                                    @endif
                                </td>
                                </tr>
                                @endforeach
                                </tbody>
                                    </table>
                                </div>

                                <!-- Pagination -->
                                <div class="pagination flex justify-center items-center mt-5">
                                    @if ($orders->onFirstPage())
                                        <button class="px-4 py-2 mx-1 bg-gray-200 rounded-lg cursor-not-allowed">Prev</button>
                                    @else
                                        <a href="{{ $orders->previousPageUrl() }}" class="px-4 py-2 mx-1 bg-gray-200 rounded-lg hover:bg-primary hover:text-white">Prev</a>
                                    @endif
                                
                                    <span class="px-4 py-2 mx-1">{{ $orders->currentPage() }}</span>
                                
                                    @if ($orders->hasMorePages())
                                        <a href="{{ $orders->nextPageUrl() }}" class="px-4 py-2 mx-1 bg-gray-200 rounded-lg hover:bg-primary hover:text-white">Next</a>
                                    @else
                                        <button class="px-4 py-2 mx-1 bg-gray-200 rounded-lg cursor-not-allowed">Next</button>
                                    @endif
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
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
