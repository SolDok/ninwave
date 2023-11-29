<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }
    public function store(Request $request)
    {
        $tt = User::all();
        $user = User::where('name',$request->user_name)->get();
        if (!$user->isEmpty()) {
            echo("ti ne pidor");
        } else {echo("ti pidor");};
        
    }
}
