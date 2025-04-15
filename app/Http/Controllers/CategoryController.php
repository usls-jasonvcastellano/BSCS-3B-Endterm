<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
    public function create(){
        return view("categories.create"); 
    }

    public function store(Request $request){

        $request->validate([
            'category_name' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
        ]);

        // Create new cate
        Category::create([
            'category_name' => $request->input('category_name'),
            'description' => $request->input('description'),
        ]);

        // Redirect back to /categories
        return redirect()->to("/categories")->with('success', 'Category added');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id); // Find category ID
        $category->delete(); // Delete category
        return redirect('/categories')->with('success', 'Category deleted');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'category_name' => $request->input('category_name'),
            'description' => $request->input('description'),
        ]);

        return redirect('/categories')->with('success', 'Category updated!');
    }
}
