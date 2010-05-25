<?php
$toproot = './';
require_once('conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modulo de Mantenimiento</title>
<link rel="stylesheet" type="text/css" href="style.css"  />

</head>

<body>
<div id="header">
	<img src="images/fond1.jpg" width="830" height="150" alt="" />
</div>

<div id="content" class="float-holder">
<div id="content2">
    <?php include('menu.php'); ?>
	
	<div class="title">Ingreso de Datos del Sistema</div>
</div>
	
	<ul class="options">
		<li><a href="areas/index.php"><img src="images/iconos/59.ico" /> Ingreso de Areas </a></li>
		<li><a href="catedraticos/index.php"><img src="images/iconos/152.ico" /> Ingreso de Catedr&aacute;ticos </a></li>
		<li><a href="examenes/index.php"><img src="images/iconos/227.ico" /> Ingreso de Tiempo de Examenes </a></li>
		<li><a href="grados/index.php"><img src="images/iconos/30.ico" /> Ingreso de Grados </a></li>
		<li><a href="secciones/index.php"><img src="images/iconos/209.ico" /> Ingreso de Secciones </a></li>
		<li><a href="cursos/index.php"><img src="images/iconos/144.ico" /> Ingreso de Cursos </a></li>
		<li><a href="usuarios/index.php"><img src="images/iconos/buddy-signon.ico" /> Ingreso de Usuarios </a></li>
	</ul>
	<br /><br />

</div>

<script language="JavaScript" type="text/javascript">
document.formulario.carne.focus();

function buscar(url) {  
ventana = open(url,"ventana","scrollbars=yes,status=no,toolbar=no,directories=no,menubar=no,resizable=yes,width=350,height=425")  
}  
</script>

</body>
</html>