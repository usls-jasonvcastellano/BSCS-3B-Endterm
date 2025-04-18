@extends('template.main')

@section('title', 'Edit Category')

@section('content')
    <div class="container">
        <div class="panel panel-default"></div>
            <div class="panel-body">
                <form id="editCategoryForm" action="/categories/{{ $category->id }}" method="POST">
                    @csrf
                    @method("PUT")

                    <div>
                        <a href="/categories" class="btn btn-primary mb-1">Back</a>
                    </div>
                    <div class="form-group row">
                        <label for="category_name_field" class="col-sm-3 col-form-label mb-3">Category Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="category_name" id="category_name_field" value="{{ $category->category_name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description_field" class="col-sm-3 col-form-label mb-3">Description:</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description" id="description_field"> {{  $category->description }} </textarea>
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