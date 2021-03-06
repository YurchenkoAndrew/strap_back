<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SettingController extends Controller
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
     * @param Setting $setting
     * @return JsonResponse
     */
    public function show(Setting $setting): JsonResponse
    {
        return \response()->json($setting, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Setting $setting
     * @return Response
     */
//    public function edit(Setting $setting)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Setting $setting
     * @return Response
     */
//    public function update(Request $request, Setting $setting)
//    {
//        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Setting $setting
     * @return Response
     */
//    public function destroy(Setting $setting)
//    {
//        //
//    }
}
