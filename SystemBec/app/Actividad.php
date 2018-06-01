<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
  protected $table="Actividades";
  protected $fillable=['nombre','objetivo','logistica','alcance','horas','inicio','final','lugar'];


    public function becarios(){
    	return $this->belongsToMany('APP\Becario')->withTimestamps();
    }
}
