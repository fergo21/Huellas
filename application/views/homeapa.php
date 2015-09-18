<?php

?>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Asociacion Protectora de Animales La Rioja - Huellas</title>
	<link href="<?= base_url("css/index.css"); ?>" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url("css/slick.css"); ?>" />
	<link rel="stylesheet" type="text/css" href="<?= base_url("css/slick-theme.css"); ?>"/>
	
	<!-- Para el slider -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	   <!-- Incluimos la libreria jQuery -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <!-- Incluimos el plugin -->
        <script src="js/bjqs.min.js"></script>
        <script src="js/script.js"></script>
		
		<!--JS de Slider Evento-->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
 	 	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  		<script type="text/javascript" src="js/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      	$('.slider_evento').slick({
      		dots: true,
  			infinite: true,
  			slidesToShow: 3,
  			slidesToScroll: 3
		});
    });
  </script>
	
</head>
<body>
	<div id="contenedor">
		<!-- MENU PRINCIPAL-->
		<div id="menuizq">
			<ul>
				<li><a href="#inicio"><img src="/img/home.png" width="20px" height="19px" /> Inicio</a></li>
				<li><a href="#nosotros"><img src="/img/user.png" width="20px" height="20px" /> Nosotros</a></li>
				<li><a href="#eventos"><img src="/img/event.png" width="20px" height="20px" /> Eventos</a></li>
				<li><a href="#animales"><img src="/img/anim.png" width="24px" height="22px" /> Animales</a></li>
				<li><a href="#veterinarias"><img src="/img/vet.png" width="23px" height="19px" /> Veterinarias</a></li>
				<li><a href="#progreso"><img src="/img/pro.png" width="20px" height="21px" /> Progreso</a></li>
				<li><a href="#consejos"><img src="/img/cons.png" width="20px" height="23px" /> Consejos</a></li>
				<li><a href="#login"><img src="/img/login.png" width="20px" height="22px"  /> Login</a></li>
				<li><a href="#contacto"><img src="/img/cont.png" width="20px" height="14px" /> Contacto</a></li>
			</ul>
		</div>
		<div id="central">
		<div id="cabecera_principal"><img src="/apa/img/APA_principal.png"/><h1>Asociación Protectora de Animales - La Rioja</h1> 
		<div id="seguinos"><p>Seguinos! <a href="https://www.facebook.com/protectoralarioja"><img id="folow" src="/apa/img/facebook_Logo.png"/></a><a href="https://twitter.com/protectoralr"><img id="folow" src="/apa/img/twitter-icon.png"/></a></p></div>
		</div>
		<!-- INICIO -->	
			<div id="sector"><a name="inicio"></a>
					<div id="slider">
						<ul class="bjqs">
							<li><img src="/apa/img/imagen1.jpg" title="Vacuná, esterilizá y adoptá"/></li>
							<li><img src="/apa/img/imagen2.jpg" title="No los abandones"/></li>
							<li><img src="/apa/img/imagen3.jpg" title="Cuidalos y tratalos con amor"/></li>
						</ul>
						
					</div>
								
			</div>
				
		<!-- NOSOTROS -->					
			<div id="sector"><a name="nosotros"><h1>NOSOTROS</h1></a>
				<div id="titulo_nosotros"><div>Nuestros valores fundamentales</div><br> 
				<p>CONFIANZA - bla bla bla bla<br> SOLIDARIDAD - bla bla bla bla<br> PARTICIPACION - bla bla bla</p></div>
				<div id="info_nosotros"><img src="/apa/img/APA1.png"/><p>APA fue fundada en (año) busca la constante participación de la sociedad en la ayuda para protección de los animales. </p></div>
				<div id="info_nosotros1"><div>Quienes somos</div><p>Formamos parte de APA - Grupo de personas bla bla bla</p><a href="<?php echo site_url('index.php/Huellas/muestranosotros') ?>"><input type="button" name="ver_mas" value="VER MAS"/></a>
				</div>
			</div>
		
		<!-- EVENTOS -->		
			<div id="sector"><a name="eventos"><h1>EVENTOS</h1></a>
				<div id="titulo_contacto"><p>PROXIMOS EVENTOS EN APA</p></div>
			
				<div class="slider_evento">
					<div id="evento1"><h3>EVENTO 1</h3><p>Texto breve del evento que lo sacamos de la base de datos y la pasamos por una funcion</p><a href="#" class="leer_mas">Leer más</a></div>
				    <div id="evento2"><h3>EVENTO 2</h3><p>Texto breve del evento</p><a href="#" class="leer_mas">Leer más</a></div>
				    <div id="evento3"><h3>EVENTO 3</h3><p>Texto breve del evento</p><a href="#" class="leer_mas">Leer más</a></div>
				    <div id="evento4"><h3>EVENTO 4</h3><p>Texto breve del evento</p><a href="#" class="leer_mas">Leer más</a></div>
				    <div id="evento5"><h3>EVENTO 5</h3><p>Texto breve del evento</p><a href="#" class="leer_mas">Leer más</a></div>
				    <div id="evento6"><h3>EVENTO 6</h3><p>Texto breve del evento</p><a href="#" class="leer_mas">Leer más</a></div>
				    <div id="evento7"><h3>EVENTO 7</h3><p>Texto breve del evento</p><a href="#" class="leer_mas">Leer más</a></div>
				    <div id="evento8"><h3>EVENTO 8</h3><p>Texto breve del evento</p><a href="#" class="leer_mas">Leer más</a></div>
				    <div id="evento9"><h3>EVENTO 9</h3><p>Texto breve del evento</p><a href="#" class="leer_mas">Leer más</a></div>
				</div>
			</div>
			
		<!-- ANIMALES -->	
			<div id="sector"><a name="animales"><h1>ANIMALES</h1></a>
					<div id="enc_menu_a">
						<a href=""><div id="menu1"><h2>PERROS</h2></div></a>
						<a href=""><div id="menu2"><h2>GATOS</h2></div></a>
						<a href=""><div id="menu3"><h2>OTROS ANIMALES</h2></div></a>
						<a href=""><div id="menu4"><h2>REFUGIO</h2></div></a>
					</div>
					
				<div id="cont_ifr">
					<iframe>
						<p>Your browser does not support iframes.</p>
					</iframe>
				</div>
				
			</div>
		<!-- VETERINARIAS -->		
			<div id="sector"><a name="veterinarias"><h1>VETERINARIAS</h1></a>
				
			<div id=titulo_contacto><p>BUSCA LA VETERINARIA MAS CERCANA</p></div>
				<div id="busqueda_vet">
					<form action="homeapa.php" method="post">
						<label>Selecciona tu Barrio</label><br>
						<select required>
							<option value="socio">barrio 1</option>
							<option value="voluntario">barrio 2</option>
							<option value="normal">barrio 3</option>
						</select>
						<input id="boton_buscar" type="submit" name="buscar" value="BUSCAR"/>				
					</form>
					</div>
				<div id="cont_ifr_vet">
					<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d66118.50285804726!2d-66.88374297175429!3d-29.430966389635685!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1442516954884" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>
			</div>
		<!-- PROGRESO -->		
			<div id="sector"><a name="progreso"><h1>PROGRESO</h1></a>
				Contenido de eventos
			</div>
		<!-- CONSEJOS -->		
			<div id="sector"><a name="consejos"><h1>CONSEJOS</h1></a>
				Contenido de eventos
			</div>
		<!-- LOGIN -->		
			<div id="sector"><a name="login"><h1>LOGIN</h1></a>
				<div id="logo_login">
					<img src="/apa/img/logo1app.png"/>
				</div>
				<div id="info_ingreso">
					<p>Si querés ser parte de ésta comunidad y colaborar con lo que puedas, podés registrarte a traves de <img src="/apa/img/facebook_Logo.png" width="50px" height="50px" /> o <img src="/apa/img/google+.png" width="50px" height="50px" /> o simplemente registrate en nuestro sistema</p>
					<a href="<?php echo site_url('index.php/Huellas/muestraregistro') ?>"><input id="boton_registrar" type="button" name="btn_registrar" value="REGISTRATE"/></a>
				</div>
				<div id="ventana_ingreso">
					<div id="cuerpo_registro1">
						<form action="huellas.php" method="post">
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
						<input id="boton_enviar" type="submit" name="enviar" value="ENVIAR"/>				
					</form>
					</div>
				</div>
			</div>
			<div id="pie_principal">
				<p>Sitio web desarrollado por:</p><img src="/apa/img/g2.png"/>
			</div>
		</div>
		
	</div>
	
</body>

</html>