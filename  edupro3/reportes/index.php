<?php

require_once('../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modulo de Mantenimiento</title>
<link rel="stylesheet" type="text/css" href="../style.css"  />

</head>

<body>
<div id="header">
	<img src="../images/fond1.jpg" width="830" height="150" alt="" />
</div>

<div id="content" class="float-holder">
<div id="content2">
    <?php include('../menu.php'); ?>
	
	<div class="title">Reportes del Sistema</div>
</div>
	
	<ul class="options">
		<li><a href="alumnos/listado_alumno.php"><img src="../images/iconos/59.ico" /> Listado de Alumnos</a></li>
		<li><a href="promedios/"><img src="../images/iconos/227.ico" /> Promedios de Alumnos</a></li>
		<li><a href="calificaciones.php"><img src="../images/iconos/30.ico" /> Tarjeta de Calificaciones</a></li>
		<li><a href="catedraticos/listado_catedratico.php"><img src="../images/iconos/209.ico" /> Catedr&aacute;ticos con Cursos</a></li>
		<li><a href="#"><img src="../images/iconos/144.ico" /> Certificaciones Anuales</a></li>
		<li><a href="fgenerales.php"><img src="../images/iconos/buddy-signon.ico" /> Cuadros Generales de Calificaciones</a></li>
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