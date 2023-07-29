<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;
    use HasAdvancedFilter;

    protected $fillable = [
        'value',
    ];

    public $orderable = [
        'id',
        'value',
    ];

    public $filterable = [
        'id',
        'value',
    ];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
