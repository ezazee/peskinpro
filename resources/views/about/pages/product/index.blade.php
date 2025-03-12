@extends('about.master.master-app')
@section('content')
    <section class="vs-service-wrapper vs-service-layout1 bg-light-theme space-top space-md-bottom" id="service">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title">
                        <h2 class="sec-title-style1">
                            Semua Manfaat <br> Kandungan <br> Produk PE Skinpro
                        </h2>
                        <p class="sec-text-style1">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga ipsa aliquam asperiores
                            reprehenderit assumenda dolorum, eos placeat quas ullam libero, officia commodi temporibus
                            possimus debitis quis beatae? Tempora, ipsum id.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.3s" data-slidetoshow="4" data-mdslidetoshow="3"
                data-smslidetoshow="2" data-xsslidetoshow="1">
                <div class="col-lg-3">
                    <div class="vs-service">
                        <div class="service-icon">
                            <span class="icon text-theme bg-white"><img src="https://placehold.co/50x50"
                                    alt=""></span>
                            <span class="bg-icon ani-moving icon-6x text-theme"><img src="https://placehold.co/70x70"
                                    alt=""></span>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title h4">
                                <a href="#">Mecnerahkan Kulit</a>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, mollitia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="vs-service">
                        <div class="service-icon">
                            <span class="icon text-theme bg-white"><i class="fa-3x flaticon-stones-1"></i></span>
                            <span class="bg-icon ani-moving icon-6x text-theme"><i class="flaticon-mortar"></i></span>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title h4">
                                <a href="#">Menghaluskan Kulit</a>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, non!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="vs-service">
                        <div class="service-icon">
                            <span class="icon text-theme bg-white"><i class="fa-3x flaticon-facial-treatment"></i></span>
                            <span class="bg-icon ani-moving icon-6x text-theme"><i class="flaticon-teapot"></i></span>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title h4">
                                <a href="#">Melembabkan Kulit</a>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, aliquam?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="vs-service">
                        <div class="service-icon">
                            <span class="icon text-theme bg-white"><i class="fa-3x flaticon-cosmetics"></i></span>
                            <span class="bg-icon ani-moving icon-6x text-theme"><i class="flaticon-lotus"></i></span>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title h4">
                                <a href="#">Melembutkan Kulit</a>
                            </h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae, natus!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="vs-service">
                        <div class="service-icon">
                            <span class="icon text-theme bg-white"><i class="fa-3x flaticon-beauty-treatment"></i></span>
                            <span class="bg-icon ani-moving icon-6x text-theme"><i class="flaticon-cosmetics-1"></i></span>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title h4">
                                <a href="#">Menjaga Kesehatan Kulit</a>
                            </h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, facere?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="vs-product-wrapper link-inherit vs-product-layout2 space-top space-md-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4">
                            <div class="vs-product">
                                <div class="product-header" data-slidetoshow="1" data-arrows="true">
                                    <div>
                                        <a href="{{ route('about.CleansingProducts') }}"><img
                                                src="{{ asset('asset-about/img/product/bg/600x750--HONEY-CLEANSING-GEL-BG-BIRU.jpg') }}"
                                                alt="Honey Cleansing Gel" class="w-100" /></a><span class="discount">FREE
                                            GIFT</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <h3 class="product-title font-weight-medium h4 mb-1">
                                        <a href="#">Honey Cleansing Gel</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="vs-product">
                                <div class="product-header" data-slidetoshow="1" data-arrows="true">
                                    <div>
                                        <a href="{{ route('about.HydroProducts') }}"><img
                                                src="{{ asset('asset-about/img/product/bg/600x750--HYDRO-RESTORATIVE-CREAM-BG-BLUE.jpg') }}"
                                                alt="Hydro Resorative Cream" class="w-100" /></a><span
                                            class="discount">FREE GIFT</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <h3 class="product-title font-weight-medium h4 mb-1">
                                        <a href="#">Hydro Resorative Cream</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="vs-product">
                                <div class="product-header" data-slidetoshow="1" data-arrows="true">
                                    <div>
                                        <a href="{{ route('about.FeminimeProducts') }}"><img
                                                src="{{ asset('asset-about/img/product/bg/600x750--PREBIOTIC-FEMININE-MOUSSE-CLEANSER-ORANGE.jpg') }}"
                                                alt="Prebiotic Feminime Mousse Cleanser" class="w-100" /></a><span
                                            class="discount">FREE GIFT</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <h3 class="product-title font-weight-medium h4 mb-1">
                                        <a href="#">Prebiotic Feminime Mousse Cleanser</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="vs-product">
                                <div class="product-header" data-slidetoshow="1" data-arrows="true">
                                    <div>
                                        <a href="{{ route('about.PoreExProducts') }}"><img
                                                src="{{ asset('asset-about/img/product/bg/600x750--PREBIOTIC-PORE-EX-BLUE.jpg') }}"
                                                alt="Prebiotic Pore Ex Facial Pad" class="w-100" /></a><span
                                            class="discount">FREE GIFT</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <h3 class="product-title font-weight-medium h4 mb-1">
                                        <a href="#">Prebiotic Pore Ex Facial Pad</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="vs-product">
                                <div class="product-header" data-slidetoshow="1" data-arrows="true">
                                    <div>
                                        <a href="{{ route('about.TonerProducts') }}"><img
                                                src="{{ asset('asset-about/img/product/bg/600x750-CICA--B5-REFRESHING-TONER-BG-BLUE.jpg') }}"
                                                alt="CICA Refreshing Toner" class="w-100" /></a><span
                                            class="discount">FREE GIFT</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <h3 class="product-title font-weight-medium h4 mb-1">
                                        <a href="{{ route('about.TonerProducts') }}">CICA Refreshing Toner</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="vs-product">
                                <div class="product-header" data-slidetoshow="1" data-arrows="true">
                                    <div>
                                        <a href="{{ route('about.SerumProducts') }}"><img
                                                src="{{ asset('asset-about/img/product/bg/600x750-SKIN-AWAKENING-GLOW-SERUM-BLUE.jpg') }}"
                                                alt="Skin Awakening Glow Serum" class="w-100" /></a><span
                                            class="discount">FREE GIFT</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <h3 class="product-title font-weight-medium h4 mb-1">
                                        <a href="#">Skin Awakening Glow Serum</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="vs-product">
                                <div class="product-header" data-slidetoshow="1" data-arrows="true">
                                    <div>
                                        <a href="{{ route('about.ToneProducts') }}"><img
                                                src="{{ asset('asset-about/img/product/bg/600x750-VIT-C-TONE-UP--DAY-CREAM-SPF50-BLUE.jpg') }}"
                                                alt="Vit C Tone Up Day Cream SPF50" class="w-100" /></a><span
                                            class="discount">FREE GIFT</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <h3 class="product-title font-weight-medium h4 mb-1">
                                        <a href="#">Vit C Tone Up Day Cream SPF50</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('about.components.offer')
<div cla @endsection
