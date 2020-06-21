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
<button type="button" class="btn btn-primary boton3" data-toggle="modal" data-target="#exampleModalCenter" style="margin:5px;">
  Iniciar Sesion
</button>

</nav>
    </div>
</header>

 </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLongTitle">Inicia Sesion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="font-size: 40px;
  font-family: 'Bebas Neue', cursive;
  text-align: center;">
      <h2 class="artistash1">Logueate</h2>
  <form action="login.php" method="post">
    <p class="t2">Usuario</p>
      <label class="reg2"><input name="usuario" type="text" maxlength="12" />
        </label><br />
        <label>Contraseña
          <input type="password" name="password" maxlength="12" />
        </label><br />
          <input type="submit" value="Login" style="color:white !important;
  background-color:#0e5b87  !important;
  border: none;
  border-radius: 15px;
  padding-right: 1.5%;
  padding-left: 1.5%" />  
    </form>
    <a href="index.html">Registrate</a> si no sos usuario.
    
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<h1 style="font-size: 50px;
  font-family: 'Bebas Neue', cursive;
  color: #0e5b87;
  text-shadow: black 2px 2px 0px; 
  margin-top: 2%;">¡Usuario No Encontrado!
</h1>
  
  <h1>Registrate en el sitio</h1>
  <div class="container">
    <form action="registro.php" method="post" >
        <p style="font-size: 40px;
  font-family: 'Bebas Neue', cursive;
  text-align: center;">Nombre</p>
        <label style="display: flex; justify-content: center;">
          <input type="text" name="nombre" required />
        </label><br />
        <p style="font-size: 40px;
  font-family: 'Bebas Neue', cursive;
  text-align: center;">Apellido</p>
        <label style="display: flex; justify-content: center;">
          <input type="text" name="apellido" required />
        </label><br />
        <p style="font-size: 40px;
  font-family: 'Bebas Neue', cursive;
  text-align: center;">E-mail</p>
        <label style="display: flex; justify-content: center;">
          <input  type="email" name="email"  required />
        </label><br />
         <p style="font-size: 40px;
  font-family: 'Bebas Neue', cursive;
  text-align: center;">Usuario</p>
        <label style="display: flex; justify-content: center;">
          <input name="usuario" type="text" maxlength="12" />
        </label><br />
         <p style="font-size: 40px;
  font-family: 'Bebas Neue', cursive;
  text-align: center;">Contraseña</p>
        <label style="display: flex; justify-content: center;">
          <input type="password" name="password" maxlength="12" />
        </label><br />
          <label style="display: flex; justify-content: center;">
            <input name="newsletter" type="checkbox" value="si" checked="checked" /> Sí, deseo recibir informacion por mail.
            </label><br />
            <input type="submit" value="Registrarse" class="boton5" />  
      </form>
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