<?php

namespace App\Http\Controllers;

use App\Models\usuario;

use Illuminate\Http\Request;

class confController extends Controller
{
    public function moda(request $datos){
        session_start();
        $user = usuario::where(strtoupper('usuario'), '=', $_SESSION['user'])->first();
        // $user->Nombre = $datos->name;
        // if ($datos->hasFile('fotop')){
        //     $file = $datos->file('imagen');
        //     $destino = "img/profile/";
        //     $fileName = time() . '-' . $file->getClientOriginalName();
        //     $subidaImagen = $datos->file('imagen')->move($destino, $fileName);
        //     $user->fotoDePerfil = $fileName;
        // }
        if ($datos->hasFile('imagen')){
            $file = $datos->file('imagen');
            $destino = "img/profile/";
            $fileName = time() . '-' . $file->getClientOriginalName();
            $subidaImagen = $datos->file('imagen')->move($destino, $fileName);
            $user->fotoHeader = $fileName;
        }
        $user->save();
        return redirect('conf');
    }
}
