<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="{{asset('css/bootstrap/dist/css/bootstrap.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="{{asset('img/Enjoy_Nature_Logo.png')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/icons/fontawesome/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/icons/fontawesome/js/fontawesome.js')}}">

    <title>@yield('title')</title>
</head>

<body>
    <header>
    <img src="{{asset('img/Enjoy_Nature_Centrado.png')}}" alt="" height="80px">
        
        <ul>
            <a href="{{route('index')}}">
                <li><p> Inicio</p><img src="{{asset('icons/house-solid.svg')}}" alt="" srcset="" class="icon-header"> </li>
            </a>
            <a href="{{route('travel')}}">
                <li><p>Viajes</p> <img src="{{asset('icons/plane-solid.svg')}}" alt="" srcset="" class="icon-header"></li>
            </a>
            <a href="{{route('shop')}}">
                <li><p>Tienda</p> <img src="{{asset('icons/shop-solid.svg')}}" alt="" srcset="" class="icon-header"></li>
            </a>
            <a href="{{route('info')}}">
                <li><p>Sobre nosotros</p> <img src="{{asset('icons/info-solid.svg')}}" alt="" srcset="" class="icon-header">
                </li>
            </a>
        </ul>
        <form action="{{route('buscar')}}" id="buscador" method="post" class="form-buscador">
        @csrf
            <select name="filtro" id="filtro" class="btn btn-select">
                <option value="AllCategories" selected>Sin filtro</option>
                <option value="Viajes">Viajes</option>
                <option value="Articulos">Artículos</option>
            </select>
            <input type="text" name="texto" class="buscador">
            
            <button type="submit" form="buscador" class="btn btn-outline-primary"> <p style="float: left; margin-right:5px;">Buscar</p> <img src="{{asset('icons/magnifying-glass-solid.svg')}}" alt="" srcset="" class="icon-header"></button>
        </form>
        <ul>
            <?php if(!isset($_SESSION['user'])){ ?>
            <a href="{{route('login')}}">
                <li><p>Iniciar sesión </p><img src="{{asset('icons/arrow-right-to-bracket-solid.svg')}}" alt="" srcset="" class="icon-header"></li>
            </a>
            <a href="{{route('register')}}">
                <li>Regístrate</li>
            </a>
            <?php } else {?>
                    <a href="{{route('profile')}}"><li class="user-header">
                <?php if(isset($_SESSION['user'])){ 
                echo '<p style="float:left;  margin-right:10px;">'.$_SESSION['user'].'</p>';
            }
                    ?> 
                    <img src="img/profile/<?= $_SESSION['foto']?>" alt="" class="img-profile-header">
                    <img src="{{asset('icons/user-solid.svg')}}" alt="" srcset="" class="icon-header icon-header-user">
                    </li></a>
                    <a href="{{route('ld')}}"><li><p>Lista de deseos</p>  <img src="{{asset('icons/heart-solid.svg')}}" alt="" srcset="" class="icon-header"></li></a>
                    <a href="{{route('conf')}}"><li><p>Configuración</p> <img src="{{asset('icons/gear-solid.svg')}}" alt="" srcset="" class="icon-header"></li></a>
                    <a href="{{route('cs')}}"><li><p>Cerrar sesión </p><img src="{{asset('icons/right-from-bracket-solid.svg')}}" alt="" srcset="" class="icon-header"></li></a>
                
            <?php } ?>
        </ul>
    </header>
        @yield('content')

    <footer>
<div class="footer-div">
    <h2>Contacto</h2>
    <p>antonio.bermejo-marin@iesruizgijon.com</p>
    <br>
    <h2>Ayuda</h2>
    <a href="{{route('ayuda')}}">Guía de uso</a>
</div>
<div class="footer-div"> 
    <h2>Redes sociales</h2>
    <div class="redes-sociales">
        <i class="fab fa-instagram"></i> @EnjoyNature
    </div>
    <div class="redes-sociales">
        <i class="fab fa-youtube-square"></i> Enjoy Nature
    </div>
    <div class="redes-sociales">
        <i class="fab fa-twitter"></i> @EnjoyNature
    </div>
</div>
    </footer>
    </body>

</html>