<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    use HasAdvancedFilter;

    protected $fillable = [
        'name',
        'slug',
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
}
