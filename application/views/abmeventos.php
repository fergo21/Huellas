<?php

?>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/abm_admin.css"/>
	
			<script src="http://localhost/sym/js/tinymce/js/tinymce/tinymce.min.js"></script>
			<script type="text/javascript">
			tinymce.init({
			    selector: "textarea",
			    theme: "modern",
			    plugins: [
			        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
			        "searchreplace wordcount visualblocks visualchars code fullscreen",
			        "insertdatetime media nonbreaking save table contextmenu directionality",
			        "emoticons template paste textcolor colorpicker textpattern"
			    ],
			    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
			    toolbar2: "print preview media | forecolor backcolor emoticons",
			    image_advtab: true,
			    templates: [
			        {title: 'Test template 1', content: 'Test 1'},
			        {title: 'Test template 2', content: 'Test 2'}
			    ]
			});
			</script>
</head>
<body>
<div id="contenedor">
	<div id="cabecera1">
		ABM Eventos
	</div>
	<div class="tabs">
	    <!--pestaña 1 activa por defecto-->
	    <div class="tab">
	        <input type="radio" id="tab-1" name="tab-group-1" checked>
	        <label for="tab-1">Alta</label>
	        <!--contenido de la pestaña 1-->
	        <div class="content">
	           <?= form_open("") ?>
					<label>Titulo</label>
					<input name="titulo" type="text" size="50"/><br><br>
					<textarea name="contenido" style="width:100%"></textarea><br>
					<input name="fecha" type="date"/><br><br>
					<label>By</label> 
					<input name="persona" type="text"/><br><br>
					<input name="enviar" type="submit"/>
					
				</form>
	        </div>
	    </div>
	    <!-- pestaña 2-->
	    <div class="tab">
	        <input type="radio" id="tab-2" name="tab-group-1">
	        <label for="tab-2">Baja</label>
	        <div class="content">
	            <!--contenido de la pestaña 2-->
	           

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
