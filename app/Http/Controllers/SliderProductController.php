<?php

namespace App\Http\Controllers;

use App\Models\SliderProduct;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SliderProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return \response()->json(SliderProduct::all()->sortBy('sort'), Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
//    public function create()
//    {
//        //
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
//    public function store(Request $request)
//    {
//        //
//    }

    /**
     * Display the specified resource.
     *
     * @param SliderProduct $sliderProduct
     * @return Response
     */
//    public function show(SliderProduct $sliderProduct)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SliderProduct $sliderProduct
     * @return Response
     */
//    public function edit(SliderProduct $sliderProduct)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param SliderProduct $sliderProduct
     * @return Response
     */
//    public function update(Request $request, SliderProduct $sliderProduct)
//    {
//        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SliderProduct $sliderProduct
     * @return Response
     */
//    public function destroy(SliderProduct $sliderProduct)
//    {
//        //
//    }
}
