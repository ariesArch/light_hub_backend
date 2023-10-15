<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image'
    ];

    public $orderable = [
        'id',
        'title',
        'slug',
    ];

    public $filterable = [
        'id',
        'slug'
    ];

    public function blog_category()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
