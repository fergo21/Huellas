<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenidos</title>
	<link href="../css/habilitar_tecnicos.css" type="text/css" rel="stylesheet"/>
</head>
	<body>
			<fieldset id="ventana3">
				<legend>Ver Insumos de un Tecnico en Particular</legend>
				<table id="tablaescuela" width="100%">
					<tr id="tablatitulo">
						<th>Id</th>
						<th>Tecnico</th>
						<th>DNI</th>
						<th>Edad</th>
						<th>Sexo</th>
						<th><img src="../img/ver.png" /> Ver</th>
					</tr>
				<?php foreach($usuarios->result() as $usuario):?>
					<tr class="tablacuerpo">
						<th><?= $usuario->idusuario; ?></th>
						<th><?= $usuario->Nombre.' '.$usuario->Apellido;?></th>
						<th><?= $usuario->dni; ?></th>
						<th><?= $usuario->edad; ?></th>
						<th><?= $usuario->sexo; ?></th>
						<th><?php echo anchor('Sartic/pedido_usuario_tecnico_admin/'.$usuario->idusuario,'>>') ?></th>
					</tr>
				<?php endforeach; ?>
				</table>
			</fieldset>	


	</body>
</html>