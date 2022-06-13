@extends('layouts.plantilla')
@section('title', 'EnjoyNature')
@section('content')
    <h2 style="text-align: center; margin:20px 0px;">NOVEDADES DE VIAJES</h2>
<form action="{{route('viaje')}}" method="post">
@csrf

<div class="carrusel" onclick="document.getElementById('getInfo').click()">
    <?php $random = rand(1, count($viajes));
    
    $list = []; ?>
    @foreach($viajes as $viaje)
    @if($viaje->id == $random)
<img src="img/travel/{{$viaje->foto}}" alt="" >
<h2>{{$viaje->Nombre}}</h2>
<input type="hidden" name="id" value="{{$viaje->id}}">
<input type="submit" hidden name="boton" id="getInfo">
@endif @endforeach
</form>
</div>
    <h2 style="text-align: center; margin:20px 0px;">NOVEDADES DE LA TIENDA</h2>
    <div class="news">
    <?php 
    do{

        $random = rand(1, count($productos));  
        $list[] = $random;
        
        $list = array_unique($list);
    } while (count($list) != 4);
    for ($i=0; $i < 4; $i++) { 
                ?>
                @foreach($productos as $producto)
                @if($producto->id == $list[$i])
                <form action="{{route('producto')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$producto->id}}">
                    <div class="news-cards" onclick="document.getElementById('getInfo<?=$producto->id ?>').click()">
                    
                    <input type="submit" value="" id="getInfo{{$producto->id}}" hidden ></form>
                        <img src="img/shop/{{$producto->Fotos}}" alt="">
                        <h2>{{$producto->Nombre}}</h2>
                    </div>
                
                @endif @endforeach
                <?php
            
        
        
    }
    
    ?>
</div>
@endsection