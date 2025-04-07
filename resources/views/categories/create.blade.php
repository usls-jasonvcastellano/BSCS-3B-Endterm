@extends('template.main')

@section('title','Create Category')

@section('content')
    <form action="/categories" method="POST">
        @csrf
        <div class="container">
            <div class="row mt-3">
                <div class="col-6 col-sm-6 col-md-8 col-lg-10 col-xl-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Category</span>
                        <input type="text" class="form-control" name="name" placeholder="Category Name" aria-label="categoryName" aria-describedby="basic-addon1" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2">Description</span>
                        <input type="text" class="form-control" name="description" placeholder="Description" aria-label="categoryDescription" aria-describedby="basic-addon2" />
                    </div>
                    <div class="col text-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection