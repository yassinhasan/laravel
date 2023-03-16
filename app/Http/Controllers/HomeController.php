<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\Bool_;

class HomeController extends Controller
{
    public  function  home(Request $request)

    {
            return view("home.home");
    }
    public  function  register(UserRegisterRequest $request)
    {
            User::create([
                "name" =>$request->name ,
                "email" => $request->email ,
                "password" =>$request->password ,
                "hashedPassword" => hash::make($request->password)
            ])->save();
            return response("<h1 class='alert alert-success'> user inserted</h1>");
    }
}
