<?php

namespace App\Http\Resources\Term;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TermCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    public function with($request)
    {
        return [
            'status' => 1,
        ];
    }
}
