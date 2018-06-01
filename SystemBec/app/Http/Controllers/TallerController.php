<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TallerController extends Controller
{
    /*Sirve para la creacion de actividades pantalla donde se crea con todos los campos*/
    public function create(){
    return view('templates.admin.taller.agregar');
						                }
}
