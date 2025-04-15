@extends('template.main')

@section('title', 'Edit Category')

@section('content')
<div class="container mt-5">
    <h1>Edit Category</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="category_name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="category_name" name="category_name" value="{{ $category->category_name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $category->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="/categories" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection