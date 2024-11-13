<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from techzaa.getappui.com/larkon/admin/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2024 07:52:46 GMT -->

<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>Login Admin Dashboard | PE Skin Pro Indonesia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Techzaa" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- Vendor css (Require in all Page) -->
    <link href="{{ asset('backend/assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons css (Require in all Page) -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css (Require in all Page) -->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Theme Config js (Require in all Page) -->
    <script src="{{ asset('backend/assets/js/config.js') }}"></script>
</head>

<body class="h-100">
    <div class="d-flex flex-column h-100 p-3">
        <div class="d-flex flex-column flex-grow-1">
            <div class="row h-100">
                <div class="col-xxl-7">
                    <div class="row justify-content-center h-100">
                        <div class="col-lg-6 py-lg-5">
                            <div class="d-flex flex-column h-100 justify-content-center">
                                <div class="auth-logo mb-2">
                                    <a href="index.html" class="logo-dark">
                                        <img src="{{ asset('backend/assets/images/peskin.png') }}" height="100"
                                            alt="logo dark">
                                    </a>
                                </div>

                                <h2 class="fw-bold fs-24 mb-4">Login Dashboard Admin</h2>

                                <div class="mb-5">
                                    <form action="{{ route('userLogin') }}" class="authentication-form" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label fw-bold" for="example-email">Email</label>
                                            <input type="email" id="example-email" name="email"
                                                class="form-control bg-" placeholder="Enter your email">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold" for="example-password">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Enter your password">
                                        </div>

                                        <div class="mb-1 text-center d-grid">
                                            <button class="btn btn-soft-primary" type="submit">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-5 d-none d-xxl-flex">
                    <div class="card h-100 mb-0 overflow-hidden">
                        <div class="d-flex flex-column h-100">
                            <img src="{{ asset('frontend/assets/images/banner/face-care.jpg') }}" alt=""
                                class="w-100 h-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor Javascript (Require in all Page) -->
    <script src="{{ asset('backend/assets/js/vendor.js') }}"></script>

    <!-- App Javascript (Require in all Page) -->
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

</body>

</html>
