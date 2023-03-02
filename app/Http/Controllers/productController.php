<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Session;

class productController extends Controller
{
    function index(){
        $data= product::all();
        return view("product",['productsData'=>$data]);
    }
    

    function detail($id){
        $data= product::find($id);
        return view("detailProduct",['product'=>$data]);
    }

    function search(Request $req){
        $data= product::where('name','like','%'.$req->input('query'))->get();
        return view("search",['searched'=>$data]);

    }

    function addToCart(Request $req){
        if ($req->session()->has('user')) {
            $cart=new cart;
            $cart->user_id=session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect("/product");
        }else{
            return redirect("/logins");
        }
    }


    public static function cartItem()
    {
        $userid = Session::get('user')['id'];

        return Cart::where('user_id',$userid)->count();
    }
}
