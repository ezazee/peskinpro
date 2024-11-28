{{-- Banner Promo --}}
@foreach ($settings as $item)
@if (!empty($item->banner_bundle_head))
<div class="banner-block style-toys-kids">
    <div class="container">
        <a href="#" class="banner-item overflow-hidden duration-500">
            <div class="content md:rounded-[28px] banner-img rounded-2xl overflow-hidden relative">
                <img src="{{ asset('storage/'. $item->banner_bundle_head) }}" alt="bg"
                    class="top-0 left-0 w-full h-full object-contain duration-1000 z-[-1]" />
            </div>
        </a>
    </div>
</div>
@else

@endif

{{-- Bundle, Cleansing, Serum --}}
<div class="banner-block md:pt-20 pt-10">
    <div class="container">
        <div class="list-banner grid md:grid-cols-3 gap-[20px]">
            @if (!empty($item->banner_bundle_one))
            <a href="/shop" class="banner-item relative bg-surface block rounded-[20px] overflow-hidden duration-500">
                <div class="banner-img w-full">
                    <img src="{{ asset('storage/'. $item->banner_bundle_one) }}" alt="bg-img" class="w-full duration-500" />
                </div>
                {{-- <div class="button-main absolute bottom-8 left-1/2 -translate-x-1/2">Belanja Sekarang</div> --}}
            </a>
            @else

            @endif
            @if (!empty($item->banner_bundle_two))
            <a href="/shop" class="banner-item relative bg-surface block rounded-[20px] overflow-hidden duration-500">
                <div class="banner-img w-full">
                    <img src="{{ asset('storage/'. $item->banner_bundle_two) }}" alt="bg-img" class="w-full duration-500" />
                </div>
                {{-- <div class="button-main absolute bottom-8 left-1/2 -translate-x-1/2">Belanja Sekarang</div> --}}
            </a>
            @else

            @endif
            @if (!empty($item->banner_bundle_tree))
            <a href="/shop"
                class="banner-item relative bg-surface block rounded-[20px] overflow-hidden duration-500">
                <div class="banner-img w-full">
                    <img src="{{ asset('storage/'. $item->banner_bundle_tree) }}" alt="bg-img" class="w-full duration-500" />
                </div>
                {{-- <div class="button-main absolute bottom-8 left-1/2 -translate-x-1/2">Belanja Sekarang</div> --}}
            </a>
            @else

            @endif
        </div>
    </div>
</div>
@endforeach
