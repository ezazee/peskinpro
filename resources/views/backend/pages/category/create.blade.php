@extends('backend.master.master-app')

@section('title', 'Category')

@section('content')
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="card">
                @if(isset($category)) 
                <!-- Jika sedang edit -->
                <form action="{{ route('category.update', $category->id) }}" method="POST">
                    @method('POST') <!-- method POST untuk update -->
                @else
                <!-- Form create -->
                <form action="{{ route('category.create') }}" method="POST">
                @endif
                    @csrf
                    <div class="card-body">
                        <div>
                            <label class="form-label">Category Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->name ?? '' }}">
                        </div>
                    </div>
                    <div class="card-footer border-top d-flex justify-content-end">
                        @if(isset($category))
                        <button type="submit" class="btn btn-primary w-20">Update Category</button>
                        @else
                        <button type="submit" class="btn btn-primary w-20">Create Category</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>

        <div class="col-xl-9 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List Categories</h4>
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
                            @foreach ($categories as $index => $item)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td class="d-flex gap-2">
                                    <a href="{{ route('category.edit', $item->slug) }}" class="btn btn-primary btn-sm">Edit</a>
                                    
                                    <form action="{{ route('category.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
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
