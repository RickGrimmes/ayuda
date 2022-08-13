<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../../css/login.css">
    <title>Login App</title>
</head>
<body style="background-image:url(https://www.xtrafondos.com/descargar.php?id=4052&resolucion=3840x2160)">
<?php
  session_start();
  if(isset($_SESSION["user"]))
  {
    echo "<div class='alert alert-warning'>
    <h2 align='center'>Ya existe una sesión activa, usuario: ".$_SESSION["user"]."</h2>";
    echo "<h3 align='center'>
    <a href='scripts/cerrarSesion.php'>[Cerrar sesión]</a>
    </h3>
    </div>";
  }
  else 
  { 

  ?>
<form action="validar.php" method="post">

<h1 class="animate__animated animate__backInLeft">Iniciar Sesion</h1>
 
<p>Correo <input type="text" placeholder="Ingrese su correo" name="user"></p>

<p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="password"></p>
<div class="form-group mx-sm-4 pb-3">
<input type="submit" value="Iniciar sesión">
</div>
<br><br>
<span>¿No tienes cuenta?<a class="olvide" href="formALTAUSUARIO.php">Registrate</a></span>
</form>  
<?php
    }
        ?>
</body>
</html>