<?php

namespace App\Http\Controllers;

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

    public function create () {
        return view("inventory.create");
    }
}
