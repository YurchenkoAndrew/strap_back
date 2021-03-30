<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Delivery;
use App\Models\Info;
use App\Models\OurAdvantage;
use App\Models\Product;
use App\Models\Review;
use App\Models\Setting;
use App\Models\SliderProduct;
use App\Models\TopSlider;

class SiteController extends Controller
{
    public function getPage()
    {
        $settings = Setting::find(1);
        $topSlider = TopSlider::orderBy('sort', 'asc')->get();
        $info = Info::find(1);
        $products = Product::with(['images', 'blockType'])->orderBy('sort')->get();
        $ourAdvantages = OurAdvantage::orderBy('sort', 'asc')->get();
        $sliderProducts = SliderProduct::orderBy('sort', 'asc')->get();
        $reviews = Review::orderBy('sort', 'asc')->get();
        $about = About::find(1);
        $delivery = Delivery::find(1);
        return view('index', [
            'settings' => $settings,
            'topSlider' => $topSlider,
            'info' => $info,
            'products' => $products,
            'ourAdvantages' => $ourAdvantages,
            'sliderProducts' => $sliderProducts,
            'reviews' => $reviews,
            'about' => $about,
            'delivery' => $delivery,
        ]);
    }
}
