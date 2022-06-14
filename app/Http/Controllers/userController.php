<?php

namespace App\Http\Controllers;
use App\Models\usuario;
use Illuminate\Http\Request;
use App\Models\listadeseos;
use App\Models\tienda;
use App\Models\valoraciones;
use App\Models\viajes;

class userController extends Controller
{
    public function login(){
        session_start();
        return view('login');
    }
    public function register(){
        session_start();
        
        return view('register');
    }
    public function log(request $datos){
        $user = usuario::where(strtoupper('usuario'), '=', strtoupper($datos->usuario))->where('contraseña', '=', $datos->contraseña)->first();
        if(!isset($user->Usuario)){
            
            return view('login');
            
        } else if(strtoupper($user->Usuario) == strtoupper($datos->usuario) || strtoupper($user->email) == strtoupper($datos->usuario)){
            session_start();
            
        $_SESSION['foto'] = $user->fotoDePerfil;
            $user = usuario::where(strtoupper('usuario'), '=', strtoupper($datos->usuario))->first();
            $_SESSION['user'] = $user->Usuario;
            
            setcookie('usuario', '2', 100*24*3600);
            return redirect('');
        }
    }
    public function registro(request $datos){
        if ($datos->contraseña != $datos->password) {
            return redirect('register');
        } else{
            $user = new usuario;
            $user->Usuario = $datos->usuario;
            $user->nombre = $datos->name;
            $user->email = $datos->email;
            $user->informacionp = '';
            $user->fotoDePerfil = 'noprofile.png';
            $user->fotoHeader = 'default_image.webp';
            $user->contraseña = $datos->contraseña;
            $user->tipo = 'normal';
            $user->save();
            return view('login');
        }
    }
    public function cs(){
        session_start();
       unset( $_SESSION['user']);
       setcookie('usuario', '', 100*24*3600);
       return redirect('');
    }
    public function profile(){
        session_start();
        $viajes = viajes::all();
        $user = usuario::where(strtoupper('usuario'), '=', $_SESSION['user'])->first();
        $valoraciones = valoraciones::all();
        return view('profile',compact('user'),compact('valoraciones', 'viajes'));
    }
    public function ld(){
        session_start();
        $_SESSION['total'] = 0;
        $deseos = listadeseos::where(strtoupper('Usuario'), '=', $_SESSION['user'])->paginate(50);
        $productos = tienda::all();
        

        return view('listadeseos', compact('deseos', 'productos'));
    }
    
    public function borrarlista(request $datos){
        session_start();
        $_SESSION['total'] = 0;
        
        $deseos = listadeseos::where('id', '=',$datos->deseoid)->delete();

        return redirect('ld');
    }

    public function conf(){
        session_start();
        $user = usuario::where(strtoupper('usuario'), '=', $_SESSION['user'])->first();

        return view('conf',compact('user'));
    }
    public function comentar(request $datos){
        session_start();
        $comentario = new valoraciones();
        if($datos->comentario != null){
        $comentario->Viaje = $datos->viajes;
        $comentario->Usuario = $_SESSION['user'];
        
        $comentario->Puntuacion = $datos->Puntuacion;

        $comentario->comentario = $datos->comentario;
        $comentario->foto = '';
        $comentario->save();}
        return redirect('profile');
    }
    public function modificar(request $datos){
        session_start();
        $user = usuario::where(strtoupper('usuario'), '=', $_SESSION['user'])->first();
        $user->Nombre = $datos->name;
        $user->Usuario = $datos->user;
        if($datos->desc != null){
            $user->informacionp = $datos->desc;
        } else{
            $user->informacionp = '';
        }
        
        $_SESSION['user'] = $datos->user;
        if ($datos->hasFile('imagen')){
            $file = $datos->file('imagen');
            $destino = "img/profile/";
            $fileName = time() . '-' . $file->getClientOriginalName();
            $subidaImagen = $datos->file('imagen')->move($destino, $fileName);
            $user->fotoDePerfil = $fileName;
        }
        $_SESSION['foto'] = $user->fotoDePerfil;
        
        if ($datos->hasFile('fotoh')){
            $file = $datos->file('fotoh');
            $destino = "img/profile/";
            $fileName = time() . '-' . $file->getClientOriginalName();
            $subidaImagen = $datos->file('fotoh')->move($destino, $fileName);
            $user->fotoHeader = $fileName;
        }
        $user->save();
        return redirect('conf');
    }

    public function borrarcoment(request $datos){
        session_start();
        $comentario = valoraciones::where("id", '=', $datos->id)->delete();

        return redirect('profile');
    }
    public function anotherprofile(request $datos){
        session_start();
        $viajes = viajes::all();

        $user = usuario::where(strtoupper('usuario'), '=',$datos->user)->first();
        $valoraciones = valoraciones::all();
        return view('profile',compact('user'),compact('valoraciones', 'viajes'));
    }
}
