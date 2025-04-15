<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::all(); // Fetch all categories
        return view("categories.index", compact('categories'));
    }

    public function create(){
        return view("categories.create"); 
    }

    public function store(Request $request){

        $request->validate([
            'category_name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Create new cate
        Category::create([
            'category_name' => $request->input('category_name'),
            'description' => $request->input('description'),
        ]);

        return redirect()->to("/categories")->with('success', 'Category added');
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
            'description' => 'nullable|string|max:255',
        ]);

        $category = Category::findOrFail($id);

        $category->update([
            'category_name' => $request->input('category_name'),
            'description' => $request->input('description'),
        ]);

        return redirect('/categories')->with('success', 'Category updated');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('/categories')->with('success', 'Category deleted');
    }
}
