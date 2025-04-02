<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index() {
        return view("inventory.index");
    }

    public function create() {
        return view("inventory.create");
    }
}
