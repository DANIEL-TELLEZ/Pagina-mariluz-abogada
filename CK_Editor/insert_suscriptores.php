<?php
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$pregunta=$_POST['pregunta'];
$saludo="Hola señor";
include'cnnbd.php';

$sql = "INSERT INTO suscriptores (NOMBRE,EMAIL,TELEFONO,PREGUNTA,SALUDO)
VALUES ('$nombre','$email','$tel', '$pregunta','$saludo')";

if (mysqli_query($conn, $sql)) {
 echo "gracias ";   
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);





?>