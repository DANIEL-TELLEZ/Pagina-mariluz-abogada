
<!DOCTYPE html>
<html>
<head>
	<meta name="keywords" content="Abogados, derecho penal, de familia, civil, comercial, laboral, publico, resolución de conflictos, colombianos, extranjeros. ">
  <title>BLOG ABOGADOS</title>
  <link rel="icon" type="image/png" href="img\0000ICONO.png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css\index.css">
  <link href = "https://fonts.googleapis.com/css?family= Nanum + Myeongjo " rel = "stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/blog.css">
</head>
<body style="background;">

<header style="">
  <div style="margin-top:1%;margin-bottom:5%; " class="container">
  <div class="row">
    <div style="margin-top:1%;"  class="col-sm-1"> 
    <!--menu _________________________________________________________________-->
    <center>
      <h1 class="encabezado" style="color:#D4AC0D;font-family: 'Great Vibes', cursive;">Blog</h1>      
    </center>         
      
    </div>
    <div class="col-sm-10"> 
       
      <center>
<h1  class="encabezado" style="color: #B7950B;font-family: 'Great Vibes', cursive; margin-top:2%;">Mariluz Mayorga Ortiz
</h1>
<h3  class="encabezado" style="color: #B7950B;font-family: 'Great Vibes', cursive;">Especialista en derecho penal y criminología.</h3>
</center>
    </div>
    <div  class="encabezado" style="margin-top:1%;" class="col-sm-1">
      <a href="\Pagina_Mariluz_M_O\index.html"><h4 style="color: #B7950B;font-family: 'Great Vibes',cursive; ">Inicio</h4></a>
    </div>
  </div>
</div>
</header>
<div style="width:100%;height:5px;background:#34495E"></div>
<!--contador de vicitas-->
<a href="https://www.contadorvisitasgratis.com" title="contador de visitas html"><img src="https://counter5.wheredoyoucomefrom.ovh/private/contadorvisitasgratis.php?c=4t2dwtt52rzh1n2gsh5y6swllkgadh1s" border="0" title="contador de visitas html" alt="contador de visitas html"></a>

 <!--Contenido_________________________________________________________________________-->

<div class="container-fluid">  
  <div class="row">
    <div class="col-md-">
      
    </div>
    <div class="col-md-8">
    <center>
    <?php 
      include 'selet.php';
     ?>     
    </center>      
    </div>
    <div class="col-md-4">
    <!--Suscripcion_______________________________________________________________-->
    <center>      
      <form style="background:#34495E;padding-top:5px;margin-top:5px;" action="" method="post">
        <h3 style="font-family: 'Great Vibes', cursive;color:#B7950B; margin-top:10px;">Suscríbete </h3>
        <input class="input_susciptores" type="text" name="nombre" placeholder="Nombre" "><br><br>
        <input class="input_susciptores" type="text" name="email" placeholder="Ejemplo: dd@gmail.com"><br><br>
        <input class="input_susciptores" type="Nanum" name="tel" placeholder="Telefono"><br><br>
        <textarea class="input_susciptores" placeholder="Pregunta" name="pregunta"></textarea> <br><br>
        <input  class="input_susciptores" type="submit" value="Enviar"><br><br> 
<!--Insertar datos de los suscriptores____________________________________________________________________--->
<?php
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$pregunta=$_POST['pregunta'];
$saludo="Hola señor";
include'cnnbd.php';
if ($nombre!=""&&$email!=""&&$tel!="") {
  $sql = "INSERT INTO suscriptores (NOMBRE,EMAIL,TELEFONO,PREGUNTA)
VALUES ('$nombre','$email','$tel', '$pregunta')";
if (mysqli_query($conn, $sql)) {
if ($nombre!="") {
?>
<h3 style="font-family: 'Great Vibes', cursive;color:#B7950B;"><?php echo "Bienvenido señor   " .$nombre;   ?></h3>
 
<?php  
}    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

}else{
?>

<p style="color: red; text-align: center;"><?php echo "Llene todos los campos";  ?></p>

<?php
  
}
?>
   
      </form>
      

    </center>
    
    <script src=”http://www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/youtube.xml&amp;up_channel=DANIELTELLEZPRADA&amp;synd=open&amp;w=320&amp;h=390&amp;title=&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js”></script>
    <!--Caja de comenetarios de facebook_________________________________________________-->
    <div class="fb-comments" data-href="http://localhost/CK_Editor/blog.php" data-width="100" data-numposts="10"></div>
    <!--Mensages de fasebook iframe_____________________________________________-->
    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmariluzmayorgaortizabogados%2F&tabs=messages&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    <!--Iframe calendario____________________________________________________________________________________-->
    <iframe src="https://calendar.google.com/calendar/htmlembed?src=%23contacts%40group.v.calendar.google.com&ctz=America%2FBogota" style="border: 0" width="340" height="600" frameborder="0" scrolling="no"></iframe>
      
    </div>
  </div>
</div>
	

<!--Pie de pagina _________________________________________________________________-->
  <footer style="background:#000;">
  <div id="divfooter" class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12  col-lg-4">
      <p class="textofooter">       
   Mariluz Mayorga Ortiz Abogados y Asociados <br/>
      Bogotá</p>
    </div>
    <div class="ccol-xs-12 col-sm-12  col-lg-4">
      <p class="textofooter"> Facebook: <br> mariluzmayorgaortizabogados@gmail.com<br>
      Instagram: <br>mariluzmayorgaortizabogados@gmail.com<br>
      Twiter:<br> @Mariluzmayorga</p>
    </div>
    <div class="col-xs-12 col-sm-12  col-lg-4">
     <p class="textofooter"> Celular (Wsp) +57 3023885501                             
      </p>
      <p class="textofooter"> Email:<br>ariluzmayorgaortizabogados@gmail.com</p>
    </div>
  </div>
</div>
 </footer>

<!--Pluguin de comentarios__________________________________________________________-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--boostrab_Js______________________________________________-->
<!--____________________________________________________________________contador de visitas-->

</body>
</html>
