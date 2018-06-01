<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Becario;
use App\Doc_periodo;
use Carbon\Carbon;


class DocumentosController extends Controller
{
   
  	 public function __construct(){
       Carbon::setLocale('es');
                                 }

    


        public function index($id){
        	  $carbon=Carbon::now();
              $becarios=  Becario::find($id);
              
              $document= Doc_periodo::orderBy('id','ASD')->paginate(2);
              
              $becarios->doc_periodos;

              

         
          return view('templates.admin.documentacion.index')->with('becarios',$becarios)->with('document',$document);
                               } 


        public function create($id){
        	$becarios=  Becario::find($id);
         return view('templates.admin.documentacion.create')->with('becarios',$becarios); 
        }

  
    	public function store(Request $request){

    		   
    		    $document = new Doc_periodo();
    		    $becarios =Becario::find($request->becario_id);   		    

                
				if($request->file('historial')) { 

				$file=$request->file('historial');
				$name='historial_'.time().'.'.$file->getClientOriginalExtension();
				$path = public_path().'/document/historial/';
				$file->move($path,$name);
				                              }
				$document->nombre_historial=$name;
				$document->becario_id=$request->becario_id;


				if($request->file('forma03')) { 

				$filef=$request->file('forma03');
				$namef='forma03_'.time().'.'.$file->getClientOriginalExtension();
				$pathf = public_path().'/document/forma03/';
				$filef->move($pathf,$namef);
				                              }
				$document->nombre_forma03=$namef;
				$document->nombre_periodo=$request->nombre_periodo;
				
				$document->prom_global=$request->prom_global;
				$document->prom_periodo=$request->prom_periodo;
				 

				$document->save();
				$becarios->actualizacion='Actualizados';                
                $becarios->save();                           
                              


                return redirect()->route('Becarios.perfil',$request->becario_id);
											
	          }






}
