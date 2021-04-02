<?php


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

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\OurAdvantageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderProductController;
use App\Http\Controllers\TopSliderController;
use Illuminate\Support\Facades\Route;

Route::apiResource('settings', SettingController::class);
Route::apiResource('top-carousel', TopSliderController::class);
Route::apiResource('about', AboutController::class);
Route::apiResource('info', InfoController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('our-advantage', OurAdvantageController::class);
Route::apiResource('slider-products', SliderProductController::class);
Route::apiResource('reviews', ReviewController::class);
Route::apiResource('delivery', DeliveryController::class);
