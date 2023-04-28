<?php

namespace App\Http\Controllers;

use App\Http\Resources\commandeCollection;
use App\Models\commande;
use Illuminate\Http\Request;
use App\Http\Requests\StorecommandeRequest;
use App\Http\Requests\UpdatecommandeRequest;
use App\Models\commande_fish;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new commandeCollection(commande::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $fishes = json_decode($request->fishes, true);
        // dd($fishes[0]['fish_id']);
        $commande = commande::create([
            'email' => $request->email,
            'phone' => $request->phone,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'adress' => $request->adress,
            'user_id' => $request->user_id,
            'city' => $request->city,
            'total' => $request->total,
        ]);

        foreach ($fishes as $fish) {
            // dd($fish['fish_id']);
            commande_fish::create([
                'commande_id' => $commande->id,
                'fish_id' => $fish['fish_id']
            ]);
        }

        return response()->json('created commande');
    }

    public function accept($id)
    {
        $commande = commande::where('id', $id)->first();
        if ($commande) {
            $commande->status = 'accepte';
            $commande->save();
            return response()->json(['message' => 'commande accepted'.$id]);
        }else{
            return response()->json(['message' => 'commande not found']);
        }
    }
    public function refuse($id)
    {
        $commande = commande::where('id', $id)->first();
        if ($commande) {
            $commande->status = 'refuse';
            $commande->save();

            return response()->json(['message' => 'commande refused']);
        }else{
            return response()->json(['message' => 'commande not found']);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecommandeRequest $request, commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(commande $commande)
    {
        //
    }
}
