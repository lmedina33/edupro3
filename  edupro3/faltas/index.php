<?php

require_once('../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Faltas Acad&eacute;micas</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
<script src="../ff.js" type="text/javascript"></script>
</head>

<body>

<div id="header">
	<img src="../images/fond1.jpg" width="830" height="150" alt="" />
</div>

<div id="content" class="float-holder">
	<div id="content2">
		<?php include('../menu.php'); ?>
		
		<div class="title">Faltas acad&eacute;micas</div>
	</div>
	
	<form action="faltas.php" method="get" name="formulario" id="formulario" onsubmit="MM_validateForm('carne','','R');return document.MM_returnValue">
	  <div class="a_center">Ingresar Falta: 
		    <input name="carne" type="text" id="carne" aurotomplete="off" size="20"  autocomplete="off" />&nbsp;&nbsp;
		    <a href="#"><img src="../images/iconos/250.ico" border="0" title="Busqueda Rapida..." onclick="return buscar('../aux_search/search.php')" /></a>
		    <br />
	  </div>
		
		<br />
		<div class="a_center">
		    <img src="../images/iconos/289.ico" class="text1" /> <a href="#">Ver faltas acad&eacute;micas de alumno</a>
		</div>
		<br />
		
	</form>
</div>

<script type="text/javascript">
document.formulario.carne.focus();

function buscar(url) {
	ventana = open(url,"ventana","scrollbars=yes,status=no,toolbar=no,directories=no,menubar=no,resizable=yes,width=350,height=425")  
}
</script>

</body>
</html>