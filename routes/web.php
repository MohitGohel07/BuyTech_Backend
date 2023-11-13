<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ImportExportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\StripePaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('stripe',[StripePaymentController::class,'stripe']);
Route::post('stripe',[StripePaymentController::class,'stripePost'])->name('stripe.post');

Route::get('invoice/{id}', [InvoiceController::class, 'Invoice']);


Route::get('/',[UserController::class,'index']);
Route::get('shopping',[UserController::class,'shopping']);
Route::get('product/info/{id}',[UserController::class,'product_info']);

Route::get('product/type/{id}',[UserController::class,'product_type']);
Route::get('product/gender/{id}',[UserController::class,'product_gender']);

Route::get('add/cart/{id}',[UserController::class,'AddCart']);
Route::get('cart',[UserController::class,'cart'])->middleware('auth');

Route::get('login',[UserController::class,'login'])->name('login');
Route::post('login/user',[UserController::class,'loginUser']);
Route::get('logout',[UserController::class,'logout']);

//update total qty
Route::get('update/qty',[UserController::class,'update_qty']);
// Route::view('mail','emails.welcome');

Route::get('register',[UserController::class,'register']);
Route::post('register',[UserController::class,'register_add']);

Route::get('order',[UserController::class,'order']);
Route::get('orderplace',[UserController::class,'orderplace']);
Route::post('order/add',[UserController::class,'order_add']);


Route::get('product_search',[UserController::class,'product_search']);


Route::get('admin',[AdminController::class,'dashboard']);
Route::get('forgot/password',[UserController::class,'Reset']);
Route::post('forgot/password',[UserController::class,'ResetPassword']);
Route::get('login/set/{id?}',[userController::class,'newpassword']);
Route::post('login/set/password',[userController::class,'updatePassword']);

//=====================ADMIN===================

Route::prefix('admin')->group(function () {
    Route::get('login',[AdminController::class,'login']);
    Route::get('signOut',[AdminController::class,'logout']);
    Route::post('admin_login',[AdminController::class,'admin_login']);

    Route::get('Products',[AdminController::class,'Products']);
    Route::get('Products/add/{id?}',[AdminController::class,'Products_add']);
    Route::post('Products/add',[AdminController::class,'Products_store']);
    Route::get('Products/remove/{id}',[AdminController::class,'Products_remove']);

    Route::get('category',[AdminController::class,'category']);
    Route::get('category/add/{id?}',[AdminController::class,'category_add']);
    Route::post('category/add',[AdminController::class,'category_store']);
    Route::get('category/remove/{id}',[AdminController::class,'category_remove']);

    Route::get('orders',[AdminController::class,'orders']);
    Route::get('orders/accept/{id}',[AdminController::class,'order_accept']);
    Route::get('order/complate/{id}',[AdminController::class,'order_complate']);
    Route::get('orders/complated',[AdminController::class,'order_complated']);

    Route::get('users',[AdminController::class,'users']);
    Route::get('csv',[ImportExportController::class,'importExport']);
    Route::post('csv/upload',[ImportExportController::class,'import']);
    Route::get('exportdemo',[ImportExportController::class,'exportdemo']);



});

Route::get('store',[StoreController::class,'dashboard']);
Route::prefix('store')->group(function() {
    Route::get('login',[StoreController::class,'storelogin']);
    Route::get('create',[StoreController::class,'create']);
    Route::get('users',[StoreController::class,'users']);
    Route::post('create_store',[StoreController::class,'create_store']);
    Route::get('signOut',[AdminController::class,'logout']);
    Route::post('store_login',[StoreController::class,'store_login']);

    Route::get('accept/{id}',[StoreController::class,'accept']);
});
