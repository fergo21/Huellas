<?php

?>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Registro - Asociacion Protectora de Animales La Rioja - Huellas</title>
	<link href="<?= base_url("css/index.css"); ?>" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="contenedor">
	<div id="cabecera">
		<img id="logo" src="/apa/img/logo2app.png"/>
		<div id="volver"><a href="<?php echo site_url('index.php') ?>"><img id="ic_volver" src="/apa/img/icono_volver.png"/>
		Volver a Inicio</a></div>
	</div>
	<div id="cabecera1">
		Crea tu cuenta de Huellas
	</div>

	<div id="medio">
		
			<div id="info_ingreso1">
				<p>
					Ventajas de registrarse...
				</p>		
			</div>
			<div id="ventana_registro">
				<div id="registro">
					<form action="huellas.php" method="post">
						<label>Nombre</label><br>
						<input type="text" name="Nombre" size="25" placeholder="Nombre" autofocus required/>
						<input type="text" name="apellido" size="25" placeholder="Apellido" required/><br>
						<label>Fecha de Nacimiento</label><br>
						<input type="date" name="fecha_nac" size="30" /><br>
						<label>Domicilio</label><br>
						<input type="text" name="domicilio" size="30" required/><br>
						<label>E-mail</label><br>
						<input type="text" name="email" size="30" required/><br>
						<label>Foto</label><br>
						<input id="subir_foto" type="file" name="foto"/><br>
						<label>Usuario</label><br>
						<input type="text" name="usuario" size="30" required/><br>
						<label>Clave</label><br>
						<input type="password" name=clave" size="30" required/><br>
						<label>Repetir clave</label><br>
						<input type="password" name="clave" size="30" required/><br><br>
						<label>Funcion personal</label>
						<select required>
							<option value="socio">Socio</option>
							<option value="voluntario">Voluntario</option>
							<option value="normal">Normal</option>
						</select>
						<br><br>
						<label>Ingrese el codigo Captcha: </label><br>
						<div id="captcha"><?php echo $image;?></div> <input type="text" name="captcha" size="20" required/>
						<input id="boton_cargar" type="submit" name="login" value="CARGAR"/>				
					</form>
					</div>
			</div>
			

		</div>
		<br>
		<div id="pie">Sistema de Administracion de Sitio Web de Asociacion Protectora de Animales La Rioja</div>
	</div>
</body>

</html>