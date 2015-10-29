<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/abm_admin.css"/>
</head>
<body>
<div id="contenedor">
	<div id="cabecera1">
		ABM Animales
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
				echo "<h3 style=' font-family:arial'>Animal agregado con exito!</h3><br>
					<a href='ABManimales'><input type='button' value='Volver' style=' width:100px'/></a>";
			} else { ?> 
	           <div id="alta">
					<?= form_open('index.php/Huellas/alta_animal')?>
						<label>Nombre</label><br>
						<input type="text" name="nombre" size="25" placeholder="Nombre" autofocus required/><br>
						<label>Edad</label><br>
						<input type="text" name="edad" size="30" /><br>
						<label>Pelaje</label><br>
						<select name="pelaje" required>
							<option value="corto">Corto</option>
							<option value="largo">Largo</option>
						</select><br>
						<label>Tamaño</label><br>
						<select name="altura" required>
							<option value="pequeño">Pequeño</option>
							<option value="mediano">Mediano</option>
							<option value="grande">Grande</option>
						</select><br>
						<label>Sexo</label><br>
						<select name="sexo" required>
							<option value="macho">Macho</option>
							<option value="hembra">Hembra</option>
						</select><br>
						<label>Color</label><br>
						<input type="text" name="color"/><br>
						<label>Observacion</label><br>
						<input type="text" name="observacion"/><br>
						<label>Foto</label><br>
						<input id="subir_foto" type="file" name="foto"/><br>
						<label>Castracion</label><br>
						<select name="castracion" required>
							<option value="si">Si</option>
							<option value="no">No</option>
						</select><br>
						<label>Tipo de Animal</label><br>
						<select name="idtipo_animal" required>
							<?php
								foreach($tipo_animales->result() as $animal)
								{
									echo'<option value="'.$animal->idTipo_Animal.'">'.$animal->Tipo.'</option>';
								}							
							?>
							
						</select><br>
						<label>Estado</label><br>
						<select name="idestado" required>
						<?php
							foreach($estados->result() as $estado)
							{
								echo'<option value="'.$estado->idEstado.'">'.$estado->Estado.' </option>';
							}
						?>
							
						</select><br>
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
	           <iframe src="<?php echo site_url('index.php/Huellas/ListadoAnimales') ?>" name="marco" style=" width:100%; border:0px;"></iframe>

	        </div>
	    </div>
	    <!-- pestaña 3-->
	    <div class="tab">
	        <input type="radio" id="tab-3" name="tab-group-1">
	        <label for="tab-3">Modificación</label>
	        <!--contenido de la pestaña 3-->
	        <div class="content">
	           
	        </div>
	    </div>
	        <!-- pestaña 4-->
	        <div class="tab">
	        <input type="radio" id="tab-4" name="tab-group-1">
	        <label for="tab-4">Tab 4</label>
	        <!--contenido de la pestaña 4-->
	        <div class="content">
	           
	        </div>
	    </div>
	</div>
</div>
</body>
</html>
