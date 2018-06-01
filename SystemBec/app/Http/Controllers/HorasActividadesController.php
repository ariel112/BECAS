<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Becario;
use App\Actividad;
use App\Becarios_Actividades;
use Laracasts\Flash\Flash;
use DB;

class HorasActividadesController extends Controller
                                                   {

    /*muestra donde se va a asignarle la actividad*/
    public function show($id){
           $becarios=  Becario::find($id);
           $actividades= Actividad::all();
         
           /*Esta consulta me retorna todas las actividades a las que no ha ido el becario*/
           $actividadesC=DB::table('becarios')
           ->join('becarios_actividades','becarios_actividades.becario_id','=', 'becarios.id')
           ->join('actividades','actividades.id' ,'=','becarios_actividades.actividades_id')        
           ->select('actividades.id','actividades.nombre','actividades.horas','actividades.lugar')
           ->where('becarios.id','=',$id)
           ->get();
           
            //consulta que filtra las actividades que tiene disponible el becario en sus posible horas asignables
            $actividadesCC=DB::select("
            SELECT E.id,E.nombre,E.lugar
            FROM actividades E
            LEFT JOIN (
                SELECT AA.actividades_id as dir
                FROM becarios_actividades AA
                INNER JOIN actividades CC
                WHERE AA.becario_id='$id'
                GROUP BY AA.actividades_id
                        ) D
            ON(D.dir=E.id)
            WHERE D.dir IS NULL && E.estado='Activo'"
                                      );    
    return view('templates.admin.horas.create')->with('becarios',$becarios)->with('actividadesCC',$actividadesCC); 
                                }

    //guarda la actividad con el becario que la realizo
    public function store(Request $request){         
           $becarios_actividades= new Becarios_Actividades();
           $becarios_actividades->becario_id=$request->becario_id;
           $becarios_actividades->actividades_id=$request->actividades_id;
           $becarios_actividades->save();
   		     Flash::success('A sido asignado con exito');
    return redirect()->route('Becarios.perfil',$becarios_actividades->becario_id);                                 }
												   								}
