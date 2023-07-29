<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGroup extends Model
{
    use HasFactory;
    use HasAdvancedFilter;

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
}
