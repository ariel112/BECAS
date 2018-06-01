<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table="grupos";
    protected $fillable=['name','guia_id'];



   public function becarios()
   {
   	return $this->hasMany(Becario::class,'id');
   }


    public function casa(){
    	return $this->belongsTo('APP\Casa');
    }


}
