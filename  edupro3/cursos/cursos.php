<?php

require_once('../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo8 {color: #FFFFFF}
.text1 {font-family:Tahoma;
color:#339933;
font-size:13px;
}
.text2 {font-family:tahoma;
color:#000000;
font-size:12px;
}
-->
</style>
</head>

<body>
<table width="1126" border="0">
  
  <tr>
    <td width="1120" bgcolor="#4682B4"><table width="1057" border="0" align="center">
      <tr>
        <td width="11">&nbsp;</td>
        <td width="231" class="text1"><div align="center" class="Estilo8">Curso</div></td>
        <td width="434"><div align="center" class="Estilo8">Grado</div></td>
        <td width="209"><div align="center" class="Estilo8">Capacidad</div></td>
        <td width="150"><div align="center" class="Estilo8">Catedratico</div></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php 
		   	$seleccionar = "SELECT * FROM cursos c, grado g, catedratico x WHERE c.id_grado = g.id_grado AND x.id_catedratico = c.id_catedratico ORDER BY c.id_grado DESC";
			$ejecutar = mysql_query($seleccionar);
			while($arreglo = mysql_fetch_assoc($ejecutar)){
		   ?>
<br />
<table width="1131" border="0">
  <tr>
    <td width="33"><img src="../images/iconos/48.ico" alt="a" /></td>
    <td width="232" class="text2"><?php echo $arreglo['nombre_curso'];?></td>
    <td width="430" class="text2"><?php
    
    $conteo= $arreglo['id_grado'];
    
    switch($conteo)
    {
    	case $arreglo['id_grado']:
    		echo $arreglo['nombre'] , $arreglo['seccion'];
    		break;
    }
    
    ?></td>
    <td width="218" class="text2"><div align="center"><img src="../images/iconos/59.ico" alt="a" /><?php echo $arreglo['capacidad']; ?> Alumnos</div></td>
    <td width="196" class="text2"><?php
    
    $profesor = $arreglo['id_catedratico'];
    
    switch($profesor)
    {
    	case $arreglo['id_catedratico']:
    		echo $arreglo['nombre_catedratico'], $arreglo['apellido'];
    		break;
    }
    
    ?></td>
  </tr>
</table>
<?php }?>
<br />

</body>
</html>
