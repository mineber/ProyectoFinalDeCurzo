@extends('layouts.plantilla')
@section('title', 'Perfil')
@section('content')
<div class="profile-container">
    <img src="img/profile/{{$user->fotoHeader}}" alt="" class="img-header">
    <img src="img/profile/{{$user->fotoDePerfil}}" alt="" class="img-profile">
    <div class="profile-content">
        <div class="info">
            <h1>Usuario: {{$user->Usuario}}</h1>
            <br>
            <h2>Nombre</h2><br>
            {{$user->nombre}}
            <br> <br> 
            <h2>Información personal</h2>
            {{$user->informacionp}}

        </div>
        <div style="border-right:1px solid black; max-height: 100%"></div>
        <div class="commentsphotos">
            
        @if($_SESSION['user'] == $user->Usuario)
            <form action="{{route('comentar')}}" method="post" class="comentario">
            @csrf
            <h2 style="margin-bottom: 20px;">Publica un comentario</h2>
                <input type="text" name="comentario" id="" placeholder="Escribir un comentario" class="buscador text" require size="90" maxlength="250">
                <select name="viajes" id="" class="btn btn-select" require>
                    <option value="AllCategories" selected hidden>Elige el viaje</option>
                    @foreach($viajes as $viaje)
                    <option value="{{$viaje->Nombre}}"  >{{$viaje->Nombre}}</option>
                    @endforeach
                </select>
                <select name="Puntuacion" id="" class="btn btn-select" require>
                    <option value="AllCategories" selected hidden>¡Valora!</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input type="submit" value="Publicar comentario" class="btn btn-outline-primary">
            </form>
            <hr>
            <br>
            @endif
            <!-- <form action="" method="post" class="comentario form-foto">
            <h2 style="margin-top: 20px;">Sube una foto</h2> <br>
                <input type="file" name="" id="getFile" placeholder="Sube una foto!" >
                <input type="submit" value="Compartir" class="btn btn-outline-primary">
                <p class="btn photo" onclick="document.getElementById('getFile').click()">Ver fotos de este usuario</p>
            </form>
            <hr><br> -->

            
            <h2>Comentarios de {{$user->Usuario}}</h2>
            <br>
            <div class="comments">
            <?php $contador = 0; ?>
            @foreach($valoraciones as $valoracion)
            @if($valoracion->Usuario == $user->Usuario)
                <br>
                <h2>Viaje: {{$valoracion->Viaje}} </h2>
                <div class="comments-content">
                <img src="img/profile/{{$user->fotoDePerfil}}" alt="" class="img-profile-comments">
                        <h3>{{$valoracion->Usuario}} | {{$valoracion->Puntuacion}}*</h3>
                
                <p>{{$valoracion->comentario}}.</p>
                @if($_SESSION['user'] == $user->Usuario)
                <form action="{{route('borrarcoment')}}" method="post">
                @csrf
                   <input type="hidden" name="id" value="{{$valoracion->id}}">
                   <input type="submit" value="Borrar comentario" class="btn btn-outline-primary">
               </form>
               @endif
               
            </div>
                <hr>
                <?php $contador += 1; ?>
                @endif
                
            @endforeach
            @if($contador == 0)
                 <br>
                 No hay actividad reciente
                 @endif
            </div>
        </div>
    </div>
</div>
    
@endsection