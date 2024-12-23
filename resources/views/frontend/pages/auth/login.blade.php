@extends('frontend.master.master-app')
@section('content')
    <div class="login-block md:py-20 py-10">
        <div class="container">
            <div class="content-main flex gap-y-8 max-md:flex-col">
                <div class="left md:w-1/2 w-full lg:pr-[60px] md:pr-[40px] md:border-r border-line">
                    <div class="heading4">Login</div>
                    <form class="md:mt-7 mt-4" action="{{ route('userLogin') }}" method="POST">
                        @csrf
                        <div class="email">
                            <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" name="email" type="email"
                                placeholder="Username or email address *" required />
                            @error('email')
                                <span class="text-sm text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="pass mt-5 relative">
                            <!-- Input Password -->
                            <input id="password" class="border-line px-4 pt-3 pb-3 w-full rounded-lg" name="password"
                                type="password" placeholder="Password" required />

                            <!-- Tombol untuk menampilkan/menyembunyikan password dengan ID yang diperbarui -->
                            <button id="togglePasswordVisibility" type="button"
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                                <i class="ph ph-eye"></i> <!-- Ikon mata untuk menampilkan password -->
                            </button>

                            @error('password')
                                <span class="text-sm text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between mt-5">
                            <div class="flex items-center">
                                <div class="block-input">
                                    <input type="checkbox" name="remember" />
                                    <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                </div>
                                <label for="remember" class="pl-2 cursor-pointer">Remember me</label>
                            </div>
                            <a href="#" class="font-semibold hover:underline">Forgot Your Password? </a>
                        </div>
                        <div class="block-button md:mt-7 mt-4">
                            <button class="button-main">Login</button>
                        </div>
                    </form>
                </div>
                <div class="right md:w-1/2 w-full lg:pl-[60px] md:pl-[40px] flex items-center">
                    <div class="text-content">
                        <div class="heading4">Pengguna Baru?</div>
                        <div class="mt-2 text-secondary">
                            Belum punya akun? Daftar sekarang dan nikmati berbagai fitur menarik yang memudahkan
                            aktivitasmu.
                            Ayo, mulai perjalanan serumu bersama kami!
                        </div>
                        <div class="block-button md:mt-7 mt-4">
                            <a href="/register" class="button-main">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
