@extends('frontend.master.master-app')

@section('content')
    <!-- Slider -->
    <div
        class="slider-block style-two bg-linear 2xl:h-[700px] xl:h-[740px] lg:h-[680px] md:h-[580px] sm:h-[500px] h-[420px] w-full">
        <div class="slider-main h-full w-full">
            <!-- Slide 1 -->
            <div class="slider-item h-full w-full relative overflow-hidden">
                <div class="sub-img absolute left-0 top-0 w-full h-full z-[-2]">
                    <img src="https://peskinpro.com/wp-content/uploads/2023/03/about-us.jpg" alt="bg-cos3-1"
                        class="w-full h-full object-cover img-desktop" />
                </div>
            </div>
        </div>
    </div>


    <div class="about">
        <div class="about-us-block" style="margin-top: -70px;">
            <div class="container">
                <div class="text flex items-center justify-center">
                    <div class="content md:w-5/6 w-full">
                        <div class="heading3 text-center">Komitmen Terhadap Kualitas Perawatan Profesional</div>
                        <div class="body1 text-center md:mt-7 mt-5">
                            PE Skin Professional didirikan pada satu dekade lalu dengan tujuan memproduksi lini perawatan kecantikan pribadi yang terjangkau oleh semua orang. Perusahaan ini diposisikan dengan departemen penjualan dan layanan yang kuat yang telah membangun fondasi untuk pertumbuhan dan ekspansi berdasarkan perdagangan grosir berbagai produk perawatan wajah, tubuh, rambut, tangan dan kaki profesional. Kami menawarkan formulasi perawatan kulit, rambut dan tubuh yang dibuat dengan perhatian cermat terhadap detail dan dengan khasiat yang kuat. Penelitian dan evaluasi dilakukan terhadap pemasok berdasarkan harga, kualitas, dukungan, ketersediaan, keandalan, kemampuan produksi dan distribusi untuk memberikan produk dengan kualitas terbaik kepada pelanggan kami.
                        </div>
                    </div>
                </div>
                <div class="md:pt-20 pt-10">
                    <div class="heading3 text-center">Apa Yang Membuat Kami Berbeda?</div>
                    <div class="list-img grid sm:grid-cols-3 gap-[30px] pt-6">
                        <div class="bg-img">
                            <img src="{{ asset('frontend/assets/images/banner/21.png') }}" alt="bg-img" class="w-full rounded-[30px]">
                        </div>
                        <div class="bg-img">
                            <img src="{{ asset('frontend/assets/images/banner/22.png') }}" alt="bg-img" class="w-full rounded-[30px]">
                        </div>
                        <div class="bg-img">
                            <img src="{{ asset('frontend/assets/images/banner/23.png') }}" alt="bg-img" class="w-full rounded-[30px]">
                        </div>
                    </div>
                    <div class="body1 text-center md:mt-7 mt-5">
                        Untuk memastikan kualitas produk aman digunakan, kami menerapkan teknologi modern Jerman dalam pembuatan produk kami. PE Skin Professional telah membangun reputasi dalam penggunaan komponen berkualitas optimal dan terbaik dalam produk dan lingkungan manufaktur untuk memastikan produk bermutu tinggi, terkini, dan andal yang setara dengan inovasi dan tren terkini di pasar. rangka memenuhi kebutuhan pelanggan. Produk kami bebas dari kekejaman, bersertifikat GMP, teruji di laboratorium, dan bebas THC.
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="benefit-block md:pt-20 py-10">
        <div class="container">
            <div class="list-benefit grid items-start lg:grid-cols-4 grid-cols-2 gap-[30px]">
                <div class="benefit-item flex flex-col items-center justify-center">
                    <i class="icon-phone-call lg:text-7xl text-5xl"></i>
                    <div class="heading6 text-center mt-5">24/7 Customer Service</div>
                    <div class="caption1 text-secondary text-center mt-3">We're here to help you with any questions or
                        concerns you have, 24/7.</div>
                </div>
                <div class="benefit-item flex flex-col items-center justify-center">
                    <i class="icon-return lg:text-7xl text-5xl"></i>
                    <div class="heading6 text-center mt-5">14-Day Money Back</div>
                    <div class="caption1 text-secondary text-center mt-3">If you're not satisfied with your purchase, simply
                        return it within 14 days for a refund.</div>
                </div>
                <div class="benefit-item flex flex-col items-center justify-center">
                    <i class="icon-guarantee lg:text-7xl text-5xl"></i>
                    <div class="heading6 text-center mt-5">Our Guarantee</div>
                    <div class="caption1 text-secondary text-center mt-3">We stand behind our products and services and
                        guarantee your satisfaction.</div>
                </div>
                <div class="benefit-item flex flex-col items-center justify-center">
                    <i class="icon-delivery-truck lg:text-7xl text-5xl"></i>
                    <div class="heading6 text-center mt-5">Shipping worldwide</div>
                    <div class="caption1 text-secondary text-center mt-3">We ship our products worldwide, making them
                        accessible to customers everywhere.</div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container">
        <div
            class="newsletter-block md:py-20 sm:py-14 py-10 sm:px-8 px-6 sm:rounded-[32px] rounded-3xl flex flex-col items-center bg-primary md:mt-20 mt-10">
            <div class="heading3 text-white text-center">Sign up and get 10% off</div>
            <div class="text-white text-center mt-3">Sign up for early sale access, new in, promotions and more</div>
            <div class="input-block lg:w-1/2 sm:w-3/5 w-full h-[52px] sm:mt-10 mt-7">
                <form class="w-full h-full relative">
                    <input type="email" placeholder="Enter your e-mail"
                        class="caption1 w-full h-full pl-4 pr-14 rounded-xl border border-line" required />
                    <button
                        class="button-main bg-primary text-white absolute top-1 bottom-1 right-1 flex items-center justify-center">Subscribe</button>
                </form>
            </div>
        </div>
    </div> --}}
@endsection
