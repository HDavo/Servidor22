

<div class="menu">
  <a href="index.php">Inicio</a>

  <?php if(isset($_SESSION['nombre'])) { ?>
    <?php if($_SESSION['nb_grupo'] == DWESBaseDatos::ADMIN){ ?>
    <a href="admin.php">Admin</a>
    <?php } ?>
    <a href="privado.php">Privado</a>
  <?php } ?>
  


  <a href="login.php">Login</a>
  <a href="logout.php">Logout</a>
  -
  Bienvenido: <?= $userName ?> - Grupo: <?= $userGroup ?>
</div>
