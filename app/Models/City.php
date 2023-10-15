<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use App\Support\HasPermissions;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class City extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected $fillable = [
        'name',
        'slug',
    ];

    public $orderable = [
        'id',
        'slug',
    ];

    public $filterable = [
        'id',
        'slug'
    ];
}
