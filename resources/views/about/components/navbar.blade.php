<div class="sticky-header-wrap sticky-header py-1 py-sm-2 py-lg-1">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-5 col-md-3">
                <div class="logo">
                    <a href="/about"><img width="60" height="auto"
                            src="{{ asset('asset-about/img/logo/peskin.png') }}" alt="About PE Skinpro" /></a>
                </div>
            </div>
            <div class="col-7 col-md-9 text-right position-static">
                <nav class="main-menu menu-sticky1 d-none d-lg-block link-inherit mobile-menu-active">
                    <ul>
                        <li><a href="{{ route('about.index') }}">Home</a></li>
                        <li><a href="{{ route('about.ListProducts') }}">Product</a></li>
                        <li><a href="{{ route('about.affiliate') }}">Affiliate Program</a></li>
                        <li><a href="{{ route('about.news') }}">News</a></li>
                        <li><a href="{{ route('about.contact') }}">Contact</a></li>
                    </ul>
                </nav>
                <button class="vs-menu-toggle text-theme border-theme d-inline-block d-lg-none">
                    <i class="far fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="vs-menu-wrapper">
    <div class="vs-menu-area">
        <button class="vs-menu-toggle text-theme">
            <i class="fal fa-times"></i>
        </button>
        <div class="mobile-logo">
            <a href="/about"><img width="50" height="auto" src="{{ asset('asset-about/img/logo/peskin.png') }}"
                    alt="PE Skinpro" /></a>
        </div>
        <div class="vs-mobile-menu link-inherit"></div>
    </div>
</div>
<header class="header-wrapper header-layout1 position-absolute py-3 py-lg-0">
    <div class="container-fluid position-relative">
        <div class="row align-items-center">
            <div class="col-6 col-lg-2">
                <div class="header-logo">
                    <a href="/about"><img width="70" height="auto"
                            src="{{ asset('asset-about/img/logo/peskin.png') }}" title="About PE Skinpro"
                            alt="About PE Skinpro" /></a>
                </div>
            </div>
            <div class="col-lg-4 position-static d-lg-block d-none">
                <nav class="main-menu menu-style2">
                    <ul>
                        <li><a href="{{ route('about.index') }}">Home</a></li>
                        <li><a href="{{ route('about.affiliate') }}">Affiliate Program</a></li>
                        <li><a href="{{ route('about.ListProducts') }}">Product</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-4 position-static text-right d-lg-block d-none">
                <nav class="main-menu menu-style2">
                    <ul>
                        <li><a href="{{ route('about.news') }}">News</a></li>
                        <li><a href="{{ route('about.contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-4 col-lg-2 text-right d-lg-block d-none">
                <div class="header-btn">
                    <a href="{{ route('shop.index') }}" class="vs-btn vs-styleCustom rounded">Belanja Sekarang</a>
                </div>
            </div>
            <div class="col-6 d-block d-lg-none text-right">
                <button type="button" class="vs-menu-toggle text-theme border-theme">
                    <i class="far fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
</header>
