PDO
=========================================
testConnectionPDO.php
<?php

try {
    $mbd = new PDO('mysql:host=localhost;dbname=mibasededatos', "alumno", "1234");

    // Utilizar la conexión aquí
    $resultado = $mbd->query('SELECT * FROM Ciclistas');
  echo '<table>';
    foreach ($resultado as $fila){
      echo '<tr>';
      foreach ($fila as $clave => $valor){
        echo '<td>';
        echo $clave . " " . $valor . "\n";
        echo '</td>';
      }
      echo "--------------\n";
      echo '</tr>';
    }
    echo '</table>';

    // Ya se ha terminado; se cierra
    $resultado = null;
    $mbd = null;

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();
}

?>