<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AboutController extends Controller
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
     * @param About $about
     * @return JsonResponse
     */
    public function show(About $about): JsonResponse
    {
        return \response()->json($about, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param About $about
     * @return Response
     */
//    public function edit(About $about)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param About $about
     * @return Response
     */
//    public function update(Request $request, About $about)
//    {
//        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param About $about
     * @return Response
     */
//    public function destroy(About $about)
//    {
//        //
//    }
}
