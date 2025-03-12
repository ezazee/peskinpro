<!-- Header Menu -->
<div class="header-menu style-one relative bg-white w-full md:h-[74px] h-[56px]">
    <div class="container mx-auto h-full">
        <div class="header-main flex justify-between h-full">
            <div class="menu-mobile-icon lg:hidden flex items-center">
                <i class="icon-category text-2xl"></i>
            </div>
            <a href="/" class="flex items-center">
                <img src="{{ asset('frontend/assets/images/logo/peskin.png') }}" alt="PeskinPro" style="width: 80px">
            </a>
            <div class="menu-main h-full max-lg:hidden">
                <ul class="flex items-center gap-8 h-full">
                    <li class="h-full relative">
                        <a href="/"
                            class="text-button-uppercase duration-300 h-full flex items-center justify-center gap-1 {{ request()->is('/') ? 'active' : '' }}">
                            Home
                        </a>
                    </li>

                    <li class="h-full relative">
                        <a href="{{ route('shop.index') }}#allProduct"
                            class="text-button-uppercase duration-300 h-full flex items-center justify-center gap-1 {{ request()->is('shop') ? 'active' : '' }}" data-hash="allProduct">
                            Produk Kami
                        </a>
                    </li>

                    <li class="h-full">
                        <a href="{{ route('shop.index') }}#bestSellerProduct"
                            class="text-button-uppercase duration-300 h-full flex items-center justify-center" data-hash="bestSellerProduct">
                            Produk Terlaris
                        </a>
                    </li>

                    <li class="h-full">
                        <a href="{{ route('shop.index') }}#flashSaleProduct"
                            class="text-button-uppercase duration-300 h-full flex items-center justify-center" data-hash="flashSaleProduct">
                            Promosi
                        </a>
                    </li>

                    <li class="h-full relative">
                        <a href="{{ route('about.index') }}"
                            class="text-button-uppercase duration-300 h-full flex items-center justify-center gap-1">
                            Tentang Kami
                        </a>
                    </li>
                    <li class="h-full relative">
                        <a href="{{ route('about.affiliate') }}"
                            class="text-button-uppercase duration-300 h-full flex items-center justify-center gap-1">
                            PE Skinpro Affiliate
                        </a>
                    </li>
                </ul>
            </div>
            <div class="right flex gap-5">
                <!--<div class="max-md:hidden search-icon flex items-center cursor-pointer relative">-->
                <!--    <i class="ph-bold ph-magnifying-glass text-2xl"></i>-->
                <!--    <div class="line absolute bg-line w-px h-6 -right-6"></div>-->
                <!--</div>-->
                <div class="list-action flex items-center gap-4">
                    <a href="/cart">
                        <div class="max-md:hidden cart-icon flex items-center relative cursor-pointer">
                            <i class="ph-bold ph-handbag text-2xl"></i>
                            <span
                                class="quantity cart-quantity absolute -right-1.5 -top-1.5 text-xs text-white bg-primary w-4 h-4 flex items-center justify-center rounded-full">{{ $cartItemCount }}</span>
                        </div>
                    </a>
                </div>
                @if (Auth::check())
                    <div class="user-info flex items-center justify-center cursor-pointer relative">
                        <div class="avatar w-7 h-7 rounded-full bg-gray-300 overflow-hidden">
                            <img src="{{ Auth::user()->images ? asset('storage/' . Auth::user()->images) : 'https://media.istockphoto.com/id/517998264/vector/male-user-icon.jpg?b=1&s=612x612&w=0&k=20&c=XQPO5sxBVwANqHTIVNli3gnXLCbmcpOn-23biJPkO3E=' }}"
                                alt="User Avatar" class="w-full h-full object-cover">
                        </div>
                        <div
                            class="user-popup absolute top-[74px] right-[200px] w-[320px] p-7 rounded-xl bg-white shadow-lg">
                            <a href="/profile" class="button-main w-full text-center">Profile</a>
                            <div class="text-secondary text-center mt-3 pb-4">
                                Want to log out?
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    <button type="submit" class="text-black pl-1 hover:underline">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="user-icon flex items-center justify-center cursor-pointer">
                        <i class="ph-bold ph-user text-2xl"></i>
                        <div class="login-popup absolute top-[74px] w-[320px] p-7 rounded-xl bg-white box-shadow-sm">
                            <a href="/login" class="button-main w-full text-center">Login</a>
                            <div class="text-secondary text-center mt-3 pb-4">
                                Belum Ada Akun ?
                                <a href="/register" class="text-black pl-1 hover:underline">Daftar </a>
                            </div>
                        </div>
                    </div>
                @endif
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
                <!--<div class="form-search relative mt-2">-->
                <!--    <i-->
                <!--        class="ph ph-magnifying-glass text-xl absolute left-3 top-1/2 -translate-y-1/2 cursor-pointer"></i>-->
                <!--    <input type="text" placeholder="Produk Apa Yang Kamu Cari?"-->
                <!--        class="h-12 rounded-lg border border-line text-sm w-full pl-10 pr-4" />-->
                <!--</div>-->
                <div class="list-nav mt-6">
                    <ul>
                        <li>
                            <a href="/" class="text-xl font-semibold flex items-center justify-between">Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('shop.index') }}#allProduct" class="text-xl font-semibold flex items-center justify-between mt-5">Produk Kami
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('shop.index') }}#bestSellerProduct" class="text-xl font-semibold flex items-center justify-between mt-5">Produk Terlaris
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('shop.index') }}#flashSaleProduct"
                                class="text-xl font-semibold flex items-center justify-between mt-5">Promosi
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about.index') }}"
                                class="text-xl font-semibold flex items-center justify-between mt-5">Tentang PE
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
    <div class="menu_bar-inner grid grid-cols-3 items-center h-full">
        <a href="/" class="menu_bar-link flex flex-col items-center gap-1">
            <span class="ph-bold ph-house text-2xl block"></span>
            <span class="menu_bar-title caption2 font-semibold">Home</span>
        </a>
        <a href="{{ route('shop.index') }}" class="menu_bar-link flex flex-col items-center gap-1">
            <span class="ph ph-coins text-2xl block"></span>
            <span class="menu_bar-title caption2 font-semibold">Product</span>
        </a>
        <!--<a href="/search-result" class="menu_bar-link flex flex-col items-center gap-1">-->
        <!--    <span class="ph-bold ph-magnifying-glass text-2xl block"></span>-->
        <!--    <span class="menu_bar-title caption2 font-semibold">Search</span>-->
        <!--</a>-->
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
