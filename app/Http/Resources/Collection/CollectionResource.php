<?php

namespace App\Http\Resources\Collection;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CollectionResource extends JsonResource
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
            'thumbnail_photo'=>$this->thumbnail_photo,
            'cover_photo'=>$this->cover_photo,
            'artist_id'=>$this->artist_id,
            'collection_id'=>$this->collection_id,
        ];
    }
    public function with($request)
    {
        return [
            'status' => 1,
        ];
    }
}
