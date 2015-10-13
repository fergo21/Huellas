<?php

?>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sistema de Gestion Huellas | Asociacion Protectora de Animales La Rioja</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/bandeja_huellas.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/menu/iconos.css" />
</head>
<body>
	<div id="contenedor">
	<div id="cabecera">
		<img id="logo" src="/apa/img/logo2app.png"/> <h1>Sistema de Gestion de Sitio Web APA</h1>
		<div id="volver"><a href="<?php echo base_url() ?>"><img id="ic_volver" src="/apa/img/icono_volver.png"/>
		Volver a Inicio</a></div>
	</div>
	
		<header id="menuadmin">
			<nav>
				<ul>
				<li><a href="<?php echo site_url('index.php/Huellas/Notificaciones') ?>" target="marco" ><span class="icon-notifications"></span>Notificaciones</a></li>
					<li><a><span class="icon-sphere"></span>ABM</a>
						<ul>
							<li><a href="<?php echo site_url('index.php/Huellas/ABManimales') ?>" target="marco" ><span class="icon-evernote"></span>Animales</a></li>
							<li><a href="<?php echo site_url('index.php/Huellas/ABMadoptantes') ?>" target="marco" ><span class="icon-profile"></span>Adoptantes</a></li>
							<li><a href="<?php echo site_url('index.php/Huellas/ABMsocios') ?>" target="marco" ><span class="icon-user-tie"></span>Socios</a></li>
							<li><a href="<?php echo site_url('index.php/Huellas/ABMeventos') ?>" target="marco" ><span class="icon-newspaper"></span>Eventos</a></li>
							<li><a href="<?php echo site_url('index.php/Huellas/ABMusuarios') ?>" target="marco" ><span class="icon-users"></span>Usuarios</a></li>
						</ul>
					</li>
					<li><a href="<?php echo site_url('index.php/Huellas/configuraciones') ?>" target="marco" ><span class="icon-cogs"></span>Configuraciones</a></li>
					<li><a href="<?php echo site_url('index.php/Huellas/codigoqr') ?>" target="marco" ><span class="icon-qrcode"></span>Codigo QR</a></li>
				</ul>
			</nav>
		</header>
		<div id="central">
			<iframe name="marco" width="100%" height="100%"></iframe>
		</div>
	</div>
</body>

</html>