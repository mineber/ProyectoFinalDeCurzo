@extends('layouts.plantilla')
@section('title', 'EnjoyNature')
@section('content')
<div class="en-info" style="text-align: justify; padding: 40px; font-size: 1.5rem;">
<h2>Principal</h2>
    <p>Para empezar podemos observar el encabezado de la página. Desde aquí podemos llegar a varios apartados de nuestra página. <br><br>
    
    En la página encontraremos novedades sobre nuestros vuelos y novedades sobre los productos de la tienda. Si clickeas en cualquiera de los productos o en el viaje te llevará a una página de información sobre el producto/viaje que hayas clickeado. <br><br>
    <h2>Viajes</h2>
    Podrás mirar los distintos tipos de viajes que disponemos dentro de nuestra empresa en el apartado <a href="{{route('travel')}}">Viajes</a>. Dentro de la “card” de los viajes, podemos observar que tenemos 2 botones. El primer botón es una estrella que indica que puedes guardarlo en favoritos y en el otro botón que es una “i” te llevará a la información del viaje como en la página principal. <br><br>
    <h2>Tienda</h2>
    Para ver los distintos productos que vendemos en EnjoyNature, en el apartado <a href="{{route('shop')}}">tienda</a> podrás ver todos los productos que tenemos disponibles. El botón “i” podemos ver la información del producto seleccionado. <br><br>
    <h2>Cuentas</h2>
    Si quieres tener más funcionalidades dentro de EnjoyNature deberás crearte una cuenta.  Para ello ve a <a href="{{route('register')}}">regístrate</a> si no tienes una cuenta creada para crearte una cuenta. En el caso de que ya tengas tu cuenta creada deberás ir a <a href="{{route('login')}}">iniciar sesión</a> e introducir tu usuario y contraseña.
    Una vez iniciado sesión podemos observar que tenemos nuevas opciones en el header.
    Si nos damos cuenta, en los productos del apartado <a href="{{route('shop')}}">tienda</a> ha aparecido un nuevo botón que pone “Guardar”. Este botón servirá para guardar los productos dentro de nuestra lista de deseos. En el caso de no tener ningún producto guardado se te recomendará aleatoriamente productos de nuestra tienda. <br><br>
    Si pulsamos en nuestro <?php if(isset($_SESSION['user'])) {?><a href="{{route('profile')}}">perfil</a> <?php } else { ?> perfil <?php } ?> podemos observar de primeras que tenemos nuestra propia foto de perfil y una foto de encabezado. Esto podremos cambiarlo a nuestro gusto dentro del apartado de configuración que veremos a continuación. Más abajo de nuestro perfil podemos observar que podemos poner nuestra información personal para que la gente sepa más sobre nosotros y además la posibilidad de comentar sobre los viajes que tenemos en nuestra web y darle una valoración del 1 al 5 sobre tu experiencia. Estos comentarios también podemos observarlos dentro de la información de los viajes, abajo del todo. Si clickeamos en la foto de perfil de otro usuario podemos entrar dentro del perfil del Usuario seleccionado. <br><br>
    Dentro del apartado de <?php if(isset($_SESSION['user'])) {?><a href="{{route('conf')}}">configuración</a> <?php } else { ?> configuración <?php } ?> podremos realizar varios cambios como cambiar nuestro nombre de usuario, nuestro nombre, nuestra información personal y las fotos de nuestro perfil.<br><br>
    <h2>Buscador</h2>
    Con el buscador podremos buscar productos o viajes según nuestra elección. Si queremos buscar por ejemplo un viaje con la palabra “Parque” nos saldrán todos los viajes que tengan la palabra “Parque” en su nombre. <br><br>
    <h2>Info</h2>
    Si quieres saber información sobre EnjoyNature, dentro del apartado <a href="{{route('info')}}">Sobre nosotros</a> tendremos información. Por último en el footer tendremos los contactos, redes sociales y ayuda de nuestra página.

</p>

</div>
    
@endsection