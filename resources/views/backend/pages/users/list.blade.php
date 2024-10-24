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
                                    <img src="{{ asset('storage/' . $user->images) }}" alt="Admin Image" style="width: 50px;">
                                @else
                                    <img src="{{ asset('images/profile.png') }}" alt="Default Profile Image" style="width: 50px;">
                                @endif
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td> <span class="badge bg-light-subtle text-muted border py-1 px-2">{{ $user->role->name }}</span></td>
                            <td>
                                <div class="form-check form-switch">
                                    <input 
                                        class="form-check-input" 
                                        type="checkbox" 
                                        {{ $user->status === 'active' ? 'checked' : '' }} 
                                        {{ $user->status === 'inactive' ? 'disabled' : '' }}>
                                    <label class="form-check-label">
                                        {{ $user->status === 'active' ? 'Active' : 'Inactive' }}
                                    </label>
                                </div>
                            </td>                            
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="#!" class="btn btn-light btn-sm">
                                        <iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                    </a>
                                    <a href="{{ route('users.edit_admin', $user->slug) }}" class="btn btn-soft-primary btn-sm">
                                        <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18">
                                        </iconify-icon>
                                    </a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this users?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></button>
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
