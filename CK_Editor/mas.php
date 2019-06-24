<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
var num = 0 //aquí se establece el valor inicial
function cuentaAdelante(){
if(num >= 100){//aqui se establece el valor final
document.getElementById('ca').firstChild.nodeValue = num
num++
setTimeout('cuentaAdelante()',1000)//tiempo para que cambie el numero
}
}
function escribe(){
document.write ('<span id="ca">' + num + '</span>')
}
</script>

	



</body>
</html>

