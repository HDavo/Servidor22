<?php 

/*
04. Usuarios deportivos
Para todos los ejercicios se debe describir la estructura de clases y definir sus métodos. Para no implementar la funcionalidad que representan en este punto escribiremos la acción que estamos realizando. Por ejemplo:
    Si estamos implementando el método pagar() en la clase PayPal al llamar a este método de un objeto PayPal se escribirá "Pago con PayPal"
    Si estamos implementando el método disparar en la clase Rifle se escribirá "Disparo con rifle"
Junto con la definición de clases tendrá que haber una o varias páginas de test donde se compruebe que la funcionalidad se corresponde con los requisitos.
Estamos desarrollando una aplicación para organizar partidos de varios deportes.
    NOTA GENERAL: No es necesario crear la clase Partido
    NOTA GENERAL: No es necesario crear la clase Deporte
En nuestra aplicación tenemos usuarios que se deben representar por objetos de la clase Usuario. De estos usuarios se debe almacenar la información de: nombre, apellidos y deporte que practican. De estos usuarios se desea gestionar un nivel de juego, estos niveles irán desde el nivel 0 al nivel 6.
También se desea almacenar el histórico de partidos, todos sus resultados.
Todos los usuarios comenzarán en el nivel 0. Los niveles no se pueden modificar de forma directa. Cada vez que un jugador gane 6 partidos seguidos subirá de nivel, cuando el usuario pierda 6 partidos seguidos bajará.
    NOTA: Es 6 es una constante, no debe haber número mágicos en el código.
Dentro de las operaciones que podremos realizar con estos usuarios tenemos:
    introducirResultado: Aceptará como valores victoria, derrota o empate.
        NOTA: Deberá de tener en cuenta que puede subir/bajar de nivel.
        NOTA2: Cuando esto ocurra se deberá escribir que el usuario ha subido/bajado de nivel.
        NOTA3: Quizá tengas que usar alguna constante.
    imprimirInformación: Escribirá un elemento párrafo con la información del usuario. Para diferenciar este párrafo del resto de elementos escritos, el párrafo tendrá un color azul claro.
        NOTA: Tendrás que usar css
        Dentro del párrafo aparecerá un ul con li y la información de sus resultas previos.
Para ganar dinero tenemos otro tipo de usuario: UsuarioPremium. Para estos usuarios solo hará falta ganar 3 partidos seguidos para subir nivel. Cuando se escriba información sobre este tipo de usuarios deberá aparecer junto al nombre entre paréntesis la palabra Premium (Premium)
También necesitamos tener otro tipo de usuario administrador, este usuario tendrá la posibilidad de crear partidos y además la forma que tiene de subir nivel es similar a los usuarios premium. Cuando se escriba el nombre de estos usuarios deberá aparece (Admin)
    Estos usuarios tendrán la función crearPartido
Junto a la codificación de las clases crea 3 páginas que cree usuarios con distintos roles y vaya introduciendo resultados para verificar que la aplicación se comporta de la forma esperada.
Ejemplo de salida:
Usuario Jorge Creado.
Usuario Pepe Creado.
Usuario Jorge Gana Partido.
Usuario Pepe Pierde Partido.
...
Usuario Jorge Gana Partido.
Usuario Jorge sube a nivel X.
...
Imprimir Jorge
-> HTML con el párrafo azul claro y la información.
 */

 class Usuario {
  
    private $nombre;
    private $apellidos;
    private $deporte;
    private $resultados = [];
    private $nivelJuego;

    private const RACHANEG = -6;
    private const RACHAPOS = 6;
    private const NIVELINICIAL = 0;


    //constructor

    public function __construct($nombre="",$apellidos="",$deporte=""){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->deporte = $deporte;
        $this->nivelJuego = self::NIVELINICIAL;

        echo "Usuario: ".$this->nombre." creado. <br>";
    }

    //setters y getters

    public function setNombre(String $nombre){
        $this->nombre = $nombre;
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function setApellidos(String $apellidos){
        $this->$apellidos = $apellidos;
    }

    public function getApellidos():string{
        return $this->apellidos;
    }

    public function setDeporte(String $deporte){
        $this->deporte = $deporte;
    }

    public function getDeporte():string{
        return $this->deporte;
    }

    public function getResultados(){
        $listado ="";
        foreach ($this->resultados as $key => $value){
            $listado .= "<li>Resultado ".++$key.": ".ucfirst($value)."</li>";
        }

        return "<ul>".$listado."</ul>";
    }

    public function ponerResultado ($resultados){
        if ($resultados == 'victoria' || 'derrota' || 'empate') {
            array_push($this->resultados, $resultados); //se añade el resultado de este partido en la última posición del array
            if($resultados=='victoria'){
                echo "El usuario ".$this->nombre." ha ganado un partido.<br>";
            }elseif ($resultados == 'derrota') {
                echo "El usuario ".$this->nombre." ha perdido un partido.<br>";
            }else{
                echo "El usuario ".$this->nombre." ha empatado un partido.<br>";
            }
        }else{
            echo "Resultado no válido";
        }

        $contAsc=0;
        $contDes=0;
        $nivel=0;
        foreach($this->resultados as $value){
            if ($value=='victoria') { //ante una victoria
                $contAsc++;
                $contDes=0;
                if($contAsc==self::RACHAPOS){
                    $contAsc=0;
                    $this->nivelJuego=++$nivel;
                }
            }elseif($value=='derrota'){ //ante una derrota
                $contDes++;
                $contAsc=0;
                if ($contDes==self::RACHANEG) {
                    $contDes=0;
                    $this->nivelJuego=--$nivel;
                }
            }else{ //ante un empate
                $contAsc=0;
                $contDes=0;
            }
        }
    }

    public function imprimir(){
        echo "<p>-->Imprimir ".$this->nombre.":<br>Nombre: ".$this->nombre."<br/>Apellidos: ".$this->apellidos."<br/>Deporte: ".$this->deporte."<br/>Nivel Juego: ".$this->nivelJuego."<br/>Historico de partidos: ".$this->getResultados()."</p>";
    }
 }  

?>