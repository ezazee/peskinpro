<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.master.master-meta')
    @include('backend.master.master-css')
</head>
<body>
    <div class="wrapper">
        @include('backend.components.navbar')
        @include('backend.components.sidebar')
        <div class="page-content">
            @yield('content')
            @include('backend.components.footer')
        </div>
    </div>
    @include('backend.master.master-js')
</html>
