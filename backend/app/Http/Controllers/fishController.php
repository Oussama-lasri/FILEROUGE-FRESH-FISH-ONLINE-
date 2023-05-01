<?php

namespace App\Http\Controllers;

use App\Http\Resources\fishResource;
use App\Models\fish;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFishRequest;
use App\Http\Resources\fishCollection;

class fishController extends Controller
{

    public function pagination()
    {
        $fishPerPage = 8;
        $fishes = new fishCollection(fish::orderBy('created_at', 'desc')->simplePaginate($fishPerPage));
        $pageCount = count(fish::all()) / $fishPerPage;
        return response()->json([
            'dataPaginate' => $fishes,
            'page_count' => ceil($pageCount)
        ], 200);
    }

    public function showAll()
    {
        return new fishCollection(fish::all());
        
    }
    public function index()
    {
        $allFish = new fishCollection(fish::all());
        $randomFish = $allFish->random(4);
        return $randomFish ;
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
