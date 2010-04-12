<?php

require_once('../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ingreso de &Aacute;reas Ocupacionales</title>
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
	
	<div class="title">Ingreso de &Aacute;reas Ocupacionales</div>
</div>

	<form action="cod_ocupacional.php" method="post" name="formulario" id="formulario" onsubmit="return validar();">
		<div class="blue">
		<table width="645" border="0" align="left">
                          <tr>
                            <td width="10" class="text1">&nbsp;</td>
                            <td width="183"><div align="right" class="text1">
                                <p class="tex1">Nombre del &Aacute;rea: </p>
                            </div></td>
                            <td width="438"><label>
                              <input name="area" type="text" id="area" size="60" autocomplete="off"  />
                            </label></td>
                          </tr>
                          <tr>
                            <td class="text1">&nbsp;</td>
                            <td class="text1"><div align="right" class="text1">Observaci&oacute;n:</div></td>
                            <td><label>
                              <textarea name="observacion" id="observacion"  autocomplete="off"></textarea>
                            </label></td>
                          </tr>
                          
                          <tr>
                            <td class="text1">&nbsp;</td>
                            <td class="text1">&nbsp;</td>
                            <td><table width="290" border="0">
                                <tr>
                                  <td><label>
                                    <input type="reset" name="Submit" value="Limpiar" />
                                  </label></td>
                                  <td><label>
                                    <input type="submit" name="Submit2" value="Guardar" />
                                  </label></td>
                                </tr>
                            </table></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                  <br />
                  <table width="836" border="0">
                    <tr>
                      <td width="653" bgcolor="#4682B4"><div align="center" class="Estilo5">&Aacute;reas Actuales </div></td>
                      </tr>
                  </table>
                  <div align="center"><br />
                      <?php 
				  
				  $seleccionar = "SELECT * FROM area_ocupacional";
				  $ejecutar = mysql_query($seleccionar);
				  
				  	while($arreglo = mysql_fetch_assoc($ejecutar))
				  {
				  ?>
                      <table width="678" border="0">
                        <tr>
                          <td width="166"><div align="center"><img src="../images/iconos/227.ico" /></div></td>
                          <td width="497"><?php echo $arreglo['nombre_ocupacion']; ?></td>
                          <td width="10">&nbsp;</td>
                        </tr>
                                        </table>
                    <?php }?>
	</form>
</div>

<script language="JavaScript" type="text/javascript">
document.formulario.area.focus();

function validar(){
if(!confirm("Seguro que Desea Realizar la Accion...")){
return false;
}
MM_validateForm('grado','','R','seccion','','R');return document.MM_returnValue;
}
</script>

</body>
</html>