<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Becario;
use App\Forma03;
use Carbon\Carbon;



class Forma03Controller extends Controller
{
    
	 public function __construct(){
       Carbon::setLocale('es');
                                 }

    


        public function index($id){
        	  $carbon=Carbon::now();
              $becarios=  Becario::find($id);
              
              $forma03=Forma03::orderBy('id','DESC')->paginate(19);
              
             // $becarios->each(function($becarios){
              	$becarios->formas03;

              	$becarios->orderBy('id','DESC')->paginate(4);
              //});

              

         
          return view('templates.admin.forma03.index')->with('becarios',$becarios)->with('forma03',$forma03);
                               } 
/*
 public function index(Request $request){
          
          $carbon=Carbon::now();                
           //dd($request->name);
          $becarios=Empleado::search($request->name)->orderBy('id','DESC')->paginate(19);
          $images=Image::all();                    
          $becarios->each(function($becarios){
          $becarios->images;                   });

          $proyecto=Proyecto::all();
          $becarios->each(function($becarios){
          $becarios->proyecto;
                                               }); 
                    

          return view('templates.admin.becarios.index')->with('becarios',$becarios)->with('carbon',$carbon);                         
                                               }
  



*/

        public function create($id){
        	$becarios=  Becario::find($id);
         return view('templates.admin.forma03.create')->with('becarios',$becarios); 
        }                                                             


  
    	public function store(Request $request){

    		   
    		    $forma03= new Forma03();
                
                
				if($request->file('image')) { 

				$file=$request->file('image');
				$name='Identidad_'.time().'.'.$file->getClientOriginalExtension();
				$path = public_path().'/images/forma03/';
				$file->move($path,$name);
				                              }
				 $forma03->name=$name;
				 $forma03->becario_id=$request->becario_id;
				
				 
				 $forma03->save();                             


                return redirect()->route('Becarios.perfil',$request->becario_id);
											
	          }
    



}
