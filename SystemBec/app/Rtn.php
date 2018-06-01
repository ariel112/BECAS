<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rtn extends Model
{
    
          protected $table ="rtn_empleados";
          protected $fillable = ['name', 'empleado_id'];
          

          public function empleado(){

			return $this->belongsTo(Empleado::class,'id');
        			}	

  
}
