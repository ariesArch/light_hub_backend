<?php

namespace App\Repositories\Api\V1;

use App\Http\Resources\Collection\CollectionCollection;
use App\Http\Resources\Material\MaterialCollection;
use App\Models\Collection;
use App\Models\Material;

class CollectionRepository
{
    public function all()
    {
        return Collection::all();
    }

    public function getCollections($search, $sortBy, $sortDirection, $perPage)
    {
        $query = Collection::advancedFilter([
            's'               => $search,
            'order_column'    => $sortBy,
            'order_direction' => $sortDirection,
        ]);

        $collections = $query->paginate($perPage);

        return new CollectionCollection($collections);
    }
}
