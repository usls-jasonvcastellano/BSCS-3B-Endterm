<!-- content.blade.php -->
@extends('template.main')
@section('title', 'Inventory/Endterm/create')
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
            <form action="/inventory/store" method="POST">
                @csrf <!-- CSRF token for security -->
                <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                      <select class="form-control" id="category_id" name="category_id" required>
                          <option value="">Select a category</option>
                          @foreach ($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                          @endforeach
                      </select>

                    <label for="item_name" class="form-label">Item Name</label>
                    <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Enter Item name" required>
                    
                    <label for="price" class="form-label">Price</label>
                    <input type="decimal" class="form-control" id="price" name="price" placeholder="Enter Price" required>
                    
                    <label for="qty" class="form-label">Quantity</label>
                    <input type="integer" class="form-control" id="qty" name="qty" placeholder="Enter Quantity" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


@endsection
