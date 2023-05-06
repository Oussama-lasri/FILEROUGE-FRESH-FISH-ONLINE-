<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBuyByRequest;
use App\Http\Resources\buyByCollection;
use App\Http\Resources\buyByResource;
use App\Models\BuyBy;
use Illuminate\Http\Request;

class buyByController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new buyByCollection(BuyBy::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBuyByRequest $request)
    {
        BuyBy::create($request->validated());
        return response()->json('created buy by');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(BuyBy $buyBy)
    {
        return new buyByResource($buyBy);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBuyByRequest $request, BuyBy $buyBy)
    {
        $buyBy->update($request->validated());
        return response()->json('updated buyby');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BuyBy $buyBy)
    {
        $buyBy->delete();
        return response()->json('deleted buyBy');
    }
}
