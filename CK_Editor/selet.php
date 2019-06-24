<?php

include 'cnnbd.php';

$sql = "SELECT * FROM `entradas` ORDER BY ID DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	$id=$row["ID"];
    	$fecha=$row["FECHA"];
    	$titulo=$row["TITULO"];
    	$descripcion=$row["DERIPCION"];    	
    	$img=$row["IMG"];
    	$video=$row["VIDEO"];
    	$articulo=$row["ARTICULO"];
    	$autor=$row["AUTOR"];
    	
    	/*
        echo "ID: " . $row["ID"]. " - TITULO: " . $row["TITULO"]. "DESCRIPCION" . $row["DESCRIPCION"]. "FECHA" . $row["FECHA"]. "IMG" . $row["IMG"]. "VIDEO" . $row["VIDEO"]. "ARTICULO" . $row["ARTICULO"]. "AUTOR" . $row["AUTOR"]."<br>";*/
        //SELECT `ID`, `TITULO`, `DESCRIPCION`, `FECHA`, `IMG`, `VIDEO`, `ARTICULO`, `AUTOR` FROM `entradas` WHERE 1
/*echo $fecha."<br>".$id."<br>".$titulo."<br>".$descripcion."<br>".$img."<br>".$video."<br>".$articulo."<br>".$autor;*/

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <center>

        <h1><?php echo  $titulo; ?></h1>
        <h3><?php echo $descripcion; ?></h3>
        <?php if ($img!="") {?>
            <img style="width: 100%; height:400px" src=<?php echo $img; ?>><br>
            <?php } ?>
        <?php if ($video!="") {?>
            <iframe width="100%" height="400"
        src=<?php echo $video;?>>
        </iframe>
       <?php }?>   

       
       <div style="width:100%;">
       <?php
       echo $articulo."<br>";
             
       ?>
       <p style="text-align: left;"><?php echo  $autor.'<br>'.$fecha;  ?></p>     
       
   </div>       
    </center>
 

</body>
</html>
<?php
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
