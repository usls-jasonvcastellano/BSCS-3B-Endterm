<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelInfoController extends Controller
{
    public function index (){
        return view("LaravelInfo.index");
    }
}
