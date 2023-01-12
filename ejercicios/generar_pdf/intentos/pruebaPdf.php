<?php
	
ob_end_clean();

$nombre=$_GET['nombre'];
$empresa=$_GET['empresa'];
$represante=$_GET['representante'];
$fecha = $_GET['fecha'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Intento de PDF</title>
        <link href="./estilos_pdf.css" rel="stylesheet">
    </head>
    <body>
        <div id="general">
            <div id="formulario">
                <form action="generadorPdf.php" method="get">
                    <h1>Genera tu carta de recomendación</h1>
                    <br>
                    <p>Nombre:</p>
                    <br>
                    <input type="text" name="nombre" class="campos" placeholder="Pepe Pérez Palencia"required >
                    <br>
                    <p>Empresa:</p>
                    <br>
                    <input type="text" name="empresa" class="campos" placeholder="Pepelandia S.A" required>
                    <br>
                    <p>Representante:</p>
                    <br>
                    <input type="text" name="representante" class="campos" placeholder="Manolo Martín Martínez" required>
                    <br>
                    <p>Fecha:</p>
                    <br>
                    <input type="date" name="fecha" class="campos" required>
                    <br>
                    <br>
                    <input id="boton" type="submit" value="¡GENERAR PDF!">
                </form>
            </div>
        </div>
    </body>
</html>