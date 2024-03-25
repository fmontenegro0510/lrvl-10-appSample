<?php

namespace App\Models;

use App\Models\Correo;
use App\Models\Documentacion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Postulante extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'apinom',
        'dni',
        'fecha_nacimiento',
      ];

    public function documentacion(){
        return $this->hasOne(Documentacion::class);
    }

    public function correos(){
        return $this->hasMany(Correo::class);
    }
}
