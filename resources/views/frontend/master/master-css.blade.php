<link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<link rel="stylesheet" href="{{ asset('frontend/dist/output-scss.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/dist/output-tailwind.css') }}" />

<style>
/* Gradient Overlay */
.overlay {
    background: linear-gradient(to top, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0) 60%);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

/* Gambar responsif tanpa mengotak-ngotak */
.sub-img img {
    object-fit: cover; /* Gambar menyesuaikan dengan lebar dan tinggi tanpa terdistorsi */
    width: 100%;
    height: 100%;
    display: block;
}

</style>
