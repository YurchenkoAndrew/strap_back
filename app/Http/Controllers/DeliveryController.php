<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
//    public function index()
//    {
//        //
//    }

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
     * @param Delivery $delivery
     * @return JsonResponse
     */
    public function show(Delivery $delivery): JsonResponse
    {
        return \response()->json($delivery, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Delivery $delivery
     * @return Response
     */
//    public function edit(Delivery $delivery)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Delivery $delivery
     * @return Response
     */
//    public function update(Request $request, Delivery $delivery)
//    {
//        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Delivery $delivery
     * @return Response
     */
//    public function destroy(Delivery $delivery)
//    {
//        //
//    }
}
