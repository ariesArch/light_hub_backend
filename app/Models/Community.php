<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
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
    ];

    public $orderable = [
        'id',
        'slug',
    ];

    public $filterable = [
        'id',
        'slug'
    ];

    public function category()
    {
        return $this->belongsTo(CommunityCategory::class, 'community_category_id');
    }
}
