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
		<div id="volver"><a href="<?php echo site_url('index.php/Huellas/validar') ?>"><span class="icon-circle-left"></span>Volver a Inicio</a></div>
	</div>
		<!--***	MENU DEL ADMINISTRADOR DEL SISTEMA ***-->
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
				<?php if(isset($this->session->userdata['idPersona'])){	?> 
					<?php foreach($informacion->result() as $dato) {?>
					<?php if($dato->Nombre != ''){ ?>
						<li><a><span class="icon-users"></span><?php echo $dato->Nombre ?></a>
							<ul>
								<li><a href="<?php echo site_url('index.php/Huellas/cerrar_sesion') ?>" title="cerrarsesion">Cerrar sesion</a></li> 
							</ul>
						</li>
						<?php }	?>
					<?php }?>				
				<?php }?>
				</ul>
			</nav>
		</header>
		<!--*** CONTENIDO QUE MUESTRA CADA OPCION DEL MENU ***-->
		<div id="central">
		
			<iframe src="<?php echo site_url('index.php/Huellas/Notificaciones') ?>" name="marco" width="100%" height="100%"></iframe>
		</div>
	</div>
</body>

</html>