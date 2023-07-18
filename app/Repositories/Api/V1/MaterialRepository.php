<?php

namespace App\Repositories\Api\V1;

use App\Http\Resources\Material\MaterialCollection;
use App\Models\Material;

class MaterialRepository
{
    public function all()
    {
        return Material::all();
    }

    public function getMaterails($search, $sortBy, $sortDirection, $perPage)
    {
        $query = Material::advancedFilter([
            's'               => $search,
            'order_column'    => $sortBy,
            'order_direction' => $sortDirection,
        ]);

        $materials = $query->paginate($perPage);

        return new MaterialCollection($materials);
    }
}
