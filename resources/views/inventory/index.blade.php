@extends('template.main')

@section('title', 'Inventory Table')

@section('content')
<div class="container">
    <h2>Inventory List ----- OLD. Don't know if I should have renamed or removed so I'm keeping it in for now</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Item Name</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1000</th>
            <td>Pencil</td>
            <td>5</td>
            <td>1005</td>
            </tr>
            <tr>
            <th scope="row">1001</th>
            <td>Eraser</td>
            <td>5</td>
            <td>1010</td>
            </tr>
            <tr>
            <th scope="row">1002</th>
            <td>Paper</td>
            <td>1</td>
            <td>1015</td>
            </tr>
        </tbody>
        </table>
    </div>
</div>
@endsection