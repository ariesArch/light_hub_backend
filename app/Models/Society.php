<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    use HasFactory;
    use HasAdvancedFilter;

    protected $fillable = [
        'sociable_id',
        'community_id',
    ];

    public $orderable = [
        'id',
    ];

    public $filterable = [
        'id',
    ];
}
