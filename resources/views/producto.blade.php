@extends('layouts.plantilla')
@section('title', 'EnjoyNature')
@section('content')
<div class="producto-page">
<img src="img/shop/{{$productos->Fotos}}" alt="">
<div class="producto-info">
   <h1> {{$productos->Nombre}}</h1>
   <hr>
   <p>{{$productos->Descripción}}</p>
   <hr>
    <h2 class="btn-productos">Precio: {{$productos->Precio}} 
                </h2> 
                <?php if(isset($_SESSION['user'])){ ?>
                <br><br>
                <form action="{{route('save')}}" method="post">
                @csrf
                    <input type="hidden" name="id" value="{{$productos->id}}">
                <button value="Guardar" name="" class="btn btn-outline-primary">Guardar</button>
                </form>
                <?php } ?>
</div>


</div>
   
@endsection