@extends('backend.master.master-app')

@section('title', 'Settings')

@section('content')

<div class="container-xxl">

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-flex align-items-center gap-1">
                        <iconify-icon icon="solar:settings-bold-duotone" class="text-primary fs-20"></iconify-icon>
                        Banner Settings
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

@endsection
