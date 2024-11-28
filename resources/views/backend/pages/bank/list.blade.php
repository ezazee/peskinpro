@extends('backend.master.master-app')

@section('title', 'Bank')

@section('content')
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="card">
                @if(isset($bank))
                <!-- Jika sedang edit -->
                <form action="{{ route('bank.update', $bank->id) }}" method="POST">
                    @method('POST') <!-- method POST untuk update -->
                @else
                <!-- Form create -->
                <form action="{{ route('bank.create') }}" method="POST">
                @endif
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name Bank</label>
                            <input type="text" class="form-control" name="nama_bank" value="{{ $bank->nama_bank ?? '' }}">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="atas_nama" value="{{ $bank->atas_nama ?? '' }}">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">No Rekening</label>
                            <input type="text" class="form-control" name="no_rek" value="{{ $bank->no_rek ?? '' }}">
                          </div>
                    </div>
                    <div class="card-footer border-top d-flex justify-content-end">
                        @if(isset($bank))
                            <button type="submit" class="btn-sm btn btn-primary w-20">Update Bank</button>
                        @else
                            <button type="submit" class="btn-sm btn btn-primary w-20">Create Bank</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>

        <div class="col-xl-9 col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center gap-1">
                    <h4 class="card-title flex-grow-1">All Bank</h4>

                    <form action="" method="" class="d-flex align-items-center me-2">
                        <input type="text" name="query" class="form-control form-control-sm" placeholder="Search Bank...">
                        <button type="submit" class="btn btn-sm btn-outline-secondary ms-1">Search</button>
                    </form>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-centered">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name Bank</th>
                                <th scope="col">Name</th>
                                <th scope="col">No Rekening</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banks as $index => $item)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $item->nama_bank }}</td>
                                <td>{{ $item->atas_nama }}</td>
                                <td>{{ $item->no_rek }}</td>
                                <td class="d-flex gap-2">
                                    <a href="{{ route('bank.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                    <form action="{{ route('bank.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
@endsection
