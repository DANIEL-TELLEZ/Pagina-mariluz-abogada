
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css\eliminar.css">
</head>
<body>	
<a href="control.php">Inicio</a>
<center>
<h1>Suscriptores</h1>
</center>
<!--_______________________________________________________________--tabla inicio-->
<table>
      <tr>
        <th><h2>Elminar</h2></th>
        <th><h2>ID</h2></th>
        <th><h2>NOMBRE</h2></th>
        <th><h2>EMAIL</h2></th>
        <th><h2>TELEFONO</h2></th> 
        <th><h2>PREGUNTA</h2></th>         
      </tr>
</table>  
<?php
include 'cnnbd.php';

$sql = "SELECT * FROM `suscriptores` ORDER BY ID DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	$id=$row["ID"];
    	$nombre=$row["NOMBRE"];
    	$email=$row["EMAIL"];
    	$telefono=$row["TELEFONO"];    	
    	$pregunta=$row["PREGUNTA"];
    	?>
    	<!--___________________-->    
    
    <table>      
      <tr>
        <th>
      <form enctype="multipart/form-data" action=""   method="post" >
      <select name="id_eliminar" style="display:none;">
      <option  value="<?php echo $id; ?>"><?php echo $id; ?></option>  
      </select>
      <input type="submit" value="eliminar">
      </form>
      </th> 
      <th><h3><?php echo$id;?></h3></th>
      <th><h3><?php echo$nombre;?></h3></th>
      <th><h3><?php echo $email;?></h3></th> 
      <th><h3><?php echo$telefono;?></h3></th>
      <th><h3><?php echo$pregunta;?></h3></th>
            
      </tr>
      </table>      
   	<?php
    }
} else {
    echo "";
}
mysqli_close($conn);
?>



 
           

<?php 
//eliminar datos selexionado ___________________________________________________

$dato=$_POST['id_eliminar'];
if ($dato!=0) {
	include'cnnbd.php';
$sql = "DELETE FROM  suscriptores WHERE id=$dato";
if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
</body>
</html>