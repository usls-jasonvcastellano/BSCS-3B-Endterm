<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function index() {
        return view("login.index");
    }

    public function login(Request $request) { 

        
        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);
        
        
        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validate->fails()) {

        return redirect()->to("/login");
        }


        $user = User::where(['email' => $request->input('email')])->first();

        if (!$user) {
            return redirect()->to("/login");
        }

        if (!password_verify($user->password, $request->input('password'))) {
            return redirect()->to("/login");
        }

        return redirect()->to('dashboard');



    }

}
