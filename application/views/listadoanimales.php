<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sistema de Gestion Huellas | Asociacion Protectora de Animales La Rioja</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/menu/iconos.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/abm_admin.css" />
</head>
<body>
	 <div id="baja">					
						<table>  
							<tr>  
								<th id="ta-sup">ID</th>  
								<th id="ta-sup">NOMBRE</th>    
								<th id="ta-sup">EDAD</th>
								<th id="ta-sup">PELAJE</th>
								<th id="ta-sup">TAMA&Ntilde;O</th>
								<th id="ta-sup">SEXO</th>   
								<th id="ta-sup">COLOR</th>
								<th id="ta-sup">OBSERVACION</th>
								<th id="ta-sup">FOTO</th>
								<th id="ta-sup">CASTRACION</th>
								<th id="ta-sup">TIPO ANIMAL</th>
								<th id="ta-sup">ESTADO</th> 
								<th id="ta-sup"></th> 
							</tr>  
					<?php foreach($animales->result() as $dato){?> 
							<tr>  
								<td> <?php echo $dato->idAnimal ?> </td>  
								<td><?php echo $dato->Nombre ?> </td>   
								<td><?php echo $dato->Edad ?> </td>
								<td><?php echo $dato->Pelaje ?> </td>
								<td><?php echo $dato->Medida ?> </td>
								<td><?php echo $dato->Sexo ?> </td>
								<td><?php echo $dato->Color ?> </td>
								<td><?php echo $dato->Observacion ?> </td>
								<td><?php echo $dato->Foto ?> </td>
								<td><?php echo $dato->Castracion ?> </td>
								<td><?php echo $dato->idTipo_Animal ?> </td>
								<td><?php echo $dato->idEstado ?> </td>
															
								<td><a href="<?php echo site_url('index.php/Huellas/baja_animal/' . $dato->idAnimal);?>"><span class='icon-trash'></span></a></td>  
							</tr> 
								<?php } ?>
						</table>
			  		</div>
</body>
</html>