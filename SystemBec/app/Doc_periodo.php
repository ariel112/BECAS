<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doc_periodo extends Model
{
    protected $table="doc_periodo";
    protected $fillable = [   'becario_id', 
	    					  'nombre_periodo',
							  'prom_global',
							  'prom_periodo',
							  'nombre_historial',
							  'nombre_forma03'
						  ];

    public function becario(){
    	return $this->belongsTo('APP\Becario');
    }
}
