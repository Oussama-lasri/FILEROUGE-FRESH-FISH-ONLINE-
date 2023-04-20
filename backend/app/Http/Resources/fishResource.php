<?php

namespace App\Http\Resources;

use Symfony\Component\HttpFoundation\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class fishResource extends JsonResource
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
            'title' => $this->title,
            'price' => $this->price,
            'image' => $this->image,
            'description' => $this->description,
            'status' => $this->status,
            'quantity' => $this->quantity,
            'category' => [
                'id' => $this->category_id,
                'name' => $this->category->name
            ],
           
        ];
    }
}
