<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminSizeController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\CommentController;
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

//role == admin
Route::middleware('checkAdmin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashBoardController::class, 'dashboard'])->name('admin');

    // categories
    Route::prefix('/category')->name('category.')->group(function () {
        Route::get('/', [AdminCategoryController::class, 'index'])->name('list');
        Route::get('/create', [AdminCategoryController::class, 'create'])->name('create');
        Route::post('/create', [AdminCategoryController::class, 'store'])->name('store');
        Route::delete('/delete/{category}', [AdminCategoryController::class, 'delete'])->name('delete');
        Route::get('/edit/{category}', [AdminCategoryController::class, 'edit'])->name('edit');
        Route::put('/edit/{category}', [AdminCategoryController::class, 'update'])->name('update');
    });
    // products
    Route::prefix('/product')->name('product.')->group(function () {
        Route::get('/', [AdminProductController::class, 'index'])->name('list');
        Route::get('/create', [AdminProductController::class, 'create'])->name('create');
        Route::post('/create', [AdminProductController::class, 'store'])->name('store');
        Route::put('/update-status/{product}', [AdminProductController::class, 'updateStatus'])->name('updateStatus');
        Route::delete('/delete/{product}', [AdminProductController::class, 'delete'])->name('delete');
        Route::get('/edit/{product}', [AdminProductController::class, 'edit'])->name('edit');
        Route::put('/edit/{product}', [AdminProductController::class, 'update'])->name('update');
    });

    Route::prefix('/size')->name('size.')->group(function () {
        Route::get('/', [AdminSizeController::class, 'index'])->name('list');
        Route::get('/create', [AdminSizeController::class, 'create'])->name('create');
        Route::post('/create', [AdminSizeController::class, 'store'])->name('store');
        Route::delete('/delete/{size}', [AdminSizeController::class, 'delete'])->name('delete');
        Route::get('/edit/{size}', [AdminSizeController::class, 'edit'])->name('edit');
        Route::put('/edit/{size}', [AdminSizeController::class, 'update'])->name('update');
    });

    Route::prefix('/user')->name('user.')->group(function () {
        Route::get('/', [AdminUserController::class, 'index'])->name('list');
        Route::put('/update-status/{user}', [AdminUserController::class, 'updateStatus'])->name('updateStatus');
        Route::put('/update-role/{user}', [AdminUserController::class, 'updateRole'])->name('updateRole');
        Route::delete('/delete/{user}', [AdminUserController::class, 'delete'])->name('delete');
        // Route::get('/create', [AdminSizeController::class, 'create'])->name('create');
        // Route::post('/create', [AdminSizeController::class, 'store'])->name('store');

        // Route::get('/edit/{size}', [AdminSizeController::class, 'edit'])->name('edit');
        // Route::put('/edit/{size}', [AdminSizeController::class, 'update'])->name('update');
    });

    Route::prefix('/comment')->name('comment.')->group(function () {
        Route::get('/', [CommentController::class, 'index'])->name('list');
        Route::delete('/delete/{comment}', [CommentController::class, 'delete'])->name('delete');
    });
});
