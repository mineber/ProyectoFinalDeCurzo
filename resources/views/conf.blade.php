@extends('layouts.plantilla')
@section('title', 'EnjoyNature')
@section('content')
<div class="conf">
    <h1>Decora tu perfil</h1>
<hr style="width: 80%;">
<form action="{{route('modificar')}}" method="post" enctype="multipart/form-data">
@csrf
<div style="display: flex; flex-direction:row; width: 50%; align-items:center ; padding: 10px 0px;"><p> Cambiar Usuario: </p><input type="text" name="user" id="" value="{{$user->Usuario}}" class="btn"></div>
<div style="display: flex; flex-direction:row; width: 50%; align-items:center ; padding: 10px 0px;"><p> Cambiar nombre: </p><input type="text" name="name" id="" value="{{$user->nombre}}" class="btn"></div>
<div  style="display: flex; flex-direction:row; width: 50%; align-items:center ; padding: 10px 0px;"><p> Cambiar descripción: </p><input type="text" name="desc" id="" value="{{$user->informacionp}}" accept="image/*" class="btn"></div>
<div  style="display: flex; flex-direction:row; width: 50%; align-items:center ; padding: 10px 0px;"><p>Cambiar foto de perfil: </p> 
<input type="file" class="btn" name="imagen" id="imagen" accept="image/*"></div>
<div  style="display: flex; flex-direction:row; width: 50%; align-items:center ; padding: 10px 0px;"><p>Cambiar foto de encabezado: </p> <input type="file" name="fotoh" id="" class="btn"></div>

<hr><br><input type="submit" value="Guardar" class="btn btn-outline-primary">
</form>
</div>
    
@endsection