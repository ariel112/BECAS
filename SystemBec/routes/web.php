<?php


use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

   Route::get('/', function () {
    return view('auth.login');
});

 
/*Esta en para iniciar sesion y logearse en la aplicacion */
Route::group(['middleware'=>'auth'], function(){


   Route::group(['middleware'=>['auth','operaciones'||'admin']]  , function(){
           /*Ruta para las actividades*/
           Route::resource('Actividades','ActividadesController');


           Route::get('Actividades-historiales',
                     [
                      'as'=>'Actividades.historial',
                      'uses'=>'ActividadesController@historial'
                     ]);

           Route::get('Actividades/{id}/destroy',
                      [
                        'uses'=>  'ActividadesController@destroy',
                        'as'=> 'Actividades.destroy'
                       ]);

           Route::get('Inicio',
                     [
                      'uses'=>  'ActividadesController@inicio',
                      'as'=> 'Actividades.inicio'
                     ]);

           Route::get('Agregar/taller',
                     [
                      'as'=>'taller.agregar',
                      'uses'=>'TallerController@create'
                     ]);
                                                                   });

   Route::group(['middleware'=>['auth','admin']]  , function(){
      
      Route::get('admin/trimestrales', [
            'as'=>'trimestrales.index',
            'uses'=>'BecariosController@indextrimestrales'
                                               ]);
        Route::POST('admin/trimestrales',
            [
              'as'=>'trimestrales.store',
              'uses'=>'BecariosController@trimestrales'
            ]);


        Route::get('admin/semestrales', [
            'as'=>'semestrales.index',
            'uses'=>'BecariosController@indexsemestrales'
                                               ]);
        Route::POST('admin/semestrales',
            [
              'as'=>'semestrales.store',
              'uses'=>'BecariosController@semestrales'
            ]);
     

                                                                   });
   




Route::group(['middleware'=>['auth','seguimiento'||'admin' ]], function(){
  
          /*Ruta para el manejo de becarios*/
          Route::resource('Becarios','BecariosController');
          Route::get('Becarios/{becarios}', 'BecariosController@becariosFilter');
       
           //Ruta para acceder al perfil del becario
           Route::get('becario-perfil/{id}',[ 
              'as'=>'Becarios.perfil',
              'uses'=>'BecariosController@perfil']       
                                      );
           //ruta para agregarle el estado al becario
           Route::get('becario/{id}/asignar_estado', [
            'as'=>'asignar_estado.edit',
            'uses'=>'BecariosController@asignar_estado'
                                               ]);
           //Ruta que asigno el estado del becario. practicamente actualiza el estado
           Route::PUT('BecariosE/{id}',[
            'as'=>'Becarios.asignar_estado.update',
            'uses'=>'BecariosController@update_asignar_estado'
                                             ]);
           //este tiene la informacion sobre el cargo del becario
            Route::get('becarios/{id}/asignar_cargo', [
            'as'=>'asignar_cargo.edit',
            'uses'=>'BecariosController@asignar_cargo'
                                               ]);
           //Ruta que asigno el cargo al becario. practicamente actualiza el estado
           Route::PUT('becariosC/{id}',[
            'as'=>'Becarios.asignar_cargo.update',
            'uses'=>'BecariosController@update_asignar_cargo'
                                             ]);

           //Ruta que muestro el total de horas de los becarios
           Route::get('becarios/horas/historiales/{id}',[
            'as'=>'Becarios.mostrar_horas',
            'uses'=>'BecariosController@mostrar'
                                             ]);
            //Ruta que muestro los becarios que no has sido asignados a ningun grupo----------------------------------------
           Route::get('becarios/asignacion',[
            'as'=>'Becarios.sin_asignar',
            'uses'=>'BecariosController@sin_asignar'
                                             ]);

           //Muestro el historico de horas detallada de cada becario
           Route::get('becarios/horas/historicos/{id}',[
            'as'=>'Becarios.mostrar_historicos',
            'uses'=>'BecariosController@mostrar_historico'
                                             ]);

           //Ruta que muestro lo de la camara
           Route::get('becarios/fotografia/{id}',[
            'as'=>'Becarios.foto',
            'uses'=>'BecariosController@foto']);
           
           Route::POST('becarios/fotografiaT',[
            'as'=>'Becarios.fotoTomada',
            'uses'=>'BecariosController@tomarfoto'
           ]);
           


            //muestra la pantalla de voluntariado
            Route::get('becario-perfil/voluntariadoindex/{id}',[
            'as'=>'Becarios.voluntariadoIndex',
            'uses'=>'BecariosController@VoluntariadoIndex'
            ]);

            //Ruta para asignarle las horas de voluntariado
            Route::PUT('becario-perfil/voluntariadocreate/{id}',[
            'as'=>'Becarios.voluntariado',
            'uses'=>'BecariosController@voluntariado'
            ]);
            

            //esta es la ruta para el create es una vista de un formulario
           Route::get('becario-perfil/voluntariado/{id}/create',
            [
              'as'=>'becarios.indexVoluntariado',
              'uses'=>'VoluntariadoController@create'
            ]);
           //aqui realiza la operacion de guardado y hace la relacion praticamente guarda
           Route::POST('becario-perfil/crear',
            [
              'as'=>'becariosVoluntariado.store',
              'uses'=>'VoluntariadoController@store'
            ]);

           
           Route::resource('actividades/horas/voluntariado','HorasActividadesController');
           Route::POST('becario-perfil/horas/activdades',[
             'as'=>'actividadesHoras.store',
             'uses'=>'HorasActividadesController@store'
           ]);                                


           //Ruta para crear la forma03---------------
           //este es la ruta para el index
           Route::get('empleados-forma03/{id}',[ 
              'as'=>'Becarios.index-forma03',
              'uses'=>'Forma03Controller@index']       
                                      );
          
           //esta es la ruta para el create es una vista de un formulario
           Route::get('empleados-forma03/{id}/create',
            [
              'as'=>'Becarios.index-forma03-CREATE',
              'uses'=>'Forma03Controller@create'
            ]);
          
           //aqui realiza la operacion de guardado y hace la relacion praticamente guarda
           Route::POST('forma03/crear',
            [
              'as'=>'Becarios-forma03.store',
              'uses'=>'Forma03Controller@store'
            ]);
            //-------------------------------------


           //Ruta para crear la documentacion---------------
           //este es la ruta para el index
           Route::get('becarios-document/{id}',[ 
              'as'=>'Becarios.index-document',
              'uses'=>'DocumentosController@index']       
                                      );
          
           //esta es la ruta para el create es una vista de un formulario
           Route::get('becarios-document/{id}/create',
            [
              'as'=>'Becarios.index-document-CREATE',
              'uses'=>'DocumentosController@create'
            ]);
          
           //aqui realiza la operacion de guardado y hace la relacion praticamente guarda
           Route::POST('document/crear',
            [
              'as'=>'Becarios-document.store',
              'uses'=>'DocumentosController@store'
            ]);
            //-------------------------------------

           /*Controladores para las planillas de pago*/

           
           Route::get('becarios/planilla', [
            'as'=>'planilla.index',
            'uses'=>'PlanillaController@index'
                                               ]);
           
           Route::get('becarios/planilla_complementaria', [
            'as'=>'planilla_complementaria.index',
            'uses'=>'PlanillaController@complementaria'
                                               ]);
           
           Route::get('/', 'PlanillaController@index')->name('products');
           Route::get('descargar-planilla', 'PlanillaController@excel')->name('products.excel');
           Route::get('descargar-planilla-complementaria', 'PlanillaController@excel2')->name('products2.excel');
           
           /*-------------------------------------------------------------*/


           //asigno las actividades a el becario
           Route::get('becarioss/{id}/asignar', [
            'as'=>'asignar.edit',
            'uses'=>'BecariosController@asignar'
                                               ]);

           Route::PUT('becariosss/{id}/asignar',[
            'as'=>'Becarios.asignar.update',
            'uses'=>'BecariosController@update_asignar'
                                            ]);

           });

           //este tiene la informacion sobre el cargo del becario
            Route::get('becarios/{id}/asignar_guia', [
            'as'=>'asignar_guia.edit',
            'uses'=>'BecariosController@asignar_guia'
                                               ]);
           //Ruta que asigno el cargo al becario. practicamente actualiza el estado
           Route::PUT('becariosguias/{id}',[
            'as'=>'Becarios.asignar_guia.update',
            'uses'=>'BecariosController@update_asignar_guia'
                                             ]);



          //Esta es la parte de estadisticas para mostrar los graficos
            Route::get('estadisticas/general', [
            'as'=>'estadisticas.general',
            'uses'=>'GraficosController@index'
                                               ]);
            Route::get('estadisticas/casas', [
            'as'=>'estadisticas.casas',
            'uses'=>'GraficosController@casas'
                                               ]);





  });  

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

 
    //Abner: retorna en un json los empleados filtrador por el nombre
    //Route::get('empleados/{empleados}', 'BecariosController@becariosFilter');
    //Route::get('empleados/{empleados}', ['middleware'=>'cors','BecariosController@becariosFilter']);


          
    
