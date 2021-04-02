<?php

namespace App\Http\Controllers;

use App\Models\OurAdvantage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OurAdvantageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return \response()->json(OurAdvantage::all(), Response::HTTP_OK);
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
     * @param OurAdvantage $ourAdvantage
     * @return Response
     */
//    public function show(OurAdvantageController $ourAdvantage)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param OurAdvantage $ourAdvantage
     * @return Response
     */
//    public function edit(OurAdvantageController $ourAdvantage)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param OurAdvantage $ourAdvantage
     * @return Response
     */
//    public function update(Request $request, OurAdvantageController $ourAdvantage)
//    {
//        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param OurAdvantage $ourAdvantage
     * @return Response
     */
//    public function destroy(OurAdvantageController $ourAdvantage)
//    {
//        //
//    }
}
