<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
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
            'id'=>$this->id,
            'title'=> $this->title,
            'price'=> $this->price,
            'image' => $this->image,
            'description'=> $this->description,
            'status'=> $this->status,
            'category'=> $this->category->name,
            'buy_by'=> $this->buyBy->name,
        ];
    }
}
