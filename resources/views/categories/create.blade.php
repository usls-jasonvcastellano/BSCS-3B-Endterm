<!-- content.blade.php -->
@extends('template.main')
@section('title', 'Categories/Endterm/create')
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

        <div class="border p-4 rounded">
            <form action="/categories/store" method="POST">
                @csrf <!-- CSRF token for security -->
                <div class="mb-3">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter Category name" required>
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


@endsection
