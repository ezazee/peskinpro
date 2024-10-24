<!-- Header Menu -->
<div class="header-menu style-one relative bg-white w-full md:h-[74px] h-[56px]">
    <div class="container mx-auto h-full">
        <div class="header-main flex justify-between h-full">
            <div class="menu-mobile-icon lg:hidden flex items-center">
                <i class="icon-category text-2xl"></i>
            </div>
            <a href="/" class="flex items-center">
                <img src="{{ asset('frontend/assets/images/logo/peskin.png') }}" alt="PeskinPro" width="60px"
                    height="60px">
            </a>
            <div class="menu-main h-full max-lg:hidden">
                <ul class="flex items-center gap-8 h-full">
                    <li class="h-full relative">
                        <a href="/"
                            class="text-button-uppercase duration-300 h-full flex items-center justify-center gap-1 active">
                            Home </a>
                    </li>

                    <li class="h-full">
                        <a href="/shop"
                            class="text-button-uppercase duration-300 h-full flex items-center justify-center"> Best
                            Seller Product
                        </a>
                        <div class="mega-menu absolute top-[74px] left-0 bg-white w-screen">
                            <div class="container">
                                <div class="flex justify-around py-8">
                                    <div class="recent-product">
                                        <div class="text-button-uppercase pb-2">Best Seller</div>
                                        <div class="list-product hide-product-sold flex overflow-x-auto mt-3 gap-2">
                                            <div class="product-item grid-type w-32">
                                                <!-- Ubah width menjadi lebih kecil -->
                                                <div class="product-main cursor-pointer block">
                                                    <div
                                                        class="product-thumb bg-white relative overflow-hidden rounded-lg">
                                                        <!-- Kurangi ukuran border-radius -->
                                                        <div class="product-img w-full h-32">
                                                            <!-- Sesuaikan tinggi produk -->
                                                            <img class="w-full h-full object-cover duration-300"
                                                                src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}"
                                                                alt="img" />
                                                            <img class="w-full h-full object-cover duration-300"
                                                                src="{{ asset('frontend/assets/images/product/peskin/contoh-hover1.jpg') }}"
                                                                alt="img" />
                                                        </div>
                                                    </div>
                                                    <div class="product-infor mt-2">
                                                        <div class="product-name text-sm">Faux-leather trousers</div>
                                                        <!-- Ukuran teks lebih kecil -->
                                                        <div class="product-price-block flex items-center gap-1 mt-1">
                                                            <div class="product-price text-sm">Rp.5150</div>
                                                            <!-- Ukuran harga lebih kecil -->
                                                            <div class="product-origin-price text-xs text-secondary2">
                                                                <del>$50.00</del>
                                                            </div>
                                                            <div
                                                                class="product-sale text-xs bg-primary text-white px-2 py-0.5 rounded-full">
                                                                -20%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tambahkan produk lainnya -->
                                            <div class="product-item grid-type w-32">
                                                <!-- Ubah width menjadi lebih kecil -->
                                                <div class="product-main cursor-pointer block">
                                                    <div
                                                        class="product-thumb bg-white relative overflow-hidden rounded-lg">
                                                        <!-- Kurangi ukuran border-radius -->
                                                        <div class="product-img w-full h-32">
                                                            <!-- Sesuaikan tinggi produk -->
                                                            <img class="w-full h-full object-cover duration-300"
                                                                src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}"
                                                                alt="img" />
                                                            <img class="w-full h-full object-cover duration-300"
                                                                src="{{ asset('frontend/assets/images/product/peskin/contoh-hover1.jpg') }}"
                                                                alt="img" />
                                                        </div>
                                                    </div>
                                                    <div class="product-infor mt-2">
                                                        <div class="product-name text-sm">Faux-leather trousers</div>
                                                        <!-- Ukuran teks lebih kecil -->
                                                        <div class="product-price-block flex items-center gap-1 mt-1">
                                                            <div class="product-price text-sm">Rp.5150</div>
                                                            <!-- Ukuran harga lebih kecil -->
                                                            <div class="product-origin-price text-xs text-secondary2">
                                                                <del>$50.00</del>
                                                            </div>
                                                            <div
                                                                class="product-sale text-xs bg-primary text-white px-2 py-0.5 rounded-full">
                                                                -20%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tambahkan produk lainnya -->
                                            <div class="product-item grid-type w-32">
                                                <!-- Ubah width menjadi lebih kecil -->
                                                <div class="product-main cursor-pointer block">
                                                    <div
                                                        class="product-thumb bg-white relative overflow-hidden rounded-lg">
                                                        <!-- Kurangi ukuran border-radius -->
                                                        <div class="product-img w-full h-32">
                                                            <!-- Sesuaikan tinggi produk -->
                                                            <img class="w-full h-full object-cover duration-300"
                                                                src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}"
                                                                alt="img" />
                                                            <img class="w-full h-full object-cover duration-300"
                                                                src="{{ asset('frontend/assets/images/product/peskin/contoh-hover1.jpg') }}"
                                                                alt="img" />
                                                        </div>
                                                    </div>
                                                    <div class="product-infor mt-2">
                                                        <div class="product-name text-sm">Faux-leather trousers</div>
                                                        <!-- Ukuran teks lebih kecil -->
                                                        <div class="product-price-block flex items-center gap-1 mt-1">
                                                            <div class="product-price text-sm">Rp.5150</div>
                                                            <!-- Ukuran harga lebih kecil -->
                                                            <div class="product-origin-price text-xs text-secondary2">
                                                                <del>$50.00</del>
                                                            </div>
                                                            <div
                                                                class="product-sale text-xs bg-primary text-white px-2 py-0.5 rounded-full">
                                                                -20%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tambahkan produk lainnya -->
                                            <div class="product-item grid-type w-32">
                                                <!-- Ubah width menjadi lebih kecil -->
                                                <div class="product-main cursor-pointer block">
                                                    <div
                                                        class="product-thumb bg-white relative overflow-hidden rounded-lg">
                                                        <!-- Kurangi ukuran border-radius -->
                                                        <div class="product-img w-full h-32">
                                                            <!-- Sesuaikan tinggi produk -->
                                                            <img class="w-full h-full object-cover duration-300"
                                                                src="{{ asset('frontend/assets/images/product/peskin/contoh1.png') }}"
                                                                alt="img" />
                                                            <img class="w-full h-full object-cover duration-300"
                                                                src="{{ asset('frontend/assets/images/product/peskin/contoh-hover1.jpg') }}"
                                                                alt="img" />
                                                        </div>
                                                    </div>
                                                    <div class="product-infor mt-2">
                                                        <div class="product-name text-sm">Faux-leather trousers</div>
                                                        <!-- Ukuran teks lebih kecil -->
                                                        <div class="product-price-block flex items-center gap-1 mt-1">
                                                            <div class="product-price text-sm">Rp.5150</div>
                                                            <!-- Ukuran harga lebih kecil -->
                                                            <div class="product-origin-price text-xs text-secondary2">
                                                                <del>$50.00</del>
                                                            </div>
                                                            <div
                                                                class="product-sale text-xs bg-primary text-white px-2 py-0.5 rounded-full">
                                                                -20%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tambahkan produk lainnya -->
                                            <div class="product-item grid-type w-32">
                                                <div class="product-main cursor-pointer block">
                                                    <div
                                                        class="product-thumb bg-white relative overflow-hidden rounded-lg">
                                                        <div
                                                            class="product-img w-full h-32 flex items-center text-center justify-center">
                                                            <!-- Gambar panah -->
                                                            <i class="ph ph-arrow-right text-2xl text-primary"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-infor mt-2 text-center">
                                                        <!-- Teks "Semua Produk" -->
                                                        <div class="product-name text-sm font-bold text-primary">
                                                            Semua Produk
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="h-full relative">
                        <a href="#"
                            class="text-button-uppercase duration-300 h-full flex items-center justify-center gap-1">
                            Toner </a>
                    </li>
                    <li class="h-full relative">
                        <a href="#"
                            class="text-button-uppercase duration-300 h-full flex items-center justify-center gap-1">
                            Serum </a>
                    </li>
                    <li class="h-full relative">
                        <a href="#"
                            class="text-button-uppercase duration-300 h-full flex items-center justify-center gap-1">
                            Facial Wash </a>
                    </li>
                    <li class="h-full relative">
                        <a href="#"
                            class="text-button-uppercase duration-300 h-full flex items-center justify-center gap-1">
                            Moisturizer </a>
                    </li>
                </ul>
            </div>
            <div class="right flex gap-5">
                <div class="max-md:hidden search-icon flex items-center cursor-pointer relative">
                    <i class="ph-bold ph-magnifying-glass text-2xl"></i>
                    <div class="line absolute bg-line w-px h-6 -right-6"></div>
                </div>
                <div class="list-action flex items-center gap-4">
                    <a href="/cart">
                        <div class="max-md:hidden cart-icon flex items-center relative cursor-pointer">
                            <i class="ph-bold ph-handbag text-2xl"></i>
                            <span
                                class="quantity cart-quantity absolute -right-1.5 -top-1.5 text-xs text-white bg-primary w-4 h-4 flex items-center justify-center rounded-full">{{ $cartItemCount }}</span>
                        </div>
                    </a>
                </div>
                <div class="user-icon flex items-center justify-center cursor-pointer">
                    <i class="ph-bold ph-user text-2xl"></i>
                    <div class="login-popup absolute top-[74px] w-[320px] p-7 rounded-xl bg-white box-shadow-sm">
                        <a href="/login" class="button-main w-full text-center">Login</a>
                        <div class="text-secondary text-center mt-3 pb-4">
                            Don’t have an account?
                            <a href="/register" class="text-black pl-1 hover:underline">Register </a>
                        </div>
                    </div>
                </div>

                <!-- After user login -->
                <div class="user-info flex items-center justify-center cursor-pointer relative">
                    <div class="avatar w-10 h-10 rounded-full bg-gray-300 overflow-hidden">
                        <img src="https://media.istockphoto.com/id/517998264/vector/male-user-icon.jpg?b=1&s=612x612&w=0&k=20&c=XQPO5sxBVwANqHTIVNli3gnXLCbmcpOn-23biJPkO3E=" alt="User Avatar" class="w-full h-full object-cover">
                    </div>
                    <div class="user-name px-3">
                        <span class="text-lg font-semibold">Demo User</span>
                    </div>
                    <!-- Dropdown for logged-in user -->
                    <div class="user-popup absolute top-[74px] right-[200px] w-[320px] p-7 rounded-xl bg-white shadow-lg">
                        <a href="/profile" class="button-main w-full text-center">Profile</a>
                        <div class="text-secondary text-center mt-3 pb-4">
                            Want to log out?
                            <a href="/logout" class="text-black pl-1 hover:underline">Logout</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<!-- Menu Mobile -->
