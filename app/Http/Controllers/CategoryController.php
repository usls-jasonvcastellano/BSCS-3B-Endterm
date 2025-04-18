<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Retrieve all records from the categories table.
        $categories = Category::all();

        // Pass the data to the view using the compact helper.
        return view('categories.index')->with([
                    'categories' => $categories
                   ]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        Category::create([
            "category_name" => $request->input('category_name'),
            "description" => $request->input('description'),
     ]);
     return redirect('/categories')->with('success', 'Category created successfully!');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        $category = Category::findOrFail($id);

        $category->update([
        'category_name' => $request->category_name,
        'description' => $request->description,
        ]);

        return redirect('/categories')->with('success', 'Category updated successfully!');
    }
}