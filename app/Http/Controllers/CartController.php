<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addCart(Request $request){
        $productId = $request->productId_hidden;
        $quantity = $request->quantity;
        $data = Product::where('id',$productId)->get();
       return view('client.cart.cart');
    }
}
