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
    @include('frontend.components.footer')
    @include('frontend.master.master-js')
</body>
</html>