<div id="menu-mobile" class="">
    <div class="menu-container bg-white h-full">
        <div class="container h-full">
            <div class="menu-main h-full overflow-hidden">
                <div class="heading py-2 relative flex items-center justify-center">
                    <div
                        class="close-menu-mobile-btn absolute left-0 top-1/2 -translate-y-1/2 w-6 h-6 rounded-full bg-surface flex items-center justify-center">
                        <i class="ph ph-x text-sm"></i>
                    </div>
                    <a href="/" class="logo text-3xl font-semibold text-center"> <img
                            src="{{ asset('frontend/assets/images/logo/peskin.png') }}" alt="PeskinPro"
                            width="60px" height="60px"></a>
                </div>
                <div class="form-search relative mt-2">
                    <i
                        class="ph ph-magnifying-glass text-xl absolute left-3 top-1/2 -translate-y-1/2 cursor-pointer"></i>
                    <input type="text" placeholder="Produk Apa Yang Kamu Cari?"
                        class="h-12 rounded-lg border border-line text-sm w-full pl-10 pr-4" />
                </div>
                <div class="list-nav mt-6">
                    <ul>
                        <li>
                            <a href="/" class="text-xl font-semibold flex items-center justify-between">Home
                            </a>
                        </li>
                        <li>
                            <a href="#!"
                                class="text-xl font-semibold flex items-center justify-between mt-5">Produk
                                <span class="text-right">
                                    <i class="ph ph-caret-right text-xl"></i>
                                </span>
                            </a>
                            <div class="sub-nav-mobile">
                                <div class="back-btn flex items-center gap-3">
                                    <i class="ph ph-caret-left text-xl"></i>
                                    Back
                                </div>
                                <div class="list-nav-item w-full pt-10 pb-6">
                                    <div class="nav-link grid grid-cols-2 gap-5 gap-y-6">
                                        <div class="nav-item">
                                            <div class="text-button-uppercase pb-1">Kategori</div>
                                            <ul>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer">
                                                        Face Care </a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer"> Body
                                                        Care </a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer"> Hair
                                                        Care </a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer"> Mani &
                                                        Pedi </a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer view-all-btn">
                                                        View All </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nav-item">
                                            <div class="text-button-uppercase pb-1">Series</div>
                                            <ul>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer">Remover/Cleanser</a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer">Exfoliasi</a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer">Toner</a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer">Ampoule</a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 view-all-btn"> View All
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nav-item">
                                            <div class="text-button-uppercase pb-1">Sensifitias Kulit</div>
                                            <ul>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer">Normal</a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer">Sensitif</a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer">Oily
                                                        Acne Prone</a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer">Dry
                                                        Skin</a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer">Anti
                                                        Aging</a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer">Whitening</a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 view-all-btn"> View All
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nav-item">
                                            <div class="text-button-uppercase pb-1">Sensifitias Kulit</div>
                                            <ul>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer">Normal</a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer">Sensitif</a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer">Oily
                                                        Acne Prone</a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer">Dry
                                                        Skin</a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer">Anti
                                                        Aging</a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 cursor-pointer">Whitening</a>
                                                </li>
                                                <li>
                                                    <a href="/shop"
                                                        class="link text-secondary duration-300 view-all-btn"> View All
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="/about-us"
                                class="text-xl font-semibold flex items-center justify-between mt-5">About Us
                            </a>
                        </li>
                        <li>
                            <a href="/contact-us"
                                class="text-xl font-semibold flex items-center justify-between mt-5">Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Menu bar -->
