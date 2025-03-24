<!-- content.blade.php -->
@extends('template.main')

@section('content')

<style>
    .rounded-header {
        border-radius: 10px;
        background-color: #351F0C;
        padding: 10px;
        color: #F5F4F3;
    }
</style>

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
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        
        <tr>
            <td>{{$item->item_name}}</td>
            <td>{{$item->category->category_name}}</td> 
            <td>${{ number_format($item->price, 2) }}</td>
            <td>{{$item->qty}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
