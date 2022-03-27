<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Rolpermission extends Model
{
    use HasFactory;
    public function roles(){
        return $this->belongsTo(Role::class,'rol_id');
    }

    public function pxasxasasx(){
        return $this->belongsTo(Permission::class,'permission_id');
    }

    public function usuarios(){
        return $this->hasMany(Rolpermission::class,'id');
    }


  }
