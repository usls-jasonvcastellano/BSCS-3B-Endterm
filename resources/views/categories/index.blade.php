<!DOCTYPE html>
@extends('template.main')

@section('title', 'Categories/Endterm')

@section('content')

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tests.css') }}">
</head>

<body>
    <div class="mt-3">
        <a href="/categories/create" class="btn btn-success">Add Category</a>
    </div>

    <div class="container mt-4">
        <div class="table-responsive" role="region" tabindex="0">
            <table class="table table-striped table-bordered">
            <h1>Category Table</h1>
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <!-- Edit Button -->
                                <a href="/categories/{{ $category->id }}/edit" class="btn btn-primary btn-sm">Edit</a>

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
                <caption>©2025 Web Development Technologies - 3.3.2 Lab. Activity: Saving Categories and Items</caption>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection