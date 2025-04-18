<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        // Retrieve all records from the items table.
        $items = Item::all();

        // Pass the data to the view using the compact helper.
        return view('items.index')->with([
                    'items' => $items
                    ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('items.create')->with(['categories' => $categories]);
    }

    public function store(Request $request)
    {
        Item::create([
            "category_id" => $request->input('category_id'),
            "item_name" => $request->input('item_name'),
            "qty" => $request->input('qty'),
            "price" => $request->input('price'),
        ]);
        return redirect('/items')->with('success', 'Item created successfully!');;
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        $categories = Category::all();
        return view('items.edit', compact('item', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => '',
            'item_name' => 'required|string|max:255',
            'qty' => 'nullable|string|max:255',
            'price' => 'required|decimal:2',
        ]);

        $item = Item::findOrFail($id);

        $item->update([
        'category_id' => $request->category_id,
        'item_name' => $request->item_name,
        'qty' => $request->qty,
        'price' => $request->price,
        ]);

        return redirect('/items')->with('success', 'Item updated successfully!');
    }
}
