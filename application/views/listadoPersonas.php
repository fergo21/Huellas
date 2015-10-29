<?php

?>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
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
								<th id="ta-sup">APELLIDO</th>  
								<th id="ta-sup">EDAD</th>
								<th id="ta-sup">SEXO</th>  
								<th id="ta-sup">DOMICILIO</th>  
								<th id="ta-sup">CORREO</th>  
								<th id="ta-sup">TELEFONO</th>
								<th id="ta-sup">FOTO</th>
								<th id="ta-sup"></th> 
							</tr>  
					<?php foreach($personas->result() as $dato){?> 
							<tr>  
								<td> <?php echo $dato->idPersona ?> </td>  
								<td><?php echo $dato->Nombre ?> </td>  
								<td><?php echo $dato->Apellido ?> </td> 
								<td><?php echo $dato->Edad ?> </td>
								<td><?php echo $dato->Sexo ?> </td>
								<td><?php echo $dato->Domicilio ?> </td>
								<td><?php echo $dato->Correo ?> </td>
								<td><?php echo $dato->Telefono ?> </td>
								<td><?php echo $dato->Foto ?> </td>
								<td><a href="<?php echo site_url('index.php/Huellas/baja_persona/' . $dato->idPersona);?>"><span class='icon-trash'></span></a></td>  
							</tr> 
								<?php } ?>
						</table>
			  		</div>
</body>
</html>