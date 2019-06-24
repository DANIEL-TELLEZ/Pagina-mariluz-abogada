<!DOCTYPE html>
<html>
<head>
	<title>Paginas web</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css\gg.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
<body>
<!--Programacion  mensages mss Js_____________________________________-->
<script>
$(document).ready(function(){
  $(".chat_boton").click(function(){
    $(".iframe_mssfk").slideToggle();
  });
});
</script>
<!--Facebook  watsapp______________________________________-->
<section class="chat_container" style="margin:0;
  width:auto;
  max-width:300px;
  position:fixed;
  bottom:0px;
  right:2%;
  z-index:999;">
<center>
<!-- watsapp______________________________________-->
<div class="">
    <a href="https://wa.me/573023885501" target="_blank"> <img id="fotoTelefono" src="https://image.flaticon.com/icons/svg/174/174879.svg" class="img_wsp" alt="" style="width:30%;
  hyphens: ;"></a>      
</div>
<!--Facebook______________________________________-->
<div class="chat_boton" style="width: 100%;   
  cursor:pointer;
  user-select: none;
  padding:4px 0;">
<img id="img_mss" src="https://image.flaticon.com/icons/svg/906/906386.svg" style="width:40%;
hyphens:;">
</div>
<div class="iframe_mssfk" style="margin:0;
padding:0;
display: none;">
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmariluzmayorgaortizabogados%2F&tabs=messages&width=250&height=320&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=190382061652693" width="250" height="320" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
</div>
 </center>

</section>
	


</body>
</html>