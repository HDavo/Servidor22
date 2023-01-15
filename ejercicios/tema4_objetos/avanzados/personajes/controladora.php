<?php

use Clases\Edificio;
use Clases\Humano;
use Clases\MagoBlanco;
use Clases\MagoOscuro;
use Clases\Objeto;

    spl_autoload_register( function ($class) {
        $class = str_replace('\\', '/',$class);
        // echo "$class<br>";
        require("./$class.php");
        //al hacerlo de esta manera(con la estructura de carpetas usada, no es necesario poner también el nombre de la carpeta)
    });

    // echo "estoy dentro";
    echo "Acciones del personaje Humano<br>";
    $pepe = new Humano();
    $pepe->atacar();
    $pepe->defender();
    $pepe->setPosicionX(5);
    $pepe->setPosicionY(5);
    $pepe->setPosicionZ(5);

    print $pepe->getPosicion();

    echo "<br>Acciones del personaje Mago Blanco<br>";

    $manolo = new MagoBlanco();
    
    // $manolo = new MagoBlanco(3,4,2); //no se pueden mandar los valores de forma directa al no haber constructores para esos atributos, deben usarse los setters.
    $manolo->atacar();
    $manolo->defender();
    $manolo->setPosicionX(24);
    $manolo->setPosicionY(24);
    $manolo->setPosicionZ(24);
    print $manolo->getPosicion();

    echo "<br>Accciones del personaje Mago Oscuro<br>";

    $paco = new MagoOscuro();
    $paco->atacar();
    $paco->defender();
    $paco->setPosicionX(45);
    $paco->setPosicionY(45);
    $paco->setPosicionZ(45);
    print $paco->getPosicion();

    echo "<br>Edificio: <br>";
    $edificioCentral = new Edificio();
    $edificioCentral->setAltura(35.5);
    print $edificioCentral->getAltura()."<br>";
    $edificioCentral->setDescripcion("Edificio de control del inventario");
    print $edificioCentral->getDescripcion()."<br>";
    $edificioCentral->setPosicionX(0);
    $edificioCentral->setPosicionY(0);
    $edificioCentral->setPosicionZ(0);
    print $edificioCentral->getPosicion();


    echo "<br>Objeto<br>";
    $cosa = new Objeto();
    $cosa->setPeso(84.6);
    print $cosa->getPeso()."<br>";
    $cosa->setDescripcion("Objeto para curar perros<br>");
    print $cosa->getDescripcion();
    $cosa->setPosicionX(89);
    $cosa->setPosicionY(85);
    $cosa->setPosicionZ(100);
    print $cosa->getPosicion();



?>

