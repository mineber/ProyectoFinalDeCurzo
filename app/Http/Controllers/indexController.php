<?php

namespace App\Http\Controllers;

use App\Models\tienda;
use App\Models\viajes;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        session_start();
        $viajes = viajes::all();
        $productos = tienda::all();
        setcookie('usuario', '2', 100*24*3600);
        if(isset($_COOKIE['usuario'])){
            $_SESSION['user'];
        }
        return view('index',compact('viajes','productos'));
    }
    public function info(){
        session_start();
        return view('info');
    }
    public function buscar(request $datos)
    {
        session_start();
        if ($datos->texto == null){
            return redirect('');}
        else if($datos->filtro == 'AllCategories'){
            
        $viajes = viajes::where('Nombre','LIKE', '%'.$datos->texto.'%')->get();
        $productos = tienda::where('Nombre','LIKE', '%'.$datos->texto.'%')->get();
        return view('buscar',compact('viajes', 'productos')) ;
        } else if($datos->filtro == 'Viajes'){
            $productos = 'No';
            
            $viajes = viajes::where('Nombre','LIKE', '%'.$datos->texto.'%')->get();
            return view('buscar',compact('viajes', 'productos'));
        } else if($datos->filtro == 'Articulos'){
            $viajes = 'No';
            $productos = tienda::where('Nombre','LIKE', '%'.$datos->texto.'%')->get();
            return view('buscar',compact('productos', 'viajes'));
        }
        
    }

}
