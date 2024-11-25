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
                                        <tbody id="orderBody">
                                            <!-- Rows will be dynamically paginated -->
                                            <tr class="item duration-300 border-b border-line">
                                                <th scope="row" class="py-3 text-left">
                                                    <strong class="text-title">#2332</strong>
                                                </th>
                                                <td class="py-3">
                                                    <a href="#" class="product flex items-center gap-3">
                                                        <img src="" alt="Contrasting sweatshirt"
                                                            class="flex-shrink-0 w-12 h-12 rounded" />
                                                        <div class="info flex flex-col">
                                                            <strong class="product_name text-button"></strong>
                                                            <span class="product_tag caption1 text-secondary">10 ml</span>
                                                            <span class="product_tag caption1 text-primary">Lainnya..</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-3 price">Rp.500.000</td>
                                                <td class="py-3 text-right">
                                                    <span
                                                        class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-success text-success caption1 font-semibold">Completed</span>
                                                </td>
                                            </tr>
                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Pagination -->
                                <div class="pagination flex justify-center items-center mt-5">
                                    <button onclick="prevPage()"
                                        class="px-4 py-2 mx-1 bg-gray-200 rounded-lg hover:bg-primary hover:text-white">
                                        Prev
                                    </button>
                                    <span id="pageNumber" class="px-4 py-2 mx-1">1</span>
                                    <button onclick="nextPage()"
                                        class="px-4 py-2 mx-1 bg-gray-200 rounded-lg hover:bg-primary hover:text-white">
                                        Next
                                    </button>
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

    function paginateTable() {
        const tbody = document.getElementById('orderBody');
        const rows = tbody.getElementsByTagName('tr');
        const totalRows = rows.length;
        const totalPages = Math.ceil(totalRows / rowsPerPage);

        Array.from(rows).forEach((row, index) => {
            row.style.display = (index >= (currentPage - 1) * rowsPerPage &&
                index < currentPage * rowsPerPage) ? '' : 'none';
        });

        document.getElementById('pageNumber').textContent = `${currentPage}`;
    }

    function nextPage() {
        const tbody = document.getElementById('orderBody');
        const totalRows = tbody.getElementsByTagName('tr').length;
        const totalPages = Math.ceil(totalRows / rowsPerPage);

        if (currentPage < totalPages) {
            currentPage++;
            paginateTable();
        }
    }

    function prevPage() {
        if (currentPage > 1) {
            currentPage--;
            paginateTable();
        }
    }

    // Initialize pagination on load
    paginateTable();
</script>
