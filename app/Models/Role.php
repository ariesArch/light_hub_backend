<?php

namespace App\Models;

use App\Support\HasPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
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
   public function admins() {
      return $this->belongsToMany(User::class,'admins_roles');            
   }
}
