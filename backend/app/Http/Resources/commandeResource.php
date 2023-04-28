<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class commandeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'phone' => $this->phone,
            'user_id' => $this->user_id,
            'adress' => $this->adress,
            'city' => $this->city,
            'status' => $this->status,
            'total' => $this->total,
            'fishes'=> $this->fishes
        ];
    }
}
