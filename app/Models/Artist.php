<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory,HasAdvancedFilter;
    protected $fillable = [
        'name',
        'email',
        'profile_photo',
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
