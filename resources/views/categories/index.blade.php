<!-- content.blade.php -->
@extends('template.main')
@section('title', 'Categories/Endterm')
@section('content')

<!-- rounded rectangle style -->
<style>
    .rounded-header {
        border-radius: 10px;
        background-color: #351F0C;
        padding: 10px;
        color: #F5F4F3;
    }
</style>

<div class="mt-3">
    <a href="/categories/create" class="btn btn-success">Add Category</a>
</div>

<!-- Header Row -->
<div class="row d-flex justify-content-center">
    <div class="col-md-9 col-lg-12 col-xl-12 text-center grid-item fw-bold fs-3 rounded-header">
        Category
    </div>
</div>

<!-- Table for category -->
<table class="table">
    <thead>
        <tr>
            <th>Category</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->category_name}}</td>
            <td>{{$category->description}}</td>
            <td>
                <!-- Edit Button -->
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>

                <!-- Delete Button -->
                <form action="/categories/{{ $category->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
