<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function productDetail($cateslug, $id, $slug)
    {
        $comments = DB::table('comments')
                        ->join('users','comments.user_id','=','users.id')
                        ->select('comments.*','users.*')
                        ->where('comments.product_id',$id)
                        ->get();

        $productDetail = Product::where('id', $id)->first();
        $cateSlugId = Category::where('slug', $cateslug)->first();

        $relatedProduct = Product::where('category_id', $cateSlugId->id)->get();

        return view('client.product-details.product-details', compact('productDetail', 'relatedProduct','comments'));
    }

    public function showProduct()
    {
        $products = Product::all();
        $categories = Category::Select('id', 'name', 'slug')->get();
        $TotalProduct = Product::all()->count('*');
        $sizes = Size::Select('id', 'name')->get();
        return view('client.product.product', compact('products', 'TotalProduct', 'categories', 'sizes'));
    }
    public function showProductCategory($id, $cateslug)
    {
        // $productsCategory = DB::table('products')
        //     ->join('categories', 'products.category_id', '=', 'categories.id')
        //     ->select('products.*', 'categories.name as nameCate', 'categories.slug as slugCate', 'categories.id as idCate')
        //     ->where('products.category_id',$id)
        //     ->get();
        $TotalProductCategory = Product::where('category_id', $id)->get()->count('*');
        $productsCategory = Product::where('category_id', $id)->get();
        $category = Category::Select('id', 'name', 'slug')->get();
        $sizes = Size::Select('id', 'name')->get();
        // $products = Product::all();
        return view('client.product.product', compact('TotalProductCategory', 'productsCategory', 'category', 'sizes'));
    }

    public function searchProduct(Request $request)
    {
        $keywords =  $request->keyword;
        if ($keywords == '') {
            return redirect()->route('home')->with('error', 'Từ khóa tìm kiếm không hợp lệ');
        }
        $ProductsSearch = Product::where('name', 'LIKE', '%' . $keywords . '%')->get();

        if ($ProductsSearch->isEmpty()) {
            return redirect()->route('home')->with('error', 'Không có kết quả nào hợp lệ');
        }
        return view('client.home', compact('ProductsSearch', 'keywords'));
    }

    public function showProductSize($sizeName, $id)
    {
        $products = Product::where('size_id', $id)->get();
        $categories = Category::Select('id', 'name', 'slug')->get();
        $TotalProduct =  $products->count('*');
        $sizes = Size::Select('id', 'name')->get();
        return view('client.product.product', compact('products', 'TotalProduct', 'categories', 'sizes'));
    }
}
