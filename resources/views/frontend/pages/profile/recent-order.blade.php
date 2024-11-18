@extends('frontend.master.master-app')
@section('content')
    <div class="my-account-block py-10 md:py-20">
        <div class="container">
            <div class="content-main flex gap-y-8 w-full max-md:flex-col lg:px-[60px] md:px-4">
                {{-- Bagian Kiri --}}
                {{-- @include('frontend.components.profile-user') --}}
                <div class="left md:w-1/3 w-full xl:pr-[3.125rem] lg:pr-[28px] md:pr-[16px]">
                    <div class="user-infor bg-surface md:px-8 px-5 md:py-10 py-6 md:rounded-[20px] rounded-xl">
                        <div class="heading flex flex-col items-center justify-center">
                            <div class="avatar">
                                <img src="https://media.istockphoto.com/id/517998264/vector/male-user-icon.jpg?b=1&s=612x612&w=0&k=20&c=XQPO5sxBVwANqHTIVNli3gnXLCbmcpOn-23biJPkO3E="
                                    alt="avatar" class="md:w-[140px] w-[120px] md:h-[140px] h-[120px] rounded-full" />
                            </div>
                            <div class="name heading6 mt-4 text-center">sssdsd</div>
                            <div class="mail heading6 font-normal normal-case text-secondary text-center mt-1">
                                ssssss</div>
                        </div>
                        <div class="menu-tab list-category w-full max-w-none lg:mt-10 mt-6">
                            <a href="{{ route('profile.index') }}"
                                class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white {{ request()->is('profile') ? 'active' : '' }}">
                                <span class="ph ph-house-line text-xl"></span>
                                <strong class="heading6">Dashboard</strong>
                            </a>
                            <a href="{{ route('profile.address') }}"
                                class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white mt-1.5 {{ request()->is('address') ? 'active' : '' }}">
                                <span class="ph ph-tag text-xl"></span>
                                <strong class="heading6">My Address</strong>
                            </a>

                            <a href="#!"
                                class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white mt-1.5 {{ request()->is('order') ? 'active' : '' }}">
                                <span class="ph ph-receipt text-xl"></span>
                                <strong class="heading6">Recent Orders</strong>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            </form>

                            <a href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white mt-1.5">
                                <span class="ph ph-sign-out text-xl"></span>
                                <strong class="heading6">Logout</strong>
                            </a>
                        </div>

                    </div>
                </div>

                {{-- Bagian Kanan --}}
                <div class="right list-filter w-full md:w-2/3 pl-2.5">
                    <div class="filter-item text-content w-full active">
                        {{-- Form Alamat Baru --}}
                        <div class="recent_order px-5 pb-2 mt-7 border border-line rounded-xl">


                            <!-- Search Bar -->
                            <div class="flex justify-between items-center pt-5 px-5">
                                <h6 class="heading6 mt-5">Recent Orders</h6>
                                <input type="text" id="searchInput" onkeyup="filterTable()"
                                    placeholder="Search orders..."
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
