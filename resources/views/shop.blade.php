@extends('layouts.plantilla')
@section('title', 'EnjoyNature')
@section('content')
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
    
<div class="paginacion">
    @if($productos->currentPage() != 1)
    <a href="{{ $productos->previousPageUrl() }}" class="btn btn-outline-primary">< Atrás</a>
    @endif
    <p>Página {{ $productos->currentPage() }} de {{ $productos->lastPage() }}</p>
    <a href="{{ $productos->nextPageUrl() }}" class="btn btn-outline-primary">Siguiente ></a>
</div>  
    
@endsection
<script>
    
</script>