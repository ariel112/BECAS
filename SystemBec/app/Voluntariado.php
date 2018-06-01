<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntariado extends Model
{
    protected $table="voluntariados";
    protected $fillable=['name','horas'];
    


    public function becario(){
    	return $this->belongsTo('APP\Becario');
    }
}
