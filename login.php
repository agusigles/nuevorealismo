<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
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
</head>

<body>
	<div style="font-size: 40px;
	font-family: 'Bebas Neue', cursive;
	text-align: center;">
<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];

include("conexion.php");

$consulta=mysql_query("SELECT nombre, apellido, email FROM usuarios WHERE usuario='$usuario' AND password='$password'",$conexion);

$resultado=mysql_num_rows($consulta);

if($resultado!=0){
	$respuesta=mysql_fetch_array($consulta);
	
	$_SESSION['nombre']=$respuesta['nombre'];
	$_SESSION['apellido']=$respuesta['apellido'];
		
		echo "Hola ".$_SESSION['nombre']." ".$_SESSION['apellido']."<br />";
		echo "Acceso al panel de usuarios.<br/>";
		echo "<a href='panel2.php'>Inicio</a>";	

}else{
header("Location: panel3.php");
                    }








?>
</div>
</body>
</html>