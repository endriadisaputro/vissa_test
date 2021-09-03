<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardFoodController;
use App\Http\Controllers\DashboardOrderController;


Route::get('/', function () {
    return view('home');
});

Route::middleware('auth')->group(function(){
    Route::resource('foods', FoodController::class);
    Route::resource('orders', FoodController::class);
    Route::get('dashboard', function(){
        return view('dashboard.index');
    });
    Route::post('/logout',[DashboardController::class,'logout']);
    Route::resource('/dashboard/orders', DashboardOrderController::class);
    Route::resource('/dashboard/foods', DashboardFoodController::class);

});

Route::get('/login', [LoginController::class,'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);
Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);
