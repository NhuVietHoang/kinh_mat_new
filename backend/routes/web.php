<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\TagController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductsController;
use App\Http\Controllers\Shoppingcart\Cartcontroller;
use App\Models\Categories;
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

Route::get('/', function () {
    return view('welcome');
});

#================================= Cart =====================================

Route::post('add-cart',[Cartcontroller::class,'addCart']);
Route::get('delete-cart/{id}',[Cartcontroller::class,'deleteCart']);
Route::post('update-cart',[Cartcontroller::class,'updateCart']);
Route::get('checkout',[Cartcontroller::class,'getCheckout']);
Route::post('submit-order',[Cartcontroller::class,'saveOrder'])->name('saveOrder');
Route::post('thanh-toan',[Cartcontroller::class,'thanhtoan'])->name('thanhtoan');



#================================= Auth =====================================
Route::get('register',[RegisterController::class,'getRegister']);
Route::post('post-register',[RegisterController::class,'postRegister']);

Route::post('login',[LoginController::class,'postLogin']);
// Route::get('logout-customer',[LoginController::class,'getLogoutCutomer']);
Route::post('logoutcustomer',[LoginController::class,'LogoutCustomer']);


#================================= User =====================================
Route::get('home',[HomeController::class,'GetHome']);
Route::get('product/{slug}',[ProductsController::class,'getProduct']);
Route::post('comment',[ProductsController::class,'postComment']);


#================================= Admin=====================================
Route::get('login-admin',[LoginController::class,'getLogin']);
Route::post('login-admin',[LoginController::class,'postLoginAdmin']);
Route::middleware('CheckAdmin')->prefix('admin')->group(function(){

    Route::get('admin',[AdminController::class,'GetAdmin']);

# Product
Route::get('admin-product',[ProductController::class,'CreateProduct']);
Route::post('admin-product',[ProductController::class,'postCreateProduct']);
Route::get('list-product',[ProductController::class,'GetListprd']);
Route::get('edit-product/{id}',[ProductController::class,'editProduct']);
Route::post('edit-product/{id}',[ProductController::class,'posteditProduct']);
Route::get('delete-product/{id}',[ProductController::class,'deleteProduct']);

# Category
Route::get('admin-category',[CategoryController::class,'createCategory']);
Route::post('create-category',[CategoryController::class,'postcategory']);
Route::get('list-category',[CategoryController::class,'getListCategory']);
Route::get('edit-category/{slug}',[CategoryController::class,'editCategory']);
Route::post('edit-category',[CategoryController::class,'posteditCategory']);

# Tag
Route::get('list-tag',[TagController::class,'getTag']);
Route::get('create-tag',[TagController::class,'createTag']);
Route::post('create-tag',[TagController::class,'postTag']);
});






