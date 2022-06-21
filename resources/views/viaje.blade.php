@extends('layouts.plantilla')
@section('title', 'EnjoyNature')
@section('content')
<div class="viaje-page">
<img src="img/travel/{{$viajes->foto}}" alt="">
<div class="viaje-info">
   <h1> {{$viajes->Nombre}} @if($contadorp != 0)- {{round($media/$contadorp, 2)}} ★ @endif</h1>
   <hr>
   <p>{{$viajes->Descripcion}}</p>
   <hr>
    <h2 class="btn-productos">Precio: {{$viajes->Precio}}€
                </h2> 
                <br><br>
                <form action="{{route('viajar')}}" method="post">
                @csrf
                    <input type="hidden" name="id" value="{{$viajes->id}}">
                    <input type="submit" value="Viajar" class="btn btn-outline-primary">
                </form>
</div>
</div>
<div class="coment">
    <h1>COMENTARIOS</h1>
    <br>
    
    <hr>
    @foreach($coment as $comentario)
    <div class="viaje-comments">
            @if($comentario->Viaje == $viajes->Nombre)
            <form action="{{route('anotherprofile')}}" method="post">
                @csrf
                <br>
                <div class="comments-content">
                   
                    @foreach($users as $user)
                    @if($user->Usuario == $comentario->Usuario)
                <input type="hidden" name="user" value="{{$user->Usuario}}">
                 <div style="display: flex; flex-direction: row; align-items: center; gap: 5px; border-right:1px solid black; padding-right:50px;">
                    <img src="img/profile/{{$user->fotoDePerfil}}" alt="" class="img-profile-comments" onclick="document.getElementById('getProfile<?=$user->id ?>').click()" >

                    <input type="submit" value="" hidden id="getProfile{{$user->id}}">
                        <h3>{{$comentario->Usuario}} | {{$comentario->Puntuacion}}★</h3>
                </div>
                    @endif
                    @endforeach
                <p>{{$comentario->comentario}}.</p></div>
                </form>
        @endif
    </div> <hr>
    @endforeach
    
<div class="paginacion">
    @if($coment->currentPage() != 1)
    <a href="{{ $coment->previousPageUrl() }}" class="btn btn-outline-primary">< Atrás</a>
    @endif
    <p>Página {{ $coment->currentPage() }} de {{ $coment->lastPage() }}</p>
    @if($coment->currentPage() != 1)
    <a href="{{ $coment->nextPageUrl() }}" class="btn btn-outline-primary">Siguiente ></a>
    @endif
</div>  
    
</div>

@endsection