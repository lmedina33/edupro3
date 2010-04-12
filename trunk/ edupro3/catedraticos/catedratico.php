<?php

require_once('../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.text1 {font-family:Tahoma;
color:#339933;
font-size:13px;
}
.text2 {font-family:tahoma;
color:#000000;
font-size:12px;
}
.Estilo6 {color: #FFFFFF}
.Estilo7 {font-family: Tahoma; color: #FFFFFF; font-size: 13px; }
-->
</style>
</head>

<body>
<table width="918" border="0" bgcolor="#4682B4">
  <tr>
    <td width="12">&nbsp;</td>
    <td width="299" class="text1"><div align="center" class="Estilo6">Catedr&aacute;ticos</div></td>
    <td width="288"><div align="center" class="Estilo7">Profesi&oacute;n</div></td>
    <td width="121"><div align="center" class="Estilo7">Tel&eacute;fono</div></td>
    <td width="176"><div align="center" class="Estilo7">E - Mail </div></td>
  </tr>
</table>
<?php

$seleccionar = "SELECT * FROM catedratico ORDER BY id_catedratico DESC";
$ejecutar = mysql_query($seleccionar);

while($arreglo = mysql_fetch_assoc($ejecutar))
{

?>
<br />
<table width="919" border="0">
  <tr>
    <td width="46"><img src="../images/iconos/dbtool-green.ico" /></td>
    <td width="264" class="text2"><?php echo $arreglo['apellido']; ?>, <?php echo $arreglo['nombre_catedratico']; ?></td>
    <td width="291" class="text2"><?php echo $arreglo['profesion']; ?></td>
    <td width="123" class="text2"><div align="center"><?php echo $arreglo['telefono']; ?></div></td>
    <td width="173" class="text2"><div align="center"><?php echo $arreglo['email']; ?></div></td>
  </tr>
</table>

<?php
}
?>
<br />
<br />
<br />

</body>
</html>