@php
    $validImages = $settings->whereNotNull('popup_image')->filter(function ($setting) {
        return !empty($setting->popup_image); 
    });
@endphp

@if($validImages->isNotEmpty())
    @foreach($validImages as $image)
        <div class="modal-newsletter">
            <div class="container h-full flex items-center justify-center">
                <div class="modal-newsletter-main">
                    <div class="main-content overflow-hidden modal-promo">
                        <a href="/shop">
                            <img src="{{ asset('storage/' . $image->popup_image) }}" 
                                 alt="Promo Image" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
