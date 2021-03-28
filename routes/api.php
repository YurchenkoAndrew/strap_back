<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlockTypeController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\OurAdvantageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderProductController;
use App\Http\Controllers\TopSliderController;
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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::apiResource('about', AboutController::class);
Route::apiResource('block-type', BlockTypeController::class);
Route::apiResource('delivery', DeliveryController::class);
Route::apiResource('info', InfoController::class);
Route::apiResource('our-advantage', OurAdvantageController::class);
Route::apiResource('product', ProductController::class);
Route::apiResource('product-image', ProductImageController::class);
Route::apiResource('review', ReviewController::class);
Route::apiResource('settings', SettingController::class);
Route::apiResource('slider-product', SliderProductController::class);
Route::apiResource('top-slider', TopSliderController::class);
