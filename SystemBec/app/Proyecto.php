<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table='Proyectos';
    protected $fillable =['name','direccion','depa'];


    public function empleado(){
   	return $this->hasMany(Empleado::class);
   }

    public function scopeSearchp($query,$name){

      if($name!=""){
      return $query->where('name',"LIKE","%$name%");
          }

    }



}
   