<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        return view("categories.index");
    }

    public function create(){
        return view("categories.create"); 
    }

    public function store(Request $request){

        Category::create([
            'category name' => $request->input('category_name'),
            'category name' => $request->input('description')
        ]);

        return redirect()->to("/categories");

        //  dd($request->input('category_name'));
    }
}
