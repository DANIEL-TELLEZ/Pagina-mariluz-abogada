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
<h1>Eliminar publicaciones.</h1>
</center>
<table>
      <tr>
        <th><h2>Elminar</h2></th>
        <th><h2>ID</h2></th>
        <th><h2>Fecha</h2></th>
        <th><h2>Titulo</h2></th>        
      </tr>
</table>

  <?php 

include 'cnnbd.php';
//Selecionar todos los datos de forma decendente
$sql = "SELECT * FROM `entradas` ORDER BY ID DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $id=$row["ID"];
      $fecha=$row["FECHA"];
      $titulo=$row['TITULO'];      
          
      ?>
     
    
    <table>      
      <tr>
        <th>
      <form enctype="multipart/form-data" action=""   method="post" >
      <select name="id_eliminar" style="display:none;">
      <option  value="<?php echo $id; ?>"></option>  
      </select>
      <input type="submit" value="eliminar">
      </form>
      </th> 
      <th><h3><?php echo$id;?></h3></th>
      <th><h3><?php echo$fecha;?></h3></th>
      <th><h3><?php echo $titulo;?></h3></th>        
      </tr>
      </table>          
      

  
      <?php

       

    }
} else {
    
}
?>


<?php 
//eliminar datos selexionado ___________________________________________________

$dato=$_POST['id_eliminar'];
if ($dato!=0) {
?>
<?php
if ($dato!=0) {
  $eliminar = "DELETE FROM entradas WHERE ID=$dato";

if ($conn->query($eliminar) === TRUE) {
   
} else {
    echo "Error deleting record: " . $conn->error;
}

mysqli_close($conn);

}



}


?>

</body>
</html>