<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    function register(Request $request)
    {
        $pass= Hash::make($request->password);
       
        User::create([
            'name'=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "dob"=>$request->dob,
            "gender"=>$request->gender,
            "password"=>$pass
        ]);
        return $request->email;
    }
}
