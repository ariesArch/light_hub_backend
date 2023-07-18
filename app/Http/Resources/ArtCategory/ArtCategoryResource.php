<?php

namespace App\Http\Resources\ArtCategory;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArtCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description'=>$this->description,
        ];
    }
    public function with($request)
    {
        return [
            'status' => 1,
        ];
    }
}
