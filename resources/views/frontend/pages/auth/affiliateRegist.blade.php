@extends('frontend.master.master-app')

@section('content')
    <div class="register-block md:py-20 py-10">
        <div class="container">
            <div class="auth-banner-container">
                <div class="auth-banner-title"><span>CARA MENDAPATKAN KOMISI</span></div>
                <div class="auth-banner-content">
                    <div class="auth-banner-content-item">
                        <img src="{{ asset('frontend/assets/images/svg/icon_affiliate1.svg') }}">
                        <div>Pilih Produk</div>
                    </div>
                    <div class="auth-banner-content-item">
                        <img src="{{ asset('frontend/assets/images/svg/icon_affiliate2.svg') }}">
                        <div>Bagikan Produk</div>
                    </div>
                    <div class="auth-banner-content-item">
                        <img src="{{ asset('frontend/assets/images/svg/icon_affiliate3.svg') }}">
                        <div>Dapatkan Komisi</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="heading4 text-center" style="margin-bottom:50px">Daftar Affiliator PE Skinpro</div>
            <form action="{{ route('register.affiliate') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="content-main flex gap-y-8 max-md:flex-col">
                    <div class="left md:w-1/2 w-full lg:pr-[60px] md:pr-[40px] md:border-r border-line">
                        <div>
                            <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" name="email" type="email"
                                placeholder="Email" required />
                        </div>
                        <div class="mt-5">
                            <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" name="password" type="password"
                                placeholder="Password" required />
                        </div>
                        <div class="mt-5">
                            <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" name="namaLengkap" type="text"
                                placeholder="Nama Lengkap" required />
                        </div>
                        <div class="mt-5">
                            <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" name="nomorRekening" type="number"
                                placeholder="Nomor Rekening" required />
                        </div>
                        <div class="mt-5">
                            <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" name="nomorWhatsapp" type="number"
                                placeholder="Nomor WhatsApp" required />
                        </div>
                        <div class="mt-5">
                            <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" name="nomorKTP" type="number"
                                placeholder="Nomor KTP" required />
                        </div>
                        <div class="upload_file flex items-center gap-3 mt-5 px-3 py-2 border border-line rounded">
                            <label for="uploadImage"
                                class="caption2 py-1 px-3 rounded bg-line whitespace-nowrap cursor-pointer">Upload KTP
                                Kamu</label>
                            <input type="file" name="uploadImage" accept="image/*"
                                class="caption2 cursor-pointer" required="" />
                        </div>
                        <div class="mt-5">
                            <textarea class="border-line px-4 pt-3 pb-3 w-full rounded-lg form-control" name="alamatLengkap"
                                placeholder="Alamat Lengkap" required rows="9"></textarea>
                        </div>

                    </div>
                    <div class="right md:w-1/2 w-full lg:pl-[60px] md:pl-[40px]">
                        <div class="text-content">
                            <div class="heading4">Isi Profile Social Media Kamu Ya</div>
                            <p style="margin-bottom:20px; color:red;">Masukan Minimal 1 Link / Username Social Media Yang
                                Diisi</p>
                            <div class="flex items-center">
                                <i class="ph-bold ph-instagram-logo text-3xl mr-2"></i>
                                <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" style="margin-left: 10px"
                                    name="sosmedInstagram" type="text" placeholder="Isi Link atau Username Instagram" />
                            </div>
                            <div class="flex items-center mt-5">
                                <i class="ph-bold ph-youtube-logo text-3xl mr-2"></i>
                                <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" style="margin-left: 10px"
                                name="sosmedYoutube" type="text" placeholder="Isi Link atau Nama Channel Youtube" />
                            </div>
                            <div class="flex items-center mt-5">
                                <i class="ph-bold ph-twitter-logo text-3xl mr-2"></i>
                                <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" style="margin-left: 10px"
                                name="sosmedX" type="text" placeholder="Isi Link atau Username X / Twitter" />
                            </div>
                            <div class="flex items-center mt-5">
                                <i class="ph-bold ph-tiktok-logo text-3xl mr-2"></i>
                                <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" style="margin-left: 10px"
                                name="sosmedTiktok" type="text" placeholder="Isi Link atau Username Tiktok" />
                            </div>
                            <div class="flex items-center mt-5">
                                <i class="ph-bold ph-facebook-logo text-3xl mr-2"></i>
                                <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" style="margin-left: 10px"
                                name="sosmedFacebook" type="text" placeholder="Isi Link atau Username Facebook" />
                            </div>
                            <div class="flex items-center mt-5">
                                <i class="ph-bold ph-globe text-3xl mr-2"></i>
                                <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" style="margin-left: 10px"
                                name="sosmmedBlog" type="text" placeholder="Isi Link Blog Pribadi Kamu" />
                            </div>
                            <div class="flex items-center mt-5">
                                <i class="ph-bold ph-link text-3xl mr-2"></i>
                                <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" style="margin-left: 10px"
                                name="sosmedLainnya" type="text" placeholder="Isi Link Sosmed Yang Lainnya" />
                            </div>

                            <div class="flex items-center mt-5">
                                <div class="block-input">
                                    <input type="checkbox" name="remember" id="customPKSButton" />
                                    <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                </div>
                                <label for="customPKSButton" class="pl-2 cursor-pointer text-secondary2">Dengan Ini Saya
                                    Menyetujui Akan
                                    <a href="#!" class="text-black hover:underline pl-1 text-primary">Ketentuan
                                        Pengguna</a>
                                    dan
                                    <a href="#!" class="text-black hover:underline pl-1 text-primary">Perjanjian
                                        Kerjasama (PKS)</a>
                                </label>
                            </div>
                            <div class="block-button md:mt-7 mt-4">
                                <button type="submit" class="button-main">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@include('frontend.components.modal-PKS')
@endsection
