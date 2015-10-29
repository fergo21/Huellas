<?php

?>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sistema de Gestion Huellas | Asociacion Protectora de Animales La Rioja</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/abm_admin.css"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/menu/iconos.css" />
</head>
<body>
	<div>
		<div id="ventana_registro">
				<div id="registro">
					<?php 
			if(isset($_POST['cargar'])){
				echo "<h3 style=' font-family:arial'>Usuario Modificado con exito!</h3><br>
					<a href='ABMusuarios'><input type='button' value='Volver' style=' width:100px'/></a>";
			} else { ?> 
	           <div id="alta">
					<?= form_open('index.php/Huellas/modificar_personas')?>
						<label style="display:none;">iD</label>
						<input style="display:none;" type="text" name="id" size="25" required value="<?php echo $personas->idPersona ?>"/>
						<label>Nombre</label><br>
						<input type="text" name="nombre" size="25" placeholder="Nombre" autofocus required value="<?php echo $personas->Nombre ?>"/>
						<input type="text" name="apellido" size="25" placeholder="Apellido" required value="<?php echo $personas->Apellido ?>"/><br>
						<label>Edad</label><br>
						<input type="text" name="edad" size="30" value="<?php echo $personas->Edad ?>"/><br>
						<label>Sexo</label><br>
						<select name="sexo" required>
						<?php if($personas->Sexo == "masculino") { ?>
							<option value="masculino" selected="select">Masculino</option>
							<option value="femenino">Femenino</option>
						<?php } else {?>
							<option value="masculino">Masculino</option>
							<option value="femenino" selected="select">Femenino</option>
							<?php }?>
						</select><br>
						<label>Domicilio</label><br>
						<input type="text" name="domicilio" size="30" required value="<?php echo $personas->Domicilio ?>"/><br>
						<label>Correo</label><br>
						<input type="text" name="correo" size="30" required value="<?php echo $personas->Correo ?>"/><br>
						<label>Telefono</label><br>
						<input type="text" name="telefono" size="30" required value="<?php echo $personas->Telefono ?>"/><br>
						<label>Foto</label><br>
						<input id="subir_foto" type="file" name="foto" value="<?php echo $personas->Foto ?>" /><br>
						<label>Funcion personal</label><br>
						<select name="funcion" required>
							<option value="socio">Socio</option>
							<option value="voluntario">Voluntario</option>
							<option value="normal">Normal</option>
						</select>
						<br><br>
						<input id="boton_cargar" type="submit" name="cargar" value="CARGAR"/>		
					</form>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	</div>
</body>
</html>