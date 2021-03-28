<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('topslider', 'TopSliderCrudController');
    Route::crud('info', 'InfoCrudController');
    Route::crud('blocktype', 'BlockTypeCrudController');
    Route::crud('product', 'ProductCrudController');
    Route::crud('productimage', 'ProductImageCrudController');
    Route::crud('ouradvantage', 'OurAdvantageCrudController');
    Route::crud('sliderproduct', 'SliderProductCrudController');
    Route::crud('review', 'ReviewCrudController');
    Route::crud('about', 'AboutCrudController');
    Route::crud('delivery', 'DeliveryCrudController');
    Route::crud('setting', 'SettingCrudController');
}); // this should be the absolute last line of this file