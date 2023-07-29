<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassCategory extends Model
{
    use HasFactory;
    use HasAdvancedFilter;

    protected $fillable = [
        'name',
        'description',
    ];

    public $orderable = [
        'id',
        'name',
        'description',
    ];

    public $filterable = [
        'id',
        'name',
        'description',
    ];
}
