<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubcategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\StockController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('category', CategoryController::class);
Route::resource('subcategory', SubcategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('stock', StockController::class);
Route::resource('slider', SliderController::class);


Route::name('admin.')->prefix('admin/')->group(function(){
Route::get('dashboard', [AdminController::class, 'index']);

});


Route::name('user.')->prefix('user/')->group(function(){
Route::get('home', [HomeController::class, 'index']);
    Route::get('shop/{id}',[HomeController::class, 'shop'])->name('shop');
    Route::get('details/{id}',[HomeController::class, 'details'])->name('details');
});



Route::middleware('auth:web')->name('user.')->prefix('user/')->group(function(){

    Route::get('wishlist/{id}',[HomeController::class, 'wishlist'])->name('wishlist');
    Route::get('show-wishlist',[HomeController::class, 'showWishlist'])->name('showwishlist');
    Route::get('delete-wishlist/{id}',[HomeController::class, 'wishDestroy'])->name('wishdelete');

});




Auth::routes();



