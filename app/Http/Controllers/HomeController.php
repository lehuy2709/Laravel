<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::Select('id', 'name', 'image', 'price', 'status', 'size_id', 'category_id','slug')->limit(4)->get();
        return view('client.home',compact('products'));
    }
}
