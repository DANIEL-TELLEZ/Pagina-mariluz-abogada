
<!DOCTYPE html>
<html>
<head>
	<title>insertar_datos</title>
</head>
<body>
<a href="control.php">Inicio</a>
<?php
include 'cnnbd.php';
date_default_timezone_set("America/Bogota");
$fecha=date("Y/m/d");
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$img=$_POST['img'];
$video=$_POST['url_video'];
$articulo=$_POST['articulo'];
$autor=$_POST['Autor'];
$sql = "INSERT INTO entradas (TITULO,DESCRIPCION,FECHA,IMG,VIDEO,ARTICULO,AUTOR)
VALUES ('$titulo','$descripcion','$fecha', '$img','$video','$articulo','$autor')";

if (mysqli_query($conn, $sql)) {
  header("Location: vista_previa.php");
   
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

</body>
</html>
