@extends('template.main')

@section('title','Edit Item')

@section('content')
<div class="container">
    <h2>Edit Item</h2>

    <form action="/items/{{ $item->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="input-group mb-3" class="dropdown">
        <span class="input-group-text" id="basic-addon1">Category</span>
            <select class="form-control" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ $category->id == $item->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>   
        </div>

        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $item->name) }}" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="name">Quantity</label>
            <input type="number" name="qty" class="form-control" value="{{ old('qty', $item->qty) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="name">Price</label>
            <input type="decimal" name="price" class="form-control" value="{{ old('name', $item->price) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update item</button>
        <a href="/items" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
