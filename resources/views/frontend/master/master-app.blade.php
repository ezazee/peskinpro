<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.master.master-meta')
    @include('frontend.master.master-css')
</head>
<body>
    @include('frontend.components.top-nav')
    <div id="header" class="relative w-full">
        @include('frontend.components.navbar')
    </div>
    <main>
        @yield('content')
    </main>
    <a class="scroll-to-top-btn" href="https://wa.me/6282123167895?text=Saya%20Butuh%20Bantuan%20Admin%20Nich" target="_blank"><i class="ph-bold ph-whatsapp-logo"></i></a>
    @include('frontend.components.compare')
    @include('frontend.components.quickview')
    @include('frontend.components.size-guide')
    @include('frontend.components.modal-search')
    @include('frontend.components.chart')
    @include('frontend.components.footer')
    @include('frontend.master.master-js')
</body>
</html>
