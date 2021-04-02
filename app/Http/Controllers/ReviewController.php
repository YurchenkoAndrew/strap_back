<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return \response()->json(Review::all()->sortBy('sort'), Response::HTTP_OK);
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
     * @param Review $review
     * @return Response
     */
//    public function show(Review $review)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Review $review
     * @return Response
     */
//    public function edit(Review $review)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Review $review
     * @return Response
     */
//    public function update(Request $request, Review $review)
//    {
//        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Review $review
     * @return Response
     */
//    public function destroy(Review $review)
//    {
//        //
//    }
}
