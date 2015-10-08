<?php

?>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Asociacion Protectora de Animales La Rioja - Huellas</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/styhuellas.css" />
</head>
<body>
	<div id="contenedor">
	<div id="fondo">
		<img id="logo1" src="/apa/img/logo1app.png">
	</div>
		
	<div id="cabecera">
		<img id="logo2" src="/apa/img/logo2app.png"/>
	</div>
	
	<div id="central">
		<div id="ventana_login">
				<div class="titulo"><img src="/apa/img/icono_ventana.jpg"/> Login</div>
				<div id="llave"><img src="/apa/img/llave.png"/></div>
				<div id="cuerpo_registro1">
				<form action="huellas.php" method="post">
				<label>Usuario</label>
				<input type="text" name="usuario" size="30"/><br>
				<label>Clave</label>
				<input type="password" name="clave" size="30"/><br>
				<br>
				<input type="submit" name="login" value="Verificar"/>				
				</form>
				</div>
			</div>
		</div>
		<br>
		<div id="pie">Sistema de Administracion de Sitio Web de Asociacion Protectora de Animales La Rioja</div>
	</div>
</body>

</html>