@extends('layouts.plantilla')
@section('title', 'EnjoyNature')
@section('content')

@if($productos != 'No')
@if(isset($productos) && count($productos) != 0)
<h1 style="text-align: center; margin:20px 0px;">Tienda</h1>
<div class="shop-content">
        @foreach($productos as $producto)
        
        <div class="shop-card">
            <img src="img/shop/{{$producto->Fotos}}" alt="">
            <div class="shop-info">
                <h2> {{$producto->Nombre}}</h2>
            <hr>
                <div class="shop-btn">
                
                
                <div><h2 style="float:left;">Precio: <h2 class="price" style="float:left;">{{$producto->Precio}}€</h2> </h2></div>
                <form action="{{route('producto')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$producto->id}}">
                <img src="{{asset('icons/circle-info-solid.svg')}}" alt="" srcset="" class="fav" onclick="document.getElementById('getInfo<?=$producto->id ?>').click()">
                <input type="submit" value="" id="getInfo{{$producto->id}}" hidden >
                </form>
                <?php if(isset($_SESSION['user'])){ ?>
                <form action="{{route('save')}}" method="post">
                @csrf
                    <input type="hidden" name="id" value="{{$producto->id}}"> 
                <button value="Guardar" name="" class="btn btn-outline-primary">Guardar</button>
                </form>
                <?php } ?>
            </div>
            </div>
        </div>
        @endforeach
</div>
    

    @else
     <h3 style="text-align: center; margin:20px 0px;">No hay productos en la tienda relacionados a su búsqueda</h3>
    @endif
@endif
@if($viajes != 'No')
@if(isset($viajes) && count($viajes) != 0)
<hr style="margin-top: 15px; width:80%;">
<h2 style="text-align: center; margin:20px 0px;">Viajes</h2>
@foreach($viajes as $viaje)
    <div class="travel-card">
        <img src="img/travel/{{$viaje->foto}}" alt="">
        <div class="travel-info">
            <h3>{{$viaje->Nombre}}</h3>
            <hr>
            <p>{{$viaje->Descripcion}}



</p>
            <hr>
            <div class="travel-btn">
                <div><h2 style="float:left;">Precio: <h2 class="price" style="float:left;">{{$viaje->Precio}}€</h2> </h2></div>
                <img src="{{asset('icons/star-solid.svg')}}" alt="" srcset="" class="fav">
                <form action="{{route('viaje')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$viaje->id}}">
                <img src="{{asset('icons/circle-info-solid.svg')}}" alt="" srcset="" class="fav" onclick="document.getElementById('getInfo<?=$viaje->id ?>').click()">
                <input type="submit" value="" id="getInfo{{$viaje->id}}" hidden >
                </form>
            </div>
        </div>
    </div>
    <!-- <br><br><hr class="separador"> -->
    @endforeach
    
     
@else

<h3 style="text-align: center; margin:20px 0px;">No hay viajes relacionados a su búsqueda</h3>
@endif
@endif
@endsection