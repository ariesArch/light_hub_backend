<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCommunity extends Model
{
    use HasFactory;
    use HasAdvancedFilter;

    protected $fillable = [
        'user_id',
        'community_id',
        'is_primary'
    ];

    public $orderable = [
        'id',
    ];

    public $filterable = [
        'id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function community(){
        return $this->belongsTo(Community::class);
    }
}
