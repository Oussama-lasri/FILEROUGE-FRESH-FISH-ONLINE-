<?php

namespace App\Http\Controllers;

use App\Models\Recepie;
use App\Http\Requests\StoreRecepieRequest;
use App\Http\Requests\UpdateRecepieRequest;
use App\Http\Resources\recipeCollection;
use App\Http\Resources\recipeResource;

class RecepieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new recipeCollection(Recepie::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecepieRequest $request)
    {
        // dd('tete');
        Recepie::create($request->validated());
        return response()->json('created recipe');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recepie $recipe)
    {
        return new recipeResource($recipe);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRecepieRequest $request, Recepie $recipe)
    {
        $recipe->update($request->validated());
        return response()->json('updated recipe');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recepie $recipe)
    {
        $recipe->delete();
        return response()->json('deleted recipe');
    }
}
