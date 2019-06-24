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
    }
} else {
    echo "";
}
mysqli_close($conn);
?>




