@extends('backend.master.master-app')
@section('content')
<div class="container-xxl">
    <form enctype="multipart/form-data">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <h1>asdkjhasjkdhs</h1>
                            <h1>asdajskjdhaskjdhsad</h1>
                        </div>
                        <img src="{{ asset('/backend/assets/images/blank-profile.png') }}" alt="User Image" class="img-fluid rounded bg-light">
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input class="form-control form-control-sm" type="file" name="images">
                        </div>
                        <img src="{{ asset('/backend/assets/images/blank-profile.png') }}" alt="User Image" class="img-fluid rounded bg-light">
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
                                    <input type="text" name="first_name" class="form-control" placeholder="First name">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Role</label>
                                    <select class="form-control" name="role_id">
                                            <option>
                                                11
                                            </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="role-tag" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">No Telp</label>
                                    <input type="number" name="no_telp" class="form-control" placeholder="No Telp">
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
                            <div class="col-lg-6">
                                <p>User Status </p>
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="active">
                                        <label class="form-check-label">
                                            Active
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="inactive">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            In Active
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-top">
                        <button type="submit" class="btn btn-secondary">Update Users</button>
                            <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
