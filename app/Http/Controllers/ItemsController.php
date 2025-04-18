<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index()
    {
        // Retrieve all records from the items table.
        $items = Item::all();

        // Pass the data to the view using the compact helper.
        return view('items.index')->with([
                    'items' => $items,
                   ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('items.create')->with([
                    'categories' => $categories]);
    }

    public function store(Request $request)
    {
        Item::create([
            "category_id" => $request->input('category_id'),
            "name" => $request->input('name'),
            "qty" => $request->input('qty'),
            "price" => $request->input('price'),
        ]);
        return redirect('/items');
    }
    
    // Edit form
    public function show($id)
    {
        $item = Item::findOrFail($id);
        $categories = Category::all();
        return view('items.edit', compact('item', 'categories'));
    }

    // Updating the item
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id); 
 
        $item->category_id = $request->category_id;
        $item->name = $request->name;
        $item->qty = $request->qty;
        $item->price = $request->price;
        $item->save(); 

        return redirect('/items')->with('success', 'Items updated successfully.');
    }
}