<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    @include('backend.master.master-meta')
    @include('backend.master.master-css')
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
                                    <a href="#" class="logo-dark">
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
                                            @error('email')
                                                <span class="text-sm text-red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold" for="example-password">Password</label>
                                            <div class="relative">
                                                <input type="password" id="example-password" name="password"
                                                    class="form-control" placeholder="Enter your password">
                                                <button id="togglePassword" type="button" class="toggle-password">
                                                    <i class="bx bx-show"></i> <!-- Ikon mata dari Boxicons -->
                                                </button>
                                                @error('password')
                                                    <span class="text-sm text-red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <style>
                                            .relative {
                                                position: relative;
                                            }

                                            .toggle-password {
                                                position: absolute;
                                                right: 1rem;
                                                top: 50%;
                                                transform: translateY(-50%);
                                                background: none;
                                                border: none;
                                                cursor: pointer;
                                                color: gray;
                                            }
                                        </style>

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
                            <img src="{{ asset('frontend/assets/images/banner/bg-pe.png') }}" alt="PE Skinpro"
                                class="w-100 h-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('backend.master.master-js')
</body>

</html>
