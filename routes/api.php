<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\DeliveryMethodController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StatusOrderController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\UserPaymentCardController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('register', [AuthController::class, 'register']);
Route::get('user', [AuthController::class, 'user'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResources([
        'categories' => CategoryController::class,
        'products' => ProductController::class,
        'statuses' => StatusController::class,
        'statuses.orders' => StatusOrderController::class,
        'favorites' => FavoriteController::class,
        'categories.products' => CategoryProductController::class,
        'orders' => OrderController::class,
        'delivery-methods' => DeliveryMethodController::class,
        'payment-types' => PaymentTypeController::class,
        'user-address' => UserAddressController::class,
        'user-payment-cards' => UserPaymentCardController::class
    ]);
});
