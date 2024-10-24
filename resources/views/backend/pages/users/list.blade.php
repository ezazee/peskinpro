@extends('backend.master.master-app')
@section('title', 'List Users')
@section('content')

<div class="container-xxl">

    <div class="card overflow-hiddenCoupons">
        <div class="card-body p-0">
            <div class="d-flex card-header justify-content-between align-items-center">
                <div>
                    <h4 class="card-title">All Users List</h4>
                </div>
                <div class="dropdown">
                    <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">
                        Add User
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-middle mb-0 table-hover table-centered">
                    <thead class="bg-light-subtle">
                        <tr>
                            <th>No</th>
                            <th>images</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item => $user)
                        <tr>
                            <td>{{ $item+1 }}</td>
                            <td>
                                @if($user->images)
                                <img src="{{ asset('storage/' . $user->images) }}" alt="Admin Image"
                                    style="width: 50px;">
                                @else
                                <img src="{{ asset('/backend/assets/images/blank-profile.png') }}"
                                    alt="Default Profile Image" style="width: 50px;">
                                @endif
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td> <span
                                    class="badge bg-light-subtle text-muted border py-1 px-2">{{ $user->role->name }}</span>
                            </td>
                            <td>
                                @if ($user->status == 'active')
                                <span class="badge bg-success-subtle text-success py-1 px-2">Active</span>
                                @else
                                <span class="badge bg-danger-subtle text-danger py-1 px-2">In Active</span>
                                @endif
                            </td>
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a class="btn btn-light btn-sm" data-bs-toggle="modal"
                                        href="#exampleModalToggle-{{ $user->slug }}" role="button">
                                        <iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                    </a>
                                    <div class="modal fade" id="exampleModalToggle-{{ $user->slug }}" aria-hidden="true"
                                        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalToggleLabel">Detail User
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">First Name</label>
                                                                <input type="text" name="first_name"
                                                                    class="form-control"
                                                                    placeholder="{{ $user->first_name }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Last Name</label>
                                                                <input type="text" name="last_name" class="form-control"
                                                                    placeholder="{{ $user->last_name }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Role</label>
                                                                <input type="text" name="last_name" class="form-control"
                                                                    placeholder="{{ $user->role->name }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="role-tag" class="form-label">Email</label>
                                                                <input type="email" name="email" class="form-control"
                                                                    placeholder="{{ $user->email }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">No Telp</label>
                                                                <input type="number" name="no_telp" class="form-control"
                                                                    placeholder="{{ $user->no_telp }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <p>User Status : 
                                                                @if ($user->status == 'active')
                                                                <span class="badge bg-success-subtle text-success py-1 px-2">Active</span>
                                                                @else
                                                                <span class="badge bg-danger-subtle text-danger py-1 px-2">In Active</span>
                                                                @endif
                                                            </p>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="small mb-0">Created at: {{ $user->created_at }}</p>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="{{ route('users.edit_admin', $user->slug) }}"
                                        class="btn btn-soft-primary btn-sm">
                                        <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18">
                                        </iconify-icon>
                                    </a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this users?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn btn-soft-danger btn-sm">
                                            <iconify-icon icon="solar:trash-bin-minimalistic-2-broken"
                                                class="align-middle fs-18"></iconify-icon>
                                        </button>
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
        <div class="row g-0 align-items-center justify-content-between text-center text-sm-start p-3 border-top">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end mb-0">
                    {{ $users->onEachSide(1)->links('pagination::bootstrap-5') }}
                </ul>
            </nav>
        </div>
    </div> <!-- end card -->

</div>

@endsection
