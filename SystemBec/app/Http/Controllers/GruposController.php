<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Becario;

class GruposController extends Controller
{
    public function index(){

    return view('templates.admin.asignacion_grupos.grupo_guia');
    }

               //esta parte edito el estado del becarios                                                    
  public function asignar_guia($id){
     	   $becarios =Becario::find($id);
     	   
  return view('templates.admin.becarios.agregar_estado')->with('becarios',$becarios);
                               }
 
 public function asignar_embajador($id){
     	   $becarios =Becario::find($id);
     	   
  return view('templates.admin.becarios.agregar_estado')->with('becarios',$becarios);
                               }
  
  public function asignar_casa($id){
     	   $becarios =Becario::find($id);
     	   
  return view('templates.admin.becarios.agregar_estado')->with('becarios',$becarios);
                               }
                               
}
