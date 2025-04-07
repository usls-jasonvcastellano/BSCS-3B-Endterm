<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index() {
        $categories = Category::paginate(5);

        return view("category.index")->with([
            'categories' => $categories
        ]);
    }

    public function create() {
        return view('category.create');
    }


    public function store(Request $request) {

        Category::create([
            'category_name' => $request->input('category_name'),
            'description' => $request->input('description')
        ]);

        return redirect()->to("/categories");


    }
}
