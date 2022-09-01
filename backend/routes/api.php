<?php

use App\Http\Controllers\api\ApiController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\CartController;
use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('product','ApiController');
// product
Route::get('products',[ApiController::class,'index']);
Route::get('products/{slug}',[ApiController::class,'show']);

Route::post('create-category',[CategoryController::class,'store']);
Route::get('category',[CategoryController::class,'index']);
Route::get('show-category/{id}',[CategoryController::class,'show']);
Route::delete('delete-category/{id}',[CategoryController::class,'destroy']);

Route::post('add-to-cart/{slug}',[AuthController::class,'addCart']);
Route::get('get-cart',[CartController::class,'getCart']);

// Home Api

// Route::get('home',)

// register customer

// Route::post('login',[AuthController::class,'postLogin']);
// Route::post('register',[AuthController::class,'postRegister']);
// Route::group([
//     'middleware' => 'api',
//     'prefix' => 'auth'

// ], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'postRegister']);
    Route::post('logout', [AuthController::class, 'logout']);
    // Route::post('logout', [AuthController::class, 'logout']);
    Route::get('user-profile', [AuthController::class, 'userProfile']);  
    Route::post('refresh', [AuthController::class, 'refresh']);
// });