<!-- content.blade.php -->
@extends('template.main')
@section('title', 'Categories/Endterm/edit')
@section('content')

<div class="border p-4 rounded">
    <h2>Edit Category</h2>
    
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Important for PUT request -->

        <div class="mb-3">
            <label for="category_name" class="form-label">Category Name</label>
            <input type="text" id="category_name" name="category_name" class="form-control" value="{{ $category->category_name }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control">{{ $category->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="/categories" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection