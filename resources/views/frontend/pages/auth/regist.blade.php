@extends('frontend.master.master-app')

@section('content')
    <div class="register-block md:py-20 py-10">
        <div class="container">
            <div class="content-main flex gap-y-8 max-md:flex-col">
                <div class="left md:w-1/2 w-full lg:pr-[60px] md:pr-[40px] md:border-r border-line">
                    <div class="heading4">Register</div>
                    <form class="md:mt-7 mt-4">
                        <div class="grid sm:grid-cols-2 gap-4 gap-y-5">
                            <div>
                                <input class="border-line px-4 py-3 w-full rounded-lg" id="modalFirstName" type="text"
                                    placeholder="Nama Depan" required />
                            </div>
                            <div>
                                <input class="border-line px-4 py-3 w-full rounded-lg" id="modalLastName" type="text"
                                    placeholder="Nama Belakang" required />
                            </div>
                            <!-- Form Lainnya Seperti Sebelumnya -->
                        </div>
                        <div class="email mt-5">
                            <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" id="username" type="email"
                                placeholder="Masukan Email *" required />
                        </div>
                        <div class="wa mt-5">
                            <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" id="whatsapp" type="number"
                                placeholder="Masukan Nomor Whatsapp *" required />
                        </div>
                        <div class="pass mt-5">
                            <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" id="password" type="password"
                                placeholder="Password *" required />
                        </div>
                        <div class="confirm-pass mt-5">
                            <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" id="confirmPassword" type="password"
                                placeholder="Masukan Ulang Password *" required />
                        </div>
                        <div class="flex items-center mt-5">
                            <div class="block-input">
                                <input type="checkbox" name="remember" id="remember" />
                                <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                            </div>
                            <label for="remember" class="pl-2 cursor-pointer text-secondary2">I agree to the
                                <a href="#!" class="text-black hover:underline pl-1">Terms of User</a>
                            </label>
                        </div>
                        <div class="block-button md:mt-7 mt-4">
                            <button class="button-main">Register</button>
                        </div>
                    </form>
                </div>
                <div class="right md:w-1/2 w-full lg:pl-[60px] md:pl-[40px] flex items-center">
                    <div class="text-content">
                        <div class="heading4">Sudah Punya Akun?</div>
                        <div class="mt-2 text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum nam
                            culpa dicta quidem corporis, natus quas, debitis voluptatem accusantium facere suscipit
                            doloremque quaerat. Ducimus debitis eveniet quisquam? Voluptas, voluptatibus alias.</div>
                        <div class="block-button md:mt-7 mt-4">
                            <a href="/login" class="button-main">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
