<!DOCTYPE html>
@extends('template.main')

@section('title', 'Items List')

@section('content')

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tests.css') }}">
</head>

<body>
    <div class="mt-3">
        <a href="/items/create" class="btn btn-success">Add Item</a>
    </div>

    <div class="container mt-4">
        <div class="table-responsive" role="region" tabindex="0">
            <table class="table table-striped table-bordered">
                <h1>Item Table</h1>
                <thead class="table-dark">
                    <tr>
                        <th>Category</th>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $item->category->category_name }}</td>
                            <td>{{ $item->item_name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->total }}</td>
                            <td>
                                <!-- Edit Button -->
                                <a href="/items/{{ $item->id }}/edit" class="btn btn-primary btn-sm">Edit</a>

                                <!-- Delete Button -->
                                <form action="/items/{{ $item->id }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection