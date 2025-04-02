@extends('template.main')

@section('title', 'Create Category')

@section('content')
    <div class="container">
        <div class="panel panel-default"></div>
            <div class="panel-body">
                <form action="/categories" method="POST">
                    @csrf
                    <div>
                        <a href="/categories" class="btn btn-primary mb-1">Back</a>
                    </div>

                    <!-- <input type="text" name="category_name" placeholder="Category Name">
                    <input type="text" name="description" placeholder="Description">
                    <button type="submit">Save Category</button> -->

                    <div class="form-group row">
                        <label for="category_name_field" class="col-sm-3 col-form-label mb-3">Category Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="category_name" id="category_name_field" placeholder="Category Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description_field" class="col-sm-3 col-form-label mb-3">Description:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="description" id="description_field" placeholder="Category Description">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary col-3">Save Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection