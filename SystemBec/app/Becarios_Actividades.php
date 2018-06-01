<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Becarios_Actividades extends Model
{
    protected $table ="Becarios_actividades";
    protected $fillable=['becario_id','actividades_id'];
}
