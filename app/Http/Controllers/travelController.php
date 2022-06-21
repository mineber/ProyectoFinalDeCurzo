<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\valoraciones;
use App\Models\viajes;
use Illuminate\Http\Request;

class travelController extends Controller
{
    
    public function travel(){
        session_start();
        $viajes = viajes::paginate(3);
        return view('travel',compact("viajes"));
    }
    public function viaje(request $datos){
        session_start();
        $viajes = viajes::where('id', '=', $datos->id)->first();
        $coment = valoraciones::where('Viaje', '=', $viajes->Nombre)->paginate(10);
        $users= usuario::all();
        
        $comentarios = valoraciones::all();
        $media = 0;
        $contadorp = 0;
        foreach($comentarios as $comentario){
            if ($comentario->Viaje == $viajes->Nombre) {
                $media += intval($comentario->Puntuacion);
                $contadorp += 1;
            }
        }
        
        return view('viaje',compact("viajes"), compact('coment', 'users', 'media', 'contadorp'));
    }
    
    public function viajar(request $datos){
        $viajes = viajes::where('id', '=', $datos->id)->first();
        $viajes = $viajes->Nombre;
        return view('viajedone' , compact('viajes'));
    }
}
