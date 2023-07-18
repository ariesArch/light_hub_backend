<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    protected $fillable = [
        'name',
        'description',
        'thumbnail_photo',
        'cover_photo'
    ];
    public $orderable = [
        'id',
        'name',
    ];
    public $filterable = [
        'id',
        'name',
    ];
    public function collection_types(){
        $this->hasMany(CollectionType::class);
    }
    public function artists(){
        $this->hasMany(Artist::class);
    }
}
