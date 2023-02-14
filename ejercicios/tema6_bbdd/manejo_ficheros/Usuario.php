<?php
    //poner el namespace
    use Exception;
    use manejo_ficheros\LecturaEscrituraCSV;
use Usuario as GlobalUsuario;

    include('LeerEscribirCSV.php');
    include('Estudios.php');
    include('Idiomas.php');
    include('Sexo.php');

    class Usuario implements LecturaEscrituraCSV{
        public const NOMBRE_NAME = "usuario";
        public const CLAVE_NAME = "pass";
        public const SEXO_NAME = "sexo";
        public const EDAD_NAME = "edad";
        public const IDIOMAS_NAME = "idiomas";
        public const ESTUDIOS_NAME = "estudios";
        public const FECHA_CONTRATACION_NAME = "fecha_contratacion";

        public const EDAD_MINIMA = 18;
        public const EDAD_MAXIMA = 100;

        //Formato para la fecha
        public const FECHA_MINIMA = "22-02-2022";

        public string $usuario;
        public string $clave;
        public Sexo $sexo;
        public int $edad;
        public Estudios $estudios;
        public array $idiomas;
        public string $fechaContratacion;


        public function __construct(string $usuario, string $clave, Sexo $sexo, int $edad, Estudios $estudios, string $fechaContratacion){
            $this->usuario = $usuario;
            $this->setClave($clave);
            $this->sexo = $sexo;
            $this->setEdad($edad);
            $this->estudios = $estudios;
            $this->fechaContratacion = $fechaContratacion;
            $this->idiomas = [];
        }

        public function getUsuario():string{
            return $this->usuario;
        }

        public function setUsuario(string $usuario) :Usuario {
            $this->usuario = $usuario;
            return $this;
        }

        public function getClave():string{
            return $this->clave;
        }

        public function setClave(string $clave):Usuario{
            $this->clave = md5($clave);
            return $this;
        }

        public function getSexo() :Sexo {
            return $this->sexo;
        }

        public function setSexo(Sexo $sexo): Usuario{
            $this->sexo = $sexo;
            return $this;
        }

        public function getEdad() :int{
            return $this->edad;
        }

        public function setEdad(int $edad):Usuario {
            if($edad < Usuario::EDAD_MINIMA || $edad > Usuario::EDAD_MAXIMA){
                throw new Exception("La edad debe estar entre (".self::EDAD_MINIMA." - ". self::EDAD_MAXIMA.")", 1);
            }
            $this->edad = $edad;
            return $this;
        }

        public function getIdiomas() : array {
            return $this->idiomas;
        }
    
        public function addIdioma(Idioma...$idioma) : Usuario {
            $this->idiomas = array_merge($this->idiomas, $idioma);
            return $this;
        }

        public static function fromCSV(string $linea) : Usuario|null {
            $array = explode(";", $linea);
    
            $usuario = null;
    
            try {
                $usuario = new Usuario(
                    $array[0],
                    $array[1],
                    Sexo::from($array[2]),
                    intval($array[3]),
                    Estudios::from($array[4]), 
                    Fecha::fromYYYYMMDD($array[5], "-")
                );
    
                for($i = 7; $i < 7+$array[6]; $i++) {
                    $usuario->addIdioma(Idioma::from($array[$i]));
                }
            }
            catch (Exception $e) {
                
            }
    
            return $usuario;
    
        }
    
        public function toCSV() : string {
            
            return $this->usuario . ";" . 
                $this->clave . ";" . 
                $this->sexo->value . ";" . 
                $this->edad . ";" . 
                $this->estudios->value . ";" . 
                $this->fechaContratacion->toYYYYMMDD() . ";" .
                count($this->idiomas) . 
                array_reduce($this->idiomas, function (string $acumulador, Idioma $estudios) : string {
                    return $acumulador . ";" . $estudios->value;
                }, "");
        }
    
    }
?>