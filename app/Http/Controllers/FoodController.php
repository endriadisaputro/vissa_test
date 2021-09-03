<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    public function index()
    {
      return view('foods.index',[
          'foods'=>Food::orderBy('id','desc')->get(),
      ]);
    }

    public function show(Food $food)
    {
      return view('foods.show',[
        'food'=>$food
    ]);
    }
}
