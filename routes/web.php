<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->middleware('CheckStatus')->name('home');

Route::get('contact', function () {
    return view('client.contact.contact');
})->name('contact');
// Route::get('cart', function () {
//     return view('client.cart.cart');
// })->name('cart');

// chi tiết sản phẩm
Route::middleware('CheckStatus')->get('product/{cateslug}/{id}-{slug}', [ProductController::class, 'productDetail'])->name('productDetail');
// sản phẩm
Route::middleware('CheckStatus')->prefix('/products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'showProduct'])->name('products');
    // select sản phẩm theo category
    Route::get('/{id}/{cateslug}', [ProductController::class, 'showProductCategory'])->name('productsCategory');
       // select sản phẩm theo size
    Route::get('/{sizeName}-{id}', [ProductController::class, 'showProductSize'])->name('productsSize');
    // bình luận
    Route::post('/postcomment/{prodId}', [CommentController::class, 'postComment'])->name('postComment');
    // thêm sp giỏ hàng
    Route::post('/addCart/{product}', [CartController::class, 'addCart'])->name('addCart');
    Route::post('/updateCart', [CartController::class, 'updateCart'])->name('updateCart');


});

// tìm kiếm sản phẩm
Route::get('search', [ProductController::class, 'searchProduct'])->name('search');
// cart
Route::get('cart',[CartController::class,'showCart'])->name('cart');

Route::get('cart/delete-cart/{id}', [CartController::class, 'deleteCart'])->name('deleteCart');


Route::middleware('guest')->prefix('/auth')->name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'getLogin'])->name('getLogin');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
    Route::get('/register', [AuthController::class, 'getRegister'])->name('getRegister');
    Route::post('/register', [AuthController::class, 'postRegister'])->name('postRegister');
});
Route::middleware('auth')->any('auth/logout', [AuthController::class, 'logout'])->name('logout');
