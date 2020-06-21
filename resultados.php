<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

  <title>Nuevo Realismo</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oswald:wght@469&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 <link rel="short icon" href="Img/Nr.png">
 <link rel="stylesheet" href="CSS/estilos.css">
 <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <header class="container-fluid header1">
<nav class="navbar navbar-expand-lg navbar-light bg-light nav ">  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse texto" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
      <li class="nav-item active mr-5 mr-5">
        <a class="nav-link logo" href="index.html" style="width: 150px; height: 150px;">
          <img src="Img/nuereal-png.png" class="log">
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link historia" href="historia.html">Historia</a>
      </li>
      <li class="nav-item mr-5 mr-5">
        <a class="nav-link artistas" href="artistas.html">Artistas</a>
      </li>
      <li class="nav-item mr-5 mr-5">
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
  </div>
</nav>
</header>
<section>
<?php

$buscar=$_POST['buscar'];
@$conexion=mysql_connect("localhost","root","") or die ("No se realizó la conexión al servidor");
@$selecciona_db=mysql_select_db ("pd3",$conexion) or die("No se selecciono una base de datos");

//$consulta=mysql_query("SELECT * FROM empleado",$conexion);
$consulta=mysql_query("SELECT * FROM artitas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ", $conexion);
?>
<article>
    
	<?php
while($resultados=mysql_fetch_array($consulta)) {

	?>
<div class="container-fluid">
  <div class="container">
    <p style="font-family: 'Bebas Neue', cursive;
  text-align: center; font-size: 72px; 
  color: #123d56; 
  text-shadow: #c36250 2px 2px 0px, #f39300 4px 4px 0px, #789174 6px 6px 0px ;">
    <?php	
	echo utf8_encode ($resultados['nombre'])." "; 
  echo utf8_encode ($resultados['apellido'])." ";
	?></p>
<div class="row">
  <div class="col lg-6">
  <p class="text4">
  <?php
  echo utf8_encode ($resultados['bio'])." ";
	?>
  </p>
</div>
  <br>
<div class="col lg-6">
  <img src="
        <?php 
        echo $resultados['img']." ";}
         ?>
  " class="yves2">
</div>
</div>
</div>
</div>
<?php


mysql_free_result($consulta);
mysql_close();


?>
</article>
</section>
</body>
</html>