@extends('frontend.master.master-app')

@section('content')
<div class="register-block md:py-20 py-10">
    <div class="container">
        <div class="content-main flex gap-y-8 max-md:flex-col">
            <div class="left md:w-1/2 w-full lg:pr-[60px] md:pr-[40px] md:border-r border-line">
                <div class="heading4">Register</div>
                <form class="md:mt-7 mt-4" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="grid sm:grid-cols-2 gap-4 gap-y-5">
                        <div>
                            <input class="border-line px-4 py-3 w-full rounded-lg" id="modalFirstName" type="text"
                                placeholder="Nama Depan" name="first_name" required />
                        </div>
                        <div>
                            <input class="border-line px-4 py-3 w-full rounded-lg" id="modalLastName" type="text"
                                placeholder="Nama Belakang" name="last_name" required />
                        </div>
                    </div>
                    <div class="email mt-5">
                        <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" id="username" type="email"
                            placeholder="Masukan Email *" name="email" required />
                        @if ($errors->has('email'))
                        <span class="text-red text-sm">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="wa mt-5">
                        <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" id="whatsapp" type="number"
                            placeholder="Masukan Nomor Whatsapp *" name="no_telp" required />
                    </div>
                    <div class="pass mt-5">
                        <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" id="password" type="password"
                            placeholder="Password *" name="password" required />
                        @if ($errors->has('password'))
                        <span class="text-red text-sm">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="confirm-pass mt-5">
                        <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" id="confirmPassword" type="password"
                            placeholder="Masukan Ulang Password *" name="password_confirmation" required />
                        @if ($errors->has('password_confirmation'))
                        <span class="text-red text-sm">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="block-input">
                            <input type="checkbox" name="term" id="term" />
                            <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                        </div>
                        <label for="remember" class="pl-2 cursor-pointer text-secondary2">Dengan ini saya menyetujui
                            <a href="#!" class="text-black hover:underline pl-1">Ketentuan Pengguna</a>
                        </label>
                    </div>
                    @if ($errors->has('term'))
                    <div class="text-red text-sm">{{ $errors->first('term') }}</div>
                    @endif
                    <div class="block-button md:mt-7 mt-4">
                        <button class="button-main">Daftar</button>
                    </div>
                </form>
            </div>
            <div class="right md:w-1/2 w-full lg:pl-[60px] md:pl-[40px] flex items-center">
                <div class="text-content">
                    <div class="heading4">Sudah Punya Akun?</div>
                    <div class="mt-2 text-secondary">
                        Kalau kamu sudah punya akun, langsung aja login untuk menikmati semua fitur dan kemudahan yang kami tawarkan.
                        Yuk, lanjutkan perjalananmu bersama kami!
                    </div>
                    <div class="block-button md:mt-7 mt-4">
                        <a href="/login" class="button-main">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
