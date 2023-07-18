<?php

namespace App\Models;

use App\Support\HasPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    use HasPermissions;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];
    /**
     * Properties to sort in table
     * @var array<int,string>
     */
    public $orderable = [
        'id',
        'name'
    ];
    /**
     * Properties to use filter later
     * @var array<int,string>
     */
    public $filterable = [
        'id',
        'name'
    ];
}
