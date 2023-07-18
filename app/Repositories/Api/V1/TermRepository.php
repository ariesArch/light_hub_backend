<?php

namespace App\Repositories\Api\V1;

use App\Http\Resources\Term\TermCollection;
use App\Models\Term;

class TermRepository
{
    public function getTerms($search, $sortBy, $sortDirection, $perPage)
    {
        $query = Term::advancedFilter([
            's'               => $search,
            'order_column'    => $sortBy,
            'order_direction' => $sortDirection,
        ]);

        $terms = $query->paginate($perPage);

        return new TermCollection($terms);
    }
}
