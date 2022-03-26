<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    public function empresas(){
        return $this->belongsTo(Empresa::class,'company_id');
    }

    public function roles(){
        return $this->belongsTo(Role::class,'role');
    }
}
