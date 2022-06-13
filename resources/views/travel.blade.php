@extends('layouts.plantilla')
@section('title', 'EnjoyNature')
@section('content')
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
    
    <div class="paginacion">
    @if($viajes->currentPage() != 1)
    <a href="{{ $viajes->previousPageUrl() }}" class="btn btn-outline-primary">< Atrás</a>
    @endif
    <p>Página {{ $viajes->currentPage() }} de {{ $viajes->lastPage() }}</p>
    <a href="{{ $viajes->nextPageUrl() }}" class="btn btn-outline-primary">Siguiente ></a>
</div>  
@endsection