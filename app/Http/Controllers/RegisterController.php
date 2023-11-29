<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index (){
        return view("register");
    }

    public function store (Request $request) {
        $user = new User;
        $user->name = $request->user_name;
        $user->password = Hash::make($request->psw);
        $user->email = $request->email;
        $user->save();
        return redirect(route('home'));
    }
}
