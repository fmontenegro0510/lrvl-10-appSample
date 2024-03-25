<?php

namespace App\Models;

use App\Models\Postulante;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Correo extends Model
{
    use HasFactory;
    // Modelo User
    public function postulantes()
    {
        return $this->hasMany(Postulante::class);        
    }
}
