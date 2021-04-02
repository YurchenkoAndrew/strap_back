<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        //
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        //
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//        //
//    }

    /**
     * Display the specified resource.
     *
     * @param Info $info
     * @return JsonResponse
     */
    public function show(Info $info): JsonResponse
    {
        return response()->json($info, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Info $info
     * @return \Illuminate\Http\Response
     */
//    public function edit(Info $info)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Info $info
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, Info $info)
//    {
//        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Info $info
     * @return \Illuminate\Http\Response
     */
//    public function destroy(Info $info)
//    {
//        //
//    }
}
