<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    use HasFactory;

    public function actividades()
    {
         return $this->belongsTo(Actividades::class);
    }

    public function tareas()
    {
         return $this->belongsTo(Tareas::class);
    }

    public function evidencias()
    {
         return $this->belongsTo(Evidencias::class);
    }

    public function examenes()
    {
         return $this->belongsTo(Examenes::class);
    }

}
