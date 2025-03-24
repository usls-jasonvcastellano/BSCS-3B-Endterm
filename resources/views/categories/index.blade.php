<!-- content.blade.php -->
@extends('template.main')

@section('content')

<!-- rounded rectangle style -->
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
        Category
    </div>
</div>

<!-- Table for category -->
<table class="table">
    <thead>
        <tr>
            <th>Title</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->category_name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
