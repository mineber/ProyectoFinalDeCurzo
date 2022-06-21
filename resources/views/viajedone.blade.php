@extends('layouts.plantilla')
@section('title', 'Iniciar sesión')
@section('content')
<div class="login">
    
    <h1>¡Disfruta tú viaje!</h1>
    <br>
    <hr>
    <br>
    Recibirás un correo con el billete que deberás imprimir para poder realizar tú viaje.
    <br>
    <br>
    <form action="{{route('travel')}}" method="get">
        <input type="submit" value="Ver más viajes" class="btn btn-outline-primary">
    </form>

</div>
    
@endsection