@extends('template.main')

@section('title', 'Categories Table')

@section('content')
<div class="container">
    <h2 class="mb-4">Categories List</h2>
    <div>
    <a href="/categories/create" class="btn btn-primary mb-1">Add Category</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a href="/categories/{{ $category->id }}/edit" class="btn btn-warning mb-1">Update</a>
                            <a href="" class="btn btn-danger mb-1">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
</div>
@endsection