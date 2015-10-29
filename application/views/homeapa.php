<?php

?>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Asociacion Protectora de Animales La Rioja - Huellas</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>css/index.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>menu_principal/iconos_menu.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>css/responsive.css"/>
	
	<!-- Para el slider -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	   <!-- Incluimos la libreria jQuery -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <!-- Incluimos el plugin -->
        <script src="<?= base_url()?>js/bjqs.min.js"></script>
        <script src="<?= base_url()?>js/script.js"></script>
	<!--Fin script slider-->
	<!--Efecto deslizar-->
		<script src="<?= base_url()?>js/deslizar.js"></script>
</head>
<body>
	<!-- MENU PRINCIPAL	-->
		<div id="menuizq">
			<ul class="top-nav">
				<li><a href="#inicio"><span class="icon-home"></span>Inicio</a></li>
				<li><a href="#nosotros"><span class="icon-user"></span>Nosotros</a></li>
				<li><a href="#eventos"><span class="icon-calendar"></span>Eventos</a></li>
				<li><a href="#animales"><span class="icon-an"></span>Animales</a></li>
				<li><a href="#veterinarias"><span class="icon-aid-kit"></span>Veterinarias</a></li>
				<li><a href="#progreso"><span class="icon-stats-dots"></span>Progreso</a></li>
				<li><a href="#consejos"><span class="icon-light-bulb"></span>Consejos</a></li>
				<?php if(isset($this->session->userdata['idPersona'])){	?> 
				<?php foreach($informacion->result() as $dato) {?>
				<?php if($dato->Nombre != ''){ ?>
				<li><a href="#login"><span class="icon-logo1app"></span><?php echo $dato->Nombre ?></a></li>
				<?php }	?>
				<?php }?>				
				<?php } else { ?>
				<li><a href="#login"><span class="icon-logo1app"></span>Login</a></li>
				<?php }?>
				<li><a href="#contacto"><span class="icon-envelop"></span>Contacto</a></li>
			</ul>
		</div>
	<div id="contenedor">
	<header id="cabecera_principal"><img src="/apa/img/APA_principal.png"/><h1>Asociación Protectora de Animales - La Rioja</h1> 
		<!--<p>Seguinos!</p><a href="https://www.facebook.com/protectoralarioja"><img id="folow" src="/apa/img/facebook_Logo.png"/></a><a href="https://twitter.com/protectoralr"><img id="folow" src="/apa/img/twitter-icon.png"/></a>-->
	</header>

		<div id="central">
		
		
<!-- *	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	INICIO  *	*	*	*	*	*	*	*	*	*	*	*	*	*	*	 -->	
			<div id="sector_inicio"><a name="inicio"></a>
					<div id="slider">
						<ul class="bjqs">
							<li><img src="/apa/img/imagen1.jpg" title="Vacuná, esterilizá y adoptá"/></li>
							<li><img src="/apa/img/imagen2.jpg" title="No los abandones"/></li>
							<li><img src="/apa/img/imagen3.jpg" title="Cuidalos y tratalos con amor"/></li>
						</ul>
						
					</div>
								
			</div>
				
<!-- *	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	NOSOTROS  *	*	*	*	*	*	*	*	*	*	*	*	*	*	*	 -->					
			<div id="sector"><a name="nosotros"><h1>NOSOTROS</h1></a>
				<div id="titulo_nosotros"><div>Nuestros valores fundamentales</div> 
				<p>CONFIANZA - bla bla bla bla<br> SOLIDARIDAD - bla bla bla bla<br> PARTICIPACION - bla bla bla</p></div>
				<div id="info_nosotros"><img src="/apa/img/APA1.png"/><p>APA fue fundada en (año) busca la constante participación de la sociedad en la ayuda para protección de los animales. </p></div>
				<div id="info_nosotros1"><div>Quienes somos</div><p>Formamos parte de APA - Grupo de personas bla bla bla</p>
				<a href="<?php echo site_url('index.php/Huellas/muestranosotros') ?>"><button type="submit" name="ver_mas">VER MAS</button></a>
				</div>
			</div>
		
<!-- *	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	EVENTOS *	*	*	*	*	*	*	*	*	*	*	*	*	*	*	 -->		
			<div id="sector"><a name="eventos"><h1>EVENTOS</h1></a>
				<div id="titulo_contacto"><p>PROXIMOS EVENTOS EN APA</p></div>
			<h1>Eventos Publicados</h1>
			
				<?php foreach($eventos->result() as $datos){
					echo'<h1>'.$datos->Titulo.'</h1>';					
				}?>
			</div>
			
