@extends('template.main')

@section('title','Edit Category')

@section('content')
<div class="container">
    <h2>Edit Category</h2>

    <form action="/categories/{{ $category->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $category->name) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ old('description', $category->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update Category</button>
        <a href="/categories" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
