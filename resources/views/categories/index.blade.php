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
            <h1>Laravel Features</h1>
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Insert Table -->
                </tbody>
                <caption>©2025 Web Development Technologies - 3.3.2 Lab. Activity: Saving Categories and Items</caption>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection