<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
      return view('register.index',[
          'title'=>'register',
      ]);
    }

    public function store(Request $request)
    {
      $validateData = $request->validate([
          'name'=>'required|max:25|min:3',
          'email'=>'required|email:dns|unique:users',
          'password'=>'required|min:5'
      ]);

      $validateData['password']=bcrypt($validateData['password']);
      User::create($validateData);
      return redirect('login')->with('success','Registration Successfull!');
    }
}
