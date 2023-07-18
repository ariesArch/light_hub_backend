<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    protected $fillable = [
        'name',
        'description',
        'thumbnail_photo',
    ];
    public $orderable = [
        'id',
        'name',
    ];
    public $filterable = [
        'id',
        'name',
    ];
}
