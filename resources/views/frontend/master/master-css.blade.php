<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="preload" href="{{ asset('frontend/dist/output-scss.css') }}" as="style">
<link rel="preload" href="{{ asset('frontend/dist/output-tailwind.css') }}" as="style">

<link rel="stylesheet" href="{{ asset('frontend/dist/output-scss.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/dist/output-tailwind.css') }}" />

<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" media="print" onload="this.media='all'">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/icomoon/style.css') }}" media="print"
    onload="this.media='all'">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}" media="print"
    onload="this.media='all'">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}" media="print"
    onload="this.media='all'">

<style>
    .overlay {
        background: linear-gradient(to top, rgba(0, 0, 0, 0.57), rgba(0, 0, 0, 0.315) 60%);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .sub-img img {
        object-fit: cover;
        width: 100%;
        height: 100%;
        display: block;
    }

    .border-ktp {
        border: 2px solid var(--primary) !important;
        border-radius: 5px;
        padding: 8px;
    }
</style>
