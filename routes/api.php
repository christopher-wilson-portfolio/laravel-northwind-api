<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerDemographicController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ShipperController;
use App\Http\Controllers\TerritoryController;
use App\Http\Middleware\FormatJsonResponse;

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

Route::resource('categories', CategoryController::class);

Route::resource('customers', CustomerController::class);

Route::resource('customer_demographics', CustomerDemographicController::class);

Route::resource('employees', EmployeeController::class);

Route::resource('orders', OrderController::class);

Route::resource('orders_details', OrderDetailsController::class);

Route::resource('products', ProductController::class);

Route::resource('regions', RegionController::class);

Route::resource('shippers', ShipperController::class);

Route::resource('customers', TerritoryController::class);
