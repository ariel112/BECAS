<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casa extends Model
{
    protected $table="casas";
    protected $fillable=['nombre','grupo_id'];


    public function grupos(){
    	return $this->hasMany('APP\Grupo');
    }
}
