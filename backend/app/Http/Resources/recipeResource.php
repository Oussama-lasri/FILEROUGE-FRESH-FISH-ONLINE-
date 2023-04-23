<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class recipeResource extends JsonResource
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
            'title'=> $this->title ,
            'dish_type'=> $this->dish_type ,
            'image'=> $this->image ,
            'Serves'=> $this->Serves ,
            'preparation_time'=> $this->preparation_time ,
            'cooking_time'=> $this->cooking_time ,
            'difficulty'=> $this->difficulty ,
            'cuisine_type'=> $this->cuisine_type ,
            'ingredients'=> $this->ingredients ,
            'method'=> $this->method ,
            'category' => [
                'name'=>$this->categorie->name,
                'id' => $this->category
        ],
            
            'fishes' => $this->fishes,
            // [
            //     'category'=>$this->category,
            //     'fishes'=>$this->,
            //                 ]
        ];
    }
}
