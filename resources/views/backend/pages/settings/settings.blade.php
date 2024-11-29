@extends('backend.master.master-app')

@section('title', 'Settings')

@section('content')

<div class="container-xxl">

    {{-- Banner Settings Home --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-flex align-items-center gap-1">
                        <iconify-icon icon="solar:settings-bold-duotone" class="text-primary fs-20"></iconify-icon>
                        Banner Settings Home
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <form action="{{ route('settings.banner') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Add Image Desktop</label>
                                    <input type="file" name="banner_desktop" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Add Image Mobile</label>
                                    <input type="file" name="banner_mobile" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                        <div class="col-lg-8">
                            <table class="table table-hover table-centered">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Banner Desktop</th>
                                        <th scope="col">Banner Mobile</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($banners as $key => $banner)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            <img src="{{ asset($banner->banner_desktop) }}" class="card-img-top"
                                                alt="Banner Image" class="card-img-top" alt="Banner Image"
                                                style="max-height: 50px; object-fit: cover;">
                                        </td>
                                        <td>
                                            <img src="{{ asset($banner->banner_mobile) }}" class="card-img-top"
                                                alt="Banner Image" class="card-img-top" alt="Banner Image"
                                                style="max-height: 50px; object-fit: cover;">
                                        </td>
                                        <td>
                                            <form action="{{ route('deletebanner', $banner->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this banner?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn btn-danger btn-sm">
                                                    <iconify-icon icon="solar:trash-bin-minimalistic-2-broken"
                                                        class="align-middle fs-18"></iconify-icon>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- gift header Settings --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-flex align-items-center gap-1">
                        <iconify-icon icon="solar:settings-bold-duotone" class="text-primary fs-20"></iconify-icon>
                        Headnav Banner Settings
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <form action="{{ route('settings.headnavbanner') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Add Image</label>
                                    <input type="file" name="headnavbanner" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                        <div class="col-lg-8">
                            <table class="table table-hover table-centered">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Images</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($setting as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if(!empty($item->headnavbanner))
                                            <img src="{{ asset('storage/'. $item->headnavbanner) }}"
                                                class="card-img-top" alt="Banner Image" class="card-img-top"
                                                alt="Banner Image" style="max-height: 50px; object-fit: cover;">
                                            @else
                                            -
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Popup Settings --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-flex align-items-center gap-1">
                        <iconify-icon icon="solar:settings-bold-duotone" class="text-primary fs-20"></iconify-icon>
                        Popup Settings
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <form action="{{ route('settings.add_popup') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Add Image Popup</label>
                                    <input type="file" name="popup_image" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                        <div class="col-lg-8">
                            <table class="table table-hover table-centered">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Images</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($popupImages as $image => $id)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if(!empty($image))
                                            <img src="{{ asset('storage/'.$image) }}" class="card-img-top"
                                                alt="Banner Image" style="max-height: 50px; object-fit: cover;">
                                            @else
                                            -
                                            @endif
                                        </td>
                                        <td>
                                            @if(!empty($image))
                                            <form action="{{ route('settings.delete_popup') }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this banner?');">
                                                @csrf
                                                <button type="submit" class="btn btn btn-danger btn-sm">
                                                    <iconify-icon icon="solar:trash-bin-minimalistic-2-broken"
                                                        class="align-middle fs-18"></iconify-icon>
                                                </button>
                                            </form>
                                            @else
                                            -
                                            @endif

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Banner Bundle Settings --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-flex align-items-center gap-1">
                        <iconify-icon icon="solar:settings-bold-duotone" class="text-primary fs-20"></iconify-icon>
                        Banner Bundle Settings
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <form action="{{ route('settings.bannerbundle') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Add Image Head Bundle</label>
                                    <input type="file" name="banner_bundle_head" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Add Image Bundle 1 </label>
                                    <input type="file" name="banner_bundle_one" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Add Image Bundle 2</label>
                                    <input type="file" name="banner_bundle_two" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Add Image Bundle 3</label>
                                    <input type="file" name="banner_bundle_tree" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>

                        <div class="col-lg-8">
                            <table class="table table-hover table-centered">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Image Head Bundle</th>
                                        <th scope="col">Image Bundle 1</th>
                                        <th scope="col">Image Bundle 2</th>
                                        <th scope="col">Image Bundle 3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($setting as $item)
                                    <tr>
                                        <td>
                                            @if(!empty($item->banner_bundle_head))
                                            <img src="{{ asset('storage/'. $item->banner_bundle_head) }}"
                                                class="card-img-top" alt="Banner Image" class="card-img-top"
                                                alt="Banner Image" style="max-height: 50px; object-fit: cover;">
                                            @else
                                            -
                                            @endif
                                        </td>
                                        <td>
                                            @if(!empty($item->banner_bundle_one))
                                            <img src="{{ asset('storage/'. $item->banner_bundle_one) }}"
                                                class="card-img-top" alt="Banner Image" class="card-img-top"
                                                alt="Banner Image" style="max-height: 50px; object-fit: cover;">
                                            @else
                                            -
                                            @endif
                                        </td>
                                        <td>
                                            @if(!empty($item->banner_bundle_two))
                                            <img src="{{ asset('storage/'. $item->banner_bundle_two) }}"
                                                class="card-img-top" alt="Banner Image" class="card-img-top"
                                                alt="Banner Image" style="max-height: 50px; object-fit: cover;">
                                            @else
                                            -
                                            @endif
                                        </td>
                                        <td>
                                            @if(!empty($item->banner_bundle_tree))
                                            <img src="{{ asset('storage/'. $item->banner_bundle_tree) }}"
                                                class="card-img-top" alt="Banner Image" class="card-img-top"
                                                alt="Banner Image" style="max-height: 50px; object-fit: cover;">
                                            @else
                                            -
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Banner Knowlage --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-flex align-items-center gap-1">
                        <iconify-icon icon="solar:settings-bold-duotone" class="text-primary fs-20"></iconify-icon>
                        Banner Knowlage
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <form action="{{ route('settings.bannerknowlage') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Add Image Knowlage Home</label>
                                    <input type="file" name="knowlage_home" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Add Image Knowlage Shop</label>
                                    <input type="file" name="knowlage_shop" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>

                        <div class="col-lg-8">
                            <table class="table table-hover table-centered">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Image Knowlage Home</th>
                                        <th scope="col">Image Knowlage Shop</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($setting as $item)
                                    <tr>
                                        <td>
                                            @if(!empty($item->knowlage_home))
                                            <img src="{{ asset('storage/'. $item->knowlage_home) }}"
                                                class="card-img-top" alt="Banner Image" class="card-img-top"
                                                alt="Banner Image" style="max-height: 50px; object-fit: cover;">
                                            @else
                                            -
                                            @endif
                                        </td>
                                        <td>
                                            @if(!empty($item->knowlage_shop))
                                            <img src="{{ asset('storage/'. $item->knowlage_shop) }}"
                                                class="card-img-top" alt="Banner Image" class="card-img-top"
                                                alt="Banner Image" style="max-height: 50px; object-fit: cover;">
                                            @else
                                            -
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Banner Knowlage --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-flex align-items-center gap-1">
                        <iconify-icon icon="solar:settings-bold-duotone" class="text-primary fs-20"></iconify-icon>
                        Banner Shop
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <form action="{{ route('settings.bannershop') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Add Image Head 1</label>
                                    <input type="file" name="bannershop_head_one" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Add Image Head 2</label>
                                    <input type="file" name="bannershop_head_two" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Add Image Produk Terlaris</label>
                                    <input type="file" name="banner_produk_terlaris" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>

                        <div class="col-lg-8">
                            <table class="table table-hover table-centered">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Image Head 1</th>
                                        <th scope="col">Image Head 2</th>
                                        <th scope="col">Image Produk Terlaris</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($setting as $item)
                                    <tr>
                                        <td>
                                            @if(!empty($item->bannershop_head_one))
                                            <img src="{{ asset('storage/'. $item->bannershop_head_one) }}"
                                                class="card-img-top" alt="Banner Image" class="card-img-top"
                                                alt="Banner Image" style="max-height: 50px; object-fit: cover;">
                                            @else
                                            -
                                            @endif
                                        </td>
                                        <td>
                                            @if(!empty($item->bannershop_head_two))
                                            <img src="{{ asset('storage/'. $item->bannershop_head_two) }}"
                                                class="card-img-top" alt="Banner Image" class="card-img-top"
                                                alt="Banner Image" style="max-height: 50px; object-fit: cover;">
                                            @else
                                            -
                                            @endif
                                        </td>
                                        <td>
                                            @if(!empty($item->banner_produk_terlaris))
                                            <img src="{{ asset('storage/'. $item->banner_produk_terlaris) }}"
                                                class="card-img-top" alt="Banner Image" class="card-img-top"
                                                alt="Banner Image" style="max-height: 50px; object-fit: cover;">
                                            @else
                                            -
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    {{-- Banner Flash Sale --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-flex align-items-center gap-1">
                        <iconify-icon icon="solar:settings-bold-duotone" class="text-primary fs-20"></iconify-icon>
                        Banner Flash Sale
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <form action="{{ route('settings.bannerflashsale') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Background Flash sale</label>
                                    <input type="file" name="bg_flashsale" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Banner Home Flash Sale</label>
                                    <input type="file" name="banner_flashsale_home" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary mb-3">Upload</button>
                            </form>
                            <form action="{{ route('settings.timerflashsale') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Timer Flash Sale</label>
                                    <input type="datetime-local" name="timer_flashsale" class="form-control"
                                        id="timerFlashSale">
                                </div>
                                <button type="submit" class="btn-sm btn btn-primary mb-3">Save</button>
                            </form>
                        </div>

                        <div class="col-lg-8">
                            <table class="table table-hover table-centered">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Background Flash sale</th>
                                        <th scope="col">Image Home Flash Sale</th>
                                        <th scope="col">Timer Flash Sale</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($setting as $item)
                                    <tr>
                                        <td>
                                            @if(!empty($item->bg_flashsale))
                                            <img src="{{ asset('storage/'. $item->bg_flashsale) }}" class="card-img-top"
                                                alt="Banner Image" class="card-img-top" alt="Banner Image"
                                                style="max-height: 50px; object-fit: cover;">
                                            @else
                                            -
                                            @endif
                                        </td>
                                        <td>
                                            @if(!empty($item->banner_flashsale_home))
                                            <img src="{{ asset('storage/'. $item->banner_flashsale_home) }}"
                                                class="card-img-top" alt="Banner Image" class="card-img-top"
                                                alt="Banner Image" style="max-height: 50px; object-fit: cover;">
                                            @else
                                            -
                                            @endif
                                        </td>
                                        <td>
                                            @if(!empty($item->timer_flashsale))
                                            {{ \Carbon\Carbon::parse($item->timer_flashsale)->translatedFormat('d F Y, H:i:s') }}
                                            @else
                                            -
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-flex align-items-center gap-1">
                        <iconify-icon icon="solar:shop-2-bold-duotone" class="text-primary fs-20"></iconify-icon>Flash
                        Sale & Best Seller Settings
                    </h4>
                </div>
                <div class="card-body">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0 table-hover table-centered">
                                <thead class="bg-light-subtle">
                                    <tr>
                                        <th>No</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Category</th>
                                        <th>Flash Sale</th>
                                        <th>Best Seller</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($expandedProducts as $index => $item)
                                    <tr>
                                        <td>
                                            {{ $index+1 }}
                                        </td>
                                        <td>{{ $item['name'] }} -
                                            {{ $item['size']->size }}ML</td>
                                        <td>
                                            Rp{{ number_format($item['size']->price - $item['size']->discount, 0, ',', '.') }}
                                        </td>
                                        <td> {{ $item['size']->stock }} Pcs</td>
                                        <td> {{ $item['category']->name }}</td>
                                        <td>
                                            <a href="{{ route('update.promotion', $item['size']->id) }}"
                                                class="badge border {{ $item['size']->promotion === 'yes' ? 'border-success text-success' : 'border-danger text-danger' }} px-2 py-1 fs-13">
                                                {{ $item['size']->promotion === 'yes' ? 'Yes' : 'No' }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('update.bestseller', $item['size']->id) }}"
                                                class="badge border {{ $item['size']->bestseller === 'yes' ? 'border-success text-success' : 'border-danger text-danger' }} px-2 py-1 fs-13">
                                                {{ $item['size']->bestseller === 'yes' ? 'Yes' : 'No' }}
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const timerFlashSale = document.getElementById('timerFlashSale');

    const now = new Date();
    const minDateTime = new Date(now.getTime() + 24 * 60 * 60 * 1000);
    const year = minDateTime.getFullYear();
    const month = String(minDateTime.getMonth() + 1).padStart(2, '0');
    const day = String(minDateTime.getDate()).padStart(2, '0');
    const hours = String(minDateTime.getHours()).padStart(2, '0');
    const minutes = String(minDateTime.getMinutes()).padStart(2, '0');

    // Setel nilai min ke elemen input
    timerFlashSale.min = `${year}-${month}-${day}T${hours}:${minutes}`;

</script>
@endsection
