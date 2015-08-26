<?php

?>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Asociacion Protectora de Animales La Rioja - Huellas</title>
	<link href="<?= base_url("css/index.css"); ?>" rel="stylesheet" type="text/css"/>
	
	<!-- Para el slider -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	   <!-- Incluimos la libreria jQuery -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <!-- Incluimos el plugin -->
        <script src="js/bjqs.min.js"></script>
        <script src="js/script.js"></script>
	
</head>
<body>
	<div id="contenedor">
	
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
			
			<div id="sector"><a name="inicio"></a>
					<div id="slider">
						<ul class="bjqs">
							<li><img src="/apa/img/imagen1.jpg" title="Vacuná, esterilizá y adoptá"/></li>
							<li><img src="/apa/img/imagen2.jpg" title="No los abandones"/></li>
							<li><img src="/apa/img/imagen3.jpg" title="Cuidalos y tratalos con amor"/></li>
						</ul>
						
					</div>
								
			</div>
				
						
			<div id="sector"><a name="nosotros"><h1>NOSOTROS</h1></a>
				<div id="titulo_nosotros"><div>Nuestros valores fundamentales</div><br> 
				<p>CONFIANZA - bla bla bla bla<br> SOLIDARIDAD - bla bla bla bla<br> PARTICIPACION - bla bla bla</p></div>
				<div id="info_nosotros"><img src="/apa/img/APA1.png"/><p>APA fue fundada en (año) busca la constante participación de la sociedad en la ayuda para protección de los animales. </p></div>
				<div id="info_nosotros1"><div>Quienes somos</div><p>Formamos parte de APA - Grupo de personas bla bla bla</p><a href="<?php echo site_url('index.php/Huellas/muestranosotros') ?>"><input type="button" name="ver_mas" value="VER MAS"/></a>
				</div>
			</div>
			
			<div id="sector"><a name="eventos"><h1>EVENTOS</h1></a>
				<div id=titulo_contacto><p>PROXIMOS EVENTOS EN APA</p></div><div></div>
				<a href=""><div id="evento1"><h2>EVENTO 1</h2></div></a>
				<a href=""><div id="evento2"><h2>EVENTO 2</h2></div></a>
				<a href=""><div id="evento3"><h2>EVENTO 3</h2></div></a>
			</div>

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
			
			<div id="sector"><a name="veterinarias"><h1>VETERINARIAS</h1></a>
				Contenido de eventos
			</div>
			
			<div id="sector"><a name="progreso"><h1>PROGRESO</h1></a>
				Contenido de eventos
			</div>
			
			<div id="sector"><a name="consejos"><h1>CONSEJOS</h1></a>
				Contenido de eventos
			</div>
			
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
		</div>
	</div>
	
</body>

</html>