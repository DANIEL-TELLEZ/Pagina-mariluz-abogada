<!DOCTYPE html>
<html>
<head>
	<title>liste de correos</title>
</head>
<body>
	<a href="control.php">Inicio</a><br><br>
<center>
	<h3>Lista Emails</h3>
</center>
</body>
</html>
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

echo $email."  ";




    }
} else {
    echo "";
}
mysqli_close($conn);
?>



