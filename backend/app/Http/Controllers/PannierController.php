<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\pannier;
use Illuminate\Http\Request;
use App\Http\Resources\pannierCollection;
use App\Http\Requests\StorepannierRequest;
use App\Http\Requests\UpdatepannierRequest;

class PannierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepannierRequest $request)
    {

        pannier::create($request->validated());
        return response()->json('Successful add');
    }

    /**
     * Display the specified resource.
     */
    public function show(pannier $pannier)
    {
    }


    public function getProductUser($id)
    {
        return new pannierCollection(pannier::where('user_id', $id)->get());
    }
    public function updateItem(Request $request)
    {

        $qty = $request->qty;
        $user_id = $request->user_id;
        $fish_id = $request->fish_id;
        $pannier =  pannier::where('user_id', $user_id)
            ->where('fish_id', $fish_id)
            ->first();
        if ($pannier) {
            $pannier->qty = $qty;
            $pannier->save();
            // $pannier->update(['user_id' => $user_id, 'fish_id' => $fish_id, 'qty' => $qty]);
            return response()->json(['message' => 'Item quantity updated successfully']);
        } else {
            return response()->json(['message' => 'Item not found']);
        }
    }
    public function deleteItem(Request $request){
        $user_id = $request->user_id;
        $fish_id = $request->fish_id;
        $pannier =  pannier::where('user_id', $user_id)
            ->where('fish_id', $fish_id)
            ->first();
            if ($pannier) {
                $pannier->delete();
                // $pannier->update(['user_id' => $user_id, 'fish_id' => $fish_id, 'qty' => $qty]);
                return response()->json(['message' => 'Item deleted successfully']);
            } else {
                return response()->json(['message' => 'Item not found']);
            }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepannierRequest $request, pannier $pannier)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $user_id = $request->user_id;
        $fish_id = $request->fish_id;
        $pannier =  pannier::where('user_id', $user_id)
            ->where('fish_id', $fish_id)
            ->first();
            if ($pannier) {
                $pannier->delete();
                return response()->json(['message' => 'Item quantity deleted successfully']);
            } else {
                return response()->json(['message' => 'Item not found']);
            }
    }
}
