<?php

require_once('../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Re-Inscripci&oacute;n de Alumnos</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
<script src="../ff.js" type="text/javascript"></script>
<script src="../jquery.js" type="text/javascript"></script>

</head>

<body>

<div id="header">
	<img src="../images/fond1.jpg" width="830" height="150" alt="" />
</div>

<div id="content" class="float-holder">
<div id="content2">
    <?php include('../menu.php'); ?>
	
	<div class="title">Ingreso de Re-Inscripci&oacute;n</div>
</div>
	
	<form action="reinscripcion.php" method="get" name="formulario" id="formulario" onsubmit="MM_validateForm('carne','','R');return document.MM_returnValue">
	
		<div class="blue">
			<table width="520" border="0" align="center">
				<tr>
					<td align="right">Carn&eacute;: <input name="carne" type="text" id="carne" aurotomplete="off" size="20" /></td>
					<td><input name="submit" type="image" src="../images/arrow_right.png" width="75" height="75" title="Buscar Alumno por Carne" /></td>
				</tr>
			</table>
			
			<br />
			
			<div align="center"><img src="../images/search.png" onclick="return buscar('../aux_search/search.php'); " title="Busqueda Rapida de Alumnos..." width="90" height="90" border="0" /></div>
		</div>
		
		<div class="title">Visualizaci&oacute;n de &Uacute;ltimas Re-Inscripciones</div>
		
		<div class="bck">
		<table width="100%" class="table">
			<tr class="title2">
				<td width="15%" align="center">Fecha</td>
				<td width="15%" align="center">Carn&eacute;</td>
				<td width="35%" align="center">Nombres y Apellidos</td>
				<td width="35%" align="center">Grado</td>
			</tr>
			<?php

			$anio = date("Y");
			$status = "ReInscrito";

			$seleccionar = "SELECT *
				FROM reinscripcion r, alumno a, grado g
				WHERE r.id_alumno = a.id_alumno
					AND r.id_grado = g.id_grado
					AND anio = '$anio' ";
			$ejecutar = mysql_query($seleccionar);

			while ($arreglo = mysql_fetch_assoc($ejecutar))
			{
			
			?>
			<tr>
				<td width="15%" align="center"><?php echo $arreglo['fecha_reinscripcion']; ?></td>
				<td width="15%"><?php echo $arreglo['carne']; ?></td>
				<td width="35%"><img src="../images/iconos/59.ico" /> <?php echo $arreglo['nombre_alumno']; ?><?php echo " , " ?><?php echo $arreglo['apellido']; ?></td>
				<td width="35%"><img src="../images/iconos/msn.ico" /> <?php echo $arreglo['nombre'] . $arreglo['seccion']; ?></td>
			</tr>
			<?php

			}

			?>
		</table>
		</div>
	</form>
</div>

<script type="text/javascript">
document.formulario.carne.focus();

function alerta() {
	return window.confirm("Seguro que desea Realizar la Accion...?");
}

function buscar(url) {
	ventana = open(url,"ventana","scrollbars=yes,status=no,toolbar=no,directories=no,menubar=no,resizable=yes,width=350,height=425");
}  
</script>

</body>
</html>