<!DOCTYPE html>
<html>
<head>
	<title>bk</title>
	<script type="text/javascript" src="ckeditor\ckeditor.js"></script>
</head>
<body>
<a href="control.php">Inicio</a>
<center>
	<h3>Crear una publicación.</h3>
</center>
<form enctype="multipart/form-data" action="insert.php"   method="post" ><center>
	<input name="titulo" type="text"  placeholder="Titulo" style="width: 95%"> <br/><br/>
	<textarea name="descripcion" placeholder="Descripcion"style="width: 95%"></textarea><br/><br/>
	<input name="img" type="text" placeholder="Imagen"style="width: 95%"><br/><br/>
	<input name="url_video" type="text" placeholder="URL:Video"style="width: 95%"><br><br>
	<textarea name="articulo" id="ckeditor" class="ckeditor"style="width: 95%" >		
	</textarea></center>
	<input type="text" name="Autor" placeholder="Autor">	
 
  <input type="submit" value="Guardar">



</form>

</body>
</html>

