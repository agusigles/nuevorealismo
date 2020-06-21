<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
  <meta charset="utf-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oswald:wght@469&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 <link rel="short icon" href="Img/Nr.png">
 <link rel="stylesheet" href="CSS/estilos.css">
 <script src="js/vendor/modernizr-2.8.3.min.js"></script>
<head>
<meta charset="utf-8" />
<title>Panel</title>
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
</nav>
    </div>
</header>
<h5 style=" font-size: 20px;
	font-family: 'Bebas Neue', cursive;
	color:blue;
	text-align: center;
	margin-top: 25%;
	margin-bottom: 25%;
">
<?php

if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){
	
echo "Hola! ";
echo $_SESSION['nombre']." ";
echo $_SESSION['apellido'];
echo "<a href='salir.php'>Cerrar sesion</a>";
echo "<a href='panel2.php'>Navegar</a>";

	
}else{
	echo "Solo usuarios registrados...";
//	include("form_registro.php");
	include("form_login.php");
}
?>
</h5>
</body>



</html>