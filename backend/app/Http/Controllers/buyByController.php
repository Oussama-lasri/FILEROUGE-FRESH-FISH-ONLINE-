<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBuyByRequest;
use App\Http\Resources\buyByCollection;
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
