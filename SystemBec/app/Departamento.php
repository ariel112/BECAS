<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $table="departamentos";
    protected $fillable=['name'];

    public function municipios(){
    	return $this->hasMany('APP\Municipio');
    }

    public function becarios(){
    	return $this->hasMany('APP\Becario');
    }
    
}
