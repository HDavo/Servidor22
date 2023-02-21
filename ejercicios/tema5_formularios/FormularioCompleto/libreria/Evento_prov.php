        public const NOMBRE = 'nombre';
    public const EMAIL = 'email';
    public const NOMBRE_GRUPO = 'nombre_grupo';
    public const PRECIO_ENTRADA = 'precio';
    public const FECHA = 'fecha';
    public const AFORO = 'aforo';
    public const SEXO = 'sexo';
    public const IDIOMA = 'idioma';
    
    private string $nombre;
    private string $email;
    private string $nombreGrupo;
    private string $precioEntrada;
    private string $fecha;
    private string $aforo;
    private string $opciones;
    private string $idioma;

    private function __construct(string $nombre,string $email,string $nombreGrupo,string $precioEntrada,string $fecha,string $aforo,string $opciones,string $idioma) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->nombreGrupo = $nombreGrupo;
        $this->precioEntrada = $precioEntrada;
        $this->fecha = $fecha;
        $this->aforo = $aforo;
        $this->opciones = $opciones;
        $this->idioma = $idioma;
    }

    public static function fromForm(Formulario $form, array $peticion) : Evento|null {
        $evento = null;
        if ($form->validarForm()) {
            try {
                $evento = new Evento (
                    $peticion[self::NOMBRE],
                    $peticion[self::EMAIL],
                    $peticion[self::NOMBRE_GRUPO],
                    $peticion[self::PRECIO_ENTRADA],
                    $peticion[self::FECHA],
                    $peticion[self::AFORO],
                    $peticion[self::SEXO],
                    $peticion[self::IDIOMA]
                );
            } catch (\Exception $e) {
                $evento = null;
            }

        }
        return $evento;

    }

    public function toCSV(){
        return $this->nombre .";" . $this->email . ";"  .  $this->nombreGrupo . ";" . $this->precioEntrada . ";" . $this->fecha . ";" . $this->aforo . ";" . $this->opciones . ";" . $this->idioma;
    }

    public static function fromCSV(string $linea) : Evento|null {
        $array = explode(";", $linea);

        try {
            $evento = new Evento ($array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6],$array[7]);
        } catch (\Throwable $th) {
            $evento = null;
        }
        
        return $evento;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPrecioEntrada(){
        return $this->precioEntrada;
    }

    public function getNombreGrupo(){
        return $this->nombreGrupo;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getAforo(){
        return $this->aforo;
    }

    public function getOpciones(){
        return $this->opciones;
    }

    public function getIdioma()
    {
        return $this->idioma;
    }
}