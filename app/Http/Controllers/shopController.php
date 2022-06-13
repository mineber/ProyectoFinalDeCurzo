<?php

namespace App\Http\Controllers;

use App\Models\listadeseos;
use App\Models\tienda;




use Illuminate\Http\Request;

class shopController extends Controller
{
    public function shop(){
        session_start();
        $productos = tienda::paginate(8);
        return view('shop', compact('productos'));
    }
    public function save(request $datos){
        session_start();
        $añade = new listadeseos();
        $añade->Usuario = $_SESSION['user'];
        $añade->Articulo = $datos->id;
        $añade->Viaje = '';
        $añade->save();
        return redirect('shop');
    }
    public function save2(request $datos){
        session_start();
        $añade = new listadeseos();
        $añade->Usuario = $_SESSION['user'];
        $añade->Articulo = $datos->id;
        $añade->Viaje = '';
        $añade->save();
        return redirect('ld');
    }
    public function producto(request $datos){
        session_start();
        $productos = tienda::where('id', '=', $datos->id)->first();
        return view('producto',compact('productos'));
    }
}
