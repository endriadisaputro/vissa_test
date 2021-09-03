<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('orders.index',[
            'orders'=>Order::orderBy('id','desc')->get(),
        ]);
    }

    public function show(Order $order)
    {
        return view('orders.show',[
            'order'=>$order
        ]);
    }

    public function store(Request $request)
    {
      $request->validate([
        'name'=>'required',
        'no_pesanan'=>'required',
        'no_meja'=>'required',
        'total'=>'required',
        'status'=>'required',
      ]);

      Order::create($request->all());
      return redirect('foods');
    }
}
