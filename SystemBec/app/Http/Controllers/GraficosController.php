<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraficosController extends Controller
{
   


  public function index(){
 
  return view('templates.admin.estadisticas.estadistica_General');
 						 }

  public function casas(){
 
  return view('templates.admin.estadisticas.estadistica_casas');
 						 }					 





}
