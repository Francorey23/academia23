<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
   protected $fillable = ['url'];
    /*  public function relacionCompetencia()
        { //$libro->categoria->nombre
            return $this->belongsTo(Competencia::class); //Pertenece a una categoría.
        } */
    
}
