@extends('backend.master.master-app')

@section('title', 'Category Inventory')

@section('content')
    <div class="container-xxl">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <!-- Form create -->
                    <form action="#" method="POST">
                        <div class="card-body">
                            <div>
                                <label class="form-label">Category Name</label>
                                <input type="text" name="name" class="form-control" value="####">
                            </div>
                        </div>
                        <div class="card-footer border-top d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary w-20">Create Category</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-xl-9 col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1">
                        <h4 class="card-title flex-grow-1">Categories</h4>

                        <form action="" method="" class="d-flex align-items-center me-2">
                            <input type="text" name="query" class="form-control form-control-sm"
                                placeholder="Search Categories...">
                            <button type="submit" class="btn btn-sm btn-outline-secondary ms-1">Search</button>
                        </form>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-centered">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>#3</td>
                                    <td>#3</td>
                                    <td class="d-flex gap-2">
                                        <form action="#" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this category?');">
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
