<!-- content.blade.php -->
@extends('template.main')
@section('title', 'Inventory/Endterm/edit')
@section('content')

<div class="border p-4 rounded">
    <h3>Edit Item</h3>

    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-control" id="category_id" name="category_id" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->category_name }}
                    </option>
                @endforeach
            </select>

            <label for="item_name" class="form-label">Item Name</label>
            <input type="text" class="form-control" id="item_name" name="item_name" value="{{ $item->item_name }}" required>

            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $item->price }}" required>

            <label for="qty" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="qty" name="qty" value="{{ $item->qty }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Item</button>
        <a href="/inventory" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection