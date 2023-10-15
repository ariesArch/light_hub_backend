<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;
    use HasAdvancedFilter;

    protected $fillable = [
        'title',
        'price',
        'quantity',
        'options',
        'product_id'
    ];

    public $orderable = [
        'id',
        'title',
        'price',
    ];

    public $filterable = [
        'id',
        'title',
        'price',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
