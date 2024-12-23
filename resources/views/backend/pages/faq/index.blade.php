@extends('backend.master.master-app')
@section('title', 'List Faq')
@section('content')
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title">All Faq List</h4>
                    </div>
                    {{-- <div class="d-flex align-items-center gap-2">
                        <!-- Form Search -->
                        <form action="{{ route('article.list') }}" method="GET" class="d-flex align-items-center">
                            <input type="text" name="query" class="form-control form-control-sm"
                                placeholder="Search Article..." value="{{ request('query') }}">
                            <button type="submit" class="btn btn-sm btn-outline-secondary ms-1">Search</button>
                        </form>
                    </div> --}}
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 table-hover table-centered">
                            <thead class="bg-light-subtle">
                                <tr>
                                    <th style="width: 20px;">
                                       No
                                    </th>
                                    <th>Tittle</th>
                                    <th>Deskription</th>
                                    <th>Category</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $index => $item)
                                <tr>
                                    <td>
                                        {{ $index+1 }}
                                    </td>
                                    <td>{{ $item->title }}</td>
                                    <td>{!! Str::limit($item->description, 20) !!}</td>
                                    <td>
                                        @if($item->kategori)
                                            <span class="badge bg-light-subtle text-muted border py-1 px-2">{{ $item->kategori->nama_kategori }}</span>
                                        @else
                                            <span>No category</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('faq.edit', $item->id) }}" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                            <form action="{{ route('faq.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this faq?');">
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
                            {{ $faqs->onEachSide(1)->links('pagination::bootstrap-5') }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
