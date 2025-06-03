@extends('backend.master.master-app')
@section('title', 'Affiliate Commision')
@section('content')
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title">All Prodduct Affiliate</h4>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <!-- Form Search -->
                        <form action="{{ route('commision.affiliate') }}" method="GET" class="d-flex align-items-center">
                            <input type="text" name="query" class="form-control form-control-sm"
                                placeholder="Search Article..." value="{{ request('query') }}">
                            <button type="submit" class="btn btn-sm btn-outline-secondary ms-1">Search</button>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <form id="bulk-update-form" method="POST" action="{{ route('commision.bulkUpdateCommission') }}">
                            @csrf
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 table-hover table-centered">
                                    <thead class="bg-light-subtle">
                                        <tr>
                                            <th><input type="checkbox" id="select-all"></th>
                                            <th style="width: 20px;">No</th>
                                            <th>Images</th>
                                            <th>Nama</th>
                                            <th>SKU</th>
                                            <th>Commission</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $index => $item)
                                        <tr>
                                            <td><input type="checkbox" name="selected_ids[]" value="{{ $item->id }}" class="select-item"></td>
                                            <td>{{ $index + 1 }}</td>
                                            <td><img src="{{ asset('storage/' . $item->front_image) }}" alt="Admin Image" style="width: 50px;"></td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->sku }}</td>
                                            <td>
                                                @foreach ($item->sizes as $com)
                                                    <div>
                                                        <input type="number" name="commission[{{ $com->id }}]" 
                                                               value="{{ $com->commission }}" 
                                                               class="form-control form-control-sm" 
                                                               style="width: 80px;">
                                                    </div>
                                                @endforeach
                                            </td>                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <button type="submit" class="btn btn-sm btn-primary">Update Commission</button>
                                    </div>
                                </table>
                            </div>

                        </form>                        
                    </div>                    
                </div>                
                <div class="card-footer border-top">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end mb-0">
                            {{ $products->onEachSide(1)->links('pagination::bootstrap-5') }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>

</div>
<script>
    document.getElementById('select-all').addEventListener('change', function(event) {
        var checkboxes = document.querySelectorAll('.select-item');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = event.target.checked;
        });
    });

    document.querySelectorAll('.select-item').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var selectAllCheckbox = document.getElementById('select-all');
            var allChecked = Array.from(document.querySelectorAll('.select-item')).every(function(checkbox) {
                return checkbox.checked;
            });
            selectAllCheckbox.checked = allChecked;
        });
    });
</script>


@endsection
