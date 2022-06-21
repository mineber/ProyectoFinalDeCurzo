@extends('layouts.plantilla')
@section('title', 'Iniciar sesión')
@section('content')
<div class="login">
    
    <h1>¡Compra realizada!</h1>
    <br>
    <hr>
    <br>
    Recibirá su pedido en un plazo de 10-15 días laborales.
    <br>
    <br>
    <form action="{{route('shop')}}" method="get">
        <input type="submit" value="Ver más productos" class="btn btn-outline-primary">
    </form>

</div>
    
@endsection