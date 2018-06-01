<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Act_penal extends Model
{
 		  protected $table ="Atc_Penales_Empleados";
          protected $fillable = ['name', 'empleado_id'];
  

public function empleado(){

	return $this->belongsTo(Empleado::class,'id');
}


}
