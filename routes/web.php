<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
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

Route::get('/', [WebController::class, 'about'])->name('index');

Auth::routes();

Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/catalog', [WebController::class, 'catalog'])->name('catalog');
Route::get('/location', [WebController::class, 'location'])->name('location');

Route::middleware('getUser')->group(function(){
    Route::get('/product-{name}', [WebController::class, 'product'])->name('product');
    
    Route::get('/cart', [WebController::class, 'cart'])->name('cart');
    Route::post('/cart', [WebController::class, 'addCart'])->name('addCart');
    Route::delete('/cart', [WebController::class, 'deleteCart'])->name('deleteCart');

    Route::get('/orders', [WebController::class, 'orders'])->name('orders');
    Route::post('/orders', [WebController::class, 'addOrder'])->name('addOrder');
    Route::delete('/orders', [WebController::class, 'deleteOrder'])->name('deleteOrder');
    
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::patch('/order/status', [AdminController::class, 'changeOrderStatus'])->name('changeOrderStatus');

    Route::post('/category', [AdminController::class, 'addCategory'])->name('addCategory');
    Route::delete('/category', [AdminController::class, 'deleteCategory'])->name('deleteCategory');
});

Route::get('/404', [WebController::class, 'notFoundPage'])->name('notFoundPage');
Route::get('/{any}', [WebController::class, 'notFoundPage'])->where('any', '.*');
