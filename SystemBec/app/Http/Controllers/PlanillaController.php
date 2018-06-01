<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Becario;
use Laracasts\Flash\Flash;
use Carbon\Carbon;
use App\Casa;
use App\Forma03;
use App\Voluntariado;
use App\Image;
use App\Actividad;
use DB;
use App\Zebra_Pagination;

use Illuminate\Support\Collection as Collection;


use Maatwebsite\Excel\Facades\Excel;

class PlanillaController extends Controller
{
 
 
 	public function index(){
 
 		 $planilla=DB::select("
 SELECT  bec.nombre as nombre, bec.identidad as identidad , bec.telefono as telefono, bec.cargo as cargo, SUM(w.resultado) as horas, w.TER as mes
 FROM (
       SELECT SUM(horast) as resultado, date_format(T.TE,'%Y %M') as TER , T.id as id 
       FROM(
    		SELECT sum(C.horas) as horast , C.inicio AS TE, A.id as id
    	    FROM becarios A
    		INNER JOIN becarios_actividades B 
    		ON(A.id=B.becario_id)
    		INNER JOIN actividades C 
   			ON(B.actividades_id=C.id)    			
    		GROUP BY C.inicio, A.id
    		
           UNION ALL
    		
	        SELECT SUM(E.horas) as horast, E.created_at AS TE, D.id as id
	   	    FROM becarios D
	   		INNER JOIN voluntariados E
	   		ON(E.becario_id=D.id)    			
	    	GROUP BY E.created_at, D.id
           ) T
       GROUP BY TE, T.id
	   order by  TE asc
      ) w
 INNER JOIN becarios BEC 
 ON(BEC.id=W.id) 
 where BEC.actualizacion = 'Actualizados' and bec.estado='Activo'
 GROUP by w.TER, BEC.nombre, BEC.identidad, BEC.telefono,BEC.cargo
 HAVING SUM(w.resultado) >=20 AND W.TER=(SELECT DATE_FORMAT(CURDATE(),'%Y %M') )
 UNION ALL
 SELECT BEC.nombre, BEC.identidad, BEC.telefono,bec.cargo, BEC.estado, date_format(bec.fecha_estado,'%Y %M')
FROM becarios BEC
WHERE BEC.estado = 'practica'  

    			");

           
         
       

 		return view('templates.admin.Planillas.planilla')->with('planilla',$planilla);
 	}



 	public function complementaria(){
    $becarios=Becario::all();

 		 $planilla=DB::select("
 
 SELECT  bec.id,bec.nombre as nombre, bec.identidad as identidad , bec.telefono as telefono, bec.cargo as cargo, IFNULL(BEC_HORAS.HORAS,0) AS horas, IFNULL(bEC_HORAS.MES,'ND') as mes
 FROM(
 
 SELECT  bec.id,bec.nombre as nombre, bec.identidad as identidad , bec.telefono as telefono, bec.cargo as cargo, ifnull(SUM(w.resultado),0) as horas, w.TER as mes
 FROM (
     
  
       SELECT SUM(horast) as resultado, date_format(T.TE,'%Y %M') as TER , T.id as id 
       FROM(
        SELECT IFNULL(sum(C.horas),0) as horast , IFNULL(C.inicio,0) AS TE, A.id as id
          FROM becarios A
        LEFT JOIN becarios_actividades B 
        ON(A.id=B.becario_id)
        LEFT JOIN actividades C 
        ON(B.actividades_id=C.id)         
        GROUP BY C.inicio, A.id
        
           UNION ALL
        
           SELECT IFNULL(SUM(E.horas),0) as horast, IFNULL(E.created_at,0) AS TE, D.id as id
          FROM becarios D
        LEFT JOIN voluntariados E
        ON(E.becario_id=D.id)         
        GROUP BY E.created_at, D.id
           ) T
       GROUP BY TE, T.id
     order by  TE asc
      ) w
 LEFT JOIN becarios BEC 
 ON(BEC.id=W.id) 
 where BEC.actualizacion = 'Actualizados' and bec.estado='Activo'
 GROUP by w.TER, BEC.nombre, BEC.identidad, BEC.telefono,BEC.cargo, bec.id
 HAVING  W.TER=(select DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 DAy),'%Y %M') )
 
 ) BEC_HORAS
 RIGHT JOIN becarios BEC
 ON(BEC_HORAS.ID=BEC.id)
 where BEC.actualizacion = 'Actualizados' and bec.estado='Activo' and BEC_HORAS.mes is null
 UNION ALL
  SELECT  bec.id,bec.nombre as nombre, bec.identidad as identidad , bec.telefono as telefono, bec.cargo as cargo, IFNULL(BEC_HORAS.HORAS,0) AS horas, IFNULL(bEC_HORAS.MES,'ND') as mes
 FROM(
 
 SELECT  bec.id,bec.nombre as nombre, bec.identidad as identidad , bec.telefono as telefono, bec.cargo as cargo, ifnull(SUM(w.resultado),0) as horas, w.TER as mes
 FROM (
     
  
       SELECT SUM(horast) as resultado, date_format(T.TE,'%Y %M') as TER , T.id as id 
       FROM(
        SELECT IFNULL(sum(C.horas),0) as horast , IFNULL(C.inicio,0) AS TE, A.id as id
          FROM becarios A
        LEFT JOIN becarios_actividades B 
        ON(A.id=B.becario_id)
        LEFT JOIN actividades C 
        ON(B.actividades_id=C.id)         
        GROUP BY C.inicio, A.id
        
           UNION ALL
        
           SELECT IFNULL(SUM(E.horas),0) as horast, IFNULL(E.created_at,0) AS TE, D.id as id
          FROM becarios D
        LEFT JOIN voluntariados E
        ON(E.becario_id=D.id)         
        GROUP BY E.created_at, D.id
           ) T
       GROUP BY TE, T.id
     order by  TE asc
      ) w
 LEFT JOIN becarios BEC 
 ON(BEC.id=W.id) 
 where BEC.actualizacion = 'Actualizados' and bec.estado='Activo'
 GROUP by w.TER, BEC.nombre, BEC.identidad, BEC.telefono,BEC.cargo, bec.id
 HAVING  W.TER=(select DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 DAy),'%Y %M') )
 
 ) BEC_HORAS
 RIGHT JOIN becarios BEC
 ON(BEC_HORAS.ID=BEC.id)
 where BEC.actualizacion = 'Actualizados' and bec.estado='Activo'  and BEC_HORAS.horas<20
 
 
 "); 
      $data =[];
               foreach ($planilla as $Planillas){
                $row=[];
                $row['nombre']=$Planillas->nombre;
                $row['identidad']=$Planillas->identidad;
                $row['telefono']=$Planillas->telefono;
                $row['cargo']=$Planillas->cargo;
                $row['horas']=$Planillas->horas;
                $row['mes']=$Planillas->mes;
                $data[]=$row;
                }
	return view('templates.admin.Planillas.planilla_complementaria')->with('planilla',$planilla);  
 
 	}





    public function excel()
    {        
        /**
         * toma en cuenta que para ver los mismos 
         * datos debemos hacer la misma consulta
        **/
        Excel::create('Becarios ', function($excel) {
            $excel->sheet('Completa', function($sheet) {
               

            	 $planilla=DB::select("
 SELECT  bec.id,bec.nombre as nombre, bec.identidad as identidad , bec.telefono as telefono, bec.cargo as cargo, SUM(w.resultado) as horas, w.TER as mes
 FROM (
     
  
       SELECT SUM(horast) as resultado, date_format(T.TE,'%Y %M') as TER , T.id as id 
       FROM(
    		SELECT sum(C.horas) as horast , C.inicio AS TE, A.id as id
    	    FROM becarios A
    		INNER JOIN becarios_actividades B 
    		ON(A.id=B.becario_id)
    		INNER JOIN actividades C 
   			ON(B.actividades_id=C.id)    			
    		GROUP BY C.inicio, A.id
    		
           UNION ALL
    		
	        SELECT SUM(E.horas) as horast, E.created_at AS TE, D.id as id
	   	    FROM becarios D
	   		INNER JOIN voluntariados E
	   		ON(E.becario_id=D.id)    			
	    	GROUP BY E.created_at, D.id
           ) T
       GROUP BY TE, T.id
	   order by  TE asc
      ) w
 INNER JOIN becarios BEC 
 ON(BEC.id=W.id) 
 where BEC.actualizacion = 'Actualizados' and bec.estado='Activo'
 GROUP by w.TER, BEC.nombre, BEC.identidad, BEC.telefono,BEC.cargo, bec.id
 HAVING SUM(w.resultado) >=20 AND W.TER=(SELECT DATE_FORMAT(CURDATE(),'%Y %M') )
 UNION ALL
 SELECT bec.id,BEC.nombre as nombre, BEC.identidad as identidad, BEC.telefono as telefono,bec.cargo as cargo, BEC.estado as horas, date_format(bec.fecha_estado,'%Y %M') as mes
FROM becarios BEC
WHERE BEC.estado = 'practica'  

    			");


            	 $data =[];
            	 foreach ($planilla as $Planillas){
            	 	$row=[];
            	 	$row['Nombre Completo']=$Planillas->nombre;
            	 	$row['Identidad']=$Planillas->identidad;
            	 	$row['Telefono']=$Planillas->telefono;
            	 	$row['Cargo']=$Planillas->cargo;
            	 	$row['Horas']=$Planillas->horas;
            	 	$data[]=$row;
            	 	}
                 
                 
    			$sheet->fromArray($data);
                $sheet->setOrientation('landscape');
            });
        })->export('xls');
    }





    public function excel2()
    {        
        /**
         * toma en cuenta que para ver los mismos 
         * datos debemos hacer la misma consulta
        **/
        Excel::create('Complementaria', function($excel) {
            $excel->sheet('Complementaria', function($sheet) {
                //otra opción -> $products = Product::select('name')->get();
            	 

            	 $planilla=DB::select("
 
 SELECT  bec.id,bec.nombre as nombre, bec.identidad as identidad , bec.telefono as telefono, bec.cargo as cargo, IFNULL(BEC_HORAS.HORAS,0) AS horas, IFNULL(bEC_HORAS.MES,'ND') as mes
 FROM(
 
 SELECT  bec.id,bec.nombre as nombre, bec.identidad as identidad , bec.telefono as telefono, bec.cargo as cargo, ifnull(SUM(w.resultado),0) as horas, w.TER as mes
 FROM (
     
  
       SELECT SUM(horast) as resultado, date_format(T.TE,'%Y %M') as TER , T.id as id 
       FROM(
        SELECT IFNULL(sum(C.horas),0) as horast , IFNULL(C.inicio,0) AS TE, A.id as id
          FROM becarios A
        LEFT JOIN becarios_actividades B 
        ON(A.id=B.becario_id)
        LEFT JOIN actividades C 
        ON(B.actividades_id=C.id)         
        GROUP BY C.inicio, A.id
        
           UNION ALL
        
           SELECT IFNULL(SUM(E.horas),0) as horast, IFNULL(E.created_at,0) AS TE, D.id as id
          FROM becarios D
        LEFT JOIN voluntariados E
        ON(E.becario_id=D.id)         
        GROUP BY E.created_at, D.id
           ) T
       GROUP BY TE, T.id
     order by  TE asc
      ) w
 LEFT JOIN becarios BEC 
 ON(BEC.id=W.id) 
 where BEC.actualizacion = 'Actualizados' and bec.estado='Activo'
 GROUP by w.TER, BEC.nombre, BEC.identidad, BEC.telefono,BEC.cargo, bec.id
 HAVING  W.TER=(select DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 DAy),'%Y %M') )
 
 ) BEC_HORAS
 RIGHT JOIN becarios BEC
 ON(BEC_HORAS.ID=BEC.id)
 where BEC.actualizacion = 'Actualizados' and bec.estado='Activo' and BEC_HORAS.mes is null
 UNION ALL
  SELECT  bec.id,bec.nombre as nombre, bec.identidad as identidad , bec.telefono as telefono, bec.cargo as cargo, IFNULL(BEC_HORAS.HORAS,0) AS horas, IFNULL(bEC_HORAS.MES,'ND') as mes
 FROM(
 
 SELECT  bec.id,bec.nombre as nombre, bec.identidad as identidad , bec.telefono as telefono, bec.cargo as cargo, ifnull(SUM(w.resultado),0) as horas, w.TER as mes
 FROM (
     
  
       SELECT SUM(horast) as resultado, date_format(T.TE,'%Y %M') as TER , T.id as id 
       FROM(
        SELECT IFNULL(sum(C.horas),0) as horast , IFNULL(C.inicio,0) AS TE, A.id as id
          FROM becarios A
        LEFT JOIN becarios_actividades B 
        ON(A.id=B.becario_id)
        LEFT JOIN actividades C 
        ON(B.actividades_id=C.id)         
        GROUP BY C.inicio, A.id
        
           UNION ALL
        
           SELECT IFNULL(SUM(E.horas),0) as horast, IFNULL(E.created_at,0) AS TE, D.id as id
          FROM becarios D
        LEFT JOIN voluntariados E
        ON(E.becario_id=D.id)         
        GROUP BY E.created_at, D.id
           ) T
       GROUP BY TE, T.id
     order by  TE asc
      ) w
 LEFT JOIN becarios BEC 
 ON(BEC.id=W.id) 
 where BEC.actualizacion = 'Actualizados' and bec.estado='Activo'
 GROUP by w.TER, BEC.nombre, BEC.identidad, BEC.telefono,BEC.cargo, bec.id
 HAVING  W.TER=(select DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 DAy),'%Y %M') )
 
 ) BEC_HORAS
 RIGHT JOIN becarios BEC
 ON(BEC_HORAS.ID=BEC.id)
 where BEC.actualizacion = 'Actualizados' and bec.estado='Activo'  and BEC_HORAS.horas<20
 
 
    			");


            	 $data =[];
            	 foreach ($planilla as $Planillas){
            	 	$row=[];
            	 	$row['Nombre Completo']=$Planillas->nombre;
            	 	$row['Identidad']=$Planillas->identidad;
            	 	$row['Telefono']=$Planillas->telefono;
            	 	$row['Cargo']=$Planillas->cargo;
            	 	$row['Horas']=$Planillas->horas;
            	 	$data[]=$row;
            	 	}
                 
                 
    			$sheet->fromArray($data);
                $sheet->setOrientation('landscape');
            });
        })->export('xls');
    }



 	 

}














