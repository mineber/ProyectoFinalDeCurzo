@extends('layouts.plantilla')
@section('title', 'Iniciar sesión')
@section('content')
<div class="register">
    <h2>¡Regístrate!</h2>
    <hr>
    <form action="{{route('registro')}}" method="post">
    @csrf
        <div class="form-login">
            @if(isset($error))
                <p style="color: red;">{{$error}}</p>
            @endif
            <input type="text" name="usuario" id="usuario" class="form-control mt-2" placeholder="Nombre de usuario" minlength="6" maxlength="12">
            <input type="text" name="name" id="name" class="form-control mt-2" placeholder="Nombre y apellidos" minlength="6" maxlength="50">
            <input type="email" name="email" id="email" class="form-control mt-2" placeholder="Correo electrónico" required>
            <input type="password" name="contraseña" id="contraseña" class="form-control mt-2" placeholder="Introduzca su contraseña" maxlength="50" minlength="8">
            <input type="password" name="password" id="password" class="form-control mt-2" placeholder="Introduzca otra vez su contraseña" maxlength="50" minlength="8">
            <input type="submit" value="Registrar" id="submit" document class="btn btn-outline-primary mt-2" />
            
        </div>
    </form>
    <hr> <br>
    <h4>*Recuerda no compartir información privada*</h4>
</div>
@endsection
