<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\productController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//----------------------------Logout Routes---------------------------
Route::get('/logout',function(){
    Session::forget('user');
    return redirect("/logins");
});

//----------------------------Login Routes---------------------------
Route::view('/logins','login');
Route::post('/logins',[userController::class,'login']);


//----------------------------Product Routes----------------------------
Route::view('/product','product');
Route::get('/product',[productController::class,'index']); //at index
Route::get("/detail/{id}",[productController::class,'detail']);// to see detail page when click on particular product
Route::get("/search",[productController::class,'search']);

Route::post("/add_to_cart",[productController::class,'addToCart']);

