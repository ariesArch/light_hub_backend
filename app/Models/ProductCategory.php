<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected $fillable = [
        'name',
        'slug',
        'product_group_id'
    ];

    public $orderable = [
        'id',
        'name',
        'slug',
    ];

    public $filterable = [
        'id',
        'name',
        'slug'
    ];

    public function product_group(){
        return $this->belongsTo(ProductGroup::class);
    }
}
