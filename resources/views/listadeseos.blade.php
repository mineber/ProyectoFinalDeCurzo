@extends('layouts.plantilla')
@section('title', 'EnjoyNature')
@section('content')
<div class="deseos">
    @if(count($deseos) >0)
    <h1 style="padding: 20px 0px;">Lista de deseos</h1>
    <hr>
    @foreach($deseos as $deseo)
    @if($deseo->Usuario == $_SESSION['user']) 
    <div class="producto">
        @foreach($productos as $producto)
        @if($deseo->Articulo == $producto->id)
        <img src="img/shop/{{$producto->Fotos}}" alt="">
        <h2>{{$producto->Nombre}}</h2>   
        <h2>Precio: {{$producto->Precio}}€</h2>  
        <?php $_SESSION['total'] += $producto->Precio;?> 
        <form action="{{route('borrarlista')}}" method="post">
        @csrf
        <input type="hidden" name="deseoid" value="{{$deseo->id}}">
        <input type="submit" value="Eliminar de la lista" class="btn btn-outline-primary"> 
        </form>
        
        @endif
        @endforeach     
    </div>
    <hr>
    @endif
    @endforeach
    <div class="producto">
        @foreach($productos as $producto)
        @if($deseo->Articulo == $producto->id)
        <img src="img/shop/{{$producto->Fotos}}" alt="">
        <h2>Total:</h2>   
        <h2 style="color: green;"><?= $_SESSION['total']?>€</h2> 
        <input type="button" value="Pagar" class="btn btn-outline-primary"> 
        @endif
        @endforeach  
        
    </div>
     
    @elseif(count($deseos) == 0)
        <h1>No hay productos en la lista de deseos</h1>
        <hr><br>
        <h2>Productos que te pueden gustar</h2>
        <div class="shop-content">
        <?php 
        
        $aleatorio = 0;
        $contador = 0;
        do{ ?>
        
        @foreach($productos as $producto)
       
        @if($producto->id == rand(1, 10))
        <?php $contador +=1; ?>
        <div class="shop-card">
            <img src="img/shop/{{$producto->Fotos}}" alt="">
            <div class="shop-info">
                <h2> {{$producto->Nombre}}</h2>
            <hr>
                <div class="shop-btn">
                
                
                <div><h2 style="float:left;">Precio: <h2 class="price" style="float:left;">{{$producto->Precio}}€</h2> </h2></div>
                <img src="{{asset('icons/circle-info-solid.svg')}}" alt="" srcset="" class="fav">
                
                <form action="{{route('save2')}}" method="post">
                @csrf
                    <input type="hidden" name="id" value="{{$producto->id}}">
                <button value="Guardar" name="" class="btn btn-outline-primary">Guardar</button>
                </form></div>
            </div>
        </div>
        @endif
        @endforeach
        <?php }while($contador!=3); ?> </div>
    @endif  
</div>
    
@endsection