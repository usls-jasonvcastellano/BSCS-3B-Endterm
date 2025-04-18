@extends('template.main')

@section('title', 'Item Table')

@section('content')
<div class="container">
    <h2 class="mb-4">Item List</h2>
    <div>
        <a href="/items/create" class="btn btn-primary mb-1">Add Item</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Category</th>
                    <th>Item Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item->category->category_name }}</td>
                        <td>{{ $item->item_name }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->qty * $item->price }}</td>
                        <td>
                            <a href="/items/{{ $item->id }}/edit" class="btn btn-warning mb-1">Update</a>
                            <button type="button" class="btn btn-danger mb-1">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
</div>
@endsection