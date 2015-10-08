<?php

?>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Genera tu codigo QR - Asociacion Protectora de Animales La Rioja - Huellas</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/codigoqr.css" />
	<script type="text/javascript" src="<?= base_url(); ?>js/qrcode.js"></script>
</head>
<body>
	<div id="contenedor">
	<div id="cabecera">
		<img id="logo" src="/apa/img/logo2app.png"/>
		<div id="volver"><a href="<?php echo base_url() ?>"><img id="ic_volver" src="/apa/img/icono_volver.png"/>
		Volver a Inicio</a></div>
	</div>
	<div id="cabecera1">
		GENERA TU CODIGO QR
	</div>
	<div id="cod_qr">
		<form id="formulario">
			<input type="text" name="Mascota" placeholder="Nombre de la mascota" required></input><br>
			<input type="text" name="Dueño" placeholder="Nombre del Dueño"></input><br>
			<input type="text" name="Tel" placeholder="Telefono"></input><br>
			<textarea name="output" rows="10" cols="40" placeholder="Info ingresada"></textarea>
			<button type="button" name="Generar" onclick="update_qrcode()">GENERAR CODIGO QR</button> 
		</form>
	</div>

	<div id="resultado_qr">
	
	<p id="qr">Resultado!</p>
	
	</div>
	<div id="imprimir">
		<input type="button" value="Imprimir" onclick="javascript:imprSelec('qr');function imprSelec(qr)
		{var ficha=document.getElementById(qr);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close			();ventimp.print();ventimp.close(); } ;" />
	</div>
	</div>
	
	
	
</body>
</html>