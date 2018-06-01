<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Becario extends Model
{
    protected $table ="becarios";

    protected $fillable = [
							'nombre',
							'fecha_nacimiento',
							'identidad',
							'direccion',
							'longitud',
							'latitud',
							'telefono',
							'correo',
							'universidad',
							'carrera',
							'cuenta_bancaria',
							'nombre_banco',
							'genero',
							'cargo',
							'password',
							'id_guia',
							'nombre_madre',
							'identidad_madre',
							'ocupacion_madre',
							'empresa_madre',
							'telefono_madre',
							'correo_madre',
							'direccion_madre',
							'nombre_padre',
							'identidad_padre',
							'ocupacion_padre',
							'empresa_padre',
							'telefono_padre',
							'correo_padre',
							'direccion_padre',
							'departamento_id',
							'grupo_id',
							'nombre_id',
							'nombre_periodo',
							'descripcion',
							'estado',
							'tipo_periodo'

						];


	public function grupo(){

			return $this->belongsTo(Grupo::class,'grupo_id');
        			
	}

    public function actividad(){
    	return $this->belongsToMany('APP\Actividad');
    }					

    public function departamento(){
    	return $this->belongsTo('APP\Departamento');
    }

    public function voluntariados(){
    	return $this->hasMany('APP\Voluntariado');
    }

    public function formas03(){
    	return $this->hasMany('APP\Forma03');
    }

    public function doc_periodos(){
    	return $this->hasMany('App\Doc_periodo');
    }


    public function historiales(){
    	return $this->hasMany('APP\Historial');
    }				

    
    public function images(){
    	//return $this->hasMany(Image::class,'id');
      return $this->belongsTo(Image::class,'image_id');
                        }

}

