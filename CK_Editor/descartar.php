<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <?php 


include 'cnnbd.php';

$sql = "SELECT * FROM `entradas` ORDER BY ID DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $id=$row["ID"];             
      
       

    }
} else {
    echo "0 results";
}

//eliminar ___________________________________________________

$eliminar = "DELETE FROM entradas WHERE ID=$id";

if ($conn->query($eliminar) === TRUE) {
   
} else {
    echo "Error deleting record: " . $conn->error;
}

mysqli_close($conn);
header("Location:BK.php");
?>





   
    
  

  


</body>
</html>