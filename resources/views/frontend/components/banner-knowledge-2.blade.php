{{-- Banner Knowledge 2 --}}
@foreach ($settings as $item)
@if (!empty($item->knowlage_home))
<div class="banner-block style-one w-full mt-8">
    <a href="#" class="banner-item relative block overflow-hidden duration-500">
        <div class="banner-img">
            <img src="{{ asset('storage/'. $item->knowlage_home) }}" class="duration-1000 w-full" alt="img" />
        </div>
        <div class="banner-content absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center">
        </div>
    </a>
</div>
@else

@endif
@endforeach