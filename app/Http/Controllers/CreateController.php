<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    // Show the form to add an item
    public function create()
    {
        $categories = Category::all(); // Fetch all categories from the database
        return view('inventory.add', compact('categories'));
    }

    // Store the item in the database
    public function store(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'item_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Create new item in the database
        Item::create([
            'name' => $validated['item_name'],
            'quantity' => $validated['quantity'],
            'price' => $validated['price'],
            'category_id' => $validated['category_id'],
        ]);

        // Redirect or return a success message
        return redirect()->route('add.item')->with('success', 'Item added successfully!');
    }
}
