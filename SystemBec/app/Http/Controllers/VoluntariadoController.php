<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Becario;
use Laracasts\Flash\Flash;
use App\Voluntariado;

class VoluntariadoController extends Controller
{       /*Me lleva ala pantalla donde puedo agregar las horas de voluntariado*/
    	public function create($id){
               $becarios=  Becario::find($id);
        return view('templates.admin.voluntariado.agregar')->with('becarios',$becarios); 
                                    }                                                             
        /*Realiza la operacion de guardado*/                            
        public function store(Request $request){
   		   	   $voluntariados= new Voluntariado();                				                              
			   $voluntariados->name=$request->name;
			   $voluntariados->horas=$request->horas;
			   $voluntariados->becario_id=$request->becario_id;
               $voluntariados->created_at=$request->created_at;			
	           $voluntariados->save();                             
               Flash::success(' Actualizado con exito');
        return redirect()->route('Becarios.perfil',$voluntariados->becario_id);			
	                                            }
                          


}
