<?php

namespace Database\Seeders;

use App\Models\tienda;
use App\Models\usuario;
use App\Models\viajes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $user = new usuario();
        $user->Usuario= "Mineber";
        $user->nombre ="Antonio";
        $user->contraseña = "soyadmin";
        $user->informacionp = "soyadminptos";
        $user->tipo = "admin";
        $user->email = "mineber1996@gmail.com";
        $user->fotoDePerfil = "1655031893-IMG_0076.png";
        $user->fotoHeader = "1655001624-thumb-1920-998181.jpg";
        $user->save();
        
        $producto = new tienda();
        $producto->Nombre= "Pala";
        $producto->Descripción = "Una pala es una herramienta de mano utilizada para excavar o mover materiales con cohesión relativamente pequeña.";
        $producto->Precio = 14.99;
        $producto->Fotos = "pala.jpg";
        $producto->save();

        $producto1 = new tienda();
        $producto1->Nombre= "Rastrillo";
        $producto1->Descripción = "Instrumento compuesto de un mango largo y delgado cruzado en uno de sus extremos por un travesaño armado de púas a manera de dientes , y que sirve para recoger hierba , paja , broza , etc.";
        $producto1->Precio = 19.99;
        $producto1->Fotos = "rastrillo.jpg";
        $producto1->save();
        
        $producto2 = new tienda();
        $producto2->Nombre= "Naranjo";
        $producto2->Descripción = "El naranjo es un árbol de tamaño mediano, de tres a cinco metros de altura, con copa redondeada y ramas regulares. Un solo tronco, derecho y cilíndrico, verdoso primero y gris después. Las ramas aparecen a un metro, poco más o menos, del suelo. Las hojas son perennes, medianas y alargadas, con base redondeada y terminadas en punta. Las flores aparecen en las axilas de las hojas, solitarias o en racimos.";
        $producto2->Precio = 12.99;
        $producto2->Fotos = "naranjo.jpg";
        $producto2->save();
        
        $producto3 = new tienda();
        $producto3->Nombre= "Semilla de pino (Piñón)";
        $producto3->Descripción = "El piñón es la semilla propia de las especies de los géneros Pinus y Araucaria (ambos de la familia Pinaceae). Sus semillas se encuentran en los conos femeninos denominados piñas; y no es, como frecuentemente se cree o se dice, un fruto seco propiamente tal que provenga de un fruto verdadero.";
        $producto3->Precio = 4.99;
        $producto3->Fotos = "semilla de pinos.jpg";
        $producto3->save();
        
        $producto4 = new tienda();
        $producto4->Nombre= "Manzano";
        $producto4->Descripción = "El manzano es un árbol de 1.8-4.6 metros de altura, aunque un ejemplar que no pertenece a un cultivo puede alcanzar hasta 12 metros. Tiende a mostrar una copa redondeada y ramas angulares. Sus hojas caducas son de forma elíptica u ovalada, con los bordes ligeramente dentados; son gruesas y ásperas al tacto.";
        $producto4->Precio = 10.99;
        $producto4->Fotos = "manzano.jpg";
        $producto4->save();

        $producto4 = new tienda();
        $producto4->Nombre= "Azada";
        $producto4->Descripción = " Instrumento que consiste en una lámina o pala cuadrangular de hierro , ordinariamente de 20 a 25 cm de lado , cortante uno de estos y provisto el opuesto de un anillo donde encaja y se sujeta el astil o mango , formando con la pala un ángulo un tanto agudo .";
        $producto4->Precio = 18;
        $producto4->Fotos = "azada.jpg";
        $producto4->save();

        $producto4 = new tienda();
        $producto4->Nombre= "Limonero";
        $producto4->Descripción = "Citrus × limon, el limonero, es un pequeño árbol frutal perenne. Su fruto es el limón ​ o citrón, ​ una fruta comestible de sabor ácido y extremadamente fragante que se usa principalmente en la alimentación. La mayoría de las variedades producen frutos durante todo el año.";
        $producto4->Precio = 13.50;
        $producto4->Fotos = "limonero.jpg";
        $producto4->save();
         
        $producto4 = new tienda();
        $producto4->Nombre= "Rosas";
        $producto4->Descripción = "El género Rosa está compuesto por un conocido grupo de arbustos generalmente espinosos y floridos representantes principales de la familia de las rosáceas. Se denomina rosa a la flor de los miembros de este género y rosal a la planta.";
        $producto4->Precio = 5;
        $producto4->Fotos = "rosas.jpg";
        $producto4->save();
        
        $producto5 = new tienda();
        $producto5->Nombre= "Cortacésped";
        $producto5->Descripción = "Potente Cotacésped 1200W 32cm con nueva empuñadura de diseño ergonómico <br>
        Nueva Cuchilla de alto rendimiento con un 80% más de capacidad de recogida <br>
        Óptimo para mantener extensiones de césped de hasta 300m2, extenSión equivalente a 1,5 pistas de tenis <br>
        Compacto y ligero para un fácil almacenaje <br>
        Bolsa con 35L de capacidad para poder cortar el césped rápidamente sin tener que vaciar continuamente";
        $producto5->Precio = 230;
        $producto5->Fotos = "cortacesped.jpg";
        $producto5->save();
        

        
        $viaje = new viajes();
        $viaje->Nombre='Parque Nacional de los Lagos de Plitvice';
        $viaje->Descripcion='Una de las zonas más bellas de Croacia, llamada «el Parque Nacional de los Lagos de Plitvice«, es una gran opción de visita durante nuestra estancia en Dubrovnik. Esta zona no es muy cercana al lugar de estancia, se encuentra a más de 400 kilómetros de distancia, pero la maravilla que nos espera allí compensará. Esta experiencia contará con 7 días, donde disfrutarás de experiencias únicas de la mano de los mejores guías locales, que te ayudarán en todo momento a conocer este gran destino en todo su esplendor.';
        $viaje->Precio=1300;
        $viaje->foto='plitvice.jpg';
        $viaje->save();
        
        $viaje = new viajes();
        $viaje->Nombre='Parque de las Secuoyas';
        $viaje->Descripcion='El Parque Nacional de las Secuoyas es un gran parque ubicado en Sierra Nevada, en California. Cuenta con aproximadamente 1800km cuadrados. Es un maravilloso lugar repleto de vegetación y de las preciosas secuoyas, que son árboles que alcanzan hasta los 50 metros de alto. En él podréis conocer al mítico General Sherman, que es el árbol mas grande de todo el planeta.
        Nos alojaremos en un hotel de una pequeña población llamada Three Rivers. Está a pocos metros del parque nacional. Dispondréis de 7 días en los cuales podréis disfrutar al máximo de toda la esencia de este gran bosque.
        ';
        $viaje->Precio=1620;
        $viaje->foto='secuoyas.jpg';
        $viaje->save();
        
        $viaje = new viajes();
        $viaje->Nombre='Selva Irati';
        $viaje->Descripcion='Una auténtica maravilla de la naturaleza. Es una de nuestras mejores recomendaciones. Esta selva llamada «Selva Irati» está situada en Navarra. Aquí encontrarás diferentes tipos de arboles, en su mayoría, por hayas, abetos… y también peculiares aves y animales. Sus colores, en los cambios de estación, son impresionantes.
        Nuestros planes en este fantástico viaje son:
        
        2 noches en el hotel Irati (2*). Este hotel está a 63KM de nuestro gran bosque pero el lugar el cual está situado es muy rural y digno de visitar. Este hotel tiene una gran reputación gracias a sus tratados a sus clientes y sus buenos servicios.
        El primer día será el más corto ya que el viaje comienza por la tarde. Os mostraremos el lugar y visitaremos varios monumentos.
        En la segunda visitaremos está fantástica selva. Os mostraremos las mejores vistas, contaremos fabulosas historias, practicaremos distintas actividades para divertirnos…
        Tenemos una opción a parte de una 3ª noche en este lugar. Para ello acamparemos en la selva, ¡es una experiencia única!';
        $viaje->Precio=675;
        $viaje->foto='navarra.jpg';
        $viaje->save();
        
        $viaje = new viajes();
        $viaje->Nombre='Monte Yoshino';
        $viaje->Descripcion='Este apasionante viaje te llevará a descubrir los increíbles y preciosos bosques que esta región asiática tiene para nosotros. Con este viaje podrás descubrir desde los maravillosos cerezos rosas de Japón, hasta descubrir los antiguos templos japoneses escondidos en la inmensidad de sus bosques de bambú. A continuación os daremos los detalles acerca de lo que incluye esta experiencia.

        3 noches de alojamiento en el hotel Hounkan (2*). Este magnífico hotel se encuentra a tan solo 1 km del Monte Yoshino, del cual podréis observar los maravillosos cerezos en flor de este monte, muy visitado tanto por turistas como por los propios japoneses.
        En vuestro primer día, visitareis el famoso Monte Yoshino, donde podréis presenciar los magníficos cerezos y la espléndida vegetación que tiene éste monte. Harcéis un recorrido turístico con un guía personal que os irá explicando toda la historia que ha tenido este monte a lo largo de los siglos. Al final del día, un autobús os recogerá y os llevará de vuelta al hotel. También disponéis de una opción adicional, la cual os permitirá conocer el centro turístico de Yoshino, con una cena reservada en el restaurante Yakitori, donde podréis disfrutar de deliciosas carnes y vegetales al más puro estilo japonés.
        En el segundo día podréis visitar la magnífica ciudad de Osaka, donde iréis a conocer el precioso Castillo de Osaka, el castillo más antiguo de esta ciudad, el cuál cuenta con el estilo tradicional japonés y fue inaugurado en el año 1597.
        Por último en vuestro tercer día disfrutaréis de un destino un poco más moderno y actual, y es nada más y nada menos que del parque de atracciones Universal Studios de Japón. Es un gran parque con miles de atracciones diferentes y cada una con la esencia mágica de Universal Studios.';
        $viaje->Precio=895;
        $viaje->foto='yoshino.jpg';
        $viaje->save();
        
}
}