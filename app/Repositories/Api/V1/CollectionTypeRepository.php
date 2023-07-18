<?php

namespace App\Repositories\Api\V1;

use App\Http\Resources\CollectionType\CollectionTypeCollection;
use App\Models\CollectionType;
use App\Models\Material;

class CollectionTypeRepository
{
    public function all()
    {
        return CollectionType::all();
    }

    public function getCollectionTypes($search, $sortBy, $sortDirection, $perPage)
    {
        $query = CollectionType::advancedFilter([
            's'               => $search,
            'order_column'    => $sortBy,
            'order_direction' => $sortDirection,
        ]);

        $collectiontypes = $query->paginate($perPage);

        return new CollectionTypeCollection($collectiontypes);
    }
}
