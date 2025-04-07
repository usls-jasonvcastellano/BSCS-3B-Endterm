<?php

namespace App\Http\Controllers;

use App\Models\Category; 
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        // Retrieve all records from the categories table.
        $categories = Category::all();

        // Pass the data to the view using the compact helper.
        return view('categories.index')->with([
                    'categories' => $categories,
                   ]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        Category::create([
            "name" => $request->input('name'),
            "description" => $request->input('description'),
        ]);
        return redirect('/categories');
    }
}