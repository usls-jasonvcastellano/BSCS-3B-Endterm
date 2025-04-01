<!-- content.blade.php -->
@extends('template.main')
@section('title', 'Inventory/Endterm')
@section('content')

<style>
    .rounded-header {
        border-radius: 10px;
        background-color: #351F0C;
        padding: 10px;
        color: #F5F4F3;
    }
</style>

<div class="mt-3">
    <a href="/inventory/create" class="btn btn-success">Add Item</a>
</div>

<!-- Header Row -->
<div class="row d-flex justify-content-center">
    <div class="col-md-9 col-lg-12 col-xl-12 text-center grid-item fw-bold fs-3 rounded-header">
        Inventory
    </div>
</div>



<!-- Table for inventory items -->
<table class="table">
    <thead>
        <tr>
            <th>Item Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        
        <tr>
            <td>{{$item->item_name}}</td>
            <td>{{$item->category->category_name}}</td> 
            <td>${{ number_format($item->price, 2) }}</td>
            <td>{{$item->qty}}</td>
            <td>${{ number_format($item->total, 2) }}</td> <!-- Using computed attribute -->
            <td>
                <button class="btn btn-primary btn-sm" disabled>Edit</button>
                <form action="/inventory/{{ $item->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
