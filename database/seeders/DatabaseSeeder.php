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
        
        $producto5 = new tienda();
        $producto5->Nombre= "Pala";
        $producto5->Descripción = "Una pala es una herramienta de mano utilizada para excavar o mover materiales con cohesión relativamente pequeña.";
        $producto5->Precio = 14.99;
        $producto5->Fotos = "pala.jpg";
        $producto5->save();
        
        $producto5 = new tienda();
        $producto5->Nombre= "Pala";
        $producto5->Descripción = "Una pala es una herramienta de mano utilizada para excavar o mover materiales con cohesión relativamente pequeña.";
        $producto5->Precio = 14.99;
        $producto5->Fotos = "pala.jpg";
        $producto5->save();
        
        $producto5 = new tienda();
        $producto5->Nombre= "Pala";
        $producto5->Descripción = "Una pala es una herramienta de mano utilizada para excavar o mover materiales con cohesión relativamente pequeña.";
        $producto5->Precio = 14.99;
        $producto5->Fotos = "pala.jpg";
        $producto5->save();
        
        $producto5 = new tienda();
        $producto5->Nombre= "Pala";
        $producto5->Descripción = "Una pala es una herramienta de mano utilizada para excavar o mover materiales con cohesión relativamente pequeña.";
        $producto5->Precio = 14.99;
        $producto5->Fotos = "pala.jpg";
        $producto5->save();
        
        $producto5 = new tienda();
        $producto5->Nombre= "Pala";
        $producto5->Descripción = "Una pala es una herramienta de mano utilizada para excavar o mover materiales con cohesión relativamente pequeña.";
        $producto5->Precio = 14.99;
        $producto5->Fotos = "pala.jpg";
        $producto5->save();
        
        $producto5 = new tienda();
        $producto5->Nombre= "Pala";
        $producto5->Descripción = "Una pala es una herramienta de mano utilizada para excavar o mover materiales con cohesión relativamente pequeña.";
        $producto5->Precio = 14.99;
        $producto5->Fotos = "pala.jpg";
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
        $viaje->Precio=1600;
        $viaje->foto='secuoyas.jpg';
        $viaje->save();
        
        $viaje = new viajes();
        $viaje->Nombre='Parque Nacional de los Lagos de Plitvice';
        $viaje->Descripcion='';
        $viaje->Precio=1300;
        $viaje->foto='plitvice.jpg';
        $viaje->save();
        
        $viaje = new viajes();
        $viaje->Nombre='Parque Nacional de los Lagos de Plitvice';
        $viaje->Descripcion='';
        $viaje->Precio=1300;
        $viaje->foto='plitvice.jpg';
        $viaje->save();
        
        $viaje = new viajes();
        $viaje->Nombre='Parque Nacional de los Lagos de Plitvice';
        $viaje->Descripcion='';
        $viaje->Precio=1300;
        $viaje->foto='plitvice.jpg';
        $viaje->save();
    }
}
