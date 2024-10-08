@extends('backend.master.master-app')
@section('title', 'List Product')
@section('content')

<div class="container-fluid">

    <div class="row">
         <div class="col-xl-12">
              <div class="card">
                   <div class="card-header d-flex justify-content-between align-items-center gap-1">
                        <h4 class="card-title flex-grow-1">All Product List</h4>

                        <a href="{{ route('product.index')}}" class="btn btn-sm btn-primary">
                             Add Product
                        </a>
                   </div>
                   <div>
                        <div class="table-responsive">
                             <table class="table align-middle mb-0 table-hover table-centered">
                                  <thead class="bg-light-subtle">
                                       <tr>
                                            <th style="width: 20px;">
                                                 <div class="form-check ms-1">
                                                      <input type="checkbox" class="form-check-input" id="customCheck1">
                                                      <label class="form-check-label" for="customCheck1"></label>
                                                 </div>
                                            </th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Category</th>
                                            <th>Image Detail</th>
                                            <th>Action</th>
                                       </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($products as $prod)
                                       <tr>
                                            <td>
                                                 <div class="form-check ms-1">
                                                      <input type="checkbox" class="form-check-input" id="customCheck2">
                                                      <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                 </div>
                                            </td>
                                            <td>
                                                 <div class="d-flex align-items-center gap-2">
                                                      <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                        @if($prod->front_image)
                                                           <img src="{{ asset('storage/' . $prod->front_image) }}" alt="" class="avatar-md">
                                                        @else
                                                           <span>No Image</span>
                                                        @endif
                                                      </div>
                                                      <div>
                                                           <a href="#!" class="text-dark fw-medium fs-15">{{ $prod->name }}</a>
                                                      </div>
                                                 </div>
                                            </td>
                                            <td class="mb-1 text-muted"><span class="text-dark fw-medium">Rp {{ number_format($prod->price, 0, ',', '.') }}</td>
                                            <td>
                                                 <p class="mb-1 text-muted"><span class="text-dark fw-medium">{{ $prod->stock }} Item</span></p>
                                            </td>
                                            <td>{{ $prod->category->name ?? 'N/A' }}</td>
                                            <td>
                                                @if($prod->imagedetail->isNotEmpty())
                                                    <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                        @foreach($prod->imagedetail as $image)
                                                            <img src="{{ asset('storage/' . $image->image_path) }}" alt="Product Image" class="avatar-md">
                                                        @endforeach
                                                    </div>
                                                @else
                                                    <span>No Detail Images</span>
                                                @endif
                                            </td>                                            
                                            <td>
                                                 <div class="d-flex gap-2">
                                                      <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="{{ route('product.edit', $prod->id) }}" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <form action="{{ route('product.destroy', $prod->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn btn-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></button>
                                                    </form>
                                                 </div>
                                            </td>
                                       </tr>
                                    @endforeach
                                  </tbody>
                             </table>
                        </div>
                        <!-- end table-responsive -->
                   </div>
                   <div class="card-footer border-top">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end mb-0">
                            {{-- Laravel Pagination Links --}}
                            {{ $products->onEachSide(1)->links('pagination::bootstrap-5') }}
                        </ul>
                    </nav>
                    </div>                
                </div>
                
              </div>
         </div>

    </div>

</div>

@endsection