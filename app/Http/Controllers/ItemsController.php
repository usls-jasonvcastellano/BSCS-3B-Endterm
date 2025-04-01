<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Item::with('category')->get();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('items.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'item_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        $total = $request->quantity * $request->price;

        Item::create([
            'category_id' => $request->category_id,
            'item_name' => $request->item_name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'total' => $total, 
        ]);

        return redirect('/items')->with('success', 'Item added');
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect('/items')->with('success', 'Item deleted');
    }
}
