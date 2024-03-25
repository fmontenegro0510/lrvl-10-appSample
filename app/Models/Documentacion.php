<?php
//https://codersfree.com/courses-status/aprende-laravel-desde-cero/relacion-uno-a-uno

namespace App\Models;

use App\Models\Postulante;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Documentacion extends Model
{
    use HasFactory;
    
    public function postulante(){
        return $this->belongsTo(Postulante::class);
    }
}
