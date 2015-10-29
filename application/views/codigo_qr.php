<?php

?>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/codigoqr.css"/>
	<script type="text/javascript" src="<?= base_url(); ?>js/qrcode.js"></script>
</head>
<body>
	<div id="contenedor">
	<div id="cabecera1">
		GENERACION DE CODIGO QR
	</div>
	<!--FORMULARIO DE INGRESO DE DATOS PARA GENERAR CODIGO QR-->
	<div id="cod_qr">
		<form id="formulario">
			<input type="text" name="Mascota" placeholder="Nombre de la mascota" required></input><br>
			<input type="text" name="Dueño" placeholder="Nombre del Dueño"></input><br>
			<input type="text" name="Tel" placeholder="Telefono"></input><br>
			<textarea name="output" rows="10" cols="40" placeholder="Info ingresada"></textarea>
			<button type="button" name="Generar" onclick="update_qrcode()">GENERAR CODIGO QR</button> 
		</form>
	</div>
	
	<!--RESULTADO DE LA GENERACION DE CODIGO-->
	<div id="resultado_qr">
		<p id="qr">Resultado!</p>
	</div>
	<!--OPCION DE IMPRIMIR-->
	<div id="imprimir">
		<input type="button" value="Imprimir" onclick="javascript:imprSelec('qr');function imprSelec(qr)
		{var ficha=document.getElementById(qr);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close			();ventimp.print();ventimp.close(); } ;" />
	</div>
	</div>
	
	
	
</body>
</html>