<!-- *	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	ANIMALES *	*	*	*	*	*	*	*	*	*	*	*	*	*	*	 -->		
			<div id="sector"><a name="animales"><h1>ANIMALES</h1></a>
					<div id="enc_menu_a">
						<a href="<?php echo site_url('index.php/Huellas/muestraperros') ?>" target="marco"><div id="menu1"><h2>PERROS</h2></div></a>
						<a href="<?php echo site_url('index.php/Huellas/muestragatos') ?>" target="marco"><div id="menu2"><h2>GATOS</h2></div></a>
						<a href="<?php echo site_url('index.php/Huellas/muestraotrosanimales') ?>" target="marco"><div id="menu3"><h2>OTROS ANIMALES</h2></div></a>
						<a href="<?php echo site_url('index.php/Huellas/muestrarefugio') ?>" target="marco"><div id="menu4"><h2>REFUGIO</h2></div></a>
					</div>
					
				<div id="cont_ifr">
					<iframe id="marco" src="<?php echo site_url('index.php/Huellas/muestraperros') ?>" name="marco" >	</iframe>
				</div>
				
			</div>
<!-- *	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*VETERINARIAS*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	 -->		
			<div id="sector"><a name="veterinarias"><h1>VETERINARIAS</h1></a>
				
			<div id=titulo_contacto><p>BUSCA LA VETERINARIA MAS CERCANA</p></div>
				<div id="busqueda_vet">
					<form action="http://localhost/apa/#veterinarias" method="post">
						<label>Selecciona tu Barrio</label><br>
						<select name="mapa">
							<option value="cero" selected>Elegi tu zona</option>
							<option value="zonan">Zona Norte</option>
							<option value="zonas">Zona Sur</option>
							<option value="zonac">Zona Centro</option>
							<option value="zonae">Zona Este</option>
							<option value="zonao">Zona Oeste</option>
						</select>
						<a href="#"><button type="submit" name="buscar">BUSCAR</button></a>				
					</form>
					</div>
				<div id="cont_ifr_vet">
				<?php
				if(isset($_POST['mapa'])){
					$mapa = $_POST['mapa'];
					switch($mapa){
					case "zonan":
					?> <iframe src="https://www.google.com/maps/d/embed?mid=zSXbgoM-Gmak.kg9J2-yfEiuU" width="640" height="480"></iframe> <?php
					break;
					case "zonas":
					?>	<iframe src="https://www.google.com/maps/d/embed?mid=zSXbgoM-Gmak.kIgpxHtKK9pI" width="640" height="480"></iframe> <?php
					break;
					case "zonac":
					?>	<iframe src="https://mapsengine.google.com/map/embed?mid=zSXbgoM-Gmak.kFsqN-ZQF4xE" width="640" height="480"></iframe> <?php
					break;
					case "zonae":
					?>	<iframe src="https://www.google.com/maps/d/embed?mid=zSXbgoM-Gmak.kIgpxHtKK9pI" width="640" height="480"></iframe> <?php
					break;
					case "zonao":
					?> <iframe src="https://www.google.com/maps/d/embed?mid=zSXbgoM-Gmak.kOJKGwmulzVs" width="640" height="480"></iframe> <?php
					break;
					default:
					?> <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d66118.50285804726!2d-66.88374297175429!3d-29.430966389635685!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1442516954884" width="800" height="600" frameborder="0" style="border:0" allowfullscreen ></iframe> <?php
					}
				} else {
					?> <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d66118.50285804726!2d-66.88374297175429!3d-29.430966389635685!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1442516954884" width="800" height="600" frameborder="0" style="border:0" allowfullscreen ></iframe> <?php
				}
					
				?>
			
				</div>
			</div>
