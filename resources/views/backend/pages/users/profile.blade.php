@extends('backend.master.master-app')
@section('title', 'Profile')
@section('content')
<div class="container-xxl">
    <form action="{{ route('users.update_profile', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') 
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input class="form-control form-control-sm" type="file" name="images">
                        </div>
                        @if($user->images)
                        <img src="{{ asset('storage/' . $user->images) }}" alt="User Image" class="img-fluid rounded bg-light">
                        @else
                        <img src="{{ asset('/backend/assets/images/blank-profile.png') }}" alt="User Image" class="img-fluid rounded bg-light">
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Users Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="First name" value="{{ old('first_name', $user->first_name) }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Last name" value="{{ old('last_name', $user->last_name) }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Role</label>
                                    <input type="text" class="form-control" placeholder="{{ $user->role->name }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="role-tag" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email', $user->email) }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">No Telp</label>
                                    <input type="number" name="no_telp" class="form-control" placeholder="No Telp" value="{{ old('no_telp', $user->no_telp) }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="role-tag" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Leave blank to keep current password">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Leave blank to keep current password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-top">
                        <button type="submit" class="btn btn-secondary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
