<?php

namespace App\Http\Controllers;

use App\Http\Resources\fishResource;
use App\Models\fish;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFishRequest;
use App\Http\Resources\fishCollection;

class fishController extends Controller
{

    public function index()
    {
        return new fishCollection(fish::all());
    }



    public function store(StoreFishRequest $request)
    {
        // dd($request);
        Fish::create($request->validated());
        return response()->json('created fish');
    }


    public function show(fish $fish)
    {
        return new fishResource($fish);
    }


    public function update(StoreFishRequest $request, fish $fish)
    {
    //    dd($request);
        $fish->update($request->validated());
        return response()->json('updated fish');
    }


    public function destroy(fish $fish)
    {
        $fish->delete();
        return response()->json('deleted fish');
    }
}
