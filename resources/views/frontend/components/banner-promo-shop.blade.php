{{-- Banner Promo --}}
@foreach ($settings as $item)

<div class="banner-block style-toys-kids content">
    <div class="container flex justify-between gap-4 ">
        <!-- Banner Kiri -->
        @if (!empty($item->bannershop_head_one))
        <a href="#!" class="banner-item relative block overflow-hidden duration-500 w-1/2">
            <div class=" md:rounded-[28px] banner-img rounded-2xl overflow-hidden relative">
                <img src="{{ asset('storage/'. $item->bannershop_head_one) }}" alt="bg-left"
                    class="top-0 left-0 w-full h-full object-contain duration-1000 z-[-1]" />
            </div>
        </a>
        @else

        @endif
        <!-- Banner Kanan -->

        @if (!empty($item->bannershop_head_two))
        <a href="#" class="banner-item relative block overflow-hidden duration-500 w-1/2">
            <div class=" md:rounded-[28px] banner-img rounded-2xl overflow-hidden relative">
                <img src="{{ asset('storage/'. $item->bannershop_head_two) }}" alt="bg-right"
                    class="top-0 left-0 w-full h-full object-contain duration-1000 z-[-1]" />
            </div>
        </a>
        @else

        @endif
    </div>
</div>
@endforeach