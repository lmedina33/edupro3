<?php

require_once('../conexion.php');

$id_alumno = $_GET['id_alumno'];

$seleccionar = "SELECT * FROM alumno WHERE id_alumno = '$id_alumno'";
$ejecutar = mysql_query($seleccionar);

if($arreglo = mysql_fetch_assoc($ejecutar))
{
	
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Busqueda Alumno</title>
<style type="text/css">
.text2{
font-family:tahoma;
color:#000000;
font-size:12px;
}

.text1{
font-family:Tahoma;
color:#339933;
font-size:13px;
}
</style>
<style type="text/css">
<!--
input{
-moz-border-radius: 5px;
background-color : #eaf9ff;
border : 1px solid #000000;
font-family : "Tahoma", Tahoma, monospace;
font-size : 12px;
padding-left : 7px;
padding-right : 7px;
}
.Estilo1 {
	font-size: 24px;
	color: #990000;
}

body {
	background-color: #FCFBE9;
}
.Estilo4 {color: #990000; font-family:Tahoma; font-size: 12px; }
.Estilo6 {font-family: Tahoma; font-size: 14px; color: #FFFFFF;}
.Estilo8 {color: #FFFFFF}
.Estilo10 {
	font-family: Tahoma;
	color: #FFFFFF;
}
.Estilo11 {color: #990000}
.Estilo12 {color: #990000; font-weight: bold; }
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: underline;
	color: #990000;
}
a:active {
	text-decoration: none;
	color: #000000;
}
</style>
</head>

<body>
<table width="312" border="0" align="left">
  <tr>
    <td width="612" class="Estilo4"><div align="center">Datos Generales del Alumno </div>
      <table width="305">
      <tr>
        <td>&nbsp;</td>
        <td class="text2">&nbsp;</td>
      </tr>
      <tr>
        <td width="98">&nbsp;</td>
        <td width="195" class="text2"><div align="right"><img src="../images/iconos/73.ico" /><a href="search.php">Regresar a Busqueda</a> </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="text2"><div align="right">Codigo Alumno: </div></td>
        <td class="Estilo12"><?php echo $arreglo['codigo_alumno'];?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td class="text2">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right">CARNE:</div></td>
        <td class="text2"><?php echo $arreglo['carne']; ?></td>
      </tr>
      <tr>
        <td><div align="right">Nombre:</div></td>
        <td class="text1"><?php echo $arreglo['nombre_alumno']; ?></td>
      </tr>
      <tr>
        <td><div align="right">Apellido:</div></td>
        <td class="text1"><?php echo $arreglo['apellido']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right">Direcci&oacute;n:</div></td>
        <td class="text1"><?php echo $arreglo['direccion']; ?></td>
      </tr>
      <tr>
        <td><div align="right">Tel&eacute;fono:</div></td>
        <td class="text1"><?php echo $arreglo['telefono1']; ?></td>
      </tr>
      <tr>
        <td><div align="right">E-Mail:</div></td>
        <td class="text1"><?php echo $arreglo['email']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right">Padre:</div></td>
        <td class="text1"><?php echo $arreglo['padre']; ?></td>
      </tr>
      <tr>
        <td><div align="right">Madre:</div></td>
        <td><div align="justify" class="text1"><?php echo $arreglo['madre']; ?></div></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.nombre.focus();
</script>


<script language="JavaScript" type="text/javascript">
function alerta(){
return window.confirm("¿Seguro que desea Realizar la Acción...?");}
</script>
