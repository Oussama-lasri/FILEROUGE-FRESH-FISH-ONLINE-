<?php

namespace App\Http\Controllers;

use App\Models\commande;
use App\Http\Requests\StorecommandeRequest;
use App\Http\Requests\UpdatecommandeRequest;

class CommandeController extends Controller
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
    public function store(StorecommandeRequest $request)
    {
        
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
