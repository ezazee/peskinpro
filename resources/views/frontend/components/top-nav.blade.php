{{-- TopNav
@foreach ($settings as $item)
@if (!empty($item->headnavbanner))
<div id="top-nav" class="top-nav style-one">
    <div class="mx-auto">
        <div class="top-nav-main flex justify-center items-center bg-cover">
          <a href="#">
            <img src="{{ asset('storage/'. $item->headnavbanner) }}" alt="PE Skin Pro" class="top-nav-img">
          </a>
        </div>
    </div>
</div>
@else

@endif
@endforeach

<style>
    /* Background color untuk navbar */
    .top-nav {
        background-color: var(--primary);
    }
</style> --}}


{{-- TopNav --}}
@foreach ($settings as $item)
@if (!empty($item->headnavbanner))
<div id="top-nav" class="top-nav style-one">
    <div class="mx-auto">
        <div class="top-nav-main flex justify-center items-center bg-cover">
          <a href="#">
            <img src="{{ asset('storage/'. $item->headnavbanner) }}" alt="PE Skin Pro" class="h-[26px] md:h-[44px] object-cover">
          </a>
        </div>
    </div>
</div>
@else

@endif
@endforeach


<style>
    /* Background color untuk navbar */
    .top-nav {
        background-color: var(--primary);
    }
</style>
