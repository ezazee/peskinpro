{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

<script src="{{ asset('frontend/assets/js/phosphor-icons.js') }}"></script>
<script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
<script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>


<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".swiper-slider-custom", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        effect: 'fade',
        speed: 800,
    });
});

</script>
