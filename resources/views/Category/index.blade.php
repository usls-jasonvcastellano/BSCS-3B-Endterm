@extends('template.main')

@section('title', 'Category List')

@section('content')
<h1>Category</h1>
<table class="table">
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>1</td>
        <td>Apple</td>
        </tr>
        <tr>
        <td>2</td>
        <td>Orange</td>
        </tr>
    </tbody>
</table>

@endsection