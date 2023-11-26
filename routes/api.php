<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('detailget/{id}',[ApiController::class, 'detailget']);
route::get('Products/{category_id}',[ApiController::class, 'Products']);
route::get('count/{category_id}',[ApiController::class, 'count']);
route::get('cart_count/{user_id}',[ApiController::class, 'cart_count']);
route::get('wishlist_count/{user_id}',[ApiController::class, 'wishlist_count']);
route::get('detailpage/{id}',[ApiController::class, 'detailspage']);
route::get('show_cart/{user_id}',[ApiController::class, 'show_cart']);
route::get('show_wishlist/{user_id}',[ApiController::class, 'show_wishlist']);
route::post('insert_cart',[ApiController::class, 'insert_cart']);
route::post('insert_order_address',[ApiController::class, 'insert_order_address']);
route::post('insert_order',[ApiController::class, 'insert_order']);
route::post('insert_wishlist/',[ApiController::class, 'insert_wishlist']);
route::post('pluscart/{id}',[ApiController::class, 'pluscart']);
route::post('minuscart/{id}',[ApiController::class, 'minuscart']);
route::post('delete/{id}',[ApiController::class, 'delete']);
route::post('deletewishlist/{id}',[ApiController::class, 'deletewishlist']);
route::get('totalprice/{user_id}',[ApiController::class, 'totalprice']);
route::get('total_price/{user_id}',[ApiController::class, 'total_price']);
route::get('total_quantity/{user_id}',[ApiController::class, 'total_quantity']);
route::get('show_order/{user_id}',[ApiController::class, 'show_order']);

route::get('mohitt',[ApiController::class, 'productsallgett']);

route::get('all_product',[ApiController::class, 'all_product']);

Route::post('register',[ApiController::class,'register']);

Route::post('login',[RegisterController::class,'login']);


Route::post('signOut',[ApiController::class,'signOut']);

Route::post('stripe',[StripePaymentController::class,'stripePost']);


Route::post('/api/payments', [PaymentController::class, 'createPayment']);


