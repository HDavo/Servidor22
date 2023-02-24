<?php
  require('./src/init.php');

  //poner esta pagina como privada
  if (!isset($_SESSION['nombre'])) { //si entra no tiene la sesión iniciada
    header('Location: login.php');
    die();
  }
?>

<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
</head>
<body>
<h1>Bienvenido!!</h1>
<?php include('menu.php')?>
<p>Información solo para gente autentificada</p>
</body>
</html>
