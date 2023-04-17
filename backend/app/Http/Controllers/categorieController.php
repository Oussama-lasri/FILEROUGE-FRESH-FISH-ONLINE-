<?php

namespace App\Http\Controllers;

use App\Models\categorie;

use App\Http\Resources\categorieResource;


use App\Http\Resources\categoriesResource;
use App\Http\Resources\categorieCollection;
use App\Http\Requests\StoreCategorieRequest;

class categorieController extends Controller
{
    
    public function index()
    {
        return new categorieCollection(categorie::all());
    }


    
    public function store(StoreCategorieRequest $request)
    {
        
        categorie::create($request->validated());
        return response()->json('created category');
    }

    
    public function show(categorie $categorie)
    {
        return new categorieResource($categorie);
    }

    
    public function update(StoreCategorieRequest $request, categorie $categorie)
    {
        $categorie->update($request->validated());
        return response()->json('updated category');
    }

   
    public function destroy(categorie $categorie)
    {
        $categorie->delete();
        return response()->json('deleted category');
    }
}
