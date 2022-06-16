@extends('layouts.plantilla')
@section('title', 'Iniciar sesión')
@section('content')
<div class="login">
    <h2>Iniciar sesión</h2>
    <hr>
    <form action="{{route('log')}}" method="post">
    @csrf
        <div class="form-login">
            @if(isset($error))
                <p style="color: red;">{{$error}}</p>
            @endif
            <input type="text" name="usuario" id="" class="form-control mt-2" placeholder="Nombre de usuario"  minlength="6" maxlength="12">
            <input type="password" name="contraseña" id="" class="form-control mt-2" placeholder="Introduzca su contraseña"  minlength="8" maxlength="50">
            <input type="submit" value="Iniciar sesión" class="btn btn-outline-primary mt-2">
            <input type="submit" value="¿Has olvidado la contraseña?" class="btn btn-outline-primary mt-2">
        </div>
    </form>
    <hr> <br>
    <h4>*Recuerda no compartir información privada*</h4>
</div>
    
@endsection