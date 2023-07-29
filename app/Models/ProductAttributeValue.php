<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttributeValue extends Model
{
    use HasFactory;
    use HasAdvancedFilter;

    protected $fillable = [];

    public $orderable = [
        'id',
    ];

    public $filterable = [
        'id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function attribute_value()
    {
        return $this->belongsTo(AttributeValue::class);
    }
}
