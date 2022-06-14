@extends('layouts.plantilla')
@section('title', 'Iniciar sesión')
@section('content')
<div class="register">
    <h2>¡Regístrate!</h2>
    <hr>
    <form action="{{route('registro')}}" method="post">
    @csrf
        <div class="form-login">
            <input type="text" name="usuario" id="" class="form-control mt-2" placeholder="Nombre de usuario" minlength="6" maxlength="12">
            <input type="text" name="name" id="" class="form-control mt-2" placeholder="Nombre" minlength="6" require>
            <input type="email" name="email" id="" class="form-control mt-2" placeholder="Correo electrónico" require>
            <input type="password" name="contraseña" id="" class="form-control mt-2" placeholder="Introduzca su contraseña" require minlength="8">
            <input type="password" name="password" id="" class="form-control mt-2" placeholder="Introduzca otra vez su contraseña" require minlength="8">
            <input type="submit" value="Registrar" class="btn btn-outline-primary mt-2">
        </div>
    </form>
    <hr> <br>
    <h4>*Recuerda no compartir información privada*</h4>
</div>
    
@endsection