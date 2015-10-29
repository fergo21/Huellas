<?php
?>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/abm_admin.css"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/menu/iconos.css"/>
	
</head>
<body>
<div id="contenedor">
	<div id="cabecera1">
		ABM Usuarios
	</div>
	<div class="tabs">
	    <!--pestaña 1 activa por defecto-->
	    <div class="tab">
	        <input type="radio" id="tab-1" name="tab-group-1" checked>
	        <label for="tab-1">Alta</label>
	        <!--contenido de la pestaña 1-->
	        <div class="content">
			<?php 
			if(isset($_POST['cargar'])){
				echo "<h3 style=' font-family:arial'>Usuario agregado con exito!</h3><br>
					<a href='ABMusuarios'><input type='button' value='Volver' style=' width:100px'/></a>";
			} else { ?> 
	           <div id="alta">
					<?= form_open('index.php/Huellas/agregar_persona')?>
						<label>Nombre</label><br>
						<input type="text" name="nombre" size="25" placeholder="Nombre" autofocus required/>
						<input type="text" name="apellido" size="25" placeholder="Apellido" required/><br>
						<label>Edad</label><br>
						<input type="text" name="edad" size="30" /><br>
						<label>Sexo</label><br>
						<select name="sexo" required>
							<option value="masculino">Masculino</option>
							<option value="femenino">Femenino</option>
						</select><br>
						<label>Domicilio</label><br>
						<input type="text" name="domicilio" size="30" required/><br>
						<label>Correo</label><br>
						<input type="text" name="correo" size="30" required/><br>
						<label>Telefono</label><br>
						<input type="text" name="telefono" size="30" required/><br>
						<label>Foto</label><br>
						<input id="subir_foto" type="file" name="foto"/><br>
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
	    <!-- pestaña 2-->
	    <div class="tab">
	        <input type="radio" id="tab-2" name="tab-group-1">
	        <label for="tab-2">Baja</label>
	        <div class="content">
	            <!--contenido de la pestaña 2-->
				<iframe src="<?php echo site_url('index.php/Huellas/ListadoPersonas') ?>" name="marco" style=" width:100%; border:0px;"></iframe>
					
	        </div>
	    </div>
	    <!-- pestaña 3-->
	    <div class="tab">
	        <input type="radio" id="tab-3" name="tab-group-1">
	        <label for="tab-3">Modificación</label>
	        <!--contenido de la pestaña 3-->
	        <div class="content">
	            <iframe src="<?php echo site_url('index.php/Huellas/ListadoPersonas2') ?>" name="marco" style=" width:100%; border:0px;"></iframe>
	        </div>
	    </div>
	        <!-- pestaña 4-->
	        <div class="tab">
	        <input type="radio" id="tab-4" name="tab-group-1">
	        <label for="tab-4">Otros</label>
	        <!--contenido de la pestaña 4-->
	        <div class="content">
	           
	        </div>
	    </div>
	</div>
</div>
</body>
</html>
