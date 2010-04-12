<?php

require_once('../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
.text1 {
	font-size:11px;
	font-family:Tahoma;
	color:#003300;
}
.Estilo1 {
	color: #FFFFFF;
	font-family: Tahoma;
	font-size: 12px;
}
</style>
</head>

<body>
<table width="794" border="0">
  <tr>
    <td width="12%" bgcolor="#4682B4"><div align="center" class="Estilo1">Carn&eacute;</div></td>
    <td width="12%" bgcolor="#4682B4"><div align="center" class="Estilo1">Fecha</div></td>
    <td width="40%" bgcolor="#4682B4"><div align="center" class="Estilo1">Nombres y Apellidos </div></td>
    <td width="10%" bgcolor="#4682B4" class="Estilo1"><div align="center">Compromiso<br />de Estudios</div></td>
    <td width="20%" bgcolor="#4682B4"><div align="center" class="Estilo1">Grado</div></td>
		<td width="10%" bgcolor="#4682B4" class="a_center Estilo1">Editar</td>
    <td>&nbsp;</td>
  </tr>
<?php

$seleccionar = 'SELECT *
	FROM alumno a, reinscripcion r, grado g, secciones s
	WHERE a.id_alumno = r.id_alumno
		AND r.id_grado = g.id_grado
		AND r.id_seccion = s.id_seccion
	ORDER BY a.id_alumno';

//$seleccionar = "SELECT * FROM alumno a, grado g, secciones s WHERE a.id_grado = g.id_grado AND g.id_grado = s.id_grado ORDER BY a.id_alumno DESC";
$ejecutar = mysql_query($seleccionar);

while($arreglo = mysql_fetch_assoc($ejecutar))
{
	
?>
	<tr>
		<td class="text1"><?php echo $arreglo['carne']; ?></td>
		<td class="text1"><div align="center"><?php echo $arreglo['fecha']; ?></div></td>
		<td class="text1"><?php echo $arreglo['apellido'] . ', ' . $arreglo['nombre_alumno']; ?></td>
		<td class="text1"><div align="center"><a href="../reportes/compromiso.php?id_alumno=<?php echo $arreglo['id_alumno']; ?>" target="_blank"><img src="../images/iconos/39.ico" border="0" /></a> <a href="../reportes/compromiso2.php?id_alumno=<?php echo $arreglo['id_alumno']; ?>" target="_blank"><img src="../images/iconos/39.ico" border="0" /></a></div></td>
		<td class="text1"><?php echo $arreglo['nombre'] . ' ' . $arreglo['nombre_seccion']; ?></td>
		<td class="a_center"><a href="../mantenimientos/alumnos/alumno.php?carne=<?php echo $arreglo['carne']; ?>&amp;Submit2=Buscar" target="_blank"><img src="../images/iconos/226.ico" border="0" /></a></td>
		<td>&nbsp;</td>
	</tr>
<?php
}

?>
</table>

</body>
</html>