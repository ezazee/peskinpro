<!DOCTYPE html>
<html lang="en">

<head>
    @include('affiliate.master.master-meta')
    @include('affiliate.master.master-css')
</head>

<body>
    @include('affiliate.components.navbar')
    @yield('content')
    @include('affiliate.components.footer')
    @include('affiliate.master.master-js')
</body>

</html>
