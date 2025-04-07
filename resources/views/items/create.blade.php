@extends('template.main')

@section('title','Create Item')

@section('content')
    <form action="/items" method="POST">
        @csrf
        <div class="container">
            <div class="row mt-3">
                <div class="col-6 col-sm-6 col-md-8 col-lg-10 col-xl-12">
                    <div class="input-group mb-3" class="dropdown">
                        <span class="input-group-text" id="basic-addon1">Category</span>
                        <select class="form-control" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>   
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Item Name</span>
                        <input type="text" name="name" class="form-control" placeholder="Item Name" aria-label="itemName" aria-describedby="basic-addon1" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Quantity</span>
                        <input type="text"name="qty"  class="form-control" placeholder="Quantity" aria-label="quantity" aria-describedby="basic-addon1" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Price</span>
                        <input type="text" name="price" class="form-control" placeholder="Price" aria-label="price" aria-describedby="basic-addon1" />
                    </div>
                    <div class="col text-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