<div class="menu_bar fixed bg-white bottom-0 left-0 w-full h-[70px] sm:hidden z-[101]">
    <div class="menu_bar-inner grid grid-cols-4 items-center h-full">
        <a href="/" class="menu_bar-link flex flex-col items-center gap-1">
            <span class="ph-bold ph-house text-2xl block"></span>
            <span class="menu_bar-title caption2 font-semibold">Home</span>
        </a>
        <a href="/shop" class="menu_bar-link flex flex-col items-center gap-1">
            <span class="ph ph-coins text-2xl block"></span>
            <span class="menu_bar-title caption2 font-semibold">Product</span>
        </a>
        <a href="/search-result" class="menu_bar-link flex flex-col items-center gap-1">
            <span class="ph-bold ph-magnifying-glass text-2xl block"></span>
            <span class="menu_bar-title caption2 font-semibold">Search</span>
        </a>
        <a href="/cart" class="menu_bar-link flex flex-col items-center gap-1">
            <div class="cart-icon relative">
                <span class="ph-bold ph-handbag text-2xl block"></span>
                <span
                    class="quantity cart-quantity absolute -right-1.5 -top-1.5 text-xs text-white bg-primary w-4 h-4 flex items-center justify-center rounded-full">{{ $cartItemCount }}</span>
            </div>
            <span class="menu_bar-title caption2 font-semibold">Cart</span>
        </a>
    </div>
</div>
