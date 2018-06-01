<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forma03 extends Model
{
    protected $table="forma03";
    protected $fillable=['name','becario_id'];

    public function becario(){
    	return $this->belongsTo('APP\Becario');
    }

}
