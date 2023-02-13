<?php
    class AccesoDatos{
        const HOST = "localhost";
        const USUARIO = ""; //cambiar al nombre de usuario que se necesite
        const PASSWORD = ""; //poner la contraseña de la bbdd a usar
        const DBNAME = "examen"; //nombre de la bbdd a usar

        private PDO $conectar;

        private static AccesoDatos $datos;

        public static function getSingletone(){
            if(!isset($datos)){ //se crea un singletone en el caso de no existir, si existe se llama
                self::$datos = new AccesoDatos();
            }

            return self::$datos;
        }

        private function __construct(){
            try {
                //abrir la conexión con la bbdd
                $this->conectar = new PDO('mysql:host='. self::HOST.';dbname='. self::DBNAME, self::USUARIO, self::PASSWORD);

                //atributos de la conexión

                $this->conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Lanzar excepciones ante fallos
                $this->conectar->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC); //Establecemos que nos retorne arrays asociativos
            } catch (PDOException $e) {
                print "Error: ". $e->getMessage()."\n";
                die();
            }
        }

        //para recuperar todo de un tabla
        public function findAllCosas():array {
            $cosas = [];

            try{
                //Preparación de la consulta
                $consulta = $this->conectar->prepare('SELECT * FROM Ciclistas'); //cambiar el nombre de la tabla

                //Ejecución de la consulta
                if($consulta->execute()){
                    $cosas = $consulta->fetchAll();
                }else{
                    //consulta no hecha
                    print "Consulta no realizada";
                }
            } catch (\Throwable $th) {
                //Excepción al hacer la consulta
            }
            return $cosas;
        }

        //para recuperar en base al id o algún atributo particular
        public function findCosaById(int $id){
            $cosa = [];

            try{
                $especifico = $this->conectar->prepare('SELECT * FROM Ciclistas WHERE id = :id');

                if($especifico->execute(
                    array(':id' => $id)
                )){
                    $cosa = $especifico->fetchAll();
                }else{
                    //No ha funcionado
                    print ("Consulta no válida");
                }
            }catch (\Throwable $th){
                //Excepción al buscar un elemento específico
            }
            return $cosa;
        }

        //para hacer un insert

        public function insertCosa(array $parametros){
            $exito = false;

           try{
             //:nombre equivalente a ?
             $insercion = $this->conectar->prepare('INSERT INTO Ciclistas(nombre, num_trofeos) VALUES (:nombre, :num_trofeos)');

             //$exito se convierte en verdadero en el caso de que se haga bien el insert
             $exito = $insercion->execute(
                 array(
                     ':nombre' => $parametros['nombre'],
                     ':num_trofeos' => $parametros['num_trofeos']
                 )
             );
           }catch (\Throwable $th) {
            //Excepción al hacer el insert
           }
           return $exito;
        }

        public function deleteCosa(int $id){
            $exito = false;

            try {
                $borrado = $this->conectar->prepare('DELETE FROM Ciclistas WHERE id = :id');

                $exito = $borrado ->execute(
                    array(
                        ':id' => $id
                    )
                );
            } catch (\Throwable $th){
                //Excepción al borrar
            }
            return $exito;
        }

    }

    //Para probar que funcionan las cosas
    $a = AccesoDatos::getSingletone();

echo "<pre>";

print_r($a->findAllCosas());

echo "</pre>";

echo "<hr>";

echo "<pre>";

print_r($a->findCosaById(4));

echo "</pre>";

echo "<hr>";
/*
echo "<pre>";
print_r($a->insertCiclista(
    array (
        "nombre" => "Pepe",
        "num_trofeos" => 16
    )
));
echo "</pre>";
*/
echo "<hr>";

echo "<pre>";

print_r($a->findAllCosas());

echo "</pre>";

echo "<hr>";
/*
echo "<pre>";
print_r($a->deleteCosa());
echo "</pre>";
*/

echo "<hr>";

echo "<pre>";

print_r($a->findAllCosas());

echo "</pre>";

echo "<hr>";
?>