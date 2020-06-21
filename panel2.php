<?php session_start();?>
<!DOCTYPE html>
<html class="no-js" lang="">
<head>
	<title>Nuevo Realismo</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oswald:wght@469&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 <link rel="short icon" href="Img/Nr.png">
 <link rel="stylesheet" href="CSS/estilos.css">
 <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<header class="container-fluid header1 ">
	<div class="col  ">
<nav class="navbar navbar-expand-lg navbar-light bg-light nav">	
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  	</button>
  <div class="collapse navbar-collapse texto" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link historia" href="historia.html">Historia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link artistas" href="artistas.html">Artistas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link obras" href="obras.html">Obras</a>
      </li>
      <li class="nav-item">
        <a class="nav-link contacto" href="contacto.html">Contacto</a>
      </li>
    </ul>
    <form action="resultados.php" method="post">
    <input class="btn" type="search" name="buscar" placeholder="Buscar..." />
    <input class="btn" type="submit" value="ir" />
    </form>

    <div class="yvestext" style="font-size: 25px;">
<?php

if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){
  
echo $_SESSION['nombre']." ";
echo $_SESSION['apellido'];

  
}else{
  echo "Solo usuarios registrados...";
//  include("form_registro.php");
  include("form_login.php");
}
?>
<a href="salir.php"><button type="button" class="btn btn-primary boton3" data-toggle="modal" data-target="#exampleModalCenter" style="margin:5px;">
 Cerrar sesion
</button></a>
</nav>
</div>
</header>
<div class="container">
 <div data-aos="zoom-in">
  <div class="container-fluid caja1">
	<img class="image-fluid imghome" src="Img/nuereal-png.png" alt="">
  </div>
 </div>
</div>

</div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<div class="container collapse" id="collapseExample">
  <h1 class="reg">Registrate en el sitio</h1>
      <form action="registro.php" method="post" class="row">
        <div class="col lg-6">
          <h5 class="t2">Nombre</h5>
          <label>
            <input type="text" name="nombre" required />
          </label><br/>
        </div>
        <div class="col lg-6">
          <h5 class="t2">Apellido</h5>
          <label>
            <input type="text" name="apellido" required />
          </label><br/>
        </div>
        <div class="col lg-6">
          <h5 class="t2">E-mail</h5>
          <label class="t2">
            <input type="email" name="email" required />
          </label><br/>
        </div>
        <div class="col lg-6">
          <h5 class="t2">Usuario</h5>
          <label>
            <input name="usuario" type="text" maxlength="12" />
          </label><br/>
        </div>
        <div class="col lg-6">
          <h5 class="t2">Contraseña</h5>
          <label>
            <input type="password" name="password" maxlength="12" />
          </label><br/>
        </div>
        <label>
          <input name="newsletter" type="checkbox" value="si" checked="checked" /> Sí, deseo recibir informacion por mail.
        </label><br /> <input type="submit" value="Registrarse" class="boton5" />  
      </form> 
  </div>
</div>

    </form>
  </div>
</section>
<footer class="footer">Copyright 2020 - Agustin Iglesias </footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
</body>
</html>