<!-- *	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	PROGRESO  *	*	*	*	*	*	*	*	*	*	*	*	*	*	*	 -->		
			<div id="sector"><a name="progreso"><h1>PROGRESO</h1></a>
			<div id="busqueda_vet">
					<form action="http://localhost/apa/#veterinarias" method="post">
						<label>Selecciona un animal</label><br>
						<select name="mapa">
							<option value="cero" selected>Elige un animal</option>
							<option value="zonan">cargar por php</option>
							<option value="zonan">cargar por php</option>
							<option value="zonan">cargar por php</option>
							<option value="zonan">cargar por php</option>
						</select>
						<a href="#"><button type="submit" name="buscar">BUSCAR</button></a>				
					</form>
					</div>
				<a href="<?php echo site_url('index.php/Huellas/codigoqr') ?>"><button type="submit" name="ver_mas">VER MAS</button></a>
			</div>
<!-- *	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	CONSEJOS  *	*	*	*	*	*	*	*	*	*	*	*	*	*	*	 -->		
			<div id="sector"><a name="consejos"><h1>CONSEJOS</h1></a>
				Contenido de eventos
			</div>
<!-- *	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	LOGIN  *	*	*	*	*	*	*	*	*	*	*	*	*	*	*	 -->
			<div id="sector"><a name="login"><h1>LOGIN</h1></a>
			
			
			
			<?php if(isset($this->session->userdata['idPersona'])){	?> 
				<div id="perfil" style="border:1px solid black; position:absolute">
							<a name="bandeja" href="<?php echo site_url('index.php/Huellas/validar_admin') ?>">Bandeja Huellas</a>
							<a href="#" title="perfil">Ir a perfil</a>
							<button><a href="<?php echo site_url('index.php/Huellas/cerrar_sesion') ?>" title="cerrarsesion">Cerrar sesion</a></button> 
							
				</div>				
			<?php } else {?>
					<div id="logo_login">
					<img src="/apa/img/logo1app.png"/>
					</div>
				<div id="info_ingreso">
					<p>Si querés ser parte de ésta comunidad y colaborar con lo que puedas, podés registrarte a traves de <img src="/apa/img/facebook_Logo.png" width="50px" height="50px" /> o <img src="/apa/img/google+nuevo.png" width="52px" height="52px" /> o simplemente registrate en nuestro sistema</p>
					<a href="<?php echo site_url('index.php/Huellas/muestraregistro') ?>"><button type="submit" name="btn_registrar">REGISTRATE</button></a>
				</div>
				<div id="ventana_ingreso">
					<div id="cuerpo_registro1">
						<?= form_open('index.php/Huellas/validar') ?>
							<table>
								<tr>
									<td>
										<label>Entra a Huellas</label>
									</td>
								</tr>
								<tr>
									<td>
										<input class="user" type="text" name="usuario" size="30" placeholder="Usuario" required/><br>
										<input class="llave" type="password" name="clave" size="30" placeholder="Clave" required/><br>
									</td>
								</tr>
								<tr>
									<td>
										<div id="ckbox">
											<input id="check" type="checkbox" name="checkbox"/>
											<label id="rec_clave">Recordar clave</label>
										</div>	
									</td>
								</tr>
								<tr>
									<td>
										<input id="boton_ingresar" type="submit" name="login" value="INGRESAR"/>
									</td>
								</tr>
								<tr>
									<td>
										<a href="#recuperar">¿Olvidaste la clave?</a>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
				<?php } ?>
			</div>
			<!-- CONTACTO -->	
			<div id="sector"><a name="contacto"><h1>CONTACTO</h1></a>
			<div id=titulo_contacto><p>ESCRIBINOS SI TENES ALGUNA CONSULTA O RECOMENDACION</p></div>
			<div id="info_contacto"><p>Si queres saber algo mas de la organizacion o tenes alguna recomendacion, inquietud o hacer una consulta, escribinos y en breve te contestaremos!</p></div>
				<div id="ventana_contacto">
				<div id="contacto">
					<form action="homeapa.php" method="post">
						<label>Nombre</label><br>
						<input type="text" name="Nombre" size="25" placeholder="Nombre" required/><br>
						<label>E-mail</label><br>
						<input type="text" name="email" size="30" required/><br>
						<label>Mensaje</label><br>
						<textarea id="mensaje" name="mensaje" placeholder="Escriba aquí" required></textarea><br>
						<a href="#"><button type="submit" name="enviar">ENVIAR</button></a>				
					</form>
					</div>
				</div>
			</div>
			
		</div>
	<footer id="pie_principal">
		<p>&copy; 2015 - Sitio web desarrollado por:</p><img src="/apa/img/logoG1.png"/>
	</footer>
	</div>
	
</body>

</html>