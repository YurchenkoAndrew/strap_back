<?php

namespace App\Http\Controllers;

use App\Models\BlockType;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BlockTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return \response()->json(BlockType::all(), Response::HTTP_OK);
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
     * @param BlockType $blockType
     * @return JsonResponse
     */
    public function show(BlockType $blockType): JsonResponse
    {
        return response()->json($blockType, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BlockType $blockType
     * @return Response
     */
//    public function edit(BlockType $blockType)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param BlockType $blockType
     * @return Response
     */
//    public function update(Request $request, BlockType $blockType)
//    {
//        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param BlockType $blockType
     * @return Response
     */
//    public function destroy(BlockType $blockType)
//    {
//        //
//    }
}
