@extends('about.master.master-app')
@section('content')
    <section class="vs-contactinfo-wrapper space-top space-md-bottom">
        <div class="contact-map text-center">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3334.851932046625!2d106.83364090681177!3d-6.286110946997476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f211802f410b%3A0xc453fcc8b2b81cf!2sRoyal%20Spring%20Residence%2C%20Jl.%20Raya%20Ragunan%20No.T.05%2C%20RT.8%2FRW.6%2C%20Jati%20Padang%2C%20Ps.%20Minggu%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012540!5e0!3m2!1sid!2sid!4v1741570436573!5m2!1sid!2sid"
                width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="vs-contact-box1 text-center mb-30">
                        <span class="text-theme mb-4 d-block"><i class="fab fa-4x fa-whatsapp"></i></span>
                        <h4 class="mb-15">WhatsApp</h4>
                        <p class="mb-10">
                            <a href="https://wa.me/6282123167895" class="text-inherit">0821-2316-7895</a>
                        </p>
                        <a href="https://wa.me/6282123167895" class="vs-btn vs-style1">Hubungi Kami</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="vs-contact-box1 text-center mb-30">
                        <span class="text-theme mb-4 d-block"><i class="fas fa-4x fa-map-marker-alt"></i></span>
                        <h4 class="mb-15">Alamat</h4>
                        <p class="mb-25">Jl. Raya Ragunan No.T.05, RT.8/RW.6, Jati Padang, Ps. Minggu, Jakarta Selatan, DKI
                            Jakarta 12540</p>
                        <a href="#" class="vs-btn vs-style1">Hubungi Kami</a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="vs-contact-box1 text-center mb-30">
                        <span class="text-theme mb-4 d-block"><i class="fas fa-4x fa-envelope"></i></span>
                        <h4 class="mb-15">Email</h4>
                        <p class="mb-25">adm.peskinproid@gmail.com</p>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=adm.peskinproid@gmail.com"
                            class="vs-btn vs-style1">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('about.components.offer')
@endsection
