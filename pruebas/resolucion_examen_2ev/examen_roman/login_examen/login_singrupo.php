<?php
    require('./src/init.php');

  //errores para form
    $datos = [];
    $errores = [];

    //si el user no tiene sesión iniciada
    if (!isset($_SESSION['nombre'])) {
        //si el form se ha enviado
        if (isset($_POST['submit'])) {
            //comprobación nombre
            if (isset($_POST['login']) && $_POST['login'] != "" && $_POST['login'] != null) $datos['login'] = clean_input($_POST['login']); //en el caso de que sea correcto se carga
            else $errores['login'] = "<span class='error'>*El campo login no puede estar vacío</span>"; //pasa a errores is hay 

            //comprobación passwd
            if (isset($_POST['password']) && $_POST['password'] != "" && $_POST['password'] != null) $datos['password'] = clean_input($_POST['password']);
            else $errores['password'] = "<span class='error'>*El campo password no puede estar vacío</span>";

            //si NO hay errores, buscamos al user en la BD
            if (count($errores) == 0) { //error de errores vacions 
                $db->ejecuta(
                    "SELECT * FROM usuarios WHERE nombre=?",
                    $datos['login']
                );
                $consulta = $db->obtenElDato();
                //si hay un user que coincide
                if ($consulta != "") {
                    //verificamos la pass, si es correcta metemos valores a $_SESSION
                    if(password_verify($datos['password'], $consulta["secreto"])){
                      //estos campos mejor parecidos a los que tengas dentro de la bbdd, los de $_session los elegimos nosotros
                        $_SESSION['id'] = $consulta['id']; 
                        $_SESSION['nombre'] = $consulta['nombre'];
                        $_SESSION['id_grupo'] = $consulta['id_grupo'];
                      //aqui se deberia poner lo del recuerdame en caso de que se pida 
                        //si viniese de otra página, se le redirige al iniciar sesión
                        header("Location: ".$paginaAnterior);
                        die();
                    }else{
                      $errores['incorrecto'] = "nombre/pass incorrectas"; //fallo en las credenciales
                        // echo "nombre/pass incorrectas";
                    }
                }else{
                  $errores['incorrecto'] = "nombre/pass incorrectas";
                    // echo "nombre/pass incorrectas";
                }
            }
        }
    //si está logueado, redirect al index
    }else{
        header("Location: index.php");
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
<form action="login.php" method="post" class="login">
    <p>
      <label for="login">Email:</label>
      <input type="text" name="login" id="login" value="<?=$datos['login']?>">
    </p>
    <?php if (isset($errores['login'])) {
      echo $errores['login']."<br>"; //error si el campo esta vacio
    }?>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" value="">
    </p>
    <?php if (isset($errores['password'])) {
      echo $errores['password']."<br>"; //error si el campo está vacío
    }?>

    <?php if (isset($errores['incorrecto'])) { ?>
      <?php echo $errores['password']."<br>"; ?>
    <p>
        <div class="error">Error</div>
    </p>
  <?php } ?>
  
    <p class="login-submit">
      <label for="submit">&nbsp;</label>
      <button type="submit" name="submit" class="login-button">Login</button>
    </p>
</form>
</body>
</html>