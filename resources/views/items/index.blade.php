@extends('template.main')

@section('title','Items Table')

@section('content')
<div class="container">
    <h2 class="mb-4">Items List</h2>
    <div>
        <a href="/items/create" class="btn btn-primary mb-1">Add Item</a>
    </div>
    <div class="table responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Category</th>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->price * $item->qty}}</td>
                    <td>
                        <button type = "button" class = "btn btn-info btn-sm">Edit</button>
                        <button type = "button" class = "btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection