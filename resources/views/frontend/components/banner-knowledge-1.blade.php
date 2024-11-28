{{-- Banner Knowledge 1 --}}
@foreach ($settings as $item)
@if (!empty($item->knowlage_shop))
<div class="banner-block style-one w-full mb-5">
    <a href="#" class="banner-item relative block overflow-hidden duration-500">
        <div class="banner-img">
            <img src="{{ asset('storage/'. $item->knowlage_shop) }}" class="duration-1000 w-full" alt="img" />
        </div>
        <div class="banner-content absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center">
        </div>
    </a>
</div>
@else

@endif
@endforeach