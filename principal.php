<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	
	if( $usuario == false )
	{	
		header("Location: login.php");		
	}
	else 
	{
	?>
	<HTML><head>
	<title>Administracion</title>
    <link rel="stylesheet" href="componentes/mdl/material.min.css">
<script src="componentes/mdl/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script type="text/javascript" src="componentes/mdl/jquery.min.js"></script>
<script type="text/javascript" src="componentes/mdl/jquery.min.js"></script>
<script type="text/javascript" src="secciones/adm/funcionesadmin.js"></script>

	</head>
	<body>
    
    <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Sistema de administracion de taller RodMar</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
      <b>Bienvenido:  <?php echo $sesion->get("usuario"); ?> </b> <a class="mdl-navigation__link" href="cerrarsesion.php"> Cerrar Sesion </a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Menu</span>
    <nav class="mdl-navigation">
     <a class="mdl-navigation__link" <a id="div-btn1" style="cursor:pointer;">Ventas</a>
      <a class="mdl-navigation__link" <a id="div-btn2" style="cursor:pointer;">Clientes</a>
      <a class="mdl-navigation__link" <a id="div-btn3" style="cursor:pointer;">Taller</a>
      <a class="mdl-navigation__link" <a id="div-btn4" style="cursor:pointer;">Configuracion</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here -->
    <div id="div-results"></div>
    </div>
  </main>
</div>

    
    </body>
	</HTML>
	
	<?php 
	}	
?>