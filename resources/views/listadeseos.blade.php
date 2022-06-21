@extends('layouts.plantilla')
@section('title', 'EnjoyNature')
@section('content')
<div class="deseos">
    @if(count($deseos) >0)
    <?php $lista = ''; ?>
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
        <?php 
        if($lista == ''){
            $lista = $deseo->id;
        } else {
        $lista = $lista .','.$deseo->id; }?>
        @endif
        @endforeach     
    </div>
    <hr>
    @endif 
    @endforeach
    <div class="producto">
        @foreach($productos as $producto)
        @if($deseo->Articulo == $producto->id)
        
        <h2>Total:</h2>   
        <h2 style="color: green;"><?= $_SESSION['total']?>€</h2> 
        <form action="{{route('comprar')}}" method="post">
            @csrf
        <input type="submit" value="Pagar" class="btn btn-outline-primary"> 
        
      
    <input type="hidden" name="lista" value="{{$lista}}"> 
       
        </form>
        @endif
        @endforeach  
        
    </div>
     
    @elseif(count($deseos) == 0)
        <h1>No hay productos en la lista de deseos</h1>
        <hr><br>
        <h2>Productos que te pueden gustar</h2>
        <div class="shop-content">
        
        
        
        <?php for ($i=0; $i < 3; $i++) { 
            # code...
            $aleatorio = rand(0,8);
        ?>
        
        <div class="shop-card">
            <img src="img/shop/{{$productos[$aleatorio]->Fotos}}" alt="">
            <div class="shop-info">
                <h2> {{$productos[$aleatorio]->Nombre}}</h2>
            <hr>
                <div class="shop-btn">
                
                
                <div><h2 style="float:left;">Precio: <h2 class="price" style="float:left;">{{$productos[$aleatorio]->Precio}}€</h2> </h2></div>
                <img src="{{asset('icons/circle-info-solid.svg')}}" alt="" srcset="" class="fav">
                
                <form action="{{route('save2')}}" method="post">
                @csrf
                    <input type="hidden" name="id" value="{{$productos[$aleatorio]->id}}">
                <button value="Guardar" name="" class="btn btn-outline-primary">Guardar</button>
                </form>
                </div>
            </div>
        </div>
        
        <?php } ?>
    @endif  
    </div>
</div>
@endsection