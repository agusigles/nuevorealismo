<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
</head>

<body>

<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];

/*if(isset($_POST['newsletter'])){
	$news="si";
}else{
	$news="no";
}*/
if($_POST['newsletter']==""){
	$news="no";
}else{
	$news="si";
}



include("conexion.php");

//$consulta=mysql_query("INSERT INTO usuarios(nombre,apellido,email,usuario,password) VALUES('$nombre','$apellido','$email','$usuario','$password')",$conexion);

$consulta=mysql_query("INSERT INTO usuarios VALUES('','$nombre','$apellido','$email','$usuario','$password','$news')", $conexion);


header("Location:index.html");

?>	
    

</body>
</html>