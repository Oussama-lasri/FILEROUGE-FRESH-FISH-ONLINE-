<?php

namespace App\Http\Resources;

use App\Models\Fish;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class pannierResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "fish_id" => $this->fish_id,
            "user_id" => $this->user_id,
            "qty" => $this->qty,
            'fish' => Fish::find($this->fish_id)
        ];
    }
}
