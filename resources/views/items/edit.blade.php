@extends('template.main')

@section('title', 'Edit Item')

@section('content')
    <div class="container">
        <div class="panel panel-default"></div>
            <div class="panel-body">
                <form id="editItemForm" action="/items/{{ $item->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <a href="/items" class="btn btn-primary mb-1">Back</a>
                    </div>
                    <div class="form-group row">
                        <label for="category_select" class="col-sm-3 col-form-label mb-3">Select Category:</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == $item->category_id ? 'selected' : '' }}>
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="item_name_field" class="col-sm-3 col-form-label mb-3">Item Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="item_name" id="item_name_field" value="{{ $item->item_name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="qty_field" class="col-sm-3 col-form-label mb-3">Quantity</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="qty" id="qty_field" value="{{ $item->qty }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price_field" class="col-sm-3 col-form-label mb-3">Price</label>
                        <div class="col-sm-9">
                            <input type="decimal" class="form-control" name="price" id="price_field" value="{{ $item->price }}">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary col-3">Edit Item</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection