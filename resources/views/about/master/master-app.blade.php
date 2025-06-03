<!DOCTYPE html>
<html lang="en">
<head>
    @include('about.master.master-meta')
   @include('about.master.master-css')
</head>
<body>
    @include('about.components.navbar')
    <main>
        @yield('content')
        <a href="https://wa.me/6282123167895" target="_blank" class="scrollToTop icon-btn bg-theme"><i class="fab fa-whatsapp"></i></a>
    </main>
    @include('about.master.master-js')
    @include('about.components.footer')
</body>
</html>
