<?php
	require_once("sesion.class.php");

	$sesion = new sesion();
	
	if( isset($_POST["iniciar"]) )
	{
		
		$usuario = $_POST["usuario"];
		$password = $_POST["contrasenia"];
		
		if(validarUsuario($usuario,$password) == true)
		{			
			$sesion->set("usuario",$usuario);
			
			header("location: principal.php");
		}
		else 
		{
			echo "Verifica tu nombre de usuario y contrase�a";
		}
	}
	
	function validarUsuario($usuario, $password)
	{
		$conexion = new mysqli("localhost","root","","bdtallerrodmar");
		$consulta = "select contrasenia from usuario where nick = '$usuario';";
		
		$result = $conexion->query($consulta);
		
		if($result->num_rows > 0)
		{
			$fila = $result->fetch_assoc();
			if( strcmp($password,$fila["contrasenia"]) == 0 )
				return true;						
			else					
				return false;
		}
		else
				return false;
	}

?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="componentes/mdl/material.min.css">
<script src="componentes/mdl/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script type="text/javascript" src="componentes/mdl/jquery.min.js"></script>
</head>

<body>

<div align="center">
<div><p></div>
<!-- Square card -->
<style>
.demo-card-square.mdl-card {
  width: 320px;
  height: 320px;
}
</style>

<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
  </div>
  <div class="mdl-card__supporting-text">
   <div>
   <form name="inises" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   
   <!-- Textfield with Floating Label -->
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="user" name="usuario">
    <label class="mdl-textfield__label" for="user">USUARIO...</label>
  </div>

   <!-- Textfield with Floating Label -->
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="password" id="pass" name="contrasenia">
    <label class="mdl-textfield__label" for="pass">CONTRASEÑA...</label>
  </div>

<!-- Flat button with ripple -->
<button class="mdl-button mdl-js-button mdl-js-ripple-effect" input type="submit" name="iniciar" value="Iniciar Sesion"/>
  Iniciar sesion
</button>

   </form>
   
   </div>
  </div>
</div>
</div>
</body>
</html>