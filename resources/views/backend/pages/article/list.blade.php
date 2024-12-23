@extends('backend.master.master-app')
@section('title', 'List Article')
@section('content')
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title">All Article List</h4>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <!-- Form Search -->
                        <form action="{{ route('article.list') }}" method="GET" class="d-flex align-items-center">
                            <input type="text" name="query" class="form-control form-control-sm"
                                placeholder="Search Article..." value="{{ request('query') }}">
                            <button type="submit" class="btn btn-sm btn-outline-secondary ms-1">Search</button>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 table-hover table-centered">
                            <thead class="bg-light-subtle">
                                <tr>
                                    <th style="width: 20px;">
                                       No
                                    </th>
                                    <th>Images</th>
                                    <th>Tittle</th>
                                    <th>Tags</th>
                                    <th>Created</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $index => $item)
                                <tr>
                                    <td>
                                        {{ $index+1 }}
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/' . $item->images) }}" alt="Admin Image"
                                        style="width: 50px;">
                                    </td>
                                    <td>{{ $item->tittle }}</td>
                                    <td>
                                        @foreach ($item->tag as $tags)
                                        <span class="badge bg-light-subtle text-muted border py-1 px-2">{{ $tags->nama_tags }}</span>
                                        @endforeach
                                    </td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        @if ($item->status == 'public')
                                        <span class="badge border border-success text-success px-2 py-1 fs-13">Publish</span>
                                        @else
                                        <span class="badge border border-info text-info px-2 py-1 fs-13">Scheduled</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('articlebyTittle', $item->slug) }}" class="btn btn-light btn-sm" target="_blank"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                            <a href="{{ route('article.edit', $item->slug) }}" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                            <form action="{{ route('article.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this article?');">
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
                            {{ $articles->onEachSide(1)->links('pagination::bootstrap-5') }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
