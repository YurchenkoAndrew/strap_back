<?php

namespace App\Http\Controllers;

use App\Models\TopSlider;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TopSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $topSlider = TopSlider::all();
        return \response()->json($topSlider, Response::HTTP_OK);
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
     * @param TopSlider $topSlider
     * @return Response
     */
//    public function show(TopSlider $topSlider)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param TopSlider $topSlider
     * @return Response
     */
//    public function edit(TopSlider $topSlider)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param TopSlider $topSlider
     * @return Response
     */
//    public function update(Request $request, TopSlider $topSlider)
//    {
//        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param TopSlider $topSlider
     * @return Response
     */
//    public function destroy(TopSlider $topSlider)
//    {
//        //
//    }
}
