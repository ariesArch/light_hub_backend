<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    use HasAdvancedFilter;

    public function profileable()
    {
        return $this->morphTo();
    }

    protected $fillable = [
        'phone_no',
        'city_id',
        'township_id',
        'address'
    ];

    public $orderable = [
        'id',
       
    ];

    public $filterable = [
        'id',
      
    ];

    public function city(){
        return $this->belongsTo(City::class);
    }
    public function township(){
        return $this->belongsTo(Township::class);
    }
}
