<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Actividad;
use Laracasts\Flash\Flash;
use Carbon\Carbon;
use DB;



class ActividadesController extends Controller
{
    /*Este constructor lo que hace es pasarme a espanol la fecha con carbon*/
    public function __construct(){
           Carbon::setLocale('es');
                                 }

    /*Sirve para la creacion de actividades pantalla donde se crea con todos los campos*/
    public function create(){
    return view('templates.admin.actividades.agregar');
						                }

 
    /*Crea la actividad*/                        
	  public function store(Request $request){ 
    		   $actividades = new Actividad($request->all());
    		   $carbon=Carbon::now();
    		   $actividades->save();
		       Flash::success('La actividad '.$actividades->name.' a sido creada con exito!!!');
		return redirect()->route('Actividades.index');
							                             }

	  /*Pagina donde se muestran todas las actividades*/
	  public function index(Request $request){
		       $carbon=Carbon::now();
           
           $actividades=DB::select("
           SELECT nombre, lugar,horas,estado,inicio,final,id
           FROM actividades
           WHERE estado='Activo'
                             ");    
 
		return view('templates.admin.actividades.index')->with('actividades',$actividades)->with('carbon',$carbon);
	                                          }

    /*Muestra todas las actividades que ya fueron desactivadas*/                                        
	  public function historial(Request $request){
			     $actividades=DB::select("
           SELECT a.id as idi,COUNT(C.id) as cantidad, a.nombre, a.lugar,a.inicio, a.final, a.horas
            FROM becarios_actividades C
            RIGHT JOIN actividades A
            ON(A.id=C.actividades_id)
            WHERE A.estado='Desactivo'
            GROUP BY idi, a.nombre, a.lugar,a.inicio, a.final, a.horas ");    
		return view('templates.admin.actividades.historial')->with('actividades',$actividades);
	                                             }

    /*Guardo cambios de las actividades*/
  	public function update(Request $request, $id){
           $actividades =Actividad::find($id);
           $actividades->fill($request->all());
           $actividades->save();
           Flash::success('La actividad '.$actividades->nombre.' a sido actualizado con exito');
    return redirect()->route('Actividades.index');
                                                 }

    /*Edito las actividades*/                                             
    public function edit($id){
     	     $actividades =Actividad::find($id);
    return view('templates.admin.actividades.editar')->with('actividades',$actividades);
                             }
    /*Este metodo es de eliminar pero yo lo utilice para cambiar el estado de la actiividad*/
    public function destroy($id){     	
           $actividad= Actividad::find($id);
           $actividad->estado='Desactivo';
           $actividad->save();
           Flash::error('La actividad '.$actividad->nombre.' a sido desactivada con exito');
    return redirect()->route('Actividades.index');	
   
    /*Inicio acceso ala vista de inicio*/                            } 
    public function inicio(){
    return view('welcome');
                            }                            
	

}
