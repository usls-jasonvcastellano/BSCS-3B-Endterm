<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Item; // Import the Item model
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    // Show all inventory items
    public function index()
    {
        // Get all inventory items
        $items = Item::all(); 

        // Pass the items to the view
        return view('inventory.index', compact('items'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('inventory.create')->with(['categories' => $categories]);
    }

    public function store(Request $request)
    {
        Item::create([
            "category_id" => $request->input('category_id'),
            "item_name" => $request->input('item_name'),
            "qty" => $request->input('qty'),
            "price" => $request->input('price')
        ]);
        

        return redirect('/inventory')->with('success', 'Item added successfully!');
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id); // Find item by ID
        $item->delete(); // Delete item

        return redirect('/inventory')->with('success', 'Item deleted successfully!');
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        $categories = Category::all();
        return view('inventory.edit', compact('item', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'item_name' => 'required|string|max:255',
            'qty' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
        ]);

        $item = Item::findOrFail($id);
        $item->update([
            'category_id' => $request->input('category_id'),
            'item_name' => $request->input('item_name'),
            'qty' => $request->input('qty'),
            'price' => $request->input('price'),
        ]);

        return redirect('/inventory')->with('success', 'Item updated successfully!');
    }

